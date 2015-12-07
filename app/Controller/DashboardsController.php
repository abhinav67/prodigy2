<?php
App::uses('AppController', 'Controller');
/**
 * Activities Controller
 *
 * @property Activity $Activity
 * @property PaginatorComponent $Paginator
 */
class DashboardsController extends AppController {


	var $helpers = array('Html', 'Form','Csv','Js'); 

public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index'); 
}

public function isAuthorized($user) {
 

   
    if($user['group_id'] == '2' )
    		{
    		return $this->Auth->allowedActions = array('dashboard_participants','dashboard_attendance','dashboard_activities',
    			'dashboard_settings','dashboard_employee','dashboard_vendors','dashboard_transport','dashboard_others');
    		}


    		if($user['group_id'] == '3' )
    		{
    		return $this->Auth->allowedActions = array('dashboard_participants','dashboard_activities',
    			'dashboard_settings','dashboard_employee','dashboard_vendors','dashboard_transport','dashboard_others');
    		}

    return parent::isAuthorized($user);
}

public function googleRoot($name){

	$this->set('name',$name);
	//pr($_GET['route']);
	$this->loadModel('Route');
	$root = $this->Route->find('list',array('fields'=>array('name','name'),'conditions'=>array('name'=>$name)));
	$this->set('root',$root);
	//pr($root);
	foreach($root as $rt){
		pr($rt);
	}
	$this->set('stateDropAjax',$rt);
			//echo "<pre>"; print_r($stateDrop);


//$this->set(compact('teamlist'));

$this->layout = 'ajax';

}

public function googleroute(){

	
	//pr($_GET['route']);
	$this->loadModel('Route');
	$root = $this->Route->find('first',array('fields'=>array('name','name')));
	$this->set('root',$root);

	$this->loadModel('Route');
	$roote = $this->Route->find('list',array('fields'=>array('name','name')));
	$this->set('roote',$roote);

}

public function billingchart2(){

	$mf = array('1' =>'January','2' =>'Feburary','3' =>'March','4' =>'April','5' =>'May','6' =>'June','7' =>'July',
		'8' =>'August','9' =>'September','10' =>'October','11' =>'November','12' =>'December');
	$this->set('mf',$mf);
	//pr($mf);

  
  $mon = date("M");
   		$this->loadModel('BillingRecord');
   		$yo12=$this->BillingRecord->query("SELECT  month(date_m) Month,
   		 year(date_m) Year, avg(amount_charged) WeekAvg,sum(amount_charged) WeekSum ,sum(expected) ExpectedSum from `billing_records` where YEAR(date_m) = YEAR(NOW()) group by month(date_m), year(date_m)") ;
    //pr($yo12);
            $this->loadModel('BillingRecord');
   		$yo122=$this->BillingRecord->query("UPDATE billing_records
set expected = NULL
Where  date_m <= LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY - INTERVAL 12 MONTH
  ") ;
   // pr($yo122);

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


public function billingchart1(){

		$mf = array('1' =>'January','2' =>'Feburary','3' =>'March','4' =>'April','5' =>'May','6' =>'June','7' =>'July',
		'8' =>'August','9' =>'September','10' =>'October','11' =>'November','12' =>'December');
	$this->set('mf',$mf);
	//pr($mf);
  
  $mon = date("M");
   		$this->loadModel('BillingRecord');
   		$yo12=$this->BillingRecord->query("SELECT  week(date_m) Week, month(date_m) Month,
   		 year(date_m) Year, avg(amount_charged) WeekAvg,sum(amount_charged) WeekSum ,
   		 sum(expected) ExpectedSum from `billing_records` where date_m BETWEEN CURDATE()-INTERVAL 4 WEEK AND CURDATE() group by week(date_m), year(date_m)") ;
    //pr($yo12);

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
   			//pr($daa);
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
	
  
   $this->loadModel('BillingRecord');
	$yo13=$this->BillingRecord->query("Select id,from_date,amount_charged from billing_records where 
	 date_m >= LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY - INTERVAL 1 MONTH
  AND date_m < LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY");
	$this->set('yo13',$yo13);
	//pr($yo13);

	//CURRENT MONTH DATA
	/*$this->loadModel('BillingRecord');
	$yo13=$this->BillingRecord->query("Select id,from_date,amount_charged from billing_records where 
	 date_m >= LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY - INTERVAL 1 MONTH
  AND date_m < LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY");
	$this->set('yo13',$yo13);*/




	$this->loadModel('BillingRecord');
$adi =  array('order'=>array('BillingRecord.date DESC') ,
		'limit'=>5,
		'conditions'=>array("BillingRecord.from_date >" => date('M-d-Y', strtotime("-1 weeks"))
			//,"BillingRecord.to_date >=" => date('M-d-Y', strtotime("-1 weeks"))
			),
		'fields' => array('BillingRecord.id','BillingRecord.from_date' ,'amount_charged'),
		 );
$yo=$this->BillingRecord->find('all',$adi);
$this->set('yo',$yo);
//pr($yo);

$this->loadModel('CustomerAttendance');
	$raman12=$this->CustomerAttendance->query("SELECT *
	FROM customer_attendances 
	
	WHERE year(`date_m`) = year(curdate()) 
	AND  month(`date_m`) = month(curdate()) 
	GROUP BY (`date_m`)
	");
//GROUP BY yearweek(`date_m`)
	$this->set('raman12',$raman12);
	//pr($raman12);

	foreach($raman12 as $r12){
		$ha[$r12['customer_attendances']['id']]= $r12['customer_attendances']['date_m'];
		//pr($ha);
	}

	/*foreach($raman12 as $r12){
		$haa[$r12['customer_attendances']['id']]= $r12['customer_attendances']['id'];
		//pr($ha);
	}

	$this->loadModel('CustomerAttendancesCustomer');
$puja =	$this->CustomerAttendancesCustomer->find('all',array('conditions'=>array('customer_attendance_id'=>$haa),
	'fields'=>array('customer_attendance_id','customer_id')));
$this->set('puja',$puja);
//pr($puja); */


	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all', array('order'=>array('CustomerAttendance.date_m DESC') ,
		///'limit'=>10,
		'conditions'=>array("CustomerAttendance.date_m " => $ha),
		//'fields' => array('CustomerAttendance.id','CustomerAttendance.id' ),
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
      	'fields' => array('id','insurance_id'),
      	'recursive' => 0
   		);
   		$expectedccustomers[$i]=$this->Customer->find('list',$gettodaycustomers);
   		$i++;
	}
   		//$expectedcustomers[$i]=array($this->Customer->find('count',$gettodaycustomers));
   		//pr($expectedccustomers);
   		$this->set('expectedccustomers',$expectedccustomers);
    //pr($expectedccustomers);
   



//$datestamp=date("M-d-Y",strtotime("-1 weeks"));

		$this->loadModel('Charge');
		$mth= array(//'recursive' => 0,
			//'conditions'=>array('Charge.start_date >=' => $datestamp),
			'order' => array('Charge.date DESC'),
			'fields' => array('insurance_id','amount')
		);
		//pr($mth);
		$charge= $this->Charge->find('list',$mth);
		//pr($charge);

		foreach($expectedccustomers as $key => $value){
			//pr($key);
			//pr($value);
			foreach($value as $kh =>$v){
				$fin[$kh] = $charge[$v];
				//pr($fin);
			}
			$summ[$key] = array_sum($fin);
		//pr($summ);
			$this->set('summ',$summ);
		}
////////////my code///////////////////////
		
   		
/*
SELECT id FROM `customer_attendances` GROUP BY DATE(CONCAT(YEAR(date_m),'-', 1 + 3*(QUARTER(date_m)-1),'-01')) ORDER BY DATE(CONCAT(YEAR(date_m),'-', 1 + 3*(QUARTER(date_m)-1),'-01'))


SELECT week(date_m) Week, year(date_m) Year from `customer_attendances` group by week(date_m), year(date_m)

For last Month
Select id from customer_attendances where YEAR(date_m) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
AND MONTH(date_m) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) 

for last 6 months
Select id from customer_attendances where date_m < Now() and date_m > DATE_ADD(Now(), INTERVAL- 6 MONTH); 
average by week

select week(day) Week,
  year(day) Year,
  avg(val) WeekAvg
from yourtable
group by week(day), year(day)

billing weekly average
SELECT (id) Id, week(date) Week, year(date) Year, avg(amount_charged) WeekAvg from `billing_records` group by week(date), year(date)

monthly billing average

select monthname(day) Month, 
  year(day) Year, 
  avg(val) AvgValue
from yourtable
group by monthname(day), year(day)
*/
   



}


public function billingchart(){
    //current week
    $this->loadModel('BillingRecord');
	$yo13=$this->BillingRecord->query("Select id,from_date,amount_charged from billing_records where 
	 date_m >= DATE(NOW()) - INTERVAL 5 DAY");
	$this->set('yo13',$yo13);
	//pr($yo13);

	$this->loadModel('BillingRecord');
   		$yo122=$this->BillingRecord->query("UPDATE billing_records
set expected = NULL
Where  date_m <= LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY - INTERVAL 12 MONTH
  ") ;
///till today from last week///
$this->loadModel('BillingRecord');
$adi =  array('order'=>array('BillingRecord.date DESC') ,
		'limit'=>5,
		'conditions'=>array("from_date >" => date('M-d-Y', strtotime("-1 weeks"))
			//,"BillingRecord.to_date >=" => date('M-d-Y', strtotime("-1 weeks"))
			),
		'fields' => array('BillingRecord.id','BillingRecord.from_date' ,'amount_charged'),
		 );
$yo=$this->BillingRecord->find('all',$adi);
$this->set('yo',$yo);
//pr($yo);

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all', array('order'=>array('CustomerAttendance.date_m DESC') ,
		///'limit'=>10,
		'conditions'=>array("CustomerAttendance.date_m >" => date('Y-m-d', strtotime("-1 weeks"))),
		//'fields' => array('CustomerAttendance.id','CustomerAttendance.id' ),
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
      	'fields' => array('id','insurance_id'),
      	'recursive' => 0
   		);
   		$expectedccustomers[$i]=$this->Customer->find('list',$gettodaycustomers);
   		$i++;
	}
   		//$expectedcustomers[$i]=array($this->Customer->find('count',$gettodaycustomers));
   		//pr($expectedccustomers);
   		$this->set('expectedccustomers',$expectedccustomers);
    //pr($expectedccustomers);
   



//$datestamp=date("M-d-Y",strtotime("-1 weeks"));

		$this->loadModel('Charge');
		$mth= array(//'recursive' => 0,
			//'conditions'=>array('Charge.start_date >=' => $datestamp),
			'order' => array('Charge.date ASC'),
			'fields' => array('insurance_id','amount')
		);
		//pr($mth);
		$charge= $this->Charge->find('list',$mth);
		//pr($charge);

		foreach($expectedccustomers as $key => $value){
			//pr($key);
			//pr($value);
			foreach($value as $kh =>$v){
				$fin[$kh] = $charge[$v];
				//pr($fin);
			}
			$summ[$key] = array_sum($fin);
		//pr($summ);
			$this->set('summ',$summ);
			
			
		}
		

	
////////////my code///////////////////////
   		$this->loadModel('BillingRecord');
   		$yo12=$this->BillingRecord->query("SELECT  week(date) Week, month(date) Month, year(date) Year, avg(amount_charged) WeekAvg from `billing_records` group by week(date), year(date)") ;
//pr($yo12);

   


}


public function chart1(){
$this->loadModel('CustomerAttendance');

 $yo1=$this->CustomerAttendance->query("Select id from customer_attendances where 
	 date_m >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY
AND date_m < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY");

 /*$yo1=$this->CustomerAttendance->query("Select id from customer_attendances where 
	 YEARWEEK(`date_m`, 1) = YEARWEEK(CURDATE(), 1)");
//YEARWEEK(`date`, 1) = YEARWEEK(CURDATE(), 1)
 //Select id from jokes WHERE date > DATE_SUB(NOW(), INTERVAL 1 WEEK) ORDER BY score DESC;
pr($yo1); */
//pr($yo1);

 foreach($yo1 as $key=>$value){

//pr($key);
//pr($value);
 foreach($value as $fa){
 	//pr($fa);

 	$fin[$key]=$fa['id'];
    $fin++;
 	//pr($fin);
 }

 	//pr($yo);
 }
 $this->set(compact('fin'));
 //pr($fin);

$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all', array('order'=>array('CustomerAttendance.date_m DESC') ,
		'limit'=>5,
		'conditions'=>array("CustomerAttendance.shift"=> 'am')
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
      			//array("{$day}"."_"."pm" => 1)
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


   		////////////my code///////////////////////
   		$this->loadModel('CustomerAttendance');
	$raman1=$this->CustomerAttendance->find('all', array('order'=>array('CustomerAttendance.date_m DESC') ,
		'limit'=>5,
		'conditions'=>array("CustomerAttendance.shift"=> 'pm')
		));

	$this->set(compact('raman1'));
	//pr($raman);

	$expectedccustomers1=array();
	$n=0;
	foreach ($raman1	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
		//pr($day);
		$gettodaycustomers1=array(
      	'conditions' => array(
      			array(
      			'OR'=>array(
      			array("{$day}"."_"."pm" => 1),
      			//array("{$day}"."_"."pm" => 1)
      			)
      			),
      			'Customer.status_code_id' =>  ''), //array of conditions
      	'fields' => array('id'),
      	'recursive' => 0
   		);
   		$expectedccustomers1[$n]=$this->Customer->find('count',$gettodaycustomers1);
   		$n++;
	}
   		//$expectedcustomers[$i]=array($this->Customer->find('count',$gettodaycustomers));
   		//pr($expectedccustomers);
   		$this->set('expectedccustomers1',$expectedccustomers1);

   }

public function index() {

	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$this->set(compact('abi'));
	$this->set('inst',$this->Insurance->find('count'));


			$yymmdd=date("mdY");
			//pr($yymmdd);
		$NewDate=Date('mdY', strtotime("+60 days"));
		$plusDate=Date('mdY', strtotime("+30 days"));
		$OldDate=Date('mdY', strtotime("-30 days"));

			$yymmdd=date("dmY");
			//pr($yymmdd);
		$NewDate=Date('dmY', strtotime("+60 days"));
		$plusDate=Date('dmY', strtotime("+30 days"));
		$OldDate=Date('dmY', strtotime("-30 days"));

	    //my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////



	$this->loadModel('Todo');
	$sur = $this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >=  $ymd,   //billing from date
			   	  'Todo.date' <=  $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4));
	$this->set('sur',$sur);
	//pr($sur);


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >= $ymd,   //billing from date
			   	  'Event.event_date' <= $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <=  $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >= $olddate,   //billing from date
			   	  'Customer.auth_expiry' <= $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}


public function dashboard_participants(){
	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$this->set(compact('abi'));
	$this->set('inst',$this->Insurance->find('count'));

			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));


		//my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >= $ymd,   //billing from date
			   	  'Todo.date' <= $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >=  $ymd,   //billing from date
			   	  'Event.event_date' <=  $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <=  $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >=  $olddate,   //billing from date
			   	  'Customer.auth_expiry' <=  $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}

public function dashboard_activities(){
	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$this->set(compact('abi'));
	$this->set('inst',$this->Insurance->find('count'));

			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));

		//my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >=  $ymd,   //billing from date
			   	 // 'Todo.date' <=  $newate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Activity');
	$activities=$this->Activity->find('all');
	$this->loadModel('ActivityType');
	$at=$this->ActivityType->find('list');

	for ($a=0; count($activities)> $a; $a++){

$rows[]= '{"id":'.$activities[$a]['Activity']['id'].', "title":"'.$at[$activities[$a]['Activity']['activity_type_id1']].'", "start":"'.$activities[$a]['Activity']['date']."T".$activities[$a]['Activity']['time'].'"}';
$rows1[]= '{"id":'.$activities[$a]['Activity']['id'].', "title":"'.$at[$activities[$a]['Activity']['activity_type_id2']].'", "start":"'.$activities[$a]['Activity']['date']."T".$activities[$a]['Activity']['time1'].'"}';
}

// convert the array to a string.
if ($rows){
$convertojson = implode(",", $rows).",".implode(",",$rows1);
}

// pass the string to the json variable. this will then be passed  and printed to the javascript code.
$this->set('json',"[".$convertojson."]"); 


	

	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >=  $ymd,   //billing from date
			   	  'Event.event_date' <=  $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <=  $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >=  $olddate,   //billing from date
			   	  'Customer.auth_expiry' <=  $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}

public function dashboard_daytrack(){
	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$itypes=$this->Insurance->find('list');
	$this->set(compact('abi','itypes'));
	//pr($itypes);
	$this->set('inst',$this->Insurance->find('count'));

			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));


		//my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >=  $ymd,   //billing from date
			   	  'Todo.date' <=  $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >=  $ymd,   //billing from date
			   	  'Event.event_date' <=  $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <=  $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >=  $olddate,   //billing from date
			   	  'Customer.auth_expiry' <= $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}

public function dashboard_daytrack1(){
	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	
	$this->set(compact('abi'));
	$this->set('inst',$this->Insurance->find('count'));

			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));

		//my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >=  $ymd,   //billing from date
			   	  'Todo.date' <=  $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >=  $ymd,   //billing from date
			   	  'Event.event_date' <=  $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <=  $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >=  $olddate,   //billing from date
			   	  'Customer.auth_expiry' <=  $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}
	
		public function dashboard_daytrack2(){
	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$itypes=$this->Insurance->find('list');
	$this->set(compact('abi','itypes'));
	//pr($itypes);
	$this->set('inst',$this->Insurance->find('count'));

			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));

		//my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >=  $ymd,   //billing from date
			   	  'Todo.date' <=  $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >= $ymd,   //billing from date
			   	  'Event.event_date' <=  $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <=  $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >=  $olddate,   //billing from date
			   	  'Customer.auth_expiry' <=  $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}


public function print_participants(){
	if(!isset($_GET['datedaytrack']) && !isset($_GET['insure']) && !isset($_GET['shift']))
		{
			return $this->redirect(array('action' => 'dashboard_daytrack'));
		}
		else
		{
			$date=$_GET['datedaytrack'];
			$insure=$_GET['insure'];
			$shift=$_GET['shift'];
			//$days=$_GET['days'];
		}

	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman','date','insure','shift'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);
   		$dt = strtotime($date);

		$day = date("l", $dt);

		$sh  = array("am","pm");
		$key     = array_search($shift,$sh);
		$shiftclean = $sh[$key]; //if not, first one will be set automatically. smart enuf :)
		
	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$itypes=$this->Insurance->find('list');
	$ins_id=$this->Insurance->find('first',array('conditions'=>array('Insurance.name'=>"$insure"),'fields'=>'Insurance.id','recursive'=>0));

	$get_itypes=array(
		'conditions'=> array('AND'=>array(
									array('Customer.insurance_id'=>$ins_id['Insurance']['id']),
									array("{$day}"."_"."{$shiftclean}" => 1,'Customer.status_code_id' =>  '')
									)),
		'recursive'=>0
		);
	$selected_part=$this->Customer->find('list',$get_itypes);
	//pr($selected_part);
	$customers=$this->Customer->find('list');
	$this->set(compact('abi','itypes','customers','selected_part'));

    
    
	$this->set('inst',$this->Insurance->find('count'));
	
			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));

		//my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >= $ymd,   //billing from date
			   	  'Todo.date' <=  $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >= $ymd,   //billing from date
			   	  'Event.event_date' <= $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <=  $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >=  $olddate,   //billing from date
			   	  'Customer.auth_expiry' <=  $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}


	public function download()
{
    $this->set('customers', $this->Customer->find('all',array('fields'=>array('first_name'))));
    
    $this->layout = null;
   $this->autoLayout = false;
  Configure::write('debug', '0');
}


public function dashboard_transport(){
	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$this->set(compact('abi'));
	$this->set('inst',$this->Insurance->find('count'));

			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));
	 //my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >=  $ymd,   //billing from date
			   	  'Todo.date' <=  $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >=  $ymd,   //billing from date
			   	  'Event.event_date' <=  $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <=  $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >= $olddate,   //billing from date
			   	  'Customer.auth_expiry' <= $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}

public function dashboard_others(){
	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$this->set(compact('abi'));
	$this->set('inst',$this->Insurance->find('count'));

			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));

		//my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >=  $ymd,   //billing from date
			   	  'Todo.date' <=  $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >=  $ymd,   //billing from date
			   	  'Event.event_date' <=  $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <=  $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >= $olddate,   //billing from date
			   	  'Customer.auth_expiry' <= $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}



	public function dashboard_settings(){
	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$this->set(compact('abi'));
	$this->set('inst',$this->Insurance->find('count'));

			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));

		//my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >= $ymd,   //billing from date
			   	  'Todo.date' <=  $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >=  $ymd,   //billing from date
			   	  'Event.event_date' <=  $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <=  $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >=  $olddate,   //billing from date
			   	  'Customer.auth_expiry' <=  $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}


	public function dashboard_employee(){
	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$this->set(compact('abi'));
	$this->set('inst',$this->Insurance->find('count'));

			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));

		//my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >=  $ymd,   //billing from date
			   	  'Todo.date' <=  $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >= $ymd,   //billing from date
			   	  'Event.event_date' <= $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >= $ymd,   //billing from date
			   	  'Customer.auth_expiry' <= $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >= $olddate,   //billing from date
			   	  'Customer.auth_expiry' <= $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}


public function dashboard_vendors(){
	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$this->set(compact('abi'));
	$this->set('inst',$this->Insurance->find('count'));

			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));


		//my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >=  $ymd,   //billing from date
			   	  'Todo.date' <=  $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >=  $ymd,   //billing from date
			   	  'Event.event_date' <= $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <= $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >=  $olddate,   //billing from date
			   	  'Customer.auth_expiry' <=  $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}


	public function dashboard_attendance(){
	$wr=$this->webroot;
	$this->set(compact('wr'));

	$this->loadModel('BillingRecord');
	$lastBill=$this->BillingRecord->find('first',array( 'order' => array('date DESC')));
	$this->set(compact('lastBill'));
	

	$this->loadModel('CustomerAttendance');
	$raman=$this->CustomerAttendance->find('all',array( 'order' => array('date DESC'),'limit'=>7));
	$this->set(compact('raman'));
	
	$expectedccustomers=array();
	$i=0;
	foreach ($raman	 as $ram ) {
		$this->loadModel('Customer');
		$day= date("l",strtotime($ram['CustomerAttendance']['date']));
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
   		//pr($expectedcustomers);
   		$this->set('expectedccustomers',$expectedccustomers);

	$this->loadModel('Insurance');
	$abi=$this->Insurance->find('all',array());
	$this->set(compact('abi'));
	$this->set('inst',$this->Insurance->find('count'));

			$yymmdd=date("dmy");
		$NewDate=Date('dmy', strtotime("+60 days"));
		$plusDate=Date('dmy', strtotime("+30 days"));
		$OldDate=Date('dmy', strtotime("-30 days"));


		//my code////////////////////////
  // $new = str_replace(".", ":", $NewDate);
   //pr($NewDate);
   $y =  substr_replace($yymmdd, "-", 2, 0);
   $ymd =  substr_replace($y, "-", 5, 0);
   //pr($ymd);

   $n =  substr_replace($NewDate, "-", 2, 0);
   $newdate =  substr_replace($n, "-", 5, 0);
   //pr($newdate);
   $p =  substr_replace($plusDate, "-", 2, 0);
   $plusdate =  substr_replace($p, "-", 5, 0);
   //pr($plusdate);
     $o =  substr_replace($OldDate, "-", 2, 0);
   $olddate =  substr_replace($o, "-", 5, 0);
   //pr($olddate);
   //pr($nn);
    //$newstrr = substr_replace($new, ".", 1, 0);
   // $newstr = floatval($new);



	    ///my code/////////////////////////////////////////
	
	$this->loadModel('Todo');
	$this->set('sur',$this->Todo->find('all',array(
'conditions' => 
			array('Todo.date' >=  $ymd,   //billing from date
			   	  'Todo.date' <=  $newdate		//billing till date
				),
		'order'=>array('date ASC'),'limit'=>4)));


	$this->loadModel('Customer');
	$this->set('cnt',$this->Customer->find('count'));
	$this->set('mcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"M"))));
	$this->set('fcount',$this->Customer->find('count',array('conditions'=>array("client_sex"=>"F"))));
	
	
	$this->loadModel('CustomerEthnicity');
	$eths=$this->CustomerEthnicity->find('all',array());
	$this->set(compact('eths'));

	$this->loadModel('Physician');
	$phys=$this->Physician->find('all',array());
	$this->set(compact('phys'));


	$this->loadModel('Event');
	$this->set('evt',$this->Event->find('all'));
	$this->set('evt1',$this->Event->find('all',array( 'conditions' => 
			array('Event.event_date' >=  $ymd,   //billing from date
			   	  'Event.event_date' <=  $newdate   //billing till date
				),'order'=>array('Event.event_date ASC'),
			'order'=>array('Event.event_date ASC'),'limit'=>4)));

	$this->set('bday',$this->Customer->find('all',array('conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))) ,
			'limit' => 4,'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 'fields'=>array('birthday','first_name','last_name'),'recursive'=>0 )));

	$this->set('autho',$this->Customer->find('all',
		array( 'conditions' => 
			array('Customer.auth_expiry' >=  $ymd,   //billing from date
			   	  'Customer.auth_expiry' <=  $newdate		//billing till date
				),'order'=>array('Customer.auth_expiry ASC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
	
$this->set('lautho',$this->Customer->find('all',array(
 'conditions' => 
			array('Customer.auth_expiry' >=  $olddate,   //billing from date
			   	  'Customer.auth_expiry' <=  $ymd		//billing till date
				),'order'=>array('Customer.auth_expiry DESC'),
			'limit' => 4, 'fields'=>array('auth_expiry','precertref','first_name','last_name','raman'),'recursive'=>0 )));
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


	}


public function graphr ()
	{
$this->loadModel('Customer');


$this->set('ageM',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"),'conditions'=>array('Customer.client_sex'=>'M'))));

$this->set('ageF',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"),'conditions'=>array('Customer.client_sex'=>'F'))));

	}

	public function agereports ()
	{
			$wr=$this->webroot;
	$this->set(compact('wr'));

$this->loadModel('Customer');
$this->set('age',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"))));


$this->set('ageM',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"),'conditions'=>array('Customer.client_sex'=>'M'))));

$this->set('ageF',$this->Customer->find('list',array("recursive"=>0,'fields'=>array("Customer.first_name","Customer.age"),'conditions'=>array('Customer.client_sex'=>'F'))));

	}
	
	public function participant_enrollment() {


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
	
}
	public function activities(){

	}
	public function employees(){

	}
	
	public function routes(){
		$this->loadModel('routes');
		$from=$this->routes->find('all',array());
		$this->set('from',$from);
		//pr($from);
		$this->loadModel('Employee');
		$employes = $this->Employee->find('list');
		$this->set(compact('employes'));
	}


}
