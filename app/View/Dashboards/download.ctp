<?php
 $line= $orders[0]['Customer'];
 $head=['Id','Customers'];
 $this->CSV->addRow($head);
 $this->CSV->addRow(array_keys($line));
 foreach ($data as $dat)
 {
 	$this->CSV->addRow['First Name'];
      $line = $dat['Customer'];
       $this->CSV->addRow($line);
 }
 $filename='customers1';
 echo  $this->CSV->render($filename);
?>