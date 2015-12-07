<?php
App::uses('AppController', 'Controller');
/**
 * Icd9Codes Controller
 *
 * @property Icd9Code $Icd9Code
 * @property PaginatorComponent $Paginator
 */
class Icd9CodesController extends AppController {

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
		$this->Icd9Code->recursive = 0;
		$this->set('icd9Codes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Icd9Code->exists($id)) {
			throw new NotFoundException(__('Invalid icd9 code'));
		}
		$options = array('conditions' => array('Icd9Code.' . $this->Icd9Code->primaryKey => $id));
		$this->set('icd9Code', $this->Icd9Code->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Icd9Code->create();
			if ($this->Icd9Code->save($this->request->data)) {
				$this->Session->setFlash(__('The icd9 code has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The icd9 code could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$customers = $this->Icd9Code->Customer->find('list');
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
		if (!$this->Icd9Code->exists($id)) {
			throw new NotFoundException(__('Invalid icd9 code'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Icd9Code->save($this->request->data)) {
				$this->Session->setFlash(__('The icd9 code has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The icd9 code could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Icd9Code.' . $this->Icd9Code->primaryKey => $id));
			$this->request->data = $this->Icd9Code->find('first', $options);
		}
		$customers = $this->Icd9Code->Customer->find('list');
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
		$this->Icd9Code->id = $id;
		if (!$this->Icd9Code->exists()) {
			throw new NotFoundException(__('Invalid icd9 code'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Icd9Code->delete()) {
			$this->Session->setFlash(__('The icd9 code has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The icd9 code could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}