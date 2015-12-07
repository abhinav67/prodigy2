<?php
App::uses('AppController', 'Controller');
/**
 * WaterLocations Controller
 *
 * @property WaterLocation $WaterLocation
 * @property PaginatorComponent $Paginator
 */
class WaterLocationsController extends AppController {

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
		$this->WaterLocation->recursive = 0;
		$this->set('waterLocations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WaterLocation->exists($id)) {
			throw new NotFoundException(__('Invalid water location'));
		}
		$options = array('conditions' => array('WaterLocation.' . $this->WaterLocation->primaryKey => $id));
		$this->set('waterLocation', $this->WaterLocation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WaterLocation->create();
			if ($this->WaterLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The water location has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The water location could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->WaterLocation->exists($id)) {
			throw new NotFoundException(__('Invalid water location'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WaterLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The water location has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The water location could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('WaterLocation.' . $this->WaterLocation->primaryKey => $id));
			$this->request->data = $this->WaterLocation->find('first', $options);
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
		$this->WaterLocation->id = $id;
		if (!$this->WaterLocation->exists()) {
			throw new NotFoundException(__('Invalid water location'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->WaterLocation->delete()) {
			$this->Session->setFlash(__('The water location has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The water location could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}