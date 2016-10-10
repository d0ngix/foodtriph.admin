<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

use Cake\Database\Schema\Table;

use Cake\Utility\Inflector;

use App\Controller\AppController;

/**
 * Menus Controller
 *
 * @property \App\Model\Table\MenusTable $Menus
 */
class MenusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Vendors']
        ];
        $menus = $this->paginate($this->Menus);

        $this->set(compact('menus'));
        $this->set('_serialize', ['menus']);
    }

    /**
     * View method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $menu = $this->Menus->get($id, [
            'contain' => ['Vendors', 'MenuImages', 'MenuRatings', 'TransactionItems', 'TransactionPromos']
        ]);

        $this->set('menu', $menu);
        $this->set('_serialize', ['menu']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($vendorId)
    {
        $menu = $this->Menus->newEntity();
        $vendor = $this->Menus->Vendors->find('all')->where(['id' => $vendorId])->first();
        if ($this->request->is('post')) {
        	
        	if($this->request->data['photo']['size']) {
	        	//img upload setup
	        	$strFilename = $vendorId . '_' . preg_replace('/\s+/', '_', $this->request->data['name']);
	        	$arrImg = $this->uploadImg(['filename'=>$strFilename]);        	
	        	if ($arrImg) $this->request->data['photo'] = json_encode($arrImg);        	
        	}
        	        	
        	$this->request->data['vendor_id'] = $vendorId;
        	$this->request->data['price'] = number_format($this->request->data['price'],2);
        	
            $menu = $this->Menus->patchEntity($menu, $this->request->data);
            if ($this->Menus->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));
                return $this->redirect(['controller'=>'vendors', 'action' => 'view', $vendor->uuid]);
            } else {
                $this->Flash->error(__('The menu could not be saved. Please, try again.'));
            }
        }
        $vendors = $this->Menus->Vendors->find('list', ['limit' => 200]);
        
        $this->set(compact('menu', 'vendors','vendor'));
        $this->set('_serialize', ['menu']);
        
        if ($this->request->is('Ajax'))
        	$this->render('add','ajax');
    }

    /**
     * Edit method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id, $vendorUuid)
    {
    	$vendor = $this->Menus->Vendors->find('all')->where(['uuid' => $vendorUuid])->first();
        $menu = $this->Menus->get($id, ['contain' => []]);
        
		$arrMenuAddOns = $this->getMenuAddOns($vendor->id);
        
        if ($this->request->is(['patch', 'post', 'put'])) {

        	if (!empty($this->request->data['add_ons'])) {
        		foreach ($this->request->data['add_ons'] as $v) {
        			//debug(json_decode($v,true));
        			$arrAddOns[] = json_decode($v,true);
        		}
        		
        		if (!empty($arrAddOns))
        			$this->request->data['add_ons'] = json_encode($arrAddOns);        		
        	}
//         	debug($this->request->data['add_ons']);
//         	die;
        	
        	if($this->request->data['photo']['size']) {
        		//img upload setup
        		$strFilename = $vendor->id . '_' . preg_replace('/\s+/', '_', $this->request->data['name']);
        		$arrImg = $this->uploadImg(['filename'=>$strFilename]);
        		if ($arrImg) $this->request->data['photo'] = json_encode($arrImg);
        	} elseif ($this->request->data['photo']['size'] === 0) unset($this->request->data['photo']);
        	
        	$this->request->data['price'] = number_format($this->request->data['price'],2);
            $menu = $this->Menus->patchEntity($menu, $this->request->data);
            if ($this->Menus->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));
                return $this->redirect(['controller'=>'vendors', 'action' => 'view', $vendorUuid]);
            } else {
                $this->Flash->error(__('The menu could not be saved. Please, try again.'));
            }
        }
        $vendors = $this->Menus->Vendors->find('list', ['limit' => 200]);
        $this->set(compact('menu', 'vendors','vendor','arrMenuAddOns'));
        $this->set('_serialize', ['menu']);
        
        if ($this->request->is('Ajax'))
        	$this->render('edit','ajax');        
    }

    /**
     * Delete method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id, $vendorUuid)
    {
        $this->request->allowMethod(['post', 'delete']);
        $menu = $this->Menus->get($id);
        $menu->deleted = 1;
        if ($this->Menus->save($menu)) {
            $this->Flash->success(__('The menu has been deleted.'));
            return $this->redirect(['controller'=>'vendors', 'action' => 'view', $vendorUuid]);
        } else {
            $this->Flash->error(__('The menu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
