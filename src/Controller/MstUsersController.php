<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MstUsers Controller
 *
 * @property \App\Model\Table\MstUsersTable $MstUsers
 */
class MstUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mstUsers = $this->paginate($this->MstUsers);

        $this->set(compact('mstUsers'));
        $this->set('_serialize', ['mstUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Mst User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mstUser = $this->MstUsers->get($id, [
            'contain' => []
        ]);

        $this->set('mstUser', $mstUser);
        $this->set('_serialize', ['mstUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mstUser = $this->MstUsers->newEntity();
        if ($this->request->is('post')) {
            $mstUser = $this->MstUsers->patchEntity($mstUser, $this->request->data);
            if ($this->MstUsers->save($mstUser)) {
                $this->Flash->success(__('The mst user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mst user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mstUser'));
        $this->set('_serialize', ['mstUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mst User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mstUser = $this->MstUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mstUser = $this->MstUsers->patchEntity($mstUser, $this->request->data);
            if ($this->MstUsers->save($mstUser)) {
                $this->Flash->success(__('The mst user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mst user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mstUser'));
        $this->set('_serialize', ['mstUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mst User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mstUser = $this->MstUsers->get($id);
        if ($this->MstUsers->delete($mstUser)) {
            $this->Flash->success(__('The mst user has been deleted.'));
        } else {
            $this->Flash->error(__('The mst user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function login()
    {
        $this->log('MstUsers -login');
        // post request
        if ($this->request->is('post')) {
            // 
            $user = $this->Auth->identify();
            \Cake\Error\Debugger::dump($user);
            if ($user) {
                // ユーザーを取得
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('あなたのユーザー名またはパスワードが不正です');
            
        }
    }
}
