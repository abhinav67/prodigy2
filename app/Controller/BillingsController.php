<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 * @property PaginatorComponent $Paginator
 */


      
class BillingsController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session','Acl');

     public function beforeFilter() {
	parent::beforeFilter();
  $this->Auth->allow('index'); 
       
    include "billing-errors.php";
    set_time_limit(60);

		}


    public function isAuthorized($user)
    {
    	if($user['group_id']== '2')
    		return true;
    	if(in_array($this->action, array('edit', 'delete','today_billing','customers')))
    	{
    		if($user['group_id']== '3')
    		{
    			$this->Session->setFlash(__('Sorry!Only Manager is allowed to do the billing .'), 'default', array('class' => 'alert alert-danger'));
    			return false;
    		}
    	}
    	return true;
    } 


	

	
	public function index() {
	
	if ($this->request->is('post')) {
	
	//get form data
	$this->set('selected', $this->request->data);
	$select=$this->request->data;
	   
	
	$this->loadModel('Customer');
	$icustomers = $this->Customer->find(
	'list',array (
	'conditions' => array('status_code_id' =>  ''),
	'fields'=>'Customer.id',
	'recursive' => 0,
	));

		$test = $this->Customer->find(
			'all',array (
			//'conditions' => array('status_code_id' =>  ''),
			//'fields'=>'Customer.id',
			'recursive' => 0,
		));

		//pr ($test);
	include "checkAttendancePresent.php";
	include "company-info.php";
	include "customers-loop.php";
	include "bill-edi.php";
	include "edi-render.php";

	//pr ($ultimatecustomer);
	
}

}
public function today_billing() {
	
	if ($this->request->is('post')) {
	
	//get form data
	$this->set('selected', $this->request->data);
	$select=$this->request->data;
	   
	
	$this->loadModel('Customer');
	$icustomers = $this->Customer->find(
	'list',array (
	'conditions' => array('status_code_id' =>  ''),
	'fields'=>'Customer.id',
	'recursive' => 0,
	));

		$test = $this->Customer->find(
			'all',array (
			//'conditions' => array('status_code_id' =>  ''),
			//'fields'=>'Customer.id',
			'recursive' => 0,
		));

		//pr ($test);
	include "checkAttendancePresent.php";
	include "company-info.php";
	include "customers-loop.php";
	include "bill-edi.php";
	include "edi-render.php";
	
	//pr ($ultimatecustomer);
	
}

}

	public function customers() {

		$this->loadModel('Customer');
		$this->set('customers', $this->Customer->find('list',array('conditions' => array('Customer.status_code_id' =>  ''))));


		if ($this->request->is('post')) {

			//get form data
			$this->set('selected', $this->request->data);
			$select=$this->request->data;

			$this->loadModel('Customer');
			$icustomers = $this->Customer->find(
				'list',array (
				'conditions' => array('Customer.id' =>  $select['Billing']['customers'], 'Customer.status_code_id' =>  ''),
				'fields'=>'Customer.id',
				'recursive' => 0,
			));

			include "checkAttendancePresent.php";
			include "company-info.php";
			include "customers-loop.php";
			include "bill-edi.php";
			include "edi-render.php";
		}
	}

}

?>
