<?php
App::uses('AppController', 'Controller');

/**
 * Customers Controller
 *
 * @property Customer $Customer
 * @property PaginatorComponent $Paginator
 */
class CustomersController extends AppController {

/**
 * Components
 *
 * @var array
 */

	public $components = array('Paginator','Acl');
//public $helpers = array('Js');
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
    	if(in_array($this->action, array('edit', 'delete')))
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
	$this->set('title_for_layout', 'Participants');
		$options=array('first_name','last_name','phone','date_of_birth','city','insurance_policy_number');
		$r=0;
		include 'ramansearch.php';
	}
	public function expiring_auth(){
		$mmddyy=date("Mdy");
		$NewDate=Date('Mdy', strtotime("+60 days"));
		$OldDate=Date('Mdy', strtotime("-30 days"));
		$options=array('first_name','last_name');
		$r=0;
		include 'ramansearch.php';
		$this->Paginator->settings = array(
			'conditions' => 
			array('Customer.auth_expiry' >=  $mmddyy,   //billing from date
			   	  'Customer.auth_expiry' <=  $NewDate		//billing till date
				),
			'order'=>'Customer.auth_expiry ASC',
			'limit' => 20);
		$this->Customer->recursive = 0;
		$this->set('customers', $this->Paginator->paginate());

	}
public function expired_auth(){
$mmddyy=date("Mdy");
		$NewDate=Date('Mdy', strtotime("+60 days"));
		$OldDate=Date('Mdy', strtotime("-30 days"));
		$options=array('first_name','last_name');
		$r=0;
		include 'ramansearch.php';
		$this->Paginator->settings = array(
			'conditions' => 
			array('Customer.auth_expiry' >=  $OldDate,   //billing from date
			   	  'Customer.auth_expiry' <= $mmddyy		//billing till date
				),
			'order'=>'Customer.auth_expiry DESC',
			'limit'=>20);
		$this->Customer->recursive = 0;
		$this->set('customers', $this->Paginator->paginate());

}
	public function status_index() {
		$options=array('first_name','last_name');
	if ($this->request->is('post')) {
	
	//get form data
	$this->set('select', $this->request->data);
	$select=$this->request->data;
	//pr($select);
		$this->Paginator->settings = array(
        'Customer' => array(
        'limit' => 25,
        'conditions' =>array("Customer.{$options[$select['Customer']['field']]} LIKE" => "%".$select['Customer']['search']."%","Customer.status_code_id"=>$select['Customer']['Status code']),
        )
    );
		}
	$this->loadModel("StatusCode");
	$statusCodes=$this->StatusCode->find("list");
		$this->set(compact("options","statusCodes"));
		$this->set('customers',$this->Paginator->paginate('Customer'));
	}
	public function birthday() {

	$this->Paginator->settings = array(
        'Customer' => array(
            'limit' => 20,
           'conditions' =>array("OR"=>array(array('MONTH(Customer.date_of_birth)' => date('m')),array('MONTH(Customer.date_of_birth)' => date('m', strtotime('+30 days'))))),
           'order'=>'DAYOFYEAR(Customer.date_of_birth) ASC', 
        
        )
    );
	
		$this->set('customers',$this->Paginator->paginate('Customer'));
	}

	public function download()
{
    $this->set('customers', $this->Customer->find('all',array('fields'=>array('id','first_name','last_name','client_sex','phone','date_of_birth','address','city','zip_code'))));
    
    $this->layout = null;
   $this->autoLayout = false;
  Configure::write('debug', '0');
}

	public function downloadv($id=null)
{	
		$this->set('customers', $this->Customer->find('first',array('conditions' => array('Customer.id' => $id),'fields'=>array('id','admission_date','application_date','first_name','last_name'))));
   
    $this->layout = null;
   $this->autoLayout = false;
  Configure::write('debug', '0');
}



	public function status_edit($id = null) {
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'status_index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
			$this->request->data = $this->Customer->find('first', $options);
		}
		$states = $this->Customer->State->find('list');
		
		$customerEthnicities = $this->Customer->CustomerEthnicity->find('list');
		$primaryDiets = $this->Customer->PrimaryDiet->find('list');
		
		$insurances = $this->Customer->Insurance->find('list');
		$statusCodes = $this->Customer->StatusCode->find('list');
		$customerAttendances = $this->Customer->CustomerAttendance->find('list');
		$icd10Codes = $this->Customer->Icd10Code->find('list');
		$icd9Codes = $this->Customer->Icd9Code->find('list');
		$this->set(compact('states', 'customerEthnicities', 'primaryDiets','insurances', 'statusCodes', 'customerAttendances', 'icd10Codes', 'icd9Codes'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'Participants');
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
		$this->set('customer', $this->Customer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Add New Participants');
		if ($this->request->is('post')) {
			$this->Customer->create();
			 $yymmdd=date("Ymd");
			$y =  substr($yymmdd, 0, 4);
			//pr($y);
            $dob= $this->request->data['Customer']['date_of_birth'];
            //pr($dob);
            $d =  substr($dob,-4 );
			$age = $y - $d;
            //pr($age);
			if ($this->Customer->save($this->request->data)) {
				if($age<60)
				{
				$this->Session->setFlash(__('The customer has been saved ,but  customer age is less than 60. '), 'default', array('class' => 'alert alert-success'));

				return $this->redirect(array('action' => 'index' ));
				}
				if($age >=60){
				$this->Session->setFlash(__('The customer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} 
				
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} 
		$states = $this->Customer->State->find('list');
		$cities = $this->Customer->City->find('list');
		
		$customerEthnicities = $this->Customer->CustomerEthnicity->find('list');
		$primaryDiets = $this->Customer->PrimaryDiet->find('list');
		
		$insurances = $this->Customer->Insurance->find('list');
		$physicians = $this->Customer->Physician->find('list');
		$religions = $this->Customer->Religion->find('list');
		$locationCountry = $this->Customer->LocationCountry->find('list',array('conditions'=>array('location_type'=>'0')));
		
		$statusCodes = $this->Customer->StatusCode->find('list');
		$customerAttendances = $this->Customer->CustomerAttendance->find('list');
		$icd10Codes = $this->Customer->Icd10Code->find('list');
		$icd9Codes = $this->Customer->Icd9Code->find('list');
		$this->set(compact('physicians','religions','locationCountry','locationState','states','cities', 'customerEthnicities', 'primaryDiets','insurances', 'statusCodes', 'customerAttendances', 'icd10Codes', 'icd9Codes'));
	}

public function get_state() {

$locationCountry = $this->request->data['Customer']['birth_country'];
 
$locationState = $this->Customer->LocationState->find('list', array(
'conditions' => array('parent_id' => $locationCountry),

));
 
$this->set('locationState',$locationState);
$this->layout = 'ajax';
}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
		$customer=$this->Customer->find('first', $options);
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
		     $yymmdd=date("Ymd");
			$y =  substr($yymmdd, 0, 4);
			//pr($y);
            $dob= $this->request->data['Customer']['date_of_birth'];
            //pr($dob);
            $d =  substr($dob,-4 );
			$age = $y - $d;
            //pr($age);
			if ($this->Customer->save($this->request->data)) {
				if($age<60)
				{
				$this->Session->setFlash(__('The customer has been saved ,but  customer age is less than 60. '), 'default', array('class' => 'alert alert-success'));

				return $this->redirect(array('action' => 'index' ));
				}
				if($age >=60){
				$this->Session->setFlash(__('The customer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} 
				
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
						$this->request->data = $this->Customer->find('first', $options);
			
				}
		$states = $this->Customer->State->find('list');
		$cities = $this->Customer->City->find('list');
		
		$customerEthnicities = $this->Customer->CustomerEthnicity->find('list');
		$primaryDiets = $this->Customer->PrimaryDiet->find('list');
		
		$insurances = $this->Customer->Insurance->find('list');
		$physicians = $this->Customer->Physician->find('list');
		$religions = $this->Customer->Religion->find('list');
		$locationCountry = $this->Customer->LocationCountry->find('list',array('conditions'=>array('location_type'=>'0')));
		$locationState = $this->Customer->LocationState->find('list',array('conditions'=>array('parent_id'=>$customer['LocationCountry']['id'])));
		
		$statusCodes = $this->Customer->StatusCode->find('list');
		$customerAttendances = $this->Customer->CustomerAttendance->find('list');
		$icd10Codes = $this->Customer->Icd10Code->find('list');
		$icd9Codes = $this->Customer->Icd9Code->find('list');
		$this->set(compact('physicians','customer','religions','locationCountry','locationState','states','cities', 'customerEthnicities', 'primaryDiets','insurances', 'statusCodes', 'customerAttendances', 'icd10Codes', 'icd9Codes'));
	}
	
	
		public function editm($id = null) {
				$this->set('title_for_layout', 'Clone New Participants');
		$options1 = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id),'fields'=>array('mi','client_sex','phone','home_phone','physician_id','admission_date','religion_id','address','address2','city','state_id','zip_code','birth_country','birth_state','medicare_number','medicaid_number','insurance_id','monday_am','monday_pm','tuesday_am','tuesday_pm','wednesday_am','wednesday_pm','thursday_am','thursday_pm','friday_am','friday_pm','saturday_am','saturday_pm','sunday_am','sunday_pm','ec1_name','ec1_relationship','ec1_address','ec1_phone','ec2_name','ec2_relationship','ec2_address','ec2_phone','photograph','education','primary_diet_id','email','allergies','alcohol_allowed','photos_allowed','planned_short_stay','veteran','falls_risk','mobility','trips_allowed','fax_number','occupation','customer_ethnicity_id','income','application_date','notes'));
		$this->request->data = $this->Customer->find('first', $options1);

		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Customer']['id'] = 'MAX($id+1)';
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
						$customer=$this->Customer->find('first', $options);
			
				}
		$states = $this->Customer->State->find('list');
		
		$customerEthnicities = $this->Customer->CustomerEthnicity->find('list');
		$primaryDiets = $this->Customer->PrimaryDiet->find('list');
		
		$insurances = $this->Customer->Insurance->find('list');
		$physicians = $this->Customer->Physician->find('list');
		$religions = $this->Customer->Religion->find('list');
		$locationCountry = $this->Customer->LocationCountry->find('list',array('conditions'=>array('location_type'=>'0')));
		$locationState = $this->Customer->LocationState->find('list',array('conditions'=>array('parent_id'=>$customer['LocationCountry']['id'])));
		
		$statusCodes = $this->Customer->StatusCode->find('list');
		$customerAttendances = $this->Customer->CustomerAttendance->find('list');
		$icd10Codes = $this->Customer->Icd10Code->find('list');
		$icd9Codes = $this->Customer->Icd9Code->find('list');
		$this->set(compact('physicians','customer','religions','locationCountry','locationState','states', 'customerEthnicities', 'primaryDiets','insurances', 'statusCodes', 'customerAttendances', 'icd10Codes', 'icd9Codes'));
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
/*	public function delete($id = null) {
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Customer->delete()) {
			$this->Session->setFlash(__('The customer has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The customer could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	} */
}