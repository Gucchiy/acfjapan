<?php
	$now_url = $this->Html->url('',true);	
	$now_base_url = $this->Html->url(array('controller'=>'projects','action'=>'index'), true);
	$root_url = $this->Html->url("/",true);
	echo $message;	
?>
