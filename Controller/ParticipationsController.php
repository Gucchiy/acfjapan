<?php
App::uses('AppController', 'Controller');
/**
 * Participations Controller
 *
 * @property Participation $Participation
 */
class ParticipationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Participation->recursive = 0;
		$this->set('participations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Participation->exists($id)) {
			throw new NotFoundException(__('Invalid participation'));
		}
		$options = array('conditions' => array('Participation.' . $this->Participation->primaryKey => $id));
		$this->set('participation', $this->Participation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Participation->create();
			if ($this->Participation->save($this->request->data)) {
				$this->Session->setFlash(__('The participation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participation could not be saved. Please, try again.'));
			}
		}
		$projects = $this->Participation->Project->find('list');
		$users = $this->Participation->User->find('list');
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
		if (!$this->Participation->exists($id)) {
			throw new NotFoundException(__('Invalid participation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Participation->save($this->request->data)) {
				$this->Session->setFlash(__('The participation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Participation.' . $this->Participation->primaryKey => $id));
			$this->request->data = $this->Participation->find('first', $options);
		}
		$projects = $this->Participation->Project->find('list');
		$users = $this->Participation->User->find('list');
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
		$this->Participation->id = $id;
		if (!$this->Participation->exists()) {
			throw new NotFoundException(__('Invalid participation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Participation->delete()) {
			$this->Session->setFlash(__('Participation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Participation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
