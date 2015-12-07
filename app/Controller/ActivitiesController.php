<?php
App::uses('AppController', 'Controller');
/**
 * Activities Controller
 *
 * @property Activity $Activity
 * @property PaginatorComponent $Paginator
 */
class ActivitiesController extends AppController {

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
		$this->Activity->recursive = 0;
		$this->set('activities', $this->Paginator->paginate());
		$this->loadModel('ActivityType');
		$atypes=$this->ActivityType->find('list');
		$this->set(compact('atypes'));
		
		$datee= $this->Activity->find('list',array('fields'=>array('id','date')));
		$this->set('datee', $datee);
		//pr($datee);
		foreach($datee as $key => $value){
		$newDate[$value] = date("M-d-Y", strtotime($value));
		$this->set('newDate', $newDate);
	}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Activity->exists($id)) {
			throw new NotFoundException(__('Invalid activity'));
		}
		$options = array('conditions' => array('Activity.' . $this->Activity->primaryKey => $id));
		$this->set('activity', $this->Activity->find('first', $options));
		$this->loadModel('ActivityType');
		$atypes=$this->ActivityType->find('list');
		$this->set(compact('atypes'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
if(!isset($_GET['select_month']) && !isset($_GET['year']) && !isset($_GET['ethnicity']))
		{
			return $this->redirect(array('action' => 'selectmonth'));
		}
		else
		{
			$month=$_GET['month'];
			$year=$_GET['year'];
			$ethnicity=$_GET['ethnicity'];
			$days=$_GET['days'];
		}

		//$days=cal_days_in_month(CAL_GREGORIAN, $month, $year);
		if ($this->request->is('post')) {
			$this->Activity->create();
			if ($this->Activity->saveAll($this->request->data['Activity'])) {
				$this->Session->setFlash(__('The activity has been saved.'), 'default', array('class' => 'alert alert-success'));
				//pr ($this->data);
				return $this->redirect(array('action' => 'index'));
			} else {
				//pr ($this->data);
				$this->Session->setFlash(__('The activity could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$this->loadModel('ActivityType');
		$atypes=$this->ActivityType->find('list');
		$this->set(compact('atypes','month','year','ethnicity','days'));

	}

public function add1() {
if(!isset($_GET['select_month']) && !isset($_GET['year']) && !isset($_GET['ethnicity']))
		{
			return $this->redirect(array('action' => 'selectmonth'));
		}
		else
		{
			$fromdays=$_GET['fromdays'];
			$check1=substr(($fromdays), 8);
			$year=substr(($fromdays), 0,4);
			$this->set('year',$year);
			//pr($year);
			$month=substr($fromdays, 5,2);
			//pr($month);
			//pr($check1);
			$this->set('check1',$check1);
			$days=$_GET['days'];
			$check=substr(($days), 8);
			$this->set('check', $check);
			//pr($check);
			$ethnicity=$_GET['ethnicity'];
			$days=$_GET['days'];
		}

		//$days=cal_days_in_month(CAL_GREGORIAN, $month, $year);
		if ($this->request->is('post')) {
			$this->Activity->create();
			if ($this->Activity->saveAll($this->request->data['Activity'])) {
				$this->Session->setFlash(__('The activity has been saved.'), 'default', array('class' => 'alert alert-success'));
				//pr ($this->data);
				return $this->redirect(array('action' => 'index'));
			} else {
				//pr ($this->data);
				$this->Session->setFlash(__('The activity could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$this->loadModel('ActivityType');
		$atypes=$this->ActivityType->find('list');
		$this->set(compact('atypes','month','year','ethnicity','days'));

	}
	
	public function selectmonth()
	{

		$dt=date("Y");
		$dt1=Date('Y',strtotime("+1 year"));
		$dt2=Date('Y',strtotime("-1 year"));
		
		

		$this->loadModel('CustomerEthnicity');
		$etypes=$this->CustomerEthnicity->find('list');
		$this->set(compact('etypes','dt','dt1','dt2'));
	}
	
	public function selectmonth1()
	{
		$dt=date("Y");
		$dt1=Date('Y',strtotime("+1 year"));
		$dt2=Date('Y',strtotime("-1 year"));
		$this->loadModel('CustomerEthnicity');
		$etypes=$this->CustomerEthnicity->find('list');
		$this->set(compact('etypes','dt','dt1','dt2'));
	}


		public function selectmonth2()
	{
		$dt=date("Y");
		$dt1=Date('Y',strtotime("+1 year"));
		$dt2=Date('Y',strtotime("-1 year"));
		$this->loadModel('CustomerEthnicity');
		$etypes=$this->CustomerEthnicity->find('list');
		$this->set(compact('etypes','dt','dt1','dt2'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Activity->exists($id)) {
			throw new NotFoundException(__('Invalid activity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Activity->save($this->request->data)) {
				$this->Session->setFlash(__('The activity has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Activity.' . $this->Activity->primaryKey => $id));
			$this->request->data = $this->Activity->find('first', $options);
		}
		$this->loadModel('ActivityType');
		$atypes=$this->ActivityType->find('list');
		$this->set(compact('atypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Activity->id = $id;
		if (!$this->Activity->exists()) {
			throw new NotFoundException(__('Invalid activity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Activity->delete()) {
			$this->Session->setFlash(__('The activity has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The activity could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	public function activities() {


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
	
	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));
	
	$this->loadModel('City');
	$cities=$this->City->find('all',array());
	$this->set(compact('cities'));	
	
	$this->loadModel('Icd9Code');
	$icd9Codes=$this->Icd9Code->find('all',array());
	$this->set(compact('icd9Codes'));

	$this->loadModel('Icd10Code');
	$icd10Codes=$this->Icd10Code->find('all', array());
	$this->set(compact('icd10Codes'));

	$this->loadModel('ActivityType');
	$activity_types=$this->ActivityType->find('all',array());
	$this->set(compact('activity_types'));
	//pr($activity_types);

}

	
}