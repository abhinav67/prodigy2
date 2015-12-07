<?php
App::uses('AppController', 'Controller');
/**
 * CustomerAttendancesCustomers Controller
 *
 * @property CustomerAttendancesCustomer $CustomerAttendancesCustomer
 * @property PaginatorComponent $Paginator
 */
class CustomerAttendancesCustomersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('title_for_layout', 'Participants Attendance');
		$this->CustomerAttendancesCustomer->recursive = 0;
		$this->set('customerAttendancesCustomers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'View Add Participants Attendance');
		if (!$this->CustomerAttendancesCustomer->exists($id)) {
			throw new NotFoundException(__('Invalid customer attendances customer'));
		}
		$options = array('conditions' => array('CustomerAttendancesCustomer.' . $this->CustomerAttendancesCustomer->primaryKey => $id));
		$this->set('customerAttendancesCustomer', $this->CustomerAttendancesCustomer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Add Participants Attendance');
		if ($this->request->is('post')) {
			$this->CustomerAttendancesCustomer->create();
			if ($this->CustomerAttendancesCustomer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer attendances customer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer attendances customer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		$this->set('title_for_layout', 'Edit Participants Attendance');
		if (!$this->CustomerAttendancesCustomer->exists($id)) {
			throw new NotFoundException(__('Invalid customer attendances customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CustomerAttendancesCustomer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer attendances customer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer attendances customer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('CustomerAttendancesCustomer.' . $this->CustomerAttendancesCustomer->primaryKey => $id));
			$this->request->data = $this->CustomerAttendancesCustomer->find('first', $options);
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
		$this->CustomerAttendancesCustomer->id = $id;
		if (!$this->CustomerAttendancesCustomer->exists()) {
			throw new NotFoundException(__('Invalid customer attendances customer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerAttendancesCustomer->delete()) {
			$this->Session->setFlash(__('The customer attendances customer has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The customer attendances customer could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}