<?php
	foreach( $entries as $entry ){
		
		$date = date( "Y年n月j日", strtotime($entry['Entry']['date']) );
		
		echo "<h2>";
		echo $this->Html->image('title02.png');
		echo $entry['Entry']['title']."</h2>";
		echo $this->Html->image($entry['Entry']['image']);
		echo "<div class='brown_date'>{$date}</div>";
		echo "<p style='clear:both;'>".$entry['Entry']['content']."</p>";
	}
?>
<div class="tab-under">
<?php
	echo $this->Html->image('button.png', array('url'=>'#'));
?>
</div>

