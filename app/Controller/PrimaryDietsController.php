<?php
App::uses('AppController', 'Controller');
/**
 * PrimaryDiets Controller
 *
 * @property PrimaryDiet $PrimaryDiet
 * @property PaginatorComponent $Paginator
 */
class PrimaryDietsController extends AppController {

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
		$options=array('name');
		$r=0;
		include 'ramansearch.php';
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PrimaryDiet->exists($id)) {
			throw new NotFoundException(__('Invalid primary diet'));
		}
		$options = array('conditions' => array('PrimaryDiet.' . $this->PrimaryDiet->primaryKey => $id));
		$this->set('primaryDiet', $this->PrimaryDiet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PrimaryDiet->create();
			if ($this->PrimaryDiet->save($this->request->data)) {
				$this->Session->setFlash(__('The primary diet has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The primary diet could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->PrimaryDiet->exists($id)) {
			throw new NotFoundException(__('Invalid primary diet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PrimaryDiet->save($this->request->data)) {
				$this->Session->setFlash(__('The primary diet has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The primary diet could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('PrimaryDiet.' . $this->PrimaryDiet->primaryKey => $id));
			$this->request->data = $this->PrimaryDiet->find('first', $options);
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
		$this->PrimaryDiet->id = $id;
		if (!$this->PrimaryDiet->exists()) {
			throw new NotFoundException(__('Invalid primary diet'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PrimaryDiet->delete()) {
			$this->Session->setFlash(__('The primary diet has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The primary diet could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}