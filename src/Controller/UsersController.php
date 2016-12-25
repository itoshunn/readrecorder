<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    
    public function initialize() {
        parent::initialize();
        
        $this->Auth->allow(['logout']); // logout へのアクセスを許可
        $this->Auth->allow(['add']);    // addt へのアクセスを許可
        
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
    
    public function test($id = null)
    {
        // testレイアウトを指定
        $this->viewBuilder()->layout('test');
        
        // 変数を　ctp にセットする場合
        $this->set('id', $id);  // output_ctp : 'echo $id;'
        
        $user = $this->Users->get($id, ['contain' => 'Books']);
        $this->log($user->user_name);
        
        $this->set('user', $user);
    }
    
    /**
     * ログイン処理
     * @return type
     */
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            
            // user が取得できれば
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            // 取得できなかった場合
            $this->Flash->error('ユーザー名またはパスワードが不正です。');
        }
    }
    
    /**
     * ログアウト処理
     * @return type
     */
    public function logout()
    {
        $this->Flash->success('ログアウトします');
        return $this->redirect($this->Auth->logout());
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Books']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        // カラの Users クラス（エンティティ）を作成
        $user = $this->Users->newEntity();
        
        // post request があれば追加処理を行う
        if ($this->request->is('post')) {
            
            // エンティティに対しての patch を取得
            $user = $this->Users->patchEntity($user, $this->request->data);
            
            // 保存とその結果(bool)
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
