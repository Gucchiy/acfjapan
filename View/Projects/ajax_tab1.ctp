<?php
	// print_r($project['User']);
	echo $this->Html->image($project['Project']['image1']);
	if(strlen($project['Project']['overview'])){
		echo "<p>".$project['Project']['overview']."</p>";
	}

?>
<h2>
	<?php
		echo $this->Html->image('title.png');
	?>
	&nbsp;&nbsp;事業目標
</h2>
<P>
	<?php
		echo $project['Project']['objective'];
	?>
</P>
<?php
	if(strlen($project['Project']['image2'])){
		echo $this->Html->image($project['Project']['image2']);
	}	
?>

<h2>
	<?php
		echo $this->Html->image('title.png');
	?>
	&nbsp;&nbsp;主な活動
</h2>
<P>
	<?php
		echo $project['Project']['activity_overview'];
	?>
</P>
<h2>
	<?php
		echo $this->Html->image('title.png');
	?>
	&nbsp;&nbsp;プレイヤーの活動内容
</h2>
<P>
	<?php
		echo $project['Project']['activity'];
	?>
</P>
<?php
	if(strlen($project['Project']['image3'])){
		echo $this->Html->image($project['Project']['image3']);
	}							

	echo $this->Form->create('ProjectComment', array('url'=>array('controller'=>'projects','action'=>'view',$project['Project']['id'])));
	echo $this->Form->input('content',array('size'=>'50'));
	echo $this->Form->end('コメントする');
	foreach($project['ProjectComment'] as $project_comment ){

		if(strlen($project_comment['User']['fbid']>2)){
			
			echo $this->Html->image("https://graph.facebook.com/{$project_comment['User']['fbid']}/picture");
		
		}else{
			
			echo $this->Html->image($project_comment['User']['image']);
		}


//				echo "<img src='https://graph.facebook.com/{$project_comment['User']['fbid']}/picture' />";
		echo "<p>{$project_comment['content']}</p>";
//				print_r($project_comment);
//				echo "<p>{$project_comment['ProjectComment']['content']}</p>";
//				print_r( $project_comment['User'] );
	}


?>
<div class="tab-under">
<?php
	echo $this->Html->image('button.png', array('url'=>'#'));
?>
</div>
