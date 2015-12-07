<?php
App::uses('AppController', 'Controller');
/**
 * CustomerAttendancesCustomers Controller
 *
 * @property CustomerAttendancesCustomer $CustomerAttendancesCustomer
 * @property PaginatorComponent $Paginator
 */
class ReconciliationsController extends AppController {

public function index()
{

set_time_limit(60);

$wr=$this->webroot;
$file = file_get_contents("claim.txt");
$segments = explode("~",$file);
foreach($segments as $key=>$segment){

$elements[$key] = explode('*',$segment);

}

pr($elements);
exit();
$this->autoRender = false;


}

}