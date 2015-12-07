<?php
App::uses('AppController', 'Controller');
/**
 * CustomerEthnicities Controller
 *
 * @property CustomerEthnicity $CustomerEthnicity
 * @property PaginatorComponent $Paginator
 */
class CustomerEthnicitiesController extends AppController {

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
			$this->set('title_for_layout', 'Participants Ethnicities');
		$this->CustomerEthnicity->recursive = 0;
		$this->set('customerEthnicities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	$this->set('title_for_layout', 'Participants Ethnicities');
		if (!$this->CustomerEthnicity->exists($id)) {
			throw new NotFoundException(__('Invalid customer ethnicity'));
		}
		$options = array('conditions' => array('CustomerEthnicity.' . $this->CustomerEthnicity->primaryKey => $id));
		$this->set('customerEthnicity', $this->CustomerEthnicity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	$this->set('title_for_layout', 'Add Participants Ethnicities');
		if ($this->request->is('post')) {
			$this->CustomerEthnicity->create();
			if ($this->CustomerEthnicity->save($this->request->data)) {
				$this->Session->setFlash(__('The customer ethnicity has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer ethnicity could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
	$this->set('title_for_layout', 'Edit Participants Ethnicities');
		if (!$this->CustomerEthnicity->exists($id)) {
			throw new NotFoundException(__('Invalid customer ethnicity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CustomerEthnicity->save($this->request->data)) {
				$this->Session->setFlash(__('The customer ethnicity has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer ethnicity could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('CustomerEthnicity.' . $this->CustomerEthnicity->primaryKey => $id));
			$this->request->data = $this->CustomerEthnicity->find('first', $options);
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
		$this->CustomerEthnicity->id = $id;
		if (!$this->CustomerEthnicity->exists()) {
			throw new NotFoundException(__('Invalid customer ethnicity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerEthnicity->delete()) {
			$this->Session->setFlash(__('The customer ethnicity has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The customer ethnicity could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}