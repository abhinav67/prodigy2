<?php
 $line= $orders[0]['Customer'];
 $head=['Id','Admission Date','Application Date','First Name','Last Name','MI'];
 $this->CSV->addRow($head);
 $this->CSV->addRow(array_keys($line));
 foreach ($customers as $customer)
 {
 	$this->CSV->addRow['Id']['Admission Date']['Application Date']['First Name']['Last Name']['MI'];
      $line = $customer['Customer'];
       $this->CSV->addRow($line);
 }
 $filename='customers1';
 echo  $this->CSV->render($filename);
?>