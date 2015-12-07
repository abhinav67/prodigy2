<?php
 $line= $orders[0]['Insurance'];
 $head=['Id','Name','Address','City','State ','Zip code','Payer code','Phone','Email'];
 $this->CSV->addRow($head);
 $this->CSV->addRow(array_keys($line));
 foreach ($insurances as $insurance)
 {
 	$this->CSV->addRow['Id']['Name']['Address']['City']['State ']['Zip code']['Payer code']['Phone']['Email'];
      $line = $insurance['Insurance'];
       $this->CSV->addRow($line);
 }
 $filename='insurance1';
 echo  $this->CSV->render($filename);
?>