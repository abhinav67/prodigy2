<?php
 $line= $orders[0]['Employee'];
 $head=['Id','Employees','Last Name','Address','City','Home phone','Hire date','Gender','Date of birth','Status','Employment type','Designation'];
 $this->CSV->addRow($head);
 $this->CSV->addRow(array_keys($line));
 foreach ($employees as $employee)
 {
 	$this->CSV->addRow['Id']['First Name']['Last Name']['City']['Home Phone']['Hire Date']['Gender']['Date of birth']['Status']['Employment Type']['Designation'];
      $line = $employee['Employee'];
       $this->CSV->addRow($line);
 }
 $filename='employees1';
 echo  $this->CSV->render($filename);
?>