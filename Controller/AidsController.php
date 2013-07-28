<?php
App::uses('AppController', 'Controller');
/**
 * Aids Controller
 *
 * @property Aid $Aid
 */
class AidsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aid->recursive = 0;
		$this->set('aids', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Aid->exists($id)) {
			throw new NotFoundException(__('Invalid aid'));
		}
		$options = array('conditions' => array('Aid.' . $this->Aid->primaryKey => $id));
		$this->set('aid', $this->Aid->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aid->create();
			if ($this->Aid->save($this->request->data)) {
				$this->Session->setFlash(__('The aid has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aid could not be saved. Please, try again.'));
			}
		}
		$participations = $this->Aid->Participation->find('list');
		$this->set(compact('participations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Aid->exists($id)) {
			throw new NotFoundException(__('Invalid aid'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aid->save($this->request->data)) {
				$this->Session->setFlash(__('The aid has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aid could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Aid.' . $this->Aid->primaryKey => $id));
			$this->request->data = $this->Aid->find('first', $options);
		}
		$participations = $this->Aid->Participation->find('list');
		$this->set(compact('participations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Aid->id = $id;
		if (!$this->Aid->exists()) {
			throw new NotFoundException(__('Invalid aid'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Aid->delete()) {
			$this->Session->setFlash(__('Aid deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aid was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
