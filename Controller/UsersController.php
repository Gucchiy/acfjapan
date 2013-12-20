<?php
App::import('Vendor', 'lib_RandomString');   
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

public $uses = array('User','Wait');


	protected function send_regist_mail($email,$first_name,$last_name,$password)
	{
		// 作業中
		// ランダム文字列生成クラス
		$rnd_string = new RandomString;			
		$security_token = $rnd_string->number( 39 );

		$this->Wait->deleteAll(array('Wait.email'=>$email));

		$this->Wait->create();
		$this->Wait->save(array('Wait'=>array('email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'password'=>$password,'token'=>$security_token)));

		$mail_subject = "ACF Japan への新規登録確認";
		$mail_message =
			"ACF Japan へようこそ\n\n".
			"ユーザー登録を完了するには下記のURLへアクセスしてください。\n".
			Router::url('/',true)."/users/regist_complete?key=".$security_token."&email=".$email;	
			
		mb_send_mail( $email, $mail_subject, $mail_message, "From: noreply@acfjapan.com ");
		
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->check_admin();
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
		$this->check_admin();
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

		$redirect_uri = Router::url('/',true).'/users/callback_facebook?'
			.'back_url='.urldecode(Router::url('/',true));

		$url = $this->facebook->getLoginUrl(
			array('scope' => 'email,publish_stream', 'redirect_uri'=>$redirect_uri));  			
		
		$this->set('fb_login_url_top', $url);


		if ($this->request->is('post')) {
		// email による登録
		
			if($this->data['User']['password'] != $this->data['User']['password_confirm']){
				
				$this->Session->setFlash('入力された Password が異なります');
				return;
			}
			
			if( $this->User->find('count',array('conditions'=>array('email'=>$this->data['User']['email']))) >= 1 ){
			// email が存在
				
				$fb_user = $this->User->find('first',array('conditions'=>array('email'=>$this->data['User']['email'])));
				if(strlen($fb_user['User']['fbid'])>2){
				// facebook ID として登録

					$email = $this->request->data['User']['email'];
					$first_name = $this->request->data['User']['first_name'];
					$last_name = $this->request->data['User']['last_name'];
					$password = $this->request->data['User']['password'];
	
					$this->send_regist_mail($email, $first_name, $last_name, $password);
	
					$this->Session->setFlash(__('新規登録を受け付けました。登録メールアドレスにメールをお送りしましたので、そちらをご確認ください。'));
					$this->redirect(array('controller'=>'pages','action'=>'display'));
					
					/*
					if(strlen($fb_user['']))
					$fb_user['User']['password'] = $this->data['User']['password'];
					$this->User->save($fb_user);
					$this->Session->setFlash('お客様の Facebook ID が登録されていましたので ID を統合しました。');

					$this->Session->setFlash("メールアドレス {$fb_user['User']['email']} は、すでにfacebook ID として登録済みです。");	
					 * 					 * 
					 * 					*/


					
				}else{
					$this->Session->setFlash('すでに登録済みの email アドレスです。');
				}
				return;	
			
			}else{
			// email が存在しない → 新規登録
				
				$email = $this->request->data['User']['email'];
				$first_name = $this->request->data['User']['first_name'];
				$last_name = $this->request->data['User']['last_name'];
				$password = $this->request->data['User']['password'];

				$this->send_regist_mail($email, $first_name, $last_name, $password);

				$this->Session->setFlash(__('新規登録を受け付けました。登録メールアドレスにメールをお送りしましたので、そちらをご確認ください。'));
				$this->redirect(array('controller'=>'pages','action'=>'display'));
				

			}
			/* メールからの登録操作で行う
			$this->request->data['User']['fbname'] = $this->request->data['User']['last_name'].' '.$this->request->data['User']['first_name'];
			
			$this->User->create();
			if ($this->User->save($this->request->data)) {

				$this->user_id = $this->User->getID();				
				$this->Session->write('user_id', $this->user_id );

				$this->Session->setFlash(__('新規登録が完了しました。'));
				$this->redirect(array('controller'=>'pages','action'=>'display'));
			} else {
				
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
			 */
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
		$this->check_admin();
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
		$this->check_admin();
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
		$this->layout = 'ajax';
				       
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
		// すでに DB で管理しているユーザーの場合は、とりあえずデータを更新しておく
			
			$user_data['User']['id'] = $user_data_db['User']['id'];
			$this->User->save( $user_data );

		}else{
		// 新規ユーザーの場合は EULA 確認へ
			
			/*
			$this->User->create();
			$this->User->save( $user_data );			
			$user_data['User']['id'] = $this->User->getID();
			
			$this->Session->setFlash('はじめまして、'.$me['username'].'さん');
			 * 
			 */
			 $this->Session->write('preparing_userdata', $user_data);
			 $this->redirect(array('action'=>'confirm'));
		}
		$this->Session->write('user_id',$user_data['User']['id']);
		
		// print_r($this->params['url']);

		if( isset($this->params['url']['back_url'])){
			$this->set('back_url', $this->params['url']['back_url']);
		}else{
			$this->set('back_url', Router::url('/',true) );
		}
		
    } 

	function confirm()
	{
		$user_data = $this->Session->read('preparing_userdata');
		$this->set('user_data',$user_data);
		
		if ($this->request->is('post')) {
			// きっと同意ボタンは押されている

			// Facebook ID は見つからなかったが、email は存在
			$user_data_db = $this->User->find('first', array('conditions'=>array('email'=>$user_data['User']['email'])));
			// query 結果がある(count はなぜか1を返す)
			
			if( isset( $user_data_db['User'] ) ){
			// すでに同じメールアドレスで登録がある場合は、アカウントを統合
				
				$save_user_data = array_merge($user_data_db['User'],$user_data['User']);
				// print_r($user_data_db);
				// print_r($user_data);
				// print_r($save_user_data);
				$this->User->save(array('User'=>$save_user_data));
				$this->Session->setFlash($user_data['User']['email'].'に facebook アカウントを統合しました。');				
			
			}else{
				
				$this->User->create();
				$this->User->save( $user_data );			
				$user_data['User']['id'] = $this->User->getID();
				
				$this->Session->setFlash('はじめまして、'.$user_data['User']['fbname'].'さん');
			}			
			
			$this->redirect(array('controller'=>'pages','action'=>'display'));
			// $this->redirect(array('Controller'=>'Pages','action'=>'display'));		
		}		
	}

	function regist_complete()
	{
		// print_r($this->params['url']);
		$key = $this->params['url']['key'];
		$email = $this->params['url']['email'];
		
		$found_data = $this->Wait->find('first', array('conditions'=>array('Wait.email'=>$email,'Wait.token'=>$key)));
		if(isset($found_data['Wait'])){
			
			$last_name = $found_data['Wait']['last_name'];
			$first_name = $found_data['Wait']['first_name'];
			$password = $found_data['Wait']['password'];

			$user_data = $this->User->find('first', array('conditions'=>array('email'=>$email)));
			
			// print_r($user_data);
			
			if(isset($user_data['User'])){
			// 登録済み email

				// print_r($user_data);
				if(	( strlen($user_data['User']['fbid'])>2 ) && ($user_data['User']['password'] == 0)){
				// facebook として登録がある

					$user_data['User']['last_name'] = $last_name;
					$user_data['User']['first_name'] = $first_name;
					$user_data['User']['password'] = $password;
					$this->User->save($user_data);
					$this->Session->setFlash(__('Facebook ID と統合しました。'));
					$this->user_id = $user_data['User']['id'];				
					$this->Session->write('user_id', $this->user_id );
					
				}else{
				// facebook ではなく登録がある
					
					$this->Session->setFlash(__('登録済み email です。'));
					
				}
				
			}else{
				$this->User->create();
				$this->User->save(array('User'=>array(
					'email'=>$email,'fbname'=>$last_name.' '.$first_name,'last_name'=>$last_name,'first_name'=>$first_name,'password'=>$password)));

				$this->user_id = $this->User->getID();				
				$this->Session->write('user_id', $this->user_id );
				$this->Session->setFlash(__('新規登録が完了しました。'));
				
			}

			$this->Wait->delete($found_data['Wait']['id']);		
			$this->redirect(array('controller'=>'pages','action'=>'display'));			
		}
		
	}

	function login()
	{
		$back_url = isset($this->request->query['back_url']) ? 
			$this->request->query['back_url'] : Router::url('/',true);
		
		$redirect_uri = Router::url('/',true).'/users/callback_facebook?'
			.'back_url='.urldecode($back_url);

		$url = $this->facebook->getLoginUrl(
			array('scope' => 'email,publish_stream', 'redirect_uri'=>$redirect_uri));  			
		
		$this->set('fb_login_url_top', $url);

		if ($this->request->is('post')) {
			$user_data_db = $this->User->find('first', array('conditions'=>array('email'=>$this->data['User']['email'])));
			if(!isset($user_data_db)){
				
				$this->Session->setFlash('登録されていない email アドレスです。');
				return false;
			}
			if($user_data_db['User']['password'] != $this->data['User']['password']){
				
				
				$this->Session->setFlash('パスワードが異なります。');
				return false;
			}
			$this->user_id = $user_data_db['User']['id'];
			$this->Session->write('user_id', $this->user_id );
			// $this->redirect(array('controller'=>'pages','action'=>'display'));
			$this->redirect($back_url);

			
		}


	}

	function logout()
	{
		$this->facebook->destroySession();
		$this->Session->destroy();
		$this->redirect(Router::url('/',true));
	}
	
	function mypage()
	{
		
	}

}
