<?php
App::uses('AppController', 'Controller');
/**
 * CustomerAttendances Controller
 *
 * @property CustomerAttendance $CustomerAttendance
 * @property PaginatorComponent $Paginator
 */
class CustomerAttendancesController extends AppController {

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

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index'); 
}

public function isAuthorized($user)
    {
    	if($user['group_id']== '2')
    		return true;
    	if(in_array($this->action, array('add','edit', 'delete','recent_attendance','selectday')))
    	{
    		if($user['group_id']== '3')
    		{
    			$this->Session->setFlash(__('Sorry!Only Manager is allowed to do the attendance .'), 'default', array('class' => 'alert alert-danger'));
    			return false;
    		}
    	}
    	return true;
    } 

	public function index() {
	$this->set('title_for_layout', 'Participant Attendances');
		$correctcname=$this->params['controller'];
		//pr($this->params['controller']);
		$cname=strtolower($correctcname);
		if ($cname=="customerattendances")
		{
			$this->redirect("/customer_attendances");
		}
		$options=array('date');
		$r=1;
		include 'ramansearch.php';
		//pr($customerAttendance);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	//$this->set('title_for_layout', 'View Participants Attendance');
		if (!$this->CustomerAttendance->exists($id)) {
			throw new NotFoundException(__('Invalid customer attendance'));
		}
		$options = array('conditions' => array('CustomerAttendance.' . $this->CustomerAttendance->primaryKey => $id));
		$this->set('customerAttendance', $this->CustomerAttendance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('Companies');
		$comp = $this->Companies->find('all');
		$this->set('comp',$comp);
		//pr($comp);
	//$this->set('title_for_layout', 'Add Participants Attendance');
		if(!isset($_GET['select_date']) && !isset($_GET['shift']))
		{
			return $this->redirect(array('action' => 'selectday'));
		}
		else
		{
			$date=$_GET['select_date'];
			$shift=$_GET['shift'];
		}
		if ($this->request->is('post')) {


		$sh  = array($comp[0]['Companies']['pm'],$comp[0]['Companies']['am'],);
		$key     = array_search($shift,$sh);
		$shiftclean = $sh[$key]; //if not, first one will be set automatically. smart enuf :)
		//$both=$comp[0]['Companies']['shift'];
		$this->set('shiftclean',$shiftclean);
		$dt = strtotime($date);

		$day = date("l", $dt);
       $this->set('day',$day);
			$this->loadModel('Customer');

		$gettodaycustomerss=array(
			'conditions' => array("{$day}"."_"."{$shiftclean}" => 1,'Customer.status_code_id' =>  ''), //array of conditions
			'fields' => array('id'),
			'recursive' => 0
		);
		$expectedcustomerss=$this->Customer->find('count',$gettodaycustomerss);
		//asort($expectedcustomers);
		//pr($expectedcustomers);
		 $countcustomer = count($this->request->data['Customer']['Customer']);
		 //pr($countcustomer);
		$this->set('expectedcustomerss',$expectedcustomerss);
		$this->CustomerAttendance->create();
		$this->request->data = Hash::insert($this->request->data, 'CustomerAttendance.actual', $countcustomer);
        $this->request->data = Hash::insert($this->request->data, 'CustomerAttendance.expected', $expectedcustomerss);
       //pr($this->data);
			if ($this->CustomerAttendance->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The customer attendance has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('The customer attendance could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
				  $this->Session->setFlash(__('The customer attendance has already been created, please edit to make changes.'), 'default', array('class' => 'alert alert-danger'));
				  return $this->redirect(array('action' => 'index'));
			}
		}
		$customers = $this->CustomerAttendance->Customer->find('list',array('conditions' => array('Customer.status_code_id' =>  '')));
		asort($customers);
		$this->set(compact('customers'));
		$this->loadModel('Customer');

		$dt = strtotime($date);

		$day = date("l", $dt);

		$sh  = array("am","pm");
		$key     = array_search($shift,$sh);
		$shiftclean = $sh[$key]; //if not, first one will be set automatically. smart enuf :)

		$gettodaycustomers=array(
			'conditions' => array("{$day}"."_"."{$shiftclean}" => 1,'Customer.status_code_id' =>  ''), //array of conditions
			'fields' => array('id'),
			'recursive' => 0
		);
		//pr($gettodaycustomers);
		$expectedcustomers=$this->Customer->find('list',$gettodaycustomers);
		asort($expectedcustomers);
		//pr($expectedcustomers);
		$this->set('expectedcustomers',$expectedcustomers);
		$this->set('dateinurl',$dt);
		$this->set('shift',$shiftclean);
		$this->set('day',$day);
		
		$this->loadModel('Companies');
		$comp = $this->Companies->find('all');
		$this->set('comp', $comp);
	}
		public function recent_attendance() {
		$this->loadModel('Companies');
		$comp = $this->Companies->find('all');
		$this->set('comp',$comp);
		//pr($comp);
		$date=date('M-d-Y');
			$shift=$_GET['shift'];

		$sh  = array($comp[0]['Companies']['pm'],$comp[0]['Companies']['am'],);
		$key     = array_search($shift,$sh);
		$shiftclean = $sh[$key]; //if not, first one will be set automatically. smart enuf :)
		//$both=$comp[0]['Companies']['shift'];
		$this->set('shiftclean',$shiftclean);
		$dt = strtotime($date);

		$day = date("l", $dt);
$this->set('day',$day);
		/* $shh  = array($comp[0]['Companies']['am'],);
		$keyy     = array_search($shift,$shh);
		$shiftclean1 = $sh[$keyy]; //if not, first one will be set automatically. smart enuf :)
		//$both=$comp[0]['Companies']['shift'];
		$this->set('shiftclean1',$shiftclean1); */
		
		
		//pr($shift);
			//pr($sh);
			//pr($key);
			//pr($shiftclean);
			$chk=$this->CustomerAttendance->findAllByDateAndShift($date,'am');
			$chk1=$this->CustomerAttendance->findAllByDateAndShift($date,'pm');
			$chk3=$this->CustomerAttendance->findAllByDateAndShift($date,$comp[0]['Companies']['am']);
			$chk4=$this->CustomerAttendance->findAllByDateAndShift($date,$comp[0]['Companies']['pm']);

			//pr($chk2);
		/*	if($shiftclean==$comp[0]['Companies']['pm'])
				{
			if($chk1){
					$rurl11="/customer_Attendances/index";
					return $this->redirect("{$rurl11}");
			}
		}
		if($shiftclean==$comp[0]['Companies']['am'])
				{
			if($chk){
				$rurl2="/customer_Attendances/index";
					return $this->redirect("{$rurl2}");
			}
		}*/

		/* if($shiftclean1==$comp[0]['Companies']['am'])
				{
			if($chk){
					$rurl="/customer_Attendances/index";
					return $this->redirect("{$rurl}");
			}
		} */
		
			if($shiftclean==$comp[0]['Companies']['pm'])
			{
				if($chk4)
				{
					$rurl1="/customer_Attendances/index";
					return $this->redirect("{$rurl1}");
				}
			}
			if($shiftclean==$comp[0]['Companies']['am'])
			{
			if($chk3)
			{
				$rurl="/customer_Attendances/recent_attendance/?shift=pm";
				return $this->redirect("{$rurl}");
			}
			}
			if($shiftclean==null)
			{
				$url2 = "/customer_Attendances/index";
					return $this->redirect("{$url2}");
			}
			
		if ($this->request->is('post')) {
				

		$this->loadModel('Customer');

		$gettodaycustomerss=array(
			'conditions' => array("{$day}"."_"."{$shiftclean}" => 1,'Customer.status_code_id' =>  ''), //array of conditions
			'fields' => array('id'),
			'recursive' => 0
		);
		$expectedcustomerss=$this->Customer->find('count',$gettodaycustomerss);
		//asort($expectedcustomers);
		//pr($expectedcustomers);

		$this->set('expectedcustomerss',$expectedcustomerss);
		 $countcustomer = count($this->request->data['Customer']['Customer']);
			$this->CustomerAttendance->create();
			$this->request->data = Hash::insert($this->request->data, 'CustomerAttendance.actual', $countcustomer);
            $this->request->data = Hash::insert($this->request->data, 'CustomerAttendance.expected', $expectedcustomerss);
			if ($this->CustomerAttendance->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The customer attendance has been saved.'), 'default', array('class' => 'alert alert-success'));
				
				$rurl="/customer_Attendances/recent_attendance/?shift=am";
				$this->redirect("{$rurl}");
			} else {
				$this->Session->setFlash(__('The customer attendance could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	
		$customers = $this->CustomerAttendance->Customer->find('list',array('conditions' => array('Customer.status_code_id' =>  '')));
		asort($customers);
		$this->set(compact('customers'));
		$this->loadModel('Customer');

		

		

		$gettodaycustomers=array(
			'conditions' => array("{$day}"."_"."{$shiftclean}" => 1,'Customer.status_code_id' =>  ''), //array of conditions
			'fields' => array('id'),
			'recursive' => 0
		);
		$expectedcustomers=$this->Customer->find('list',$gettodaycustomers);
		asort($expectedcustomers);
		//pr($expectedcustomers);
		$this->set('expectedcustomers',$expectedcustomers);
		$this->set('dateinurl',$dt);
		$this->set('shift',$shiftclean);
		$this->set('day',$day);

		$this->loadModel('Companies');
			$comp = $this->Companies->find('all');
		$this->set('comp',$comp);
		//pr($comp);
		}


	public function selectday()
	{
		$this->loadModel('Companies');
		$comp = $this->Companies->find('all');
		$this->set('comp',$comp);
		//pr($comp);
		//pr($shiftclean);
			/*	$date=date('M-d-Y');
			$shift=$_GET['shift'];

		$sh  = array($comp[0]['Companies']['shift']);
		$key     = array_search($shift,$sh);
		$shiftclean = $sh[$key]; //if not, first one will be set automatically. smart enuf :)
		//$both=$comp[0]['Companies']['shift'];
		$this->set('shiftclean',$shiftclean);
		//pr($shift);
			$chk=$this->CustomerAttendance->findAllByDateAndShift($date,'am');
			$chk1=$this->CustomerAttendance->findAllByDateAndShift($date,'pm');
		//	$chk2=$this->CustomerAttendance->findAllByDateAndShift($date,array('am','pm'));
			//pr($chk2);
			if($shiftclean=="pm")
				{
			if($chk1){
					$rurl1="/customer_Attendances/index";
					return $this->redirect("{$rurl1}");
			}
		}
		if($shiftclean=="am")
				{
			if($chk){
				$rurl="/customer_Attendances/index";
				return $this->redirect("{$rurl}");
			}
		} */

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
		if (!$this->CustomerAttendance->exists($id)) {
			throw new NotFoundException(__('Invalid customer attendance'));
		}
		 $countcustomer = count($this->request->data['Customer']['Customer']);
		if ($this->request->is(array('post', 'put'))) {
	$this->request->data = Hash::insert($this->request->data, 'CustomerAttendance.actual', $countcustomer);

			if ($this->CustomerAttendance->saveAll($this->request->data)) {

				$this->Session->setFlash(__('The customer attendance has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer attendance could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('CustomerAttendance.' . $this->CustomerAttendance->primaryKey => $id));
			//this sorts the selected array
			asort($options);
			$this->request->data = $this->CustomerAttendance->find('first', $options);

		}
		$customers = $this->CustomerAttendance->Customer->find('list');
		//this sorts the customer array
		asort($customers);
		$this->set(compact('customers'));
		
		$this->loadModel('Companies');
		$comp = $this->Companies->find('all');
		$this->set('comp',$comp);

		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CustomerAttendance->id = $id;
		if (!$this->CustomerAttendance->exists()) {
			throw new NotFoundException(__('Invalid customer attendance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerAttendance->delete()) {
			$this->Session->setFlash(__('The customer attendance has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The customer attendance could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function chart2(){

    	  	$this->loadModel('CustomerAttendance');
   		$yo122=$this->CustomerAttendance->query("UPDATE customer_attendances
set expected = NULL
Where  date_m <= LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY - INTERVAL 12 MONTH
  ") ;

   			$this->loadModel('CustomerAttendance');
   		$yo1223=$this->CustomerAttendance->query("UPDATE customer_attendances
set actual = NULL
Where  date_m <= LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY - INTERVAL 12 MONTH
  ") ;

	$mf = array('1' =>'January','2' =>'Feburary','3' =>'March','4' =>'April','5' =>'May','6' =>'June','7' =>'July',
		'8' =>'August','9' =>'September','10' =>'October','11' =>'November','12' =>'December');
	$this->set('mf',$mf);
	//pr($mf);

  
  $mon = date("M");
     $this->loadModel('CustomerAttendance');
   		$yo12=$this->CustomerAttendance->query("SELECT  week(date_m) Week, month(date_m) Month,
   		 year(date_m) Year, avg(actual) WeekAvg,sum(actual) WeekSum ,
   		  sum(expected) ExpectedSum from `customer_attendances` where YEAR(date_m) = YEAR(NOW()) group by month(date_m), year(date_m)") ;
    //pr($yo12); 
   	
           

   		foreach($yo12 as $ya){
         //pr($ya);
   			$year[$ya[0]['Month']]= $ya[0]['Year'];
   			//pr($daa);Month
   		}
   		$this->set('year',$year);

   		foreach($yo12 as $ya){
         //pr($ya);
   			$date[$ya[0]['Month']]= $ya[0]['Month'];
   			//pr($daa);Month
   		}
   		$this->set('date',$date);

   		foreach($yo12 as $ya){
         //pr($ya);
   			$wee[$ya[0]['Month']]= $ya[0]['Month'];
   			//pr($daa);
   		}
   		$this->set('wee',$wee);

   		foreach($yo12 as $ya){
         //pr($ya);
   			$avgg[$ya[0]['Month']]= $ya[0]['WeekAvg'];
   			//pr($daa);
   		}
   		$this->set('avgg',$avgg);

   		foreach($yo12 as $ya){
         //pr($ya);
   			$ssum[$ya[0]['Month']]= $ya[0]['WeekSum'];
   			//pr($daa);
   			
   		}
        $this->set('ssum',$ssum);

   		foreach($yo12 as $ya){
         //pr($ya);
   			$exsum[$ya[0]['Month']]= $ya[0]['ExpectedSum'];
   			//pr($daa);
   		}
   		$this->set('exsum',$exsum);
	
}


     public function chart1(){
     		$mf = array('1' =>'January','2' =>'Feburary','3' =>'March','4' =>'April','5' =>'May','6' =>'June','7' =>'July',
		'8' =>'August','9' =>'September','10' =>'October','11' =>'November','12' =>'December');
	$this->set('mf',$mf);
	//pr($mf);

     	$this->loadModel('CustomerAttendance');
   		$yo122=$this->CustomerAttendance->query("UPDATE customer_attendances
set expected = NULL
Where  date_m <= LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY - INTERVAL 12 MONTH
  ") ;

   			$this->loadModel('CustomerAttendance');
   		$yo1223=$this->CustomerAttendance->query("UPDATE customer_attendances
set actual = NULL
Where  date_m <= LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY - INTERVAL 12 MONTH
  ") ;
    
    $this->loadModel('CustomerAttendance');
    $raman=$this->CustomerAttendance->find('all', array(
		///'limit'=>10,
		//'conditions'=>array("CustomerAttendance.id" =>  $list),
		//'fields' => array('sum(CustomerAttendance.customer_count) as total_sum')
		
		 ));

	  $this->set(compact('raman'));
       //pr($raman);

	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
		//pr($day);
		$gettodaycustomers=array(
      	'conditions' => array(
      			array(
      			'OR'=>array(
      			array("{$day}"."_"."am" => 1),
      			array("{$day}"."_"."pm" => 1)
      			)
      			),
      			'Customer.status_code_id' =>  ''), //array of conditions
      	'fields' => array('id'),
      	'recursive' => 0
   		);
   		$expectedccustomers[$i]=$this->Customer->find('count',$gettodaycustomers);
   		$i++;
	}
   		//$expectedcustomers[$i]=array($this->Customer->find('count',$gettodaycustomers));
   		//pr($expectedccustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

       
     $this->loadModel('CustomerAttendance');
   		$yo12=$this->CustomerAttendance->query("SELECT  week(date_m) Week, month(date_m) Month,
   		 year(date_m) Year, avg(actual) WeekAvg,sum(actual) WeekSum ,
   		  sum(expected) ExpectedSum from `customer_attendances` where date_m >= CURDATE() - INTERVAL 4 WEEK group by week(date_m), year(date_m)") ;
    //pr($yo12); 
   		////////////my code///////////////////////
   		foreach($yo12 as $ya){
         //pr($ya);
   			$year[$ya[0]['Week']]= $ya[0]['Year'];
   			//pr($daa);Month
   		}
   		$this->set('year',$year);

   		foreach($yo12 as $ya){
         //pr($ya);
   			$date[$ya[0]['Week']]= $ya[0]['Month'];
   			//pr($daa);Month
   		}
   		$this->set('date',$date);

   		foreach($yo12 as $ya){
         //pr($ya);
   			$wee[$ya[0]['Week']]= $ya[0]['Week'];
   			//pr($wee);
   		}
   		$this->set('wee',$wee);

   		foreach($yo12 as $ya){
         //pr($ya);
   			$avgg[$ya[0]['Week']]= $ya[0]['WeekAvg'];
   			//pr($daa);
   		}
   		$this->set('avgg',$avgg);

   		foreach($yo12 as $ya){
         //pr($ya);
   			$ssum[$ya[0]['Week']]= $ya[0]['WeekSum'];
   			//pr($daa);
   			
   		}
        $this->set('ssum',$ssum);

   		foreach($yo12 as $ya){
         //pr($ya);
   			$exsum[$ya[0]['Week']]= $ya[0]['ExpectedSum'];
   			//pr($daa);
   		}
   		$this->set('exsum',$exsum);



}	
}


