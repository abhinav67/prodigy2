<?php
App::uses('AppController', 'Controller');
/**
 * Physicians Controller
 *
 * @property Physician $Physician
 * @property PaginatorComponent $Paginator
 */
class PhysiciansController extends AppController {

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
		$this->Physician->recursive = 0;
		$this->set('physicians', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Physician->exists($id)) {
			throw new NotFoundException(__('Invalid physician'));
		}
		$options = array('conditions' => array('Physician.' . $this->Physician->primaryKey => $id));
		$this->set('physician', $this->Physician->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Physician->create();
			if ($this->Physician->save($this->request->data)) {
				$this->Session->setFlash(__('The physician has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The physician could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Physician->exists($id)) {
			throw new NotFoundException(__('Invalid physician'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Physician->save($this->request->data)) {
				$this->Session->setFlash(__('The physician has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The physician could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Physician.' . $this->Physician->primaryKey => $id));
			$this->request->data = $this->Physician->find('first', $options);
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
		$this->Physician->id = $id;
		if (!$this->Physician->exists()) {
			throw new NotFoundException(__('Invalid physician'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Physician->delete()) {
			$this->Session->setFlash(__('The physician has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The physician could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}