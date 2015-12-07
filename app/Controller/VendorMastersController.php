<?php
App::uses('AppController', 'Controller');
/**
 * VendorMasters Controller
 *
 * @property VendorMaster $VendorMaster
 * @property PaginatorComponent $Paginator
 */
class VendorMastersController extends AppController {

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
    	if($user['group_id']== '1')
    		return true;
    	if(in_array($this->action, array('edit', 'delete')))
    	{
    		if($user['group_id']== '3')
    		{
    			$this->Session->setFlash(__('Sorry!Only Manager is allowed to make changes .'), 'default', array('class' => 'alert alert-danger'));
    			return false;
    		}
    	}
    	return true;
    } 

	public function download()
{
    $this->set('vendormasters', $this->VendorMaster->find('all',array('fields'=>array('id','vendor_type','name','address','phone_number','fax','setup_date','email','pc_name','pc_phone','pc_email','pc_fax','sc_name','sc_phone','sc_email','sc_fax','payment_term','tax','notes'))));
    
    $this->layout = null;
   $this->autoLayout = false;
  Configure::write('debug', '0');
}
	public function index() {
		$this->VendorMaster->recursive = 0;
		$this->set('vendorMasters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VendorMaster->exists($id)) {
			throw new NotFoundException(__('Invalid vendor master'));
		}
		$options = array('conditions' => array('VendorMaster.' . $this->VendorMaster->primaryKey => $id));
		$this->set('vendorMaster', $this->VendorMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VendorMaster->create();
			if ($this->VendorMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The vendor master has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor master could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$vendorTypes = $this->VendorMaster->VendorType->find('list');
		$this->set(compact('vendorTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->VendorMaster->exists($id)) {
			throw new NotFoundException(__('Invalid vendor master'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->VendorMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The vendor master has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor master could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('VendorMaster.' . $this->VendorMaster->primaryKey => $id));
			$this->request->data = $this->VendorMaster->find('first', $options);
		}
		$vendorTypes = $this->VendorMaster->VendorType->find('list');
		$this->set(compact('vendorTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->VendorMaster->id = $id;
		if (!$this->VendorMaster->exists()) {
			throw new NotFoundException(__('Invalid vendor master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VendorMaster->delete()) {
			$this->Session->setFlash(__('The vendor master has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The vendor master could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}