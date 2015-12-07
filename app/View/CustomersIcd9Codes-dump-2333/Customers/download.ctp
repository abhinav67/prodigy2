<?php
 $line= $orders[0]['Customer'];
 $head=['Customers','Id'];
 $this->CSV->addRow($head);
 $this->CSV->addRow(array_keys($line));
 foreach ($customers as $customer)
 {
 	$this->CSV->addRow['First Name'];
      $line = $customer['Customer'];
       $this->CSV->addRow($line);
 }
 $filename='customers1';
 echo  $this->CSV->render($filename);
?>