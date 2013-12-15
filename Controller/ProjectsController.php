<?php
App::uses('AppController', 'Controller');
/**
 * Projects Controller
 *
 * @property Project $Project
 */
class ProjectsController extends AppController {
	
	public $uses = array('Project','ProjectComment','User','Entry' );

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
		if($this->request->is('post')){
			
			// print_r($this->request->data);
			
			$this->request->data['ProjectComment']['project_id'] = $id;
			$this->request->data['ProjectComment']['user_id'] = $this->user_id;
			$this->ProjectComment->create();
			$this->ProjectComment->save($this->request->data);
			$this->redirect(array('action'=>'view', $id));
		}
		$this->Project->recursive = 3;
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));


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
	}

	public function ajax_tab3($id){
		
		$this->layout = 'ajax';
		$this->Project->recursive = 3;
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));
	}

}
