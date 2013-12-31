<h2 style='border-bottom: solid 2px #F08337; padding-bottom: 15px;'><?=$team['Team']['name']?></h2>
<p><?=$team['Team']['content']?></p>
<?php
	if(strlen($team['Team']['content_image'])>2){
		echo "<div style='text-align:center;'>".$this->Html->image($team['Team']['content_image'])."</div>";		
	}
?>