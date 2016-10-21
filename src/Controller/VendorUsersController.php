<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VendorUsers Controller
 *
 * @property \App\Model\Table\VendorUsersTable $VendorUsers */
class VendorUsersController extends AppController
{

	function login(){

		$vendorUser = $this->VendorUsers->newEntity();
		
	    if ($this->request->is('post')) {
	    	
	    	//debug($this->request->data);die;
	    	$user = $this->Auth->identify();
	    	debug($user);die;
			if ($user) {
				
	    		$this->Auth->setUser($user);
            	
	    		return $this->redirect($this->Auth->redirectUrl());
	    		
	    	} else {
            	$this->Flash->error(__('Username or password is incorrect'), [
                	'key' => 'auth'
            	]);
	    	}	    		
	    }
	    
	    $this->set(compact('vendorUser'));
	    $this->set('_serialize', ['vendorUser']);	    
	    
		$this->render('login','login');
	}	
	
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $vendorUsers = $this->paginate($this->VendorUsers);

        $this->set(compact('vendorUsers'));
        $this->set('_serialize', ['vendorUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Vendor User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vendorUser = $this->VendorUsers->get($id, [
            'contain' => []
        ]);

        $this->set('vendorUser', $vendorUser);
        $this->set('_serialize', ['vendorUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vendorUser = $this->VendorUsers->newEntity();
        if ($this->request->is('post')) {
            $vendorUser = $this->VendorUsers->patchEntity($vendorUser, $this->request->data);
            if ($this->VendorUsers->save($vendorUser)) {
                $this->Flash->success(__('The vendor user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vendor user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vendorUser'));
        $this->set('_serialize', ['vendorUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vendor User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vendorUser = $this->VendorUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendorUser = $this->VendorUsers->patchEntity($vendorUser, $this->request->data);
            if ($this->VendorUsers->save($vendorUser)) {
                $this->Flash->success(__('The vendor user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vendor user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vendorUser'));
        $this->set('_serialize', ['vendorUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendor User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendorUser = $this->VendorUsers->get($id);
        if ($this->VendorUsers->delete($vendorUser)) {
            $this->Flash->success(__('The vendor user has been deleted.'));
        } else {
            $this->Flash->error(__('The vendor user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
