<?php
App::uses('AppController', 'Controller');
/**
 * CustomersIcd10Codes Controller
 *
 * @property CustomersIcd10Code $CustomersIcd10Code
 * @property PaginatorComponent $Paginator
 */
class CustomersIcd10CodesController extends AppController {

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
		$this->set('title_for_layout', 'Icd10Codes Participants Attendance');
		$this->CustomersIcd10Code->recursive = 0;
		$this->set('customersIcd10Codes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
			$this->set('title_for_layout', 'View Icd10Codes Participants Attendance');
		if (!$this->CustomersIcd10Code->exists($id)) {
			throw new NotFoundException(__('Invalid customers icd10 code'));
		}
		$options = array('conditions' => array('CustomersIcd10Code.' . $this->CustomersIcd10Code->primaryKey => $id));
		$this->set('customersIcd10Code', $this->CustomersIcd10Code->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	$this->set('title_for_layout', 'Add Icd10Codes Participants Attendance');
		if ($this->request->is('post')) {
			$this->CustomersIcd10Code->create();
			if ($this->CustomersIcd10Code->save($this->request->data)) {
				$this->Session->setFlash(__('The customers icd10 code has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customers icd10 code could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
	$this->set('title_for_layout', 'Edit Icd10Codes Participants Attendance');
		if (!$this->CustomersIcd10Code->exists($id)) {
			throw new NotFoundException(__('Invalid customers icd10 code'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CustomersIcd10Code->save($this->request->data)) {
				$this->Session->setFlash(__('The customers icd10 code has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customers icd10 code could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('CustomersIcd10Code.' . $this->CustomersIcd10Code->primaryKey => $id));
			$this->request->data = $this->CustomersIcd10Code->find('first', $options);
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
		$this->CustomersIcd10Code->id = $id;
		if (!$this->CustomersIcd10Code->exists()) {
			throw new NotFoundException(__('Invalid customers icd10 code'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomersIcd10Code->delete()) {
			$this->Session->setFlash(__('The customers icd10 code has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The customers icd10 code could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}