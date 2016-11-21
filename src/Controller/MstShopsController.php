<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MstShops Controller
 *
 * @property \App\Model\Table\MstShopsTable $MstShops
 */
class MstShopsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mstShops = $this->paginate($this->MstShops);

        $this->set(compact('mstShops'));
        $this->set('_serialize', ['mstShops']);
    }

    /**
     * View method
     *
     * @param string|null $id Mst Shop id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mstShop = $this->MstShops->get($id, [
            'contain' => []
        ]);

        $this->set('mstShop', $mstShop);
        $this->set('_serialize', ['mstShop']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mstShop = $this->MstShops->newEntity();
        if ($this->request->is('post')) {
            $mstShop = $this->MstShops->patchEntity($mstShop, $this->request->data);
            if ($this->MstShops->save($mstShop)) {
                $this->Flash->success(__('The mst shop has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mst shop could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mstShop'));
        $this->set('_serialize', ['mstShop']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mst Shop id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mstShop = $this->MstShops->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mstShop = $this->MstShops->patchEntity($mstShop, $this->request->data);
            if ($this->MstShops->save($mstShop)) {
                $this->Flash->success(__('The mst shop has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mst shop could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mstShop'));
        $this->set('_serialize', ['mstShop']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mst Shop id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mstShop = $this->MstShops->get($id);
        if ($this->MstShops->delete($mstShop)) {
            $this->Flash->success(__('The mst shop has been deleted.'));
        } else {
            $this->Flash->error(__('The mst shop could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
