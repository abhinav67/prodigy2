<?php
App::uses('AppController', 'Controller');
/**
 * CustomersIcd9Codes Controller
 *
 * @property CustomersIcd9Code $CustomersIcd9Code
 * @property PaginatorComponent $Paginator
 */
class CustomersIcd9CodesController extends AppController {

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
	$this->set('title_for_layout', 'Icd9Codes Participants Attendance');
		$this->CustomersIcd9Code->recursive = 0;
		$this->set('customersIcd9Codes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	$this->set('title_for_layout', 'View Icd9Codes Participants Attendance');
		if (!$this->CustomersIcd9Code->exists($id)) {
			throw new NotFoundException(__('Invalid customers icd9 code'));
		}
		$options = array('conditions' => array('CustomersIcd9Code.' . $this->CustomersIcd9Code->primaryKey => $id));
		$this->set('customersIcd9Code', $this->CustomersIcd9Code->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	$this->set('title_for_layout', 'Add Icd9Codes Participants Attendance');
		if ($this->request->is('post')) {
			$this->CustomersIcd9Code->create();
			if ($this->CustomersIcd9Code->save($this->request->data)) {
				$this->Session->setFlash(__('The customers icd9 code has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customers icd9 code could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
	$this->set('title_for_layout', 'Edit Icd9Codes Participants Attendance');
		if (!$this->CustomersIcd9Code->exists($id)) {
			throw new NotFoundException(__('Invalid customers icd9 code'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CustomersIcd9Code->save($this->request->data)) {
				$this->Session->setFlash(__('The customers icd9 code has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customers icd9 code could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('CustomersIcd9Code.' . $this->CustomersIcd9Code->primaryKey => $id));
			$this->request->data = $this->CustomersIcd9Code->find('first', $options);
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
		$this->CustomersIcd9Code->id = $id;
		if (!$this->CustomersIcd9Code->exists()) {
			throw new NotFoundException(__('Invalid customers icd9 code'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomersIcd9Code->delete()) {
			$this->Session->setFlash(__('The customers icd9 code has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The customers icd9 code could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}