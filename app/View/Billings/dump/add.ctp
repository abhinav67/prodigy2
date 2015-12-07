<?php
App::uses('AppModel', 'Model');

if (isset($selected))
{
echo "<pre>";
print_r($selected);

echo $selected['Billing']['customers'];

echo "</pre>";
}

	echo $this->Form->create('Billing');
	echo $this->Form->input('customers');
	
	
	echo $this->Form->input('payernames');
	
	echo $this->Form->end(__('Submit'));
	
?>