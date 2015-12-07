<?php
/**
* Application level Controller
*
* This file is application-wide controller file. You can put all
* application-wide controller-related methods here.
*
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @package       app.Controller
* @since         CakePHP(tm) v 0.2.9
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/
 
App::uses('Controller', 'Controller');
 
/**
* Application Controller
*
* Add your application-wide methods in the class below, your controllers
* will inherit them.
*
 * @package             app.Controller
 * @link                http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
*/
class AppController extends Controller {
   public $components = array(
   'Session',
   'Auth' => array(
    'loginAction' => array("controller" => "users", "action" => "login"),

        'loginRedirect' => array('controller' => 'Dashboards', 'action' => 'index'),
         'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
        //'authError' => 'You do not have the authority to view this page.',
        'loginError' => 'Invalid Username or Password entered, please try again.',
        'authorize' => array('Controller'),
 
    ));
 
   public function isAuthorized($user) {
    // Here is where we should verify the role and give access based on role
     $admin = FALSE;
  if($this->Auth->user('group_id') == '1')
  {
    $admin = TRUE;
  }
  return $admin;

    $cs = FALSE;
  if($this->Auth->user('group_id') == '2')
  {
    $cs = TRUE;
  }
  return $cs;
    
}
 
// only allow the login controllers only
public function beforeFilter() {
    parent::beforeFilter();
  /*  if($this->Auth->user('role') == 'admin'){
    //debug($this->Auth->user());
    $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
}else{
     //pr($this->data);
    $this->Auth->loginRedirect = array('controller' => 'collegeprofiles', 'action' => 'addinfo');
} */
    $this->layout = 'bootstrap';
   // $this->Auth->deny();
$this->Auth->allow('display');
     $this->Auth->allow("login","logout");
     $this->set('logged_in', $this->Auth->loggedIn());
     $this->set('current_user', $this->Auth->user());

        
 
   // $wr=$this->webroot;
 
    //$this->set('authUser', $this->Auth->user());
$user1 = $this->Session->read("Auth.User");
      $user=$user1['username'];
       //pr($user);
     $this->set(compact('user'));

     //$this->set('admin', $this->_isAdmin());
   
 
}


function _isAdmin()
{
  $admin = FALSE;
  if($this->Auth->user('group_id') == '1')
  {
    $admin = TRUE;
  }
  return $admin;
}

function _isManager()
{
  $mg = FALSE;
  if($this->Auth->user('group_id') == '2')
  {
    $mg = TRUE;
  }
  return $mg;
}


 

}