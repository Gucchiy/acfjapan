<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$belongings = $this->User->Belonging->find('list');
		$this->set(compact('belongings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$belongings = $this->User->Belonging->find('list');
		$this->set(compact('belongings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

    function callback_facebook(){  

		// $this->autoRender = false;  
		       
        $uid = $this->facebook->getUser();  
        $me = null;  
        
        if ($uid) {  
            try {  
                $uid = $this->facebook->getUser();  
                $me = $this->facebook->api('/me');  
            } catch (FacebookApiException $e) {  
                error_log($e);  
            }  
        }
		
		if( !isset($me['username']) ){
			
			$me['username'] = $me['first_name'];
		}

        $access_token = $this->facebook->getAccessToken();  
		
        $user_data = array(  
            'User' => array(  
                'username' => $me['username'],  
                'email' => $me['email'],  
            	'fbid' => $me['id'],
                'fbname' => $me['name'], 
                'fbtoken' => $access_token  
            )  
        );

		$user_data_db = $this->User->find('first', array('conditions'=>array('fbid'=>$me['id'])));
		// query 結果がある(count はなぜか1を返す)
		if( isset( $user_data_db['User'] ) ){
			
			$user_data['User']['id'] = $user_data_db['User']['id'];
			$this->User->save( $user_data );

		}else{
			
			$this->User->create();
			$this->User->save( $user_data );			
			$user_data['User']['id'] = $this->User->getID();
			
			$this->Session->setFlash('はじめまして、'.$me['username'].'さん');
		}
		$this->Session->write('user_id',$user_data['User']['id']);
		
    }  

	function logout()
	{
		$this->facebook->destroySession();
		$this->redirect(array('controller'=>'Users','action'=>'index'));
	}

}
