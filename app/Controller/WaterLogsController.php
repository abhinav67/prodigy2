<?php
App::uses('AppController', 'Controller');
/**
 * WaterLogs Controller
 *
 * @property WaterLog $WaterLog
 * @property PaginatorComponent $Paginator
 */
class WaterLogsController extends AppController {

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
		$this->WaterLog->recursive = 0;
		$this->set('waterLogs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WaterLog->exists($id)) {
			throw new NotFoundException(__('Invalid water log'));
		}
		$options = array('conditions' => array('WaterLog.' . $this->WaterLog->primaryKey => $id));
		$this->set('waterLog', $this->WaterLog->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WaterLog->create();
			if ($this->WaterLog->save($this->request->data)) {
				$this->Session->setFlash(__('The water log has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The water log could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$waterLocations = $this->WaterLog->WaterLocation->find('list');
		$this->set(compact('waterLocations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WaterLog->exists($id)) {
			throw new NotFoundException(__('Invalid water log'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WaterLog->save($this->request->data)) {
				$this->Session->setFlash(__('The water log has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The water log could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('WaterLog.' . $this->WaterLog->primaryKey => $id));
			$this->request->data = $this->WaterLog->find('first', $options);
		}
		$waterLocations = $this->WaterLog->WaterLocation->find('list');
		$this->set(compact('waterLocations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WaterLog->id = $id;
		if (!$this->WaterLog->exists()) {
			throw new NotFoundException(__('Invalid water log'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->WaterLog->delete()) {
			$this->Session->setFlash(__('The water log has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The water log could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}