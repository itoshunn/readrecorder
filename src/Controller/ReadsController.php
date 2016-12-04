<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reads Controller
 *
 * @property \App\Model\Table\ReadsTable $Reads
 */
class ReadsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Books', 'Users']
        ];
        $reads = $this->paginate($this->Reads);

        $this->set(compact('reads'));
        $this->set('_serialize', ['reads']);
    }

    /**
     * View method
     *
     * @param string|null $id Read id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $read = $this->Reads->get($id, [
            'contain' => ['Books', 'Users']
        ]);

        $this->set('read', $read);
        $this->set('_serialize', ['read']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $read = $this->Reads->newEntity();
        if ($this->request->is('post')) {
            $read = $this->Reads->patchEntity($read, $this->request->data);
            if ($this->Reads->save($read)) {
                $this->Flash->success(__('The read has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The read could not be saved. Please, try again.'));
            }
        }
        $books = $this->Reads->Books->find('list', ['limit' => 200]);
        $users = $this->Reads->Users->find('list', ['limit' => 200]);
        $this->set(compact('read', 'books', 'users'));
        $this->set('_serialize', ['read']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Read id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $read = $this->Reads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $read = $this->Reads->patchEntity($read, $this->request->data);
            if ($this->Reads->save($read)) {
                $this->Flash->success(__('The read has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The read could not be saved. Please, try again.'));
            }
        }
        $books = $this->Reads->Books->find('list', ['limit' => 200]);
        $users = $this->Reads->Users->find('list', ['limit' => 200]);
        $this->set(compact('read', 'books', 'users'));
        $this->set('_serialize', ['read']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Read id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $read = $this->Reads->get($id);
        if ($this->Reads->delete($read)) {
            $this->Flash->success(__('The read has been deleted.'));
        } else {
            $this->Flash->error(__('The read could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
