<?php
App::uses('AppController', 'Controller');
/**
 * VolleyballResults Controller
 *
 * @property VolleyballResult $VolleyballResult
 * @property PaginatorComponent $Paginator
 */
class VolleyballResultsController extends AppController {

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

public function dashboard($matchid){

	$one = array('conditions'=>array('VolleyballResult.volleyball_match_id'=>$matchid));
	$this->loadModel('VolleyballResult');
	$adios= $this->VolleyballResult->find('all',$one);
	$this->set('adios',$adios);
	//pr($adios);

	$two = array('conditions'=>array('VolleyballMatch.id'=>$matchid));
	$this->loadModel('VolleyballMatch');
	$adios1= $this->VolleyballMatch->find('first',$two);
	$this->set('adios1',$adios1);

	$adiarray72=array(
	  'conditions' => array('VolleyballResult.volleyball_match_id' => $matchid ),
	//'order' => array('BasketballMatch.id DESC'),
	 'fields' => array('VolleyballResult.volleyball_team_id','VolleyballResult.volleyball_team_id'),
	  );
		
	$this->loadModel('VolleyballResult');
	$adios2=$this->VolleyballResult->find('list', $adiarray72);
	$this->set('adios2',$adios2);
	//pr($adios1);
  
	////////Team Name//////////////////////////////
	$name =array('conditions'=>array('CollegeProfile.user_id' =>$adios2),
		'fields'=>array('user_id','teamname'));

    $this->loadModel('CollegeProfile');
	$team=$this->CollegeProfile->find('list', $name);
	$this->set('team',$team);
	//pr($team);

	$naam =array('conditions'=>array('CollegeProfile.user_id' =>$adios2),
		'fields'=>array('user_id','image')
		);

    $this->loadModel('CollegeProfile');
	$teama=$this->CollegeProfile->find('list', $naam);
	$this->set('teama',$teama);
	//pr($teama[$adios[0]['VolleyballResult']['volleyball_team_id']]);
	//pr($teama);
	//////////////////////////////////////////////////////////////////////////////////////////
$resultcount=array(
	  'conditions' => array('VolleyballResult.volleyball_match_id' =>$matchid ),
	  );


	$rcount=$this->VolleyballResult->find('count', $resultcount);
	$this->set('rcount',$rcount);

	 if($rcount=="2")
	 {
	$yo1=array(

	 'conditions' => array( 'VolleyballResult.volleyball_match_id' => $matchid),
	  "recursive"=>1
	);

		$getallres=$this->VolleyballResult->find('all', $yo1);

		if($getallres[0]['VolleyballResult']['set1_score'] > $getallres[1]['VolleyballResult']['set1_score'] && $getallres[0]['VolleyballResult']['set2_score'] > $getallres[1]['VolleyballResult']['set2_score'] && $getallres[0]['VolleyballResult']['set3_score'] > $getallres[1]['VolleyballResult']['set3_score'])
		   {
		$adi = array("VolleyballScore" => array(
		"id" => $getallres[0]['VolleyballResult']['volleyball_match_id'],
		"team1_name"	=> $getallres[0]['VolleyballResult']['volleyball_team_id'],
		"team2_name"	=> $getallres[1]['VolleyballResult']['volleyball_team_id'],
		"team1_score" => "3",
		"team2_score" => "0",
		)); 
	}
	else if($getallres[0]['VolleyballResult']['set1_score'] < $getallres[1]['VolleyballResult']['set1_score'] && $getallres[0]['VolleyballResult']['set2_score'] < $getallres[1]['VolleyballResult']['set2_score'] && $getallres[0]['VolleyballResult']['set3_score'] < $getallres[1]['VolleyballResult']['set3_score'])
	{
		$adi = array("VolleyballScore" => array(
		"id" => $getallres[0]['VolleyballResult']['volleyball_match_id'],
		"team1_name"	=> $getallres[0]['VolleyballResult']['volleyball_team_id'],
		"team2_name"	=> $getallres[1]['VolleyballResult']['volleyball_team_id'],
		"team1_score" => "0",
		"team2_score" => "3",
		)); 
	}

	else if($getallres[0]['VolleyballResult']['set1_score'] > $getallres[1]['VolleyballResult']['set1_score'] && $getallres[0]['VolleyballResult']['set2_score'] < $getallres[1]['VolleyballResult']['set2_score'] && $getallres[0]['VolleyballResult']['set3_score'] < $getallres[1]['VolleyballResult']['set3_score'])
	{
		$adi = array("VolleyballScore" => array(
		"id" => $getallres[0]['VolleyballResult']['volleyball_match_id'],
		"team1_name"	=> $getallres[0]['VolleyballResult']['volleyball_team_id'],
		"team2_name"	=> $getallres[1]['VolleyballResult']['volleyball_team_id'],
		"team1_score" => "1",
		"team2_score" => "2",
		)); 
	}

	else if($getallres[0]['VolleyballResult']['set1_score'] > $getallres[1]['VolleyballResult']['set1_score'] && $getallres[0]['VolleyballResult']['set2_score'] > $getallres[1]['VolleyballResult']['set2_score'] && $getallres[0]['VolleyballResult']['set3_score'] < $getallres[1]['VolleyballResult']['set3_score'])
	{
		$adi = array("VolleyballScore" => array(
		"id" => $getallres[0]['VolleyballResult']['volleyball_match_id'],
		"team1_name"	=> $getallres[0]['VolleyballResult']['volleyball_team_id'],
		"team2_name"	=> $getallres[1]['VolleyballResult']['volleyball_team_id'],
		"team1_score" => "2",
		"team2_score" => "1",
		)); 
	}

	else if($getallres[0]['VolleyballResult']['set1_score'] < $getallres[1]['VolleyballResult']['set1_score'] && $getallres[0]['VolleyballResult']['set2_score'] > $getallres[1]['VolleyballResult']['set2_score'] && $getallres[0]['VolleyballResult']['set3_score'] > $getallres[1]['VolleyballResult']['set3_score'])
	{
		$adi = array("VolleyballScore" => array(
		"id" => $getallres[0]['VolleyballResult']['volleyball_match_id'],
		"team1_name"	=> $getallres[0]['VolleyballResult']['volleyball_team_id'],
		"team2_name"	=> $getallres[1]['VolleyballResult']['volleyball_team_id'],
		"team1_score" => "2",
		"team2_score" => "1",
		)); 
	}

	else if($getallres[0]['VolleyballResult']['set1_score'] > $getallres[1]['VolleyballResult']['set1_score'] && $getallres[0]['VolleyballResult']['set2_score'] < $getallres[1]['VolleyballResult']['set2_score'] && $getallres[0]['VolleyballResult']['set3_score'] > $getallres[1]['VolleyballResult']['set3_score'])
	{
		$adi = array("VolleyballScore" => array(
		"id" => $getallres[0]['VolleyballResult']['volleyball_match_id'],
		"team1_name"	=> $getallres[0]['VolleyballResult']['volleyball_team_id'],
		"team2_name"	=> $getallres[1]['VolleyballResult']['volleyball_team_id'],
		"team1_score" => "2",
		"team2_score" => "1",
		)); 
	}

	else if($getallres[0]['VolleyballResult']['set1_score'] < $getallres[1]['VolleyballResult']['set1_score'] && $getallres[0]['VolleyballResult']['set2_score'] < $getallres[1]['VolleyballResult']['set2_score'] && $getallres[0]['VolleyballResult']['set3_score'] > $getallres[1]['VolleyballResult']['set3_score'])
	{
		$adi = array("VolleyballScore" => array(
		"id" => $getallres[0]['VolleyballResult']['volleyball_match_id'],
		"team1_name"	=> $getallres[0]['VolleyballResult']['volleyball_team_id'],
		"team2_name"	=> $getallres[1]['VolleyballResult']['volleyball_team_id'],
		"team1_score" => "1",
		"team2_score" => "2",
		)); 
	}
	else if($getallres[0]['VolleyballResult']['set1_score'] < $getallres[1]['VolleyballResult']['set1_score'] && $getallres[0]['VolleyballResult']['set2_score'] > $getallres[1]['VolleyballResult']['set2_score'] && $getallres[0]['VolleyballResult']['set3_score'] < $getallres[1]['VolleyballResult']['set3_score'])
	{
		$adi = array("VolleyballScore" => array(
		"id" => $getallres[0]['VolleyballResult']['volleyball_match_id'],
		"team1_name"	=> $getallres[0]['VolleyballResult']['volleyball_team_id'],
		"team2_name"	=> $getallres[1]['VolleyballResult']['volleyball_team_id'],
		"team1_score" => "1",
		"team2_score" => "2",
		)); 
	}

	$this->loadModel('VolleyballScore');
	$this->VolleyballScore->save($adi);

	$this->loadModel('VolleyballScore');
		$scores = $this->VolleyballScore->find('first',array('conditions'=>array('id'=>$matchid)));
		$this->set(compact('scores'));
	//pr($scores);
	}



	//////////////////////////////////////////////////////////////////////////////////////////

	
	




}



public function vteam1($matchid)
{

	$adiarray71=array(
	  'conditions' => array('VolleyballMatch.id' => $matchid ),
	//'order' => array('BasketballMatch.id DESC'),
	  //'fields' => ('BasketballMatch.team1_name'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios1=$this->VolleyballMatch->find('first', $adiarray71);
	$this->set('adios1',$adios1);
	//pr($adios1);
	/////////////MY CODE///////////////////////////

	$adiarray2=array(
	  'conditions' => array('CollegeProfile.user_id' => $adios1['VolleyballMatch']['team1_name'] ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('CollegeProfile.user_id','CollegeProfile.teamname')
	  );
		
	$this->loadModel('CollegeProfile');
	$list1=$this->CollegeProfile->find('list', $adiarray2);
	$this->set('list1',$list1);
	//pr($list1);

      $this->set('stateDropAjax',$list1);		//echo "<pre>"; print_r($stateDrop);


//$this->set(compact('teamlist'));

$this->layout = 'ajax';
	
} 


public function vteam2($matchid)
{

	$adiarray717=array(
	  'conditions' => array('VolleyballMatch.id' => $matchid ),
	//'order' => array('BasketballMatch.id DESC'),
	  //'fields' => ('BasketballMatch.team1_name'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios1=$this->VolleyballMatch->find('first', $adiarray717);
	$this->set('adios1',$adios1);
	//pr($adios1);
	/////////////MY CODE///////////////////////////

	$adiarray27=array(
	  'conditions' => array('CollegeProfile.user_id' => $adios1['VolleyballMatch']['team2_name'] ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('CollegeProfile.user_id','CollegeProfile.teamname')
	  );
		
	$this->loadModel('CollegeProfile');
	$list2=$this->CollegeProfile->find('list', $adiarray27);
	$this->set('list2',$list2);
	//pr($list1);

      $this->set('stateDropAjax',$list2);		//echo "<pre>"; print_r($stateDrop);


//$this->set(compact('teamlist'));

$this->layout = 'ajax';
	
}
   
    public function leaderboards($gender){

    	if(!isset($gender))
{
$gender="M";
}
	
	$this->set('gender',$gender);
	$this->set(compact('gender'));


	$tr= $this->VolleyballResult->find('list',array('fields'=>array('volleyball_team_id','volleyball_team_id')));
    $this->set('tr',$tr);
	//pr($tr);

$functionarray12=array(
	 'conditions' => array('Game.id' => 8 , 'VolleyballTeam.gender' => $gender,'VolleyballTeam.user_id'=>$tr),
	 //'fields' => array('Team.gender'),
	  //"recursive"=>2
	);
	

	$this->loadModel('VolleyballTeam');
	$getall=$this->VolleyballTeam->find('all', $functionarray12);
	$this->set('getall',$getall);

	//pr($getall);

	$this->loadModel('VolleyballTeam');
	$tid=$this->BballTeam->find('list',array('conditions' => array('Game.id' => 8,'VolleyballTeam.gender'=>$gender),"recursive"=>2,'fields'=>array('user_id','name')));
	//pr ($tid);
	$this->loadModel('VolleyballMatch');
	$match = $this->VolleyballMatch->find('list',array('conditions'=>array('gender'=>$gender),'fields'=>array('id','id')));
	 $this->set('match',$match);

	//for win
	$newarr=array();
	$m=0;
	
	foreach($tid as $key=>$name)
	{
	$functionarraywon=array(
	 'conditions' => array('VolleyballResult.volleyball_team_id' => $key , 'VolleyballResult.status' => 'won','VolleyballResult.volleyball_match_id'=>$match),
	
	);
	
	$functionarraylost=array(
	 'conditions' => array('VolleyballResult.volleyball_team_id' => $key , 'VolleyballResult.status' => 'lost','VolleyballResult.volleyball_match_id'=>$match),
	
	);
	
	$newarr[$m][0]=$this->VolleyballResult->find('count', $functionarraywon);
	$newarr[$m][1]=$this->VolleyballResult->find('count', $functionarraylost);
	$m++;
	}
	$this->set(compact('newarr'));


    $fteam1 = array('conditions'=>array('gender'=>$gender),'fields'=>array('user_id','user_id'));
    $this->loadModel('VolleyballTeam');
    $team1 = $this->VolleyballTeam->find('list',$fteam1);
    $this->set('team1',$team1);
   // pr($team1);

 $fteam11 = array('fields'=>array('volleyball_team_id','volleyball_team_id'));
    $this->loadModel('VolleyballResult');
    $team11 = $this->VolleyballResult->find('list',$fteam11);
    $this->set('team11',$team11);
   ///pr($team11);

    $playmatch =array();
	$m=0;
	foreach($tid as $key=>$name)
	{
	$pmt = array('conditions'=>array('VolleyballResult.volleyball_team_id' =>$key,'VolleyballResult.volleyball_match_id'=>$match),'fields'=>' basketball_team_id');

	$playmatch[$m]= $this->VolleyballResult->find('count', $pmt);
	
	$this->set('playmatch',$playmatch);
	$m++;
}
	//pr($playmatch);


	
	
	foreach($tid as $key=>$name)
	{
		$fnfoul=array(
	 'conditions' => array('VolleyballResult.volleyball_team_id' => $key,
	 	'VolleyballResult.volleyball_match_id'=>$match),
	 'fields' =>array('BasketballResult.basketball_team_id','sum(BasketballResult.foul) as total_sum' )
	);
	$getfo[$key]=$this->BasketballResult->find('first',$fnfoul);
	
	$this->set('getfo',$getfo);
    }

if($getfo !== null){
    foreach($getfo as $s){
	$getfoul[] = $s[0]['total_sum'];
$this->set('getfoul',$getfoul);
}
	
	//pr ($getfoul);
foreach($tid as $key=>$name)
	{
		$fnfreet=array(
	 'conditions' => array('BasketballResult.basketball_team_id' => $key,'BasketballResult.basketball_match_id'=>$match),'fields' =>array('BasketballResult.basketball_team_id','sum(BasketballResult.free_throw) as total_sum' )
	);
	$getfr[$key]=$this->BasketballResult->find('first',$fnfreet);
	
	$this->set('getfr',$getfr);
	
	
	}
	foreach($getfr as $s){
	$getfreet[] = $s[0]['total_sum'];
$this->set('getfreet',$getfreet);
}
	//pr($getfreet);
	
foreach($tid as $key=>$name)
	{
		$po= array( 'conditions' => array('BasketballResult.basketball_team_id' => $key,'BasketballResult.basketball_match_id'=>$match),
    'fields' => array('BasketballResult.basketball_team_id','sum(BasketballResult.point) as total_sum' ) );
 
 $sum[$key] = $this->BasketballResult->find('first', $po );
 $this->set('sum',$sum);
}
	//pr($sum);
foreach($sum as $s){
	$tpoint[] = $s[0]['total_sum'];
$this->set('tpoint',$tpoint);
}


foreach($tid as $key=>$name)
	{
		$do= array( 'conditions' => array('BasketballResult.basketball_team_id' => $key,'BasketballResult.basketball_match_id'=>$match),
    'fields' => array('BasketballResult.basketball_team_id','sum(BasketballResult.point) as total_sum' ) );
 
 $summ[$key] = $this->BasketballResult->find('first', $do );
 $this->set('summ',$summ);
}
	//pr($sum);
foreach($summ as $s){
	$tpointt[$s['BasketballResult']['basketball_team_id']] = $s[0]['total_sum'];
$this->set('tpointt',$tpointt);
}


	$adiarray737 = array('fields'=>array('user_id','teamname'));
	 $this->loadModel('CollegeProfile');
    
    $list1final = $this->CollegeProfile->find('list',$adiarray737);

	$this->set('list1final',$list1final); 
	//pr($s);
	$this->set(compact('$tpoint','$tid','$getfoul','$getfreet','$rps'));

	

	//////////Player datafor  leaderboard////////////////
$functionstu=array(
	 'conditions' => array('BasketballStudent.gender' => $gender),
	'fields' => array('BasketballStudent.student_profile_id','BasketballStudent.student_profile_id'),
	 // 'recursive'=>2,
	  //'limit'>15
	);
$this->loadModel('BasketballStudent');
	$getstu=$this->BasketballStudent->find('list', $functionstu);
	//pr ($getstu);
	$this->set('getstu',$getstu);
	$this->set(compact('getstu'));


$functionstuu=array(
	 'conditions'=>array('VolleyballPoint.basketball_match_id'=>$match),
	'fields' => array('volleyball_student_id','volleyball_student_id'),
	 // 'recursive'=>2,
	  //'limit'>15
	);
	$this->loadModel('BasketballPoint');
	$getstuu=$this->BasketballPoint->find('list', $functionstuu);
	//pr ($getstu);
	$this->set('getstuu',$getstuu);
	$this->set(compact('getstuu'));


	////////////////////////////////////////////////////////////////////
		//pr($badisexycheez);
	$functionstud=array(
	 'conditions' => array('BasketballStudent.gender' => $gender),
	'fields' => array('BasketballStudent.student_profile_id','BasketballStudent.student_profile_id'),
	 // 'recursive'=>2,
	  //'limit'>15
	);
	$this->loadModel('BasketballStudent');
	$getstud=$this->BasketballStudent->find('list', $functionstud);
	//pr ($getstud);
	$this->set('getstud',$getstud);

	$this->loadModel('BasketballPoint');
	$bbp = $this->BasketballPoint->find('list',array('fields'=>array('student_Profile_id','student_profile_id'),'conditions'=>array('BasketballPoint.basketball_match_id'=>$match)));
	$this->set('bbp',$bbp);
	//pr($bbp);
	
	$functiondet=array(
	 'conditions' => array('StudentProfile.id' => $bbp,'gender'=>$gender),
	'fields' => array('id','name'),
	  //'recursive'=>2
	);
	
	$this->loadModel('StudentProfile');
	$getdet=$this->StudentProfile->find('list', $functiondet);
	
	//pr ($getdet);
	$this->set(compact('getdet'));
//////////////////////////team name//////////////////////////////////////////////////////
$this->loadModel('BasketballStudent');
	$getdet22=$this->BasketballStudent->find('list',array('conditions'=>array('gender'=>$gender),'fields' =>array('student_profile_id','basketball_team_id')));
	$this->set('getdet22',$getdet22);
	//pr($getdet22);

	$con33 = array('conditions' => array('user_id' => $getdet22 ),'fields' => array('user_id','teamname'));
	$this->loadModel('CollegeProfile');
	$sett = $this->CollegeProfile->find('list',$con33);
    $this->set('sett',$sett);

    //pr($sett);
	$this->loadModel('BasketballStudent');
	$getdet2=$this->BasketballStudent->find('all',array('conditions'=>array('gender'=>$gender)));

	$yehlo=array();
	foreach($getdet2 as $getdet222)
	{

	$yehlo[$getdet222['BasketballStudent']['student_profile_id']]=$sett[$getdet222['BasketballStudent']['basketball_team_id']];
		
	}	
	//pr($yehlo);
		$this->set(compact('yehlo'));

/////////////////////////////basketball student point////////////////////
		$this->loadModel('BasketballStudent');
	$sid=$this->BasketballStudent->find('list',array('conditions'=>array('gender'=>$gender,'student_profile_id'=>$bbp),'fields'=>array('student_profile_id','student_profile_id')));
	//pr ($sid);

		$this->loadModel('BasketballPoint');
	$sidh=$this->BasketballPoint->find('list',array('conditions'=>array('BasketballPoint.student_profile_id' =>$sid,'BasketballPoint.basketball_match_id'=>$match),'fields'=>array('student_profile_id','student_profile_id')));
	//pr ($sidh);
	$this->set('sidh',$sidh);

foreach($sidh as $key=>$name )
	{
		$po= array( 'conditions' => array('BasketballPoint.student_profile_id' => $key,'BasketballPoint.basketball_match_id'=>$match),
    'fields' => array('BasketballPoint.student_profile_id','sum(BasketballPoint.point) as total_sum' ), 
    //'order' => array('sum(BasketballPoint.point) as total_sum' => 'DESC')
    
    );
     
 $sumpoint[$key] = $this->BasketballPoint->find('first', $po );
 $this->set('sumpoint',$sumpoint);
}
	//pr($sumpoint);

foreach($sumpoint as $sp){
	$spoint[$sp['BasketballPoint']['student_profile_id']] = $sp[0]['total_sum'];
	
	

$this->set('spoint',$spoint);
//pr($spoint);
}

 $fstu11 = array('fields'=>array('student_profile_id','student_profile_id'));
    $this->loadModel('BasketballPoint');
    $stu11 = $this->BasketballPoint->find('list',$fstu11);
    $this->set('stu11',$stu11);
   ///pr($team11);

    $playmatchstu =array();
	$m=0;
	foreach($stu11 as $key=>$name)
	{
	$pmtt = array('conditions'=>array('BasketballPoint.student_profile_id' =>$key,'BasketballPoint.basketball_match_id'=>$match));

	$playmatchstu[$key]= $this->BasketballPoint->find('count', $pmtt);
	
	$this->set('playmatchstu',$playmatchstu);
	
	//pr($playmatchstu);
}
	$this->set(compact('$spoint','$sid','$playmatch','$rs','$rp','$playmatchstu'));
}else{
	throw new InternalErrorException('Sorry! No Data For Leaderboard has been entered yet!. Please, try later.');
    }
	




    }

	public function index() {
		$this->VolleyballResult->recursive = 0;
		//$this->set('boxingResults', $this->Paginator->paginate());
		$this->set('volleyballResults', ClassRegistry::init('VolleyballResult')->showmy(), $this->Paginator->paginate());

		$this->loadModel('StudentProfile');
		$get= $this->StudentProfile->find('all');
		$this->set('get',$get);

		$this->loadModel('CollegeProfile');
		$gett= $this->CollegeProfile->find('all');
		$this->set('gett',$gett);
	}
	
	public function index1(){
		$this->VolleyballResult->recursive = 0;
		$this->set('volleyballResults', $this->Paginator->paginate());
	}

	public function index2($gender)
	{	
	if(!isset($gender))
	{
	$gender="M";
	}
		$this->set('gender',$gender);
		$this->set(compact('gender'));
	}

	public function publicindex(){
		$this->VolleyballResult->recursive = 0;
		$this->set('volleyballResults', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VolleyballResult->exists($id)) {
			throw new NotFoundException(__('Invalid volleyball result'));
		}
		$options = array('conditions' => array('VolleyballResult.' . $this->VolleyballResult->primaryKey => $id));
		$this->set('volleyballResult', $this->VolleyballResult->find('first', $options));

		$this->loadModel('StudentProfile');
		$get= $this->StudentProfile->find('all');
		$this->set('get',$get);

		$this->loadModel('CollegeProfile');
		$gett= $this->CollegeProfile->find('all');
		$this->set('gett',$gett);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VolleyballResult->create();
		$this->request->data = Hash::insert($this->request->data, 'VolleyballResult.1.volleyball_match_id', $this->request->data['VolleyballResult'][0]['volleyball_match_id']);
			//$this->request->data = Hash::insert($this->request->data, 'BoxingResult.1.boxing_category', $this->request->data['BoxingResult'][0]['boxing_category']);
			//pr($this->data);
		 $this->loadModel('VolleyballResult');
       if ($this->VolleyballResult->find('all',array('conditions' => array( 'VolleyballResult.volleyball_match_id' => $this->request->data['VolleyballResult'][0]['volleyball_match_id'])))){
      $this->Session->setFlash(__('Volleyball Result for this Match has already been add, Please edit to make changes'));
       return $this->redirect(array('controller'=>'volleyball_matches', 'action' => 'index1'));
       }
			else if ($this->VolleyballResult->saveAll($this->request->data['VolleyballResult'])) {
				//pr($this->data);
				$this->Session->setFlash(__('The Volleyball result has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller'=>'VolleyballPoints','action' => 'add'));
			} else {
				$this->Session->setFlash(__('The Volleyball result could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		//$volleyballTeams = $this->VolleyballResult->BoxingTeam->find('list');
		$volleyballMatches = $this->VolleyballResult->VolleyballMatch->find('list',array('fields'=>array('id','completename')));
		//pr($boxingMatches);
		//$boxingStudents = $this->BoxingResult->BoxingStudent->find('list');
		$this->set(compact('volleyballMatches'));
        
		$adiarray22=array(
	  //'conditions' => array('BasketballTeam.user_id' => $adios1['BasketballMatch']['team1_name'] ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('VolleyballTeam.user_id','VolleyballTeam.user_id')
	  );
		
	$this->loadModel('VolleyballTeam');
	$list3=$this->VolleyballTeam->find('list', $adiarray22);
	$this->set('list3',$list3);
	//pr($list1);

	////////////MY CODE/////////
	
	
	$adiarray734=array( 'conditions' => array('CollegeProfile.user_id' => $list3 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('user_id','teamname')
	 );
	 $this->loadModel('CollegeProfile');
    
    $list2team = $this->CollegeProfile->find('all',$adiarray734);
	 //pr($list1team);
   // $this->set('list1team',$list1team);
	
    $i=0;
	foreach($list2team as $lt2)
	{
		$team2final[$lt2['CollegeProfile']['user_id']] = $lt2['CollegeProfile']['teamname'];
	}

     //pr($team1final);
    //$this->set('list1',$list1);
     // $this->set('sha',$sha);
	$this->set('team2final',$team2final);
		
$adiarray9=array(
	// 'conditions' => array('ArcheriesMatch.archeries_type_id' => "1" ),
	//'order' => array('ArcheriesMatch.id DESC'),
	  'fields' => array('id','completename'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$sim=$this->VolleyballMatch->find('list', $adiarray9);
	$this->set('sim',$sim);
	//pr($sim);

	$adiarray7=array(
	// 'conditions' => array('ArcheriesMatch.archeries_type_id' => "1" ),
	'order' => array('VolleyballMatch.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
//pr($adios);
	 

	



	$adiarray7=array(
	  'conditions' => array('VolleyballStudents.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	   'VolleyballStudents.gender' =>$adios['VolleyballMatch']['gender'] ),
	//'order' => array('ArcheriesMatch.id DESC'),
	  'fields' => array('VolleyballStudents.name','VolleyballStudents.name'),
	  );
		//pr($adiarray7);
	$this->loadModel('VolleyballStudents');
	$list1=$this->VolleyballStudents->find('list', $adiarray7);
	$this->set('list1',$list1);
//pr($list1);
////////////MY CODE/////////
	
	
	$adiarray73=array( 'conditions' => array('StudentProfile.id' => $list1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    
   $xy = $this->StudentProfile->find('all',$adiarray73);
      foreach($xy as $sy){
 $list1final[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }

	$this->set('list1final',$list1final);

/////////////MY CODE///////////////////////////


$adiarray72=array(
	  'conditions' => array('VolleyballStudents.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'] ,'VolleyballStudents.gender' =>$adios['VolleyballMatch']['gender']),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('VolleyballStudents.name','VolleyballStudents.name'),
	  );
		
	$this->loadModel('VolleyballStudents');
	$list2=$this->VolleyballStudents->find('list', $adiarray72);
	$this->set('list2',$list2);
	//pr($list2);
	////////////MY CODE/////////
	
	
	$adiarray73=array( 'conditions' => array('StudentProfile.id' => $list2 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
     
   $xy = $this->StudentProfile->find('all',$adiarray73);
      foreach($xy as $sy){
 $list2final[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
   
	$this->set('list2final',$list2final); 
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->VolleyballResult->exists($id)) {
			throw new NotFoundException(__('Invalid volleyball result'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->VolleyballResult->save($this->request->data)) {
				$this->Session->setFlash(__('The volleyball result has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index',$this->request->data['VolleyballResult']['volleyball_match_id']));
			} else {
				$this->Session->setFlash(__('The volleyball result could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('VolleyballResult.' . $this->VolleyballResult->primaryKey => $id));
			$this->request->data = $this->VolleyballResult->find('first', $options);
		}
		$volleyballMatches = $this->VolleyballResult->VolleyballMatch->find('list');
		
		
		$this->set(compact('volleyballMatches', 'volleyballTeams', 'volleyballStudents'));

		$adiarray22=array(
	  //'conditions' => array('BasketballTeam.user_id' => $adios1['BasketballMatch']['team1_name'] ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('VolleyballTeam.user_id','VolleyballTeam.user_id')
	  );
		
	$this->loadModel('VolleyballTeam');
	$list3=$this->VolleyballTeam->find('list', $adiarray22);
	$this->set('list3',$list3);
	//pr($list1);

	////////////MY CODE/////////
	
	
	$adiarray734=array( 'conditions' => array('CollegeProfile.user_id' => $list3 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('user_id','teamname')
	 );
	 $this->loadModel('CollegeProfile');
    
    $list2team = $this->CollegeProfile->find('all',$adiarray734);
	 //pr($list1team);
   // $this->set('list1team',$list1team);
	
    $i=0;
	foreach($list2team as $lt2)
	{
		$team2final[$lt2['CollegeProfile']['user_id']] = $lt2['CollegeProfile']['teamname'];
	}

     //pr($team1final);
    //$this->set('list1',$list1);
     // $this->set('sha',$sha);
	$this->set('team2final',$team2final);
		
$adiarray9=array(
	// 'conditions' => array('ArcheriesMatch.archeries_type_id' => "1" ),
	//'order' => array('ArcheriesMatch.id DESC'),
	  'fields' => array('id','completename'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$sim=$this->VolleyballMatch->find('list', $adiarray9);
	$this->set('sim',$sim);
	//pr($sim);

	$adiarray7=array(
	// 'conditions' => array('ArcheriesMatch.archeries_type_id' => "1" ),
	'order' => array('VolleyballMatch.id DESC'),
	  //'fields' => ('FootballResult.team_id'),
	  );
		
	$this->loadModel('VolleyballMatch');
	$adios=$this->VolleyballMatch->find('first', $adiarray7);
	$this->set('adios',$adios);
//pr($adios);
	 

	



	$adiarray7=array(
	  'conditions' => array('VolleyballStudents.volleyball_team_id' => $adios['VolleyballMatch']['team1_name'],
	   'VolleyballStudents.gender' =>$adios['VolleyballMatch']['gender'] ),
	//'order' => array('ArcheriesMatch.id DESC'),
	  'fields' => array('VolleyballStudents.name','VolleyballStudents.name'),
	  );
		//pr($adiarray7);
	$this->loadModel('VolleyballStudents');
	$list1=$this->VolleyballStudents->find('list', $adiarray7);
	$this->set('list1',$list1);
//pr($list1);
////////////MY CODE/////////
	
	
	$adiarray73=array( 'conditions' => array('StudentProfile.id' => $list1 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
    
   $xy = $this->StudentProfile->find('all',$adiarray73);
      foreach($xy as $sy){
 $list1final[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }

	$this->set('list1final',$list1final);

/////////////MY CODE///////////////////////////


$adiarray72=array(
	  'conditions' => array('VolleyballStudents.volleyball_team_id' => $adios['VolleyballMatch']['team2_name'] ,'VolleyballStudents.gender' =>$adios['VolleyballMatch']['gender']),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('VolleyballStudents.name','VolleyballStudents.name'),
	  );
		
	$this->loadModel('VolleyballStudents');
	$list2=$this->VolleyballStudents->find('list', $adiarray72);
	$this->set('list2',$list2);
	//pr($list2);
	////////////MY CODE/////////
	
	
	$adiarray73=array( 'conditions' => array('StudentProfile.id' => $list2 ),
	//'order' => array('ArcheriesMatch.id DESC'),
	 'fields' => array('id','name')
	 );
	 $this->loadModel('StudentProfile');
    
     
   $xy = $this->StudentProfile->find('all',$adiarray73);
      foreach($xy as $sy){
 $list2final[$sy['StudentProfile']['id']]= $sy['StudentProfile']['name']."-".$sy['StudentProfile']['id'];
    }
   
	$this->set('list2final',$list2final); 
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	/*public function delete($id = null) {
		$this->VolleyballResult->id = $id;
		if (!$this->VolleyballResult->exists()) {
			throw new NotFoundException(__('Invalid volleyball result'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VolleyballResult->delete()) {
			$this->Session->setFlash(__('The volleyball result has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The volleyball result could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}*/
}
