<?php
App::uses('AppController', 'Controller');
/**
 * VendorTypes Controller
 *
 * @property VendorType $VendorType
 * @property PaginatorComponent $Paginator
 */
class VendorTypesController extends AppController {

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
		$this->VendorType->recursive = 0;
		$this->set('vendorTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VendorType->exists($id)) {
			throw new NotFoundException(__('Invalid vendor type'));
		}
		$options = array('conditions' => array('VendorType.' . $this->VendorType->primaryKey => $id));
		$this->set('vendorType', $this->VendorType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VendorType->create();
			if ($this->VendorType->save($this->request->data)) {
				$this->Session->setFlash(__('The vendor type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->VendorType->exists($id)) {
			throw new NotFoundException(__('Invalid vendor type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->VendorType->save($this->request->data)) {
				$this->Session->setFlash(__('The vendor type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('VendorType.' . $this->VendorType->primaryKey => $id));
			$this->request->data = $this->VendorType->find('first', $options);
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
		$this->VendorType->id = $id;
		if (!$this->VendorType->exists()) {
			throw new NotFoundException(__('Invalid vendor type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VendorType->delete()) {
			$this->Session->setFlash(__('The vendor type has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The vendor type could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}