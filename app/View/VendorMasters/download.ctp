<?php
 $line= $orders[0]['VendorMaster'];
 $head=['Id','vendor Type','Name','Address','Phone Number','Fax','Setup Date','Email','Pc name','Pc phone','Pc email','Pc fax','Sc name','Sc phone','Sc email','Sc fax','payment term','Tax','Notes'];
 $this->CSV->addRow($head);
 $this->CSV->addRow(array_keys($line));
 foreach ($vendormasters as $vendormaster)
 {
 	$this->CSV->addRow['Id']['vendor Type']['Name']['Address']['Phone Number']['Fax']['Setup Date']['Email']['Pc name']['Pc phone']['Pc email']['Pc fax']['Sc name']['Sc phone']['Sc email']['Sc fax']['Payment term']['Tax ']['Notes'];
      $line = $vendormaster['VendorMaster'];
       $this->CSV->addRow($line);
 }
 $filename='vendormaster1';
 echo  $this->CSV->render($filename);
?>