<?php
App::uses('AppController', 'Controller');
/**
 * Investments Controller
 *
 * @property Investment $Investment
 */
class InvestmentsController extends AppController {

	public $uses = array('Investment', 'Project' );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Investment->recursive = 0;
		$this->set('investments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Investment->exists($id)) {
			throw new NotFoundException(__('Invalid investment'));
		}
		$options = array('conditions' => array('Investment.' . $this->Investment->primaryKey => $id));
		$this->set('investment', $this->Investment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Investment->create();
			if ($this->Investment->save($this->request->data)) {
				$this->Session->setFlash(__('The investment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The investment could not be saved. Please, try again.'));
			}
		}
		$projects = $this->Investment->Project->find('list');
		$users = $this->Investment->User->find('list');
		$this->set(compact('projects', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Investment->exists($id)) {
			throw new NotFoundException(__('Invalid investment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Investment->save($this->request->data)) {
				$this->Session->setFlash(__('The investment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The investment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Investment.' . $this->Investment->primaryKey => $id));
			$this->request->data = $this->Investment->find('first', $options);
		}
		$projects = $this->Investment->Project->find('list');
		$users = $this->Investment->User->find('list');
		$this->set(compact('projects', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Investment->id = $id;
		if (!$this->Investment->exists()) {
			throw new NotFoundException(__('Invalid investment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Investment->delete()) {
			$this->Session->setFlash(__('Investment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Investment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function select($id = null) {
	// $id はプロジェクト ID

		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}

		// ログイン状態じゃなかった場合はログイン画面に繊維
		if(!isset( $this->user_id )){
			
			$url = Router::url('/users/login',true).'?back_url='.urlencode( Router::url('',true) );
			// echo Router::url('',true);
			$this->Session->setFlash('お支払を行うためにはログインしてください。ログイン作業後にお支払に進みます。');
			$this->redirect($url);

		}
		$this->Project->recursive = 3;
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));
		

	}
	
	public function exec($id = null) {
	// $id はプロジェクト ID
		// print_r($this->params);
		//	print_r($this->params['pass']);
		$num = isset($this->params['pass'][1]) ? $this->params['pass'][1] : 0;
		$this->set('num', $num );
		if( !$num || $num > 6 ){
			$this->redirect(array('action'=>'select', $id)); 
		}
		
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}

		// ログイン状態じゃなかった場合はログイン画面に遷移
		if(!isset( $this->user_id )){
			
			$url = Router::url('/users/login',true).'?back_url='.urlencode( Router::url('',true) );
			// echo Router::url('',true);
			$this->Session->setFlash('お支払を行うためにはログインしてください。ログイン作業後にお支払に進みます。');
			
			$this->redirect($url);

		}


		$this->Project->recursive = 3;
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$project = $this->Project->find('first', $options);
		$this->set('project', $project );
		
		if( !$project['Project']['donation_price'.$num] ){			
			$this->redirect(array('action'=>'select', $id)); 
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {

			// print_r($this->request->data);
			// echo 'test';
			$this->Investment->create();
			$this->request->data['Investment']['project_id'] = $id;
			$this->request->data['Investment']['user_id'] = $this->user_id;
			$this->request->data['Investment']['num'] = $num;
			// echo 'tst2';
			// print_r($this->request->data);
			
			$this->Investment->save($this->request->data);
			$this->set('investment_id',$this->Investment->getID());
			$this->set('values',$this->request->data);
			$this->set('settlement',Configure::read('settlement'));
			
			$user_data = $this->User->findById($this->user_id);

			$mail_subject = "ACF Japan よりお知らせ： プロジェクトへの応援を受け付けました";
			$mail_message =
				"{$user_data['User']['fbname']}様\n\n".
				"プロジェクトへの応援を受け付け致しました。\n".
				"カード決済完了後、カード会社より確認のメールが届きますのでご確認ください。";
				
			mb_send_mail( $user_data['User']['email'], $mail_subject, $mail_message, "From: noreply@acfjapan.com ");

		}
			
	}

	public function paid($id=null){
	// id は investment ID

		if (!$this->Investment->exists($id)) {
			throw new NotFoundException(__('Invalid investment'));
		}
	
		// ログイン状態じゃなかった場合はログイン画面に遷移
		if(!isset( $this->user_id )){
			
			$url = Router::url('/users/login',true).'?back_url='.urlencode( Router::url('',true) );
			// echo Router::url('',true);
			$this->Session->setFlash('ログインして購入をご確認ください。');
			
			$this->redirect($url);

		}

		if(!$this->Investment->exists($id)){

			$this->Session->setFlash('該当の商品が見つかりませんでした。');			
			$this->redirect(array('controller'=>'pages','view'=>'home'));
			
			return;
		}

		$options = array('conditions' => array('Investment.' . $this->Investment->primaryKey => $id));
		$investment = $this->Investment->find('first', $options);
					
		$this->set('investment',$investment);
	
	}
	
	public function callback(){

		$this->layout = 'ajax';
		
		// get パラメータで、カード会社からコールバックがある
		print_r($this->params['url']);
		
		if(!isset($this->params['url']['sendid'])){
			return;
		}
		$id = $this->params['url']['sendid'];
		
		if(!$this->Investment->exists($id)){
			
			$this->set('message','NG:該当の商品が見つかりませんでした。');
			// TODO: エラー処理を将来追加するべきか？
			return;
		}
		
		if($this->params['url']['result']==='ok'){

			$options = array('conditions' => array('Investment.' . $this->Investment->primaryKey => $id));
			$investment = $this->Investment->find('first', $options);
						
			$this->set('investment',$investment);
	
			$update = array($this->Investment->primaryKey => $id, 'state'=>1);
			$this->Investment->save($update);
			$this->set('message','OK:購入処理の完了');

		}else{
			
			$this->Investment->delete($id);
			$this->set('message','OK:キャンセル処理の完了');
		}
		
	}
}
