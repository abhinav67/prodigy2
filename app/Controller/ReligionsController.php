<?php
App::uses('AppController', 'Controller');
/**
 * Religions Controller
 *
 * @property Religion $Religion
 * @property PaginatorComponent $Paginator
 */
class ReligionsController extends AppController {

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
		$this->Religion->recursive = 0;
		$this->set('religions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Religion->exists($id)) {
			throw new NotFoundException(__('Invalid religion'));
		}
		$options = array('conditions' => array('Religion.' . $this->Religion->primaryKey => $id));
		$this->set('religion', $this->Religion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Religion->create();
			if ($this->Religion->save($this->request->data)) {
				$this->Session->setFlash(__('The religion has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The religion could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Religion->exists($id)) {
			throw new NotFoundException(__('Invalid religion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Religion->save($this->request->data)) {
				$this->Session->setFlash(__('The religion has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The religion could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Religion.' . $this->Religion->primaryKey => $id));
			$this->request->data = $this->Religion->find('first', $options);
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
		$this->Religion->id = $id;
		if (!$this->Religion->exists()) {
			throw new NotFoundException(__('Invalid religion'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Religion->delete()) {
			$this->Session->setFlash(__('The religion has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The religion could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}