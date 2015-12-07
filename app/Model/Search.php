<?php
App::uses('AppModel', 'Model');

class Search extends AppModel
{

   public $useTable = false;
public $validate = array(
		'search' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'))
				),
		'field' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'))
				)
				
				
				);

}

?>