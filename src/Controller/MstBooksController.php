<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MstBooks Controller
 *
 * @property \App\Model\Table\MstBooksTable $MstBooks
 */
class MstBooksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mstBooks = $this->paginate($this->MstBooks);

        $this->set(compact('mstBooks'));
        $this->set('_serialize', ['mstBooks']);
    }

    /**
     * View method
     *
     * @param string|null $id Mst Book id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mstBook = $this->MstBooks->get($id, [
            'contain' => []
        ]);

        $this->set('mstBook', $mstBook);
        $this->set('_serialize', ['mstBook']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mstBook = $this->MstBooks->newEntity();
        if ($this->request->is('post')) {
            $mstBook = $this->MstBooks->patchEntity($mstBook, $this->request->data);
            if ($this->MstBooks->save($mstBook)) {
                $this->Flash->success(__('The mst book has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mst book could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mstBook'));
        $this->set('_serialize', ['mstBook']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mst Book id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mstBook = $this->MstBooks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mstBook = $this->MstBooks->patchEntity($mstBook, $this->request->data);
            if ($this->MstBooks->save($mstBook)) {
                $this->Flash->success(__('The mst book has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mst book could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mstBook'));
        $this->set('_serialize', ['mstBook']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mst Book id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mstBook = $this->MstBooks->get($id);
        if ($this->MstBooks->delete($mstBook)) {
            $this->Flash->success(__('The mst book has been deleted.'));
        } else {
            $this->Flash->error(__('The mst book could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
