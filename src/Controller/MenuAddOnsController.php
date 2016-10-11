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
    public function add($vendorUuid)
    {
    	$vendor = $this->MenuAddOns->Vendors->find('all')->where(['Vendors.uuid'=>$vendorUuid])->first();
		if (empty($vendor))  throw new NotFoundException(__('Vendor Not Found'));
			
		    	    	
        $menuAddOn = $this->MenuAddOns->newEntity();
        if ($this->request->is('post')) {
        	
        	if (!empty($this->request->data['price']))
        		$this->request->data['price'] = number_format($this->request->data['price'], 2);  
        	
            $menuAddOn = $this->MenuAddOns->patchEntity($menuAddOn, $this->request->data);
            if ($this->MenuAddOns->save($menuAddOn)) {
                $this->Flash->success(__('The menu add on has been saved.'));
                return $this->redirect(['controller'=>'vendors', 'action' => 'view', $vendor->uuid, "refTab:".$this->name]);
            } else {
                $this->Flash->error(__('The menu add on could not be saved. Please, try again.'));
            }
        }
        //$vendors = $this->MenuAddOns->Vendors->find('list', ['limit' => 200]);
        $this->MenuAddOns->ParentMenuAddOns->displayField('add_on_name');
        $parentMenuAddOns = $this->MenuAddOns->ParentMenuAddOns
        						->find('list', ['limit' => 200])
        						->where(['ParentMenuAddOns.vendor_id'=>$vendor->id, 'ParentMenuAddOns.parent_id'=>0]);
        
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
    public function edit($id = null, $vendorUuid)
    {
    	
    	$vendor = $this->MenuAddOns->Vendors->find('all')->where(['Vendors.uuid'=>$vendorUuid])->first();
    	if (empty($vendor))  throw new NotFoundException(__('Vendor Not Found'));    	
    	
        $menuAddOn = $this->MenuAddOns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
            $menuAddOn = $this->MenuAddOns->patchEntity($menuAddOn, $this->request->data);
            if ($this->MenuAddOns->save($menuAddOn)) {
                $this->Flash->success(__('The menu add on has been saved.'));
                return $this->redirect(['controller'=>'vendors', 'action' => 'view', $vendorUuid, "refTab:".$this->name]);
            } else {
                $this->Flash->error(__('The menu add on could not be saved. Please, try again.'));
            }
        }
        //$vendors = $this->MenuAddOns->Vendors->find('list', ['limit' => 200]);
        $parentMenuAddOns = $this->MenuAddOns->ParentMenuAddOns
        						->find('list', ['limit' => 200])
        						->where(['ParentMenuAddOns.vendor_id'=>$vendor->id, 'ParentMenuAddOns.parent_id'=>0]);
        $this->set(compact('menuAddOn', 'vendors', 'parentMenuAddOns','vendorUuid'));
        $this->set('_serialize', ['menuAddOn']);
        
        if ($this->request->is('Ajax')) $this->render('edit','ajax');
    }

    /**
     * Delete method
     *
     * @param string|null $id Menu Add On id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null, $vendorUuid)
    {
        $this->request->allowMethod(['post', 'delete']);
        $menuAddOn = $this->MenuAddOns->get($id);
        if ($this->MenuAddOns->delete($menuAddOn)) {
            $this->Flash->success(__('The menu add on has been deleted.'));
            return $this->redirect(['controller'=>'vendors', 'action' => 'view', $vendorUuid, "refTab:".$this->name]);            
        } else {
            $this->Flash->error(__('The menu add on could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
