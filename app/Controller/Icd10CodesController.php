<?php
App::uses('AppController', 'Controller');
/**
 * Icd10Codes Controller
 *
 * @property Icd10Code $Icd10Code
 * @property PaginatorComponent $Paginator
 */
class Icd10CodesController extends AppController {

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
		$this->Icd10Code->recursive = 0;
		$this->set('icd10Codes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Icd10Code->exists($id)) {
			throw new NotFoundException(__('Invalid icd10 code'));
		}
		$options = array('conditions' => array('Icd10Code.' . $this->Icd10Code->primaryKey => $id));
		$this->set('icd10Code', $this->Icd10Code->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Icd10Code->create();
			if ($this->Icd10Code->save($this->request->data)) {
				$this->Session->setFlash(__('The icd10 code has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The icd10 code could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$customers = $this->Icd10Code->Customer->find('list');
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
		if (!$this->Icd10Code->exists($id)) {
			throw new NotFoundException(__('Invalid icd10 code'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Icd10Code->save($this->request->data)) {
				$this->Session->setFlash(__('The icd10 code has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The icd10 code could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Icd10Code.' . $this->Icd10Code->primaryKey => $id));
			$this->request->data = $this->Icd10Code->find('first', $options);
		}
		$customers = $this->Icd10Code->Customer->find('list');
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
		$this->Icd10Code->id = $id;
		if (!$this->Icd10Code->exists()) {
			throw new NotFoundException(__('Invalid icd10 code'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Icd10Code->delete()) {
			$this->Session->setFlash(__('The icd10 code has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The icd10 code could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}