<?php
App::import('Vendor','functions');
App::uses('AppController', 'Controller');

/**
 * Projects Controller
 *
 * @property Project $Project
 */
class ProjectsController extends AppController {
	
	public $uses = array('Project','ProjectComment','User','Entry','Investment' );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->check_admin();
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->Project->recursive = 3;
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$project = $this->Project->find('first', $options);
		
		$total_investment_query = $this->Investment->find('first',array('fields'=>array('SUM(total)'),'conditions'=>array('project_id'=>$id,'state'=>1)));
		$total_investment = $total_investment_query[0]['SUM(total)'];

		$want_amount = $project['Project']['want_ammount'];
		
		$progress_plane = $total_investment/$want_amount;
		$progress = ceil($progress_plane*10.0/2);
		if($progress > 5){$progress = 5;}
		// echo $progress.'&nbsp;';
		$progress_5 = MROUND($progress_plane*100,5);
		// echo $progress_5;
		$hart_filename = sprintf("hart/%03d.png",$progress_5);

		$remain_date = ceil((strtotime($project['Project']['deadline'])-(strtotime("now")))/(60*60*24));

		$this->set(compact('project','total_investment','progress','hart_filename','remain_date'));
		
		// print_r($total_investment);

		if($this->request->is('post')){
			
			// print_r($this->request->data);
			
			$this->request->data['ProjectComment']['project_id'] = $id;
			$this->request->data['ProjectComment']['user_id'] = $this->user_id;
			$this->ProjectComment->create();
			$this->ProjectComment->save($this->request->data);
			$this->redirect(array('action'=>'view', $id));
		}

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->check_admin();
		if ($this->request->is('post')) {
			$this->Project->create();
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		}
		$users = $this->Project->User->find('list');
		$teams = $this->Project->Team->find('list');
		$this->set(compact('users', 'teams'));
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
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
			$this->request->data = $this->Project->find('first', $options);
		}
		$users = $this->Project->User->find('list');
		$teams = $this->Project->Team->find('list');
		$this->set(compact('users', 'teams'));
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
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Project->delete()) {
			$this->Session->setFlash(__('Project deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Project was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function ajax_tab1($id){
		
		$this->layout = 'ajax';
		$this->Project->recursive = 3;
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));

	}

	public function ajax_tab2($id){
		
		$this->layout = 'ajax';
		$this->Entry->recursive = 0;
		$options = array('conditions'=>array('Entry.project_id'=>$id));
		$this->set('entries', $this->Entry->find('all', $options));
		$this->set('project_id',$id);
	}

	public function ajax_tab3($id){
		
		$this->layout = 'ajax';
		$this->Project->recursive = 3;
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));
	}

}
