<?php
App::uses('AppController', 'Controller');
/**
 * Belongings Controller
 *
 * @property Belonging $Belonging
 */
class BelongingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->check_admin();
		$this->Belonging->recursive = 0;
		$this->set('belongings', $this->paginate());
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
		if (!$this->Belonging->exists($id)) {
			throw new NotFoundException(__('Invalid belonging'));
		}
		$options = array('conditions' => array('Belonging.' . $this->Belonging->primaryKey => $id));
		$this->set('belonging', $this->Belonging->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->check_admin();
		if ($this->request->is('post')) {
			$this->Belonging->create();
			if ($this->Belonging->save($this->request->data)) {
				$this->Session->setFlash(__('The belonging has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The belonging could not be saved. Please, try again.'));
			}
		}
		$users = $this->Belonging->User->find('list');
		$teams = $this->Belonging->Team->find('list');
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
		if (!$this->Belonging->exists($id)) {
			throw new NotFoundException(__('Invalid belonging'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Belonging->save($this->request->data)) {
				$this->Session->setFlash(__('The belonging has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The belonging could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Belonging.' . $this->Belonging->primaryKey => $id));
			$this->request->data = $this->Belonging->find('first', $options);
		}
		$users = $this->Belonging->User->find('list');
		$teams = $this->Belonging->Team->find('list');
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
		$this->Belonging->id = $id;
		if (!$this->Belonging->exists()) {
			throw new NotFoundException(__('Invalid belonging'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Belonging->delete()) {
			$this->Session->setFlash(__('Belonging deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Belonging was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
