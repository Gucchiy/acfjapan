<?php
App::uses('AppController', 'Controller');
/**
 * Waits Controller
 *
 * @property Wait $Wait
 */
class WaitsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Wait->recursive = 0;
		$this->set('waits', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Wait->exists($id)) {
			throw new NotFoundException(__('Invalid wait'));
		}
		$options = array('conditions' => array('Wait.' . $this->Wait->primaryKey => $id));
		$this->set('wait', $this->Wait->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Wait->create();
			if ($this->Wait->save($this->request->data)) {
				$this->Session->setFlash(__('The wait has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wait could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Wait->exists($id)) {
			throw new NotFoundException(__('Invalid wait'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Wait->save($this->request->data)) {
				$this->Session->setFlash(__('The wait has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wait could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Wait.' . $this->Wait->primaryKey => $id));
			$this->request->data = $this->Wait->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Wait->id = $id;
		if (!$this->Wait->exists()) {
			throw new NotFoundException(__('Invalid wait'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Wait->delete()) {
			$this->Session->setFlash(__('Wait deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Wait was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
