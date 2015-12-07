<?php
App::uses('AppController', 'Controller');
/**
 * Authorizations Controller
 *
 * @property Authorization $Authorization
 * @property PaginatorComponent $Paginator
 */
class ReportsController extends AppController {

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


		$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>10));
	$this->set(compact('raman'));
	//pr($raman);
	
   		//$expectedcustomers[$i]=array($this->Customer->find('count',$gettodaycustomers));
   		//pr($expectedcustomers);
   		
	if(isset($this->request->data['Report']))
		{
		$name1=$this->request->data['Report'];
		$startdate=Date('ymd',strtotime($name1['from']));
		$enddate=Date('ymd',strtotime($name1['to']));
		

		$this->loadModel('Customer');

	$malecount=$this->CustomerAttendance->find('all',array(
		'conditions'=>
						array(
							  'CustomerAttendance.date >= '=>$startdate,
							  'CustomerAttendance.date <= '=>$enddate,
							),
						'contain'=>'Customer.client_sex = "M"',
						
		));
		
	$totalCount=0;
	foreach($malecount as $mc)
	{
			$countmalecustomer=count($mc['Customer']);
			$totalCount=$totalCount+$countmalecustomer;
	}

$femalecount=$this->CustomerAttendance->find('all',array(
		'conditions'=>
						array(
							  'CustomerAttendance.date >= '=>$startdate,
							  'CustomerAttendance.date <= '=>$enddate
							),
						'contain'=>'Customer.client_sex = "F"',
						
		));
	//pr($malecount);	
	$totalfemaleCount=0;
	foreach($femalecount as $fc)
	{
			$countfemalecustomer=count($fc['Customer']);
			$totalfemaleCount=$totalfemaleCount+$countfemalecustomer;
	}
	$this->set(compact('totalfemaleCount'));
	$this->set(compact('totalCount'));
	
	$this->loadModel('Insurance');
	$insurancecount=$this->CustomerAttendance->find('all',array(
		'conditions'=>
						array(
								'CustomerAttendance.date >= '=>$startdate,
							  'CustomerAttendance.date <= '=>$enddate
							),
						'recursive'=>2,
						
		));
	$iarray1=array();
	$i=0;
foreach ($insurancecount as $count) {

foreach ($count['Customer'] as $customerForInsurance) {

	$iarray1[$customerForInsurance['id']]=$customerForInsurance['Insurance']['name'];
	$i++;
}
}

	$newarr=array_count_values($iarray1);
	$this->set(compact('newarr'));

	
}
	$this->loadModel('Customer');
		$this->set('cnt',$this->Customer->find('count'));
		$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$this->set(compact('abi'));
	$this->set('inst',$this->Insurance->find('count'));
	

	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	
}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
	}
}