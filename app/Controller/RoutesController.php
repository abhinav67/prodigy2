<?php
App::uses('AppController', 'Controller');
/**
 * Routes Controller
 *
 * @property Route $Route
 * @property PaginatorComponent $Paginator
 */
class RoutesController extends AppController {

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
		$this->loadModel('Employee');
		
		$this->Route->recursive = 1;
		$this->set('routes', $this->Paginator->paginate());
		
		$this->loadModel('Employee');
		$employes = $this->Employee->find('list');
		$this->set(compact('employes'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param sftring $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Route->exists($id)) {
			throw new NotFoundException(__('Invalid route'));
		}
		$options = array('conditions' => array('Route.' . $this->Route->primaryKey => $id));
		$this->set('route', $this->Route->find('first', $options));
		$this->loadModel('Employee');
		$employes = $this->Employee->find('list');
		$this->set(compact('employes'));
		//pr($employes);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Route->create();
			if ($this->Route->save($this->request->data)) {
				$this->Session->setFlash(__('The route has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The route could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$this->loadModel('Employee');
		$employes = $this->Employee->find('list');
		$this->set(compact('employes'));
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Route->exists($id)) {
			throw new NotFoundException(__('Invalid route'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Route->save($this->request->data)) {
				$this->Session->setFlash(__('The route has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The route could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Route.' . $this->Route->primaryKey => $id));
			$this->request->data = $this->Route->find('first', $options);
		}
		$this->loadModel('Employee');
		$employes = $this->Employee->find('list');
		$this->set(compact('employes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Route->id = $id;
		if (!$this->Route->exists()) {
			throw new NotFoundException(__('Invalid route'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Route->delete()) {
			$this->Session->setFlash(__('The route has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The route could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}