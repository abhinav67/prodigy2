<?php
App::uses('AppController', 'Controller');
/**
 * BillingRecords Controller
 *
 * @property BillingRecord $BillingRecord
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BillingRecordsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	
	
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index'); 
}

public function isAuthorized($user)
    {
    	if($user['group_id']== '2')
    		return true;
    	if(in_array($this->action, array('edit', 'delete')))
    	{
    		if($user['group_id']== '3')
    		{
    			$this->Session->setFlash(__('Sorry!Only Manager is allowed to do the billing .'), 'default', array('class' => 'alert alert-danger'));
    			return false;
    		}
    	}
    	return true;
    } 

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BillingRecord->recursive = 0;
		$this->set('billingRecords', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BillingRecord->exists($id)) {
			throw new NotFoundException(__('Invalid billing record'));
		}
		$options = array('conditions' => array('BillingRecord.' . $this->BillingRecord->primaryKey => $id));
		$billingRecord=$this->BillingRecord->find('first', $options);
       

          $this->loadModel('Customer');
		$customerss = $this->Customer->find('list',array('fields'=>array('id','id')));
        $this->set('customerss',$customerss);

		$this->loadModel('BillingReconciliation');
		$claims = $this->BillingReconciliation->find('all', array('conditions'=>array('BillingReconciliation.billing_record_id'=>$billingRecord['BillingRecord']['id'],'BillingReconciliation.customer_id'=>$customerss)));
        //pr($claims);

		 $this->loadModel('Customer');
		$customers = $this->Customer->find('list');
     //   $this->set('customers',$customers);

		$this->set(compact('billingRecord','claims','customers'));
	}

}