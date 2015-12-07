<?php
App::uses('AppController', 'Controller');
/**
 * Insurances Controller
 *
 * @property Insurance $Insurance
 * @property PaginatorComponent $Paginator
 */
class InsurancesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	var $helpers = array('Html', 'Form','Csv','Js'); 

/**
 * index method
 *
 * @return void
 */
   public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index'); 
}

public function isAuthorized($user)
    {
    	if($user['group_id']== '2')
    		return true;
    	if(in_array($this->action, array('add','edit', 'view','delete','download')))
    	{
    		if($user['group_id']== '3')
    		{
    			$this->Session->setFlash(__('Sorry! You do not have authority to view this page .'), 'default', array('class' => 'alert alert-danger'));
    			return false;
    		}
    	}
    	return true;
    } 

public function download()
{
    $this->set('insurances', $this->Insurance->find('all',array('fields'=>array('id','name','address_1','city','state','zip_code','payer_code','phone','email'))));
    
    $this->layout = null;
   $this->autoLayout = false;
  Configure::write('debug', '0');

}
	public function index() {
		$this->Insurance->recursive = 0;
		$this->set('insurances', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Insurance->exists($id)) {
			throw new NotFoundException(__('Invalid insurance'));
		}
		$options = array('conditions' => array('Insurance.' . $this->Insurance->primaryKey => $id));
		$this->set('insurance', $this->Insurance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Insurance->create();
			if ($this->Insurance->save($this->request->data)) {
				$this->Session->setFlash(__('The insurance has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The insurance could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$states = $this->Insurance->State->find('list');
		$this->set(compact('states'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Insurance->exists($id)) {
			throw new NotFoundException(__('Invalid insurance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Insurance->save($this->request->data)) {
				$this->Session->setFlash(__('The insurance has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The insurance could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Insurance.' . $this->Insurance->primaryKey => $id));
			$this->request->data = $this->Insurance->find('first', $options);
		}
		$states = $this->Insurance->State->find('list');
		$this->set(compact('states'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Insurance->id = $id;
		if (!$this->Insurance->exists()) {
			throw new NotFoundException(__('Invalid insurance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Insurance->delete()) {
			$this->Session->setFlash(__('The insurance has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The insurance could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}