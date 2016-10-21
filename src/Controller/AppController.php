<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\ORM\TableRegistry;

use Cake\Utility\Inflector;

use Cake\Core\Configure;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
        	'loginAction' => [
        		'controller' => 'VendorUsers',
        		'action' => 'login'
        	],       
            'loginRedirect' => [
                'controller' => 'Vendors',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'VendorUsers',
                'action' => 'login',
                'home'
            ],
        	'authError' => 'Unauthorized Access',
        	'authenticate' => [
        		'Form' => [
        			'fields' => [
        				'username' => 'email',
        				'password' => 'password'
        				],
        			'userModel'=>'VendorUsers'
        		]
        	],    
        	'storage' => 'Session',
        	
        ]);

        //Configs
        $this->set('arrFoodType', Configure::read('FoodType'));
        $this->set('env', Configure::read('env'));
        $this->set('default_img', Configure::read('default_img'));
        $this->set('defaultCurrencySymbol', Configure::read('defaultCurrencySymbol'));
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
    
    public function beforeFilter(Event $event)
    {
    	//$this->Auth->allow(['index', 'view', 'display']);
    }    
    
    public function uploadImg($arrOption = []) {
    	
    	$imgPath = Configure::read('App.imageBaseUrl') . Inflector::underscore($this->name);
    	$storage = new \Upload\Storage\FileSystem($imgPath, true);
    	$file = new \Upload\File('photo', $storage);
    	
    	
    	// Optionally you can rename the file on upload
    	if ($arrOption['filename']) 
    		$file->setName($arrOption['filename']);
    	

    	
    	// Validate file upload
    	// MimeType List => http://www.iana.org/assignments/media-types/media-types.xhtml
    	$file->addValidations(array(
    			// Ensure file is of type "image/png"
    			//new \Upload\Validation\Mimetype('image/png'),
    	
    			//You can also add multi mimetype validation
    			new \Upload\Validation\Mimetype(array('image/png', 'image/gif', 'image/jpg', 'image/jpeg')),
    	
    			// Ensure file is no larger than 5M (use "B", "K", M", or "G")
    			new \Upload\Validation\Size('5M')
    	));
    	
    	// Access data about the file that has been uploaded
    	$data = array(
    			'name'       => $file->getNameWithExtension(),
    			'extension'  => $file->getExtension(),
    			'mime'       => $file->getMimetype(),
    			'size'       => $file->getSize(),
    			'md5'        => $file->getMd5(),
    			'dimensions' => $file->getDimensions(),
    			'path'		 => $imgPath
    	);   

//     	$filePath = $imgPath . DS . $arrOption['filename'] . "." . $file->getExtension();
//     	if(file_exists($filePath))
//     		unlink($filePath);
    	
    	if($file->upload()) return $data;     	
    	
    	return false;
    	
    }

	public function getMenuAddOns ($vendorId) {
		$arrMenuAddOns = null;
		$menuAddOns = TableRegistry::get('MenuAddOns');
		$menuAddOns = $menuAddOns->find('all')
							->select(['id','parent_id','ref','add_on_name','price','description'])
							->where(['MenuAddOns.vendor_id'=> $vendorId])
							->order(['parent_id ASC'])->all();

		foreach ($menuAddOns as $v){

			if ( 0 === $v->parent_id ) {
				//$arrMenuAddOns[$v->id] = [];
				$arrMenuAddOns[$v->id] = ['id'=>$v->id, 'category_name'=>$v->add_on_name, 'description' => $v->description];
				continue;
			}
			
			$arrMenuAddOns[$v->parent_id]['items'][] = $v;

		}		
		
		if ($arrMenuAddOns) return $arrMenuAddOns;
		
		return false;
	}
	
	public function getLatLang (&$vendorAddress) {
		//Get lat/long
		//https://maps.googleapis.com/maps/api/geocode/json?address=122E%20Rivervale%20Drive,%20Sengkang%20Singapore
		$strAddress = urlencode("$vendorAddress->address2 $vendorAddress->street $vendorAddress->city $vendorAddress->state $vendorAddress->country $vendorAddress->post_code") ;
		$arrLoc = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=" . $strAddress);
		$arrLoc = json_decode($arrLoc, true);
		 
		if (!empty($arrLoc['results'])) {
			$vendorAddress->latitude = $arrLoc['results'][0]['geometry']['location']['lat'];
			$vendorAddress->longitude = $arrLoc['results'][0]['geometry']['location']['lng'];
			$vendorAddress->place_id = $arrLoc['results'][0]['place_id'];
		}
	
		return $vendorAddress;
	}	
}
