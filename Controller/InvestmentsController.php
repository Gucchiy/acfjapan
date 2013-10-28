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
		$this->Project->recursive = 3;
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));
		

	}
	
	public function invest($id = null) {
	// $id はプロジェクト ID
		print_r($this->params['url']);
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->Project->recursive = 3;
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));
		
		$num = isset($this->params['url']['num']) ? $this->params['url']['num'] : 0;
		$this->set('num', $num );
			
	}
}
