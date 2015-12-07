<?php
App::uses('AppController', 'Controller');
/**
 * BasketballPoints Controller
 *
 * @property BasketballPoint $BasketballPoint
 * @property PaginatorComponent $Paginator
 */
class VolleyballPointsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $helpers = array('Js');

/**
 * index method
 *
 * @return void
 */

public function volly2($id) {

		$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$team1=array(
	  'conditions' => array('VolleyballTeam.user_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballTeam.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('user_id','user_id'),
	  );
	 $this->loadModel('VolleyballTeam');
    
    $shan = $this->VolleyballTeam->find('list',$team1);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('CollegeProfile');
$arr = array('conditions'=> array('CollegeProfile.user_id'=>$shan),'fields'=>array('user_id','teamname'));
$xy = $this->CollegeProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['CollegeProfile']['user_id']]= $sy['CollegeProfile']['teamname'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);


//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function volly1($id) {

		$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$team1=array(
	  'conditions' => array('VolleyballTeam.user_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballTeam.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('user_id','user_id'),
	  );
	 $this->loadModel('VolleyballTeam');
    
    $shan = $this->VolleyballTeam->find('list',$team1);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('CollegeProfile');
$arr = array('conditions'=> array('CollegeProfile.user_id'=>$shan),'fields'=>array('user_id','teamname'));
$xy = $this->CollegeProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['CollegeProfile']['user_id']]= $sy['CollegeProfile']['teamname'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);


//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}
public function getName($id) {

		$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);


//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}


public function getName1($id) {

				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);


//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName2($id) {

				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName3($id) {

				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);


//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName4($id) {

				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);
//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName5($id) {

				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);


//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName6($id) {

			$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

$this->layout = 'ajax';
}

public function getName7($id) {

		$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);
//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName8($id) {

		$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

$this->layout = 'ajax';
}

public function getName9($id) {

		$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);
$this->layout = 'ajax';
}

public function getName10($id) {

		$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

$this->layout = 'ajax';
}

public function getName11($id) {

		$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

$this->layout = 'ajax';
}

//////////////////////////////////////////////////////////////////////////////////////////
public function getName12($id) {


				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));
$this->layout = 'ajax';
}


public function getName13($id) {

				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName14($id) {


				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName15($id) {


				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName16($id) {


				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName17($id) {


				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName18($id) {


				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName19($id) {

		
				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName20($id) {


				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName21($id) {

		
				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName22($id) {

		
				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}

public function getName23($id) {

	
				$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $id ),
	//'order' => array('Match.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
	//pr ($adios);

	$student1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballStudent.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('name','name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$stu1=$this->VolleyballStudent->find('list', $student1);
//pr ($stu1);
$adiarray73=array( 'conditions' => array('StudentProfile.id' => $stu1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	//pr ($stu);
	$this->loadModel('StudentProfile');
$arr = array('conditions'=> array('StudentProfile.id'=>$stu1),'fields'=>array('id','name'));
$xy = $this->StudentProfile->find('all',$arr);
$this->set('xy',$xy);

 foreach($xy as $sy){
 $stu[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
	//pr ($stu);

	


	$this->set('stateDropAjax',$stu);		//echo "<pre>"; print_r($stateDrop);

//$this->set(compact('teamlist'));

$this->layout = 'ajax';
}



	public function index() {
		$this->VolleyballPoint->recursive = 0;
		//$this->set('boxingResults', $this->Paginator->paginate());
		$this->set('volleyballPoints', ClassRegistry::init('VolleyballPoint')->showmy(), $this->Paginator->paginate());

				$this->loadModel('StudentProfile');
		$get= $this->StudentProfile->find('list');
		$this->set('get',$get);

		$this->loadModel('CollegeProfile');
		$gett= $this->CollegeProfile->find('list',array('fields'=>array('user_id','teamname')));
		$this->set('gett',$gett);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VolleyballPoint->exists($id)) {
			throw new NotFoundException(__('Invalid volleyball point'));
		}
		$options = array('conditions' => array('VolleyballPoint.' . $this->VolleyballPoint->primaryKey => $id));
		$this->set('volleyballPoint', $this->VolleyballPoint->find('first', $options));
$this->loadModel('StudentProfile');
		$get= $this->StudentProfile->find('list');
		$this->set('get',$get);

		$this->loadModel('CollegeProfile');
		$gett= $this->CollegeProfile->find('list',array('fields'=>array('user_id','teamname')));
		$this->set('gett',$gett);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VolleyballPoint->create();
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.1.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.2.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.3.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.4.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.5.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.6.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.7.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.8.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.9.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.10.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.11.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.12.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.13.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.14.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.15.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.16.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.17.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.18.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.19.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.20.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.21.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.22.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.23.volleyball_match_id', $this->request->data['VolleyballPoint'][0]['volleyball_match_id']);



			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.1.volleyball_team_id', $this->request->data['VolleyballPoint'][0]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.2.volleyball_team_id', $this->request->data['VolleyballPoint'][0]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.3.volleyball_team_id', $this->request->data['VolleyballPoint'][0]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.4.volleyball_team_id', $this->request->data['VolleyballPoint'][0]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.5.volleyball_team_id', $this->request->data['VolleyballPoint'][0]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.6.volleyball_team_id', $this->request->data['VolleyballPoint'][0]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.7.volleyball_team_id', $this->request->data['VolleyballPoint'][0]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.8.volleyball_team_id', $this->request->data['VolleyballPoint'][0]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.9.volleyball_team_id', $this->request->data['VolleyballPoint'][0]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.10.volleyball_team_id', $this->request->data['VolleyballPoint'][0]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.11.volleyball_team_id', $this->request->data['VolleyballPoint'][0]['volleyball_team_id']);
			
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.13.volleyball_team_id', $this->request->data['VolleyballPoint'][12]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.14.volleyball_team_id', $this->request->data['VolleyballPoint'][12]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.15.volleyball_team_id', $this->request->data['VolleyballPoint'][12]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.16.volleyball_team_id', $this->request->data['VolleyballPoint'][12]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.17.volleyball_team_id', $this->request->data['VolleyballPoint'][12]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.18.volleyball_team_id', $this->request->data['VolleyballPoint'][12]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.19.volleyball_team_id', $this->request->data['VolleyballPoint'][12]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.20.volleyball_team_id', $this->request->data['VolleyballPoint'][12]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.21.volleyball_team_id', $this->request->data['VolleyballPoint'][12]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.22.volleyball_team_id', $this->request->data['VolleyballPoint'][12]['volleyball_team_id']);
			$this->request->data = Hash::insert($this->request->data, 'VolleyballPoint.23.volleyball_team_id', $this->request->data['VolleyballPoint'][12]['volleyball_team_id']);
	   
	   $this->loadModel('VolleyballPoint');
       if ($this->VolleyballPoint->find('list',array('conditions' => array( 'VolleyballPoint.volleyball_match_id' => $this->request->data['VolleyballPoint'][0]['volleyball_match_id'])))){
       $this->Session->setFlash(__('Volleyball Point for this Match has already been add, Please edit to make changes'));
       return $this->redirect(array('controller'=>'volleyball_matches', 'action' => 'index2'));
       }

			if ($this->VolleyballPoint->saveAll($this->request->data['VolleyballPoint'])) {
				$this->Session->setFlash(__('The volleyball point has been saved.'), 'default', array('class' => 'alert alert-success'));
				 ($this->data);
				return $this->redirect(array("controller"=>"volleyball_results","action" => "dashboard",$this->request->data['VolleyballPoint'][0]['volleyball_match_id']));
			} else {
				$this->Session->setFlash(__('The volleyball point could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$volleyballMatches = $this->VolleyballPoint->VolleyballMatch->find('list');
		$this->loadModel('VolleyballStudent');
		$volleyballStudents = $this->VolleyballStudent->find('list',array('fields'=>array('name','name')));
		$this->set(compact('volleyballMatches', 'volleyballStudents'));


		$adiarray7=array(
	  //'conditions' => array('FootballResult.match_id' => $m['FootballResult']['match_id'] ),
	'order' => array('VolleyballMatch.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
		$team2=array(
	  'conditions' => array('VolleyballTeam.user_id' => $adios['VolleyballMatch']['team2_name'],
	  	'VolleyballTeam.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('user_id','user_id'),
	  );
	 $this->loadModel('VolleyballTeam');
    
    $shh = $this->VolleyballTeam->find('list',$team2);
	 // pr($shann);
    $this->set('shh',$shh);
	//pr ($stu);
	$this->loadModel('CollegeProfile');
$arrr = array('conditions'=> array('CollegeProfile.user_id'=>$shh),'fields'=>array('user_id','teamname'));
$xyy = $this->CollegeProfile->find('all',$arrr);
$this->set('xyy',$xyy);
//pr($xy);
 foreach($xyy as $sy){
 $stuf[$sy['CollegeProfile']['user_id']]= $sy['CollegeProfile']['teamname'];
    }
$this->set('stuf',$stuf);

	$team1=array(
	  'conditions' => array('VolleyballTeam.user_id' => $adios['VolleyballMatch']['team1_name'],
	  	'VolleyballTeam.gender' => $adios['VolleyballMatch']['gender']),
	//'order' => array('Student.name'),
	  'fields' => array('user_id','user_id'),
	  );
	 $this->loadModel('VolleyballTeam');
    
    $shann = $this->VolleyballTeam->find('list',$team1);
	 // pr($shann);
    $this->set('shann',$shann);
	//pr ($stu);
	$this->loadModel('CollegeProfile');
$arr = array('conditions'=> array('CollegeProfile.user_id'=>$shann),'fields'=>array('user_id','teamname'));
$xy = $this->CollegeProfile->find('all',$arr);
$this->set('xy',$xy);
//pr($xy);
 foreach($xy as $sy){
 $stu[$sy['CollegeProfile']['user_id']]= $sy['CollegeProfile']['teamname'];
    }
$this->set('stu',$stu);
     //pr($adios);
	$l1=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'], 'VolleyballStudent.gender' =>$adios['VolleyballMatch']['gender']),
	//'order' => array('BasketballMatch.id DESC'),
	  'fields' => array('VolleyballStudent.name','VolleyballStudent.name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$list1=$this->VolleyballStudent->find('list', $l1);
	$this->set('list1',$list1);
	//pr ($list1);

	////////////MY CODE/////////
	
	
	$adiarray73=array( 'conditions' => array('StudentProfile.id' => $list1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan = $this->StudentProfile->find('all',$adiarray73);
	  //pr($shan);
    $this->set('shan',$shan);
	
    $i=0;
	foreach($shan as $s1)
	{
		$list1final[$s1['StudentProfile']['id']] = $s1['StudentProfile']['name']."-".$s1['StudentProfile']['id'];
		
	}

     // pr ($list1final);
    //$this->set('list1',$list1);
      $this->set('shan',$shan);
	$this->set('list1final',$list1final);
//pr($list1final);


/////////////MY CODE///////////////////////////


	$l2=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'], 'VolleyballStudent.gender' =>$adios['VolleyballMatch']['gender']),
	//'order' => array('BasketballMatch.id DESC'),
	  'fields' => array('VolleyballStudent.name','VolleyballStudent.name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$list2=$this->VolleyballStudent->find('list', $l2);
	$this->set('list2',$list2);
	//pr ($list2);

	////////////MY CODE/////////
	
	
	$adiarray74=array( 'conditions' => array('StudentProfile.id' => $list2 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan1 = $this->StudentProfile->find('all',$adiarray74);
	  //pr($shan);
    $this->set('shan1',$shan1);
	
    $i=0;
	foreach($shan1 as $s2)
	{
		$list2final[$s2['StudentProfile']['id']] = $s2['StudentProfile']['name']."-".$s2['StudentProfile']['id'];
		
	}

     // pr ($list1final);
    //$this->set('list1',$list1);
      $this->set('shan1',$shan1);
	$this->set('list2final',$list2final);
//pr($list2final);
/////////////MY CODE///////////////////////////
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->VolleyballPoint->exists($id)) {
			throw new NotFoundException(__('Invalid volleyball point'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->VolleyballPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The volleyball point has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index',$this->request->data['VolleyballPoint']['volleyball_match_id']));
			} else {
				$this->Session->setFlash(__('The volleyball point could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('VolleyballPoint.' . $this->VolleyballPoint->primaryKey => $id));
			$this->request->data = $this->VolleyballPoint->find('first', $options);
		}
		$volleyballMatches = $this->VolleyballPoint->VolleyballMatch->find('list');
		
		//$volleyballStudents = $this->VolleyballStudent->find('list',array('fields'=>array('name','name')));
		$this->set(compact('volleyballMatches'));


$mid= $this->VolleyballPoint->find('first',array('conditions'=>array('VolleyballPoint.id'=>$id),'fields'=>array('volleyball_match_id')));
$this->set('mid',$mid);
//pr($mid);
		$adiarray7=array(
	  'conditions' => array('VolleyballMatch.id' => $mid['VolleyballPoint']['volleyball_match_id'] ),
	//'order' => array('BasketballMatch.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);

     //pr($adios);
	$l1=array(
	  'conditions' => array('volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	   'VolleyballStudent.gender' =>$adios['VolleyballMatch']['gender']),
	//'order' => array('BasketballMatch.id DESC'),
	  'fields' => array('VolleyballStudent.name','VolleyballStudent.name'),
	  );
		//pr($l1);
	$this->loadModel('VolleyballStudent');
	$list1=$this->VolleyballStudent->find('list', $l1);
	$this->set('list1',$list1);
	//pr ($list1);

/////////////MY CODE///////////////////////////


	$l2=array(
	  'conditions' => array('VolleyballStudent.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'], 'VolleyballStudent.gender' =>$adios['VolleyballMatch']['gender']),
	//'order' => array('BasketballMatch.id DESC'),
	  'fields' => array('VolleyballStudent.name','VolleyballStudent.name'),
	  );
		
	$this->loadModel('VolleyballStudent');
	$list2=$this->VolleyballStudent->find('list', $l2);
	//pr ($list2);

	////////////MY CODE/////////
	
	$teamlist123 = array_merge($list1, $list2);
	$this->set('teamlist123',$teamlist123);
//pr($teamlist123);
	
	$adiarray74=array( 'conditions' => array('StudentProfile.id' => $teamlist123 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    $shan1 = $this->StudentProfile->find('all',$adiarray74);
	  //pr($shan);
    $this->set('shan1',$shan1);
	
    $i=0;
	foreach($shan1 as $s2)
	{
		$list2final[$s2['StudentProfile']['id']] = $s2['StudentProfile']['name']."-".$s2['StudentProfile']['id'];
		
	}

     // pr ($list1final);
    //$this->set('list1',$list1);
      $this->set('shan1',$shan1);
	$this->set('list2final',$list2final);
//pr($list2final);
/////////////MY CODE///////////////////////////

$l11=array(
	  //'conditions' => array('BasketballPoint.basketball_match_id' => $adios['BasketballMatch']['id']),
	//'order' => array('BasketballMatch.id DESC'),
	  'fields' => ('VolleyballPoint.volleyball_student_id'),
	  );
	$this->loadModel('VolleyballPoint');
	$ru = $this->VolleyballPoint->find('all',$l11);
	$this->set('ru',$ru);
	//pr($ru);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
/*	public function delete($id = null) {
		$this->BasketballPoint->id = $id;
		if (!$this->BasketballPoint->exists()) {
			throw new NotFoundException(__('Invalid basketball point'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BasketballPoint->delete()) {
			$this->Session->setFlash(__('The basketball point has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The basketball point could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	} */
}
