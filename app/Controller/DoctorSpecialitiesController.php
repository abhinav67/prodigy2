<?php
App::uses('AppController', 'Controller');
/**
 * DoctorSpecialities Controller
 *
 * @property DoctorSpeciality $DoctorSpeciality
 * @property PaginatorComponent $Paginator
 */
class DoctorSpecialitiesController extends AppController {

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
		$this->DoctorSpeciality->recursive = 0;
		$this->set('doctorSpecialities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DoctorSpeciality->exists($id)) {
			throw new NotFoundException(__('Invalid doctor speciality'));
		}
		$options = array('conditions' => array('DoctorSpeciality.' . $this->DoctorSpeciality->primaryKey => $id));
		$this->set('doctorSpeciality', $this->DoctorSpeciality->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DoctorSpeciality->create();
			if ($this->DoctorSpeciality->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor speciality has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor speciality could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->DoctorSpeciality->exists($id)) {
			throw new NotFoundException(__('Invalid doctor speciality'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DoctorSpeciality->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor speciality has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor speciality could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('DoctorSpeciality.' . $this->DoctorSpeciality->primaryKey => $id));
			$this->request->data = $this->DoctorSpeciality->find('first', $options);
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
		$this->DoctorSpeciality->id = $id;
		if (!$this->DoctorSpeciality->exists()) {
			throw new NotFoundException(__('Invalid doctor speciality'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DoctorSpeciality->delete()) {
			$this->Session->setFlash(__('The doctor speciality has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The doctor speciality could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}