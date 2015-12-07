<?php
App::uses('AppController', 'Controller');
/**
 * DriverLogs Controller
 *
 * @property DriverLog $DriverLog
 * @property PaginatorComponent $Paginator
 */
class DriverLogsController extends AppController {

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
		$this->DriverLog->recursive = 0;
		$this->set('driverLogs', $this->Paginator->paginate());
		$this->loadModel('Employee');
		$employes = $this->Employee->find('list');
		$this->set(compact('employes'));
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DriverLog->exists($id)) {
			throw new NotFoundException(__('Invalid driver log'));
		}
		$options = array('conditions' => array('DriverLog.' . $this->DriverLog->primaryKey => $id));
		$this->set('driverLog', $this->DriverLog->find('first', $options));
		$this->loadModel('Employee');
		$employes = $this->Employee->find('list');
		$this->set(compact('employes'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DriverLog->create();
			if ($this->DriverLog->save($this->request->data)) {
				if (isset($this->request->data['type_1'])) {
					$this->Session->setFlash(__('The driver log has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'add'));
				}
				else if (isset($this->request->data['type_2'])) {
					$this->Session->setFlash(__('The driver log has been saved.'), 'default', array('class' => 'alert alert-success'));
					return $this->redirect(array('action' => 'index'));
				}



				//$this->Session->setFlash(__('The driver log has been saved.'), 'default', array('class' => 'alert alert-success'));
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver log could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$routes = $this->DriverLog->Route->find('list');
		$customers = $this->DriverLog->Customer->find('list');
		$this->loadModel('Route');
		$primarydri=$this->Route->query('SELECT DISTINCT primary_employee_id FROM routes');

		$newemp=array();
		$this->loadModel('Employee');
		$employes = $this->Employee->find('list');

		foreach ($primarydri as $pm) {
			$newemp[$pm["routes"]["primary_employee_id"]]=$employes[$pm["routes"]["primary_employee_id"]];
		}
			
		
		$this->set(compact('routes', 'customers','primarydri','newemp'));
		
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
		if (!$this->DriverLog->exists($id)) {
			throw new NotFoundException(__('Invalid driver log'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DriverLog->save($this->request->data)) {
				$this->Session->setFlash(__('The driver log has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver log could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('DriverLog.' . $this->DriverLog->primaryKey => $id));
			$this->request->data = $this->DriverLog->find('first', $options);
		}
		$routes = $this->DriverLog->Route->find('list');
		$customers = $this->DriverLog->Customer->find('list');
		$this->set(compact('routes', 'customers'));
		
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
		$this->DriverLog->id = $id;
		if (!$this->DriverLog->exists()) {
			throw new NotFoundException(__('Invalid driver log'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DriverLog->delete()) {
			$this->Session->setFlash(__('The driver log has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The driver log could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}