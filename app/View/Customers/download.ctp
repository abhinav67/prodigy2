<?php
 $line= $orders[0]['Customer'];
 $head=['Id','Customers','Last Name','Gender','Phone','DoB','Address','City','Zip Code'];
 $this->CSV->addRow($head);
 $this->CSV->addRow(array_keys($line));
 foreach ($customers as $customer)
 {
 	$this->CSV->addRow['Id']['First Name']['Last Name']['Gender']['Phone']['Dob']['Address']['City']['Zip Code'];
      $line = $customer['Customer'];
       $this->CSV->addRow($line);
 }
 $filename='customers1';
 echo  $this->CSV->render($filename);
?>