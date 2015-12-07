<?php
App::uses('AppController', 'Controller');
/**
 * PrefferedHospitals Controller
 *
 * @property PrefferedHospital $PrefferedHospital
 * @property PaginatorComponent $Paginator
 */
class PrefferedHospitalsController extends AppController {

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
		$this->PrefferedHospital->recursive = 0;
		$this->set('prefferedHospitals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PrefferedHospital->exists($id)) {
			throw new NotFoundException(__('Invalid preffered hospital'));
		}
		$options = array('conditions' => array('PrefferedHospital.' . $this->PrefferedHospital->primaryKey => $id));
		$this->set('prefferedHospital', $this->PrefferedHospital->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PrefferedHospital->create();
			if ($this->PrefferedHospital->save($this->request->data)) {
				$this->Session->setFlash(__('The preffered hospital has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The preffered hospital could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->PrefferedHospital->exists($id)) {
			throw new NotFoundException(__('Invalid preffered hospital'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PrefferedHospital->save($this->request->data)) {
				$this->Session->setFlash(__('The preffered hospital has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The preffered hospital could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('PrefferedHospital.' . $this->PrefferedHospital->primaryKey => $id));
			$this->request->data = $this->PrefferedHospital->find('first', $options);
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
		$this->PrefferedHospital->id = $id;
		if (!$this->PrefferedHospital->exists()) {
			throw new NotFoundException(__('Invalid preffered hospital'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PrefferedHospital->delete()) {
			$this->Session->setFlash(__('The preffered hospital has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The preffered hospital could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}