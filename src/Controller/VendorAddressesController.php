<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * VendorAddresses Controller
 *
 * @property \App\Model\Table\VendorAddressesTable $VendorAddresses
 */
class VendorAddressesController extends AppController
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
        $vendorAddresses = $this->paginate($this->VendorAddresses);

        $this->set(compact('vendorAddresses'));
        $this->set('_serialize', ['vendorAddresses']);
    }

    /**
     * View method
     *
     * @param string|null $id Vendor Address id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vendorAddress = $this->VendorAddresses->get($id, [
            'contain' => ['Vendors']
        ]);

        $this->set('vendorAddress', $vendorAddress);
        $this->set('_serialize', ['vendorAddress']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($vendorUuid)
    {
        $vendorAddress = $this->VendorAddresses->newEntity();
        if ($this->request->is('post')) {
        	
        	//Operating hours
        	if ($this->request->data['op']) {
        		foreach ($this->request->data['op'] as $k => $v )
        			$this->request->data['operating_hours'][][$k] = $v;
        		
        		$this->request->data['operating_hours'] = json_encode($this->request->data['operating_hours']);
        	}        	
        	unset($this->request->data['op']);
        	
        	//patchEntity
            $vendorAddress = $this->VendorAddresses->patchEntity($vendorAddress, $this->request->data);
            
            $this->getLatLang($vendorAddress);
            
            if ($this->VendorAddresses->save($vendorAddress)) {
                $this->Flash->success(__('The vendor address has been saved.'));
                return $this->redirect(['controller'=>'vendors', 'action' => 'view', $this->request->data['vendor_uuid'], "refTab:".$this->name]);
            } else {
                $this->Flash->error(__('The vendor address could not be saved. Please, try again.'));
            }
            
        }
        $vendors = $this->VendorAddresses->Vendors->find('all', ['limit' => 200]);
        $vendor = $this->VendorAddresses->Vendors->find()->where(['Vendors.uuid'=>$vendorUuid])->first();    
        
        $this->set(compact('vendorAddress', 'vendors','vendor'));
        $this->set('_serialize', ['vendorAddress']);
        
        if($this->request->is('Ajax')) $this->render('add','ajax');
    }

    /**
     * Edit method
     *
     * @param string|null $id Vendor Address id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null, $vendorUuid)
    {
    	//debug($vendorUuid);die;
        $vendorAddress = $this->VendorAddresses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
        	//Operating hours
        	if ($this->request->data['op']) {
        		foreach ($this->request->data['op'] as $k => $v )
        			$this->request->data['operating_hours'][][$k] = $v;
        	
        		$this->request->data['operating_hours'] = json_encode($this->request->data['operating_hours']);
        	}
        	unset($this->request->data['op']);       

        	
        	$this->getLatLang($vendorAddress);
        	
            $vendorAddress = $this->VendorAddresses->patchEntity($vendorAddress, $this->request->data);
            if ($this->VendorAddresses->save($vendorAddress)) {
                $this->Flash->success(__('The vendor address has been saved.'));
                return $this->redirect(['controller'=>'vendors', 'action' => 'view', $vendorUuid, "refTab:".$this->name]);
            } else {
                $this->Flash->error(__('The vendor address could not be saved. Please, try again.'));
            }
        }
        $vendors = $this->VendorAddresses->Vendors->find('list', ['limit' => 200]);
        $vendor = $this->VendorAddresses->Vendors->find('all')->where(['uuid' => $vendorUuid]);
        $vendor = $vendor->first();
        
        $this->set(compact('vendorAddress', 'vendors','vendor'));
        $this->set('_serialize', ['vendorAddress']);
        
        if($this->request->is('Ajax')) $this->render('edit','ajax');
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendor Address id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null, $vendorUuid)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendorAddress = $this->VendorAddresses->get($id);
        $vendorAddress->deleted = 1;
        if ($this->VendorAddresses->save($vendorAddress)) {
            $this->Flash->success(__('The vendor address has been deleted.'));            
            return $this->redirect(['controller'=>'vendors', 'action' => 'view', $vendorUuid, "#".$this->name]);            
        } else {
            $this->Flash->error(__('The vendor address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
