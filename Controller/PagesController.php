<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Project','Report','New','Contact','ContactSubject');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		if($path[0]=='home'){
			
			$this->Project->recursive = 0;
			$options = array('status'=>'1');
			$projects = $this->Project->find('all', array('conditions'=>$options, 'limit'=>'10' ));
			$this->set('projects', $projects);
			
			$this->Report->recursive = 2;
			$reports = $this->Report->find('all', array('conditions'=>$options, 'limit'=>'6'));
			$this->set('reports',$reports);
			
			$this->New->recursive = 0;
			$news = $this->New->find('first',array('order'=>'modified desc'));
			$this->set('news',$news);
				
		}else if($path[0]=='player'){

			$this->Project->recursive = 0;
			$options = array('status'=>'1', 'type'=>'2');
			$projects = $this->Project->find('all', array('conditions'=>$options, 'limit'=>'10' ));
			$this->set('projects', $projects);
			
		}else if($path[0]=='partner'){

			$this->Project->recursive = 0;
			$options = array('status'=>'1');
			$projects = $this->Project->find('all', array('conditions'=>$options, 'limit'=>'10' ));
			$this->set('projects', $projects);
			
		}else if($path[0]=='contact'){

			if ($this->request->is('post') || $this->request->is('put')) {
				
				// print_r($this->request->data);
				
				if(!$this->request->data['Contact']['contact_subject_id']){
					
					$this->Session->setFlash(__('概要をお選びください。'));
					
				}else{
										
					if ($this->Contact->save($this->request->data)) {

						$options = array('id'=>$this->request->data['Contact']['contact_subject_id']);
						$subject = $this->ContactSubject->find('first', array('conditions'=>$options ));


						$this->Session->setFlash(__('お問い合わせを受け付けました。'));
						$email = "mail@acfjapan.com";
						$mail_subject = "ACFへのお問い合わせが到着しました";
						$mail_message =
							"お名前：".$this->request->data['Contact']['name']."さん\n".
							"メールアドレス：".$this->request->data['Contact']['email']."\n".
							"概要：".$subject['ContactSubject']['value']."\n".
							"コメント：\n".$this->request->data['Contact']['comment'];
							
						// echo $mail_message;
				
						mb_send_mail( $email, $mail_subject, $mail_message, "From: noreply@acfjapan.com ");

						$this->redirect(array('action' => 'index'));

					} else {

						$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
					}
				}
			}
			$contactSubjects = $this->Contact->ContactSubject->find('list');
			$this->set(compact('contactSubjects'));
		}

		$this->render(implode('/', $path));
	}
}
