<?php
App::uses('AppController', 'Controller');
/**
 * StatusCodes Controller
 *
 * @property StatusCode $StatusCode
 * @property PaginatorComponent $Paginator
 */
class StatusCodesController extends AppController {

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
		$this->StatusCode->recursive = 0;
		$this->set('statusCodes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StatusCode->exists($id)) {
			throw new NotFoundException(__('Invalid status code'));
		}
		$options = array('conditions' => array('StatusCode.' . $this->StatusCode->primaryKey => $id));
		$this->set('statusCode', $this->StatusCode->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StatusCode->create();
			if ($this->StatusCode->save($this->request->data)) {
				$this->Session->setFlash(__('The status code has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status code could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->StatusCode->exists($id)) {
			throw new NotFoundException(__('Invalid status code'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StatusCode->save($this->request->data)) {
				$this->Session->setFlash(__('The status code has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status code could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('StatusCode.' . $this->StatusCode->primaryKey => $id));
			$this->request->data = $this->StatusCode->find('first', $options);
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
		$this->StatusCode->id = $id;
		if (!$this->StatusCode->exists()) {
			throw new NotFoundException(__('Invalid status code'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StatusCode->delete()) {
			$this->Session->setFlash(__('The status code has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The status code could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}