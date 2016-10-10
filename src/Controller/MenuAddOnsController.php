<?php
namespace App\Controller;

use Cake\Network\Exception\NotFoundException;

use App\Controller\AppController;

/**
 * MenuAddOns Controller
 *
 * @property \App\Model\Table\MenuAddOnsTable $MenuAddOns
 */
class MenuAddOnsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Vendors', 'ParentMenuAddOns']
        ];
        $menuAddOns = $this->paginate($this->MenuAddOns);

        $this->set(compact('menuAddOns'));
        $this->set('_serialize', ['menuAddOns']);
    }

    /**
     * View method
     *
     * @param string|null $id Menu Add On id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $menuAddOn = $this->MenuAddOns->get($id, [
            'contain' => ['Vendors', 'ParentMenuAddOns', 'ChildMenuAddOns']
        ]);

        $this->set('menuAddOn', $menuAddOn);
        $this->set('_serialize', ['menuAddOn']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($vendorId)
    {
    	$vendor = $this->MenuAddOns->Vendors->find('all')->where(['Vendors.id'=>$vendorId])->first();
		if (empty($vendor))  throw new NotFoundException(__('Vendor Id Not Found'));
			
		    	    	
        $menuAddOn = $this->MenuAddOns->newEntity();
        if ($this->request->is('post')) {
        	
        	if ($this->request->data['price'])
        		$this->request->data['price'] = number_format($this->request->data['price'], 2);  
        	
            $menuAddOn = $this->MenuAddOns->patchEntity($menuAddOn, $this->request->data);
            if ($this->MenuAddOns->save($menuAddOn)) {
                $this->Flash->success(__('The menu add on has been saved.'));

                return $this->redirect(['controller'=>'vendors', 'action' => 'view',$vendor->uuid]);
            } else {
                $this->Flash->error(__('The menu add on could not be saved. Please, try again.'));
            }
        }
        //$vendors = $this->MenuAddOns->Vendors->find('list', ['limit' => 200]);
        $this->MenuAddOns->ParentMenuAddOns->displayField('add_on_name');
        $parentMenuAddOns = $this->MenuAddOns->ParentMenuAddOns
        						->find('list', ['limit' => 200])
        						->where(['ParentMenuAddOns.vendor_id'=>$vendorId, 'ParentMenuAddOns.parent_id'=>0]);
        //$parentMenuAddOn = $this->MenuAddOns->ParentMenuAddOns->find('all')->where(['ParentMenuAddOns.vendor_id'=>$vendorId])->all();
        
        $this->set(compact('menuAddOn', 'vendors', 'parentMenuAddOns', 'vendor'));
        $this->set('_serialize', ['menuAddOn']);
        
        if ($this->request->is('Ajax')) $this->render('add','ajax');
    }

    /**
     * Edit method
     *
     * @param string|null $id Menu Add On id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $menuAddOn = $this->MenuAddOns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $menuAddOn = $this->MenuAddOns->patchEntity($menuAddOn, $this->request->data);
            if ($this->MenuAddOns->save($menuAddOn)) {
                $this->Flash->success(__('The menu add on has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The menu add on could not be saved. Please, try again.'));
            }
        }
        $vendors = $this->MenuAddOns->Vendors->find('list', ['limit' => 200]);
        $parentMenuAddOns = $this->MenuAddOns->ParentMenuAddOns->find('list', ['limit' => 200]);
        $this->set(compact('menuAddOn', 'vendors', 'parentMenuAddOns'));
        $this->set('_serialize', ['menuAddOn']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Menu Add On id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $menuAddOn = $this->MenuAddOns->get($id);
        if ($this->MenuAddOns->delete($menuAddOn)) {
            $this->Flash->success(__('The menu add on has been deleted.'));
        } else {
            $this->Flash->error(__('The menu add on could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
