<?php
App::uses('AppController', 'Controller');
/**
 * ActivityRegistrations Controller
 *
 * @property ActivityRegistration $ActivityRegistration
 * @property PaginatorComponent $Paginator
 */
class ActivityRegistrationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index'); 
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ActivityRegistration->recursive = 0;
		$this->set('activityRegistrations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActivityRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid activity registration'));
		}
		$options = array('conditions' => array('ActivityRegistration.' . $this->ActivityRegistration->primaryKey => $id));
		$this->set('activityRegistration', $this->ActivityRegistration->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActivityRegistration->create();
			if ($this->ActivityRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The activity registration has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity registration could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$customers = $this->ActivityRegistration->Customer->find('list');
		$activities = $this->ActivityRegistration->Activity->find('list');
		$this->set(compact('customers', 'activities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActivityRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid activity registration'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActivityRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The activity registration has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity registration could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ActivityRegistration.' . $this->ActivityRegistration->primaryKey => $id));
			$this->request->data = $this->ActivityRegistration->find('first', $options);
		}
		$customers = $this->ActivityRegistration->Customer->find('list');
		$activities = $this->ActivityRegistration->Activity->find('list');
		$this->set(compact('customers', 'activities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActivityRegistration->id = $id;
		if (!$this->ActivityRegistration->exists()) {
			throw new NotFoundException(__('Invalid activity registration'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ActivityRegistration->delete()) {
			$this->Session->setFlash(__('The activity registration has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The activity registration could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}