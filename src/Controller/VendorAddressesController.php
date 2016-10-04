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
    public function add($vendorId)
    {
    	
        $vendorAddress = $this->VendorAddresses->newEntity();
        if ($this->request->is('post')) {
            $vendorAddress = $this->VendorAddresses->patchEntity($vendorAddress, $this->request->data);
            if ($this->VendorAddresses->save($vendorAddress)) {
                $this->Flash->success(__('The vendor address has been saved.'));

                return $this->redirect(['controller'=>'vendorAddresses', 'action' => 'view']);
            } else {
                $this->Flash->error(__('The vendor address could not be saved. Please, try again.'));
            }
        }
        $vendors = $this->VendorAddresses->Vendors->find('all', ['limit' => 200]);
        $vendor = $this->VendorAddresses->Vendors->get($vendorId);       
        
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
    public function edit($id = null)
    {
        $vendorAddress = $this->VendorAddresses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendorAddress = $this->VendorAddresses->patchEntity($vendorAddress, $this->request->data);
            if ($this->VendorAddresses->save($vendorAddress)) {
                $this->Flash->success(__('The vendor address has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vendor address could not be saved. Please, try again.'));
            }
        }
        $vendors = $this->VendorAddresses->Vendors->find('list', ['limit' => 200]);
        $this->set(compact('vendorAddress', 'vendors'));
        $this->set('_serialize', ['vendorAddress']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendor Address id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendorAddress = $this->VendorAddresses->get($id);
        if ($this->VendorAddresses->delete($vendorAddress)) {
            $this->Flash->success(__('The vendor address has been deleted.'));
        } else {
            $this->Flash->error(__('The vendor address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
