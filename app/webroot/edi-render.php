<?php	
	//$this->autoRender = false;

    //$this->response->type('Content-Type: text/csv');
	//$this->response->download($select['Billing']['fileName']);
    //$this->response->body($csvContents);
	$file="bills/{$select['Billing']['fileName']}.txt";

	if (file_exists($file)) { unlink ($file); }

    $myfile = fopen("$file", "w");
	$txt = "$csvContents";
	fwrite($myfile, $txt);
	fclose($myfile);

	$home=$this->webroot;

    $this->Session->setFlash(__("The Bill has been created. <a href=\"{$home}bills/{$select['Billing']['fileName']}.txt\" download>Download it Now!</a>"), 'default', array('class' => 'alert alert-success'));

    $this->redirect(array("controller"=>"dashboards","action"=>"index"));
?>