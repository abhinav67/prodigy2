<?php
App::uses('AppController', 'Controller');
/**
 * ActivityTypes Controller
 *
 * @property ActivityType $ActivityType
 * @property PaginatorComponent $Paginator
 */
class ActivityTypesController extends AppController {

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
		$this->ActivityType->recursive = 0;
		$this->set('activityTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActivityType->exists($id)) {
			throw new NotFoundException(__('Invalid activity type'));
		}
		$options = array('conditions' => array('ActivityType.' . $this->ActivityType->primaryKey => $id));
		$this->set('activityType', $this->ActivityType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActivityType->create();
			if ($this->ActivityType->save($this->request->data)) {
				$this->Session->setFlash(__('The activity type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->ActivityType->exists($id)) {
			throw new NotFoundException(__('Invalid activity type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActivityType->save($this->request->data)) {
				$this->Session->setFlash(__('The activity type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ActivityType.' . $this->ActivityType->primaryKey => $id));
			$this->request->data = $this->ActivityType->find('first', $options);
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
		$this->ActivityType->id = $id;
		if (!$this->ActivityType->exists()) {
			throw new NotFoundException(__('Invalid activity type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ActivityType->delete()) {
			$this->Session->setFlash(__('The activity type has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The activity type could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}