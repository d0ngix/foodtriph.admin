<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TransactionMessages Controller
 *
 * @property \App\Model\Table\TransactionMessagesTable $TransactionMessages */
class TransactionMessagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Transactions', 'Vendors', 'Users']
        ];
        $transactionMessages = $this->paginate($this->TransactionMessages);

        $this->set(compact('transactionMessages'));
        $this->set('_serialize', ['transactionMessages']);
    }

    /**
     * View method
     *
     * @param string|null $id Transaction Message id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transactionMessage = $this->TransactionMessages->get($id, [
            'contain' => ['Transactions', 'Vendors', 'Users']
        ]);

        $this->set('transactionMessage', $transactionMessage);
        $this->set('_serialize', ['transactionMessage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transactionMessage = $this->TransactionMessages->newEntity();
        if ($this->request->is('post')) {
            $transactionMessage = $this->TransactionMessages->patchEntity($transactionMessage, $this->request->data);
            if ($this->TransactionMessages->save($transactionMessage)) {
                $this->Flash->success(__('The transaction message has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transaction message could not be saved. Please, try again.'));
            }
        }
        $transactions = $this->TransactionMessages->Transactions->find('list', ['limit' => 200]);
        $vendors = $this->TransactionMessages->Vendors->find('list', ['limit' => 200]);
        $users = $this->TransactionMessages->Users->find('list', ['limit' => 200]);
        $this->set(compact('transactionMessage', 'transactions', 'vendors', 'users'));
        $this->set('_serialize', ['transactionMessage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transaction Message id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transactionMessage = $this->TransactionMessages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transactionMessage = $this->TransactionMessages->patchEntity($transactionMessage, $this->request->data);
            if ($this->TransactionMessages->save($transactionMessage)) {
                $this->Flash->success(__('The transaction message has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transaction message could not be saved. Please, try again.'));
            }
        }
        $transactions = $this->TransactionMessages->Transactions->find('list', ['limit' => 200]);
        $vendors = $this->TransactionMessages->Vendors->find('list', ['limit' => 200]);
        $users = $this->TransactionMessages->Users->find('list', ['limit' => 200]);
        $this->set(compact('transactionMessage', 'transactions', 'vendors', 'users'));
        $this->set('_serialize', ['transactionMessage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transaction Message id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transactionMessage = $this->TransactionMessages->get($id);
        if ($this->TransactionMessages->delete($transactionMessage)) {
            $this->Flash->success(__('The transaction message has been deleted.'));
        } else {
            $this->Flash->error(__('The transaction message could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
