<?php
App::uses('AppModel', 'Model');

echo "<pre>";
print_r($customers);
echo "</pre>";
	 echo $this->Form->create('Billing');
	echo $this->Form->input('customers');
	
	
	echo $this->Form->input('payernames');
	
	echo $this->Form->end(__('Submit'));
	
		echo $foo;
?>