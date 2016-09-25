<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vendors Controller
 *
 * @property \App\Model\Table\VendorsTable $Vendors
 */
class VendorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $vendors = $this->paginate($this->Vendors);

        $this->set(compact('vendors'));
        $this->set('_serialize', ['vendors']);
    }

    /**
     * View method
     *
     * @param string|null $id Vendor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($uuid = null)
    {
//         $vendor = $this->Vendors->get($uuid, [
//             'contain' => ['MenuAddOns', 'MenuCategories', 'Menus', 'TransactionMessages', 'TransactionPromos', 'Transactions', 'VendorAddresses']
//         ]);
        
        $vendor = $this->Vendors->find('all')
        						->where(['Vendors.uuid'=>$uuid])
        						->contain(['MenuAddOns', 'MenuCategories', 'Menus', 'TransactionMessages', 'TransactionPromos', 'Transactions', 'VendorAddresses']);
        $vendor = $vendor->first();
        
        $this->set('vendor', $vendor);
        $this->set('_serialize', ['vendor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vendor = $this->Vendors->newEntity();
        if ($this->request->is('post')) {
        	$this->request->data['uuid'] = uniqid();
            $vendor = $this->Vendors->patchEntity($vendor, $this->request->data);
            
            if ($this->Vendors->save($vendor)) {
                $this->Flash->success(__('The vendor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vendor could not be saved. Please, try again.'));
            }
        }
        
        $this->set(compact('vendor'));
        $this->set('_serialize', ['vendor']);
        
        if ($this->request->is('Ajax'))
        	$this->render('ajx_add','ajax');        
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Vendor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($uuid = null)
    {
//         $vendor = $this->Vendors->get($id, [
//             'contain' => []
//         ]);
    	$vendor = $this->Vendors->find('all')
    							->where(['Vendors.uuid'=>$uuid])
    							->contain(['MenuAddOns', 'MenuCategories', 'Menus', 'TransactionMessages', 'TransactionPromos', 'Transactions', 'VendorAddresses']);
    	$vendor = $vendor->first();
    	
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendor = $this->Vendors->patchEntity($vendor, $this->request->data);
            if ($this->Vendors->save($vendor)) {
                $this->Flash->success(__('The vendor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vendor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vendor'));
        $this->set('_serialize', ['vendor']);
        
        if ($this->request->is('Ajax'))
        	$this->render('ajx_edit','ajax');        
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendor = $this->Vendors->get($id);
        if ($this->Vendors->delete($vendor)) {
            $this->Flash->success(__('The vendor has been deleted.'));
        } else {
            $this->Flash->error(__('The vendor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function ajxEditPhoto($uuid){

    	$vendor = $this->Vendors->find('all')
    							->where(['Vendors.uuid'=>$uuid])
    							->contain(['MenuAddOns', 'MenuCategories', 'Menus', 'TransactionMessages', 'TransactionPromos', 'Transactions', 'VendorAddresses']);
    	$vendor = $vendor->first();
    	 
    	if ($this->request->is(['patch', 'post', 'put'])) {

    		debug($this->request->data);die;
    		
    		if (true) {
    			$this->Flash->success(__('The vendor has been saved.'));
    			
    		} else {
    			$this->Flash->error(__('The vendor could not be saved. Please, try again.'));
    		}
    	}
    	$this->set(compact('vendor'));
    	$this->set('_serialize', ['vendor']);    	
    	
    	$this->render('ajx_edit_photo','ajax');
    	
    }
}
