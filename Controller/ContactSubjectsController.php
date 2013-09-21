<?php
App::uses('AppController', 'Controller');
/**
 * ContactSubjects Controller
 *
 * @property ContactSubject $ContactSubject
 */
class ContactSubjectsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContactSubject->recursive = 0;
		$this->set('contactSubjects', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContactSubject->exists($id)) {
			throw new NotFoundException(__('Invalid contact subject'));
		}
		$options = array('conditions' => array('ContactSubject.' . $this->ContactSubject->primaryKey => $id));
		$this->set('contactSubject', $this->ContactSubject->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContactSubject->create();
			if ($this->ContactSubject->save($this->request->data)) {
				$this->Session->setFlash(__('The contact subject has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact subject could not be saved. Please, try again.'));
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
		if (!$this->ContactSubject->exists($id)) {
			throw new NotFoundException(__('Invalid contact subject'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContactSubject->save($this->request->data)) {
				$this->Session->setFlash(__('The contact subject has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact subject could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactSubject.' . $this->ContactSubject->primaryKey => $id));
			$this->request->data = $this->ContactSubject->find('first', $options);
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
		$this->ContactSubject->id = $id;
		if (!$this->ContactSubject->exists()) {
			throw new NotFoundException(__('Invalid contact subject'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContactSubject->delete()) {
			$this->Session->setFlash(__('Contact subject deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contact subject was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
