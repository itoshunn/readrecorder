<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ReadLogs Controller
 *
 * @property \App\Model\Table\ReadLogsTable $ReadLogs
 */
class ReadLogsController extends AppController
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
        $readLogs = $this->paginate($this->ReadLogs);

        $this->set(compact('readLogs'));
        $this->set('_serialize', ['readLogs']);
    }

    /**
     * View method
     *
     * @param string|null $id Read Log id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $readLog = $this->ReadLogs->get($id, [
            'contain' => ['Books', 'Users']
        ]);

        $this->set('readLog', $readLog);
        $this->set('_serialize', ['readLog']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $readLog = $this->ReadLogs->newEntity();
        if ($this->request->is('post')) {
            $readLog = $this->ReadLogs->patchEntity($readLog, $this->request->data);
            if ($this->ReadLogs->save($readLog)) {
                $this->Flash->success(__('The read log has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The read log could not be saved. Please, try again.'));
            }
        }
        $books = $this->ReadLogs->Books->find('list', ['limit' => 200]);
        $users = $this->ReadLogs->Users->find('list', ['limit' => 200]);
        $this->set(compact('readLog', 'books', 'users'));
        $this->set('_serialize', ['readLog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Read Log id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $readLog = $this->ReadLogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $readLog = $this->ReadLogs->patchEntity($readLog, $this->request->data);
            if ($this->ReadLogs->save($readLog)) {
                $this->Flash->success(__('The read log has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The read log could not be saved. Please, try again.'));
            }
        }
        $books = $this->ReadLogs->Books->find('list', ['limit' => 200]);
        $users = $this->ReadLogs->Users->find('list', ['limit' => 200]);
        $this->set(compact('readLog', 'books', 'users'));
        $this->set('_serialize', ['readLog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Read Log id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $readLog = $this->ReadLogs->get($id);
        if ($this->ReadLogs->delete($readLog)) {
            $this->Flash->success(__('The read log has been deleted.'));
        } else {
            $this->Flash->error(__('The read log could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
