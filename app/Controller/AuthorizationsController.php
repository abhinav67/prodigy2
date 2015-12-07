<?php
App::uses('AppController', 'Controller');
/**
 * Authorizations Controller
 *
 * @property Authorization $Authorization
 * @property PaginatorComponent $Paginator
 */
class AuthorizationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Authorization->recursive = 0;
		$this->set('authorizations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Authorization->exists($id)) {
			throw new NotFoundException(__('Invalid authorization'));
		}
		$options = array('conditions' => array('Authorization.' . $this->Authorization->primaryKey => $id));
		$this->set('authorization', $this->Authorization->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Authorization->create();
			if ($this->Authorization->save($this->request->data)) {
				$this->Session->setFlash(__('The authorization has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The authorization could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$customers = $this->Authorization->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Authorization->exists($id)) {
			throw new NotFoundException(__('Invalid authorization'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Authorization->save($this->request->data)) {
				$this->Session->setFlash(__('The authorization has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The authorization could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Authorization.' . $this->Authorization->primaryKey => $id));
			$this->request->data = $this->Authorization->find('first', $options);
		}
		$customers = $this->Authorization->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Authorization->id = $id;
		if (!$this->Authorization->exists()) {
			throw new NotFoundException(__('Invalid authorization'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Authorization->delete()) {
			$this->Session->setFlash(__('The authorization has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The authorization could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
