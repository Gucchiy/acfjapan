<h2 style="font-size:16px;">
<?php
		echo $this->Html->image('title03.png');	
		echo $project['Project']['tour_title'];
?>
</h2>
<p><?=$project['Project']['tour_abstract']?></p>
<?php
	if(strlen($project['Project']['tour_image']) > 2 )
		echo $this->Html->image($project['Project']['tour_image'], array('style'=>'clear:both;'));
?>

<div class="tour-item clearfix">
<?php
	echo $this->Html->image('participation.png', array('style'=>'float:left;clear:left;'));
?>
<div class="tour-item-inside-left">参加人数</div>
<div class="tour-item-inside"><?=$project['Project']['tour_participations']?>人</div>
</div>

<div class="tour-item clearfix">
<?php
	echo $this->Html->image('destination.png', array('style'=>'float:left;clear:left;'));
?>
<div class="tour-item-inside-left">目的地</div>
<div class="tour-item-inside"><?=$project['Project']['tour_location']?></div>
</div>

<div class="tour-item clearfix">
<?php
	echo $this->Html->image('departure.png', array('style'=>'float:left;clear:left;'));
?>
<div class="tour-item-inside-left">出発地</div>
<div class="tour-item-inside"><?=$project['Project']['tour_from']?></div>
</div>


<div class="tour-item clearfix">
<?php
	echo $this->Html->image('hotel.png', array('style'=>'float:left;clear:left;'));
?>
<div class="tour-item-inside-left">宿泊場所</div>
<div class="tour-item-inside"><?=$project['Project']['tour_stay']?></div>
</div>


<div class="tour-item clearfix">
<?php
	echo $this->Html->image('cost.png', array('style'=>'float:left;clear:left;'));
?>
<div class="tour-item-inside-left">予&nbsp;&nbsp;算</div>
<div class="tour-item-inside"><?=$project['Project']['tour_cost']?></div>
</div>


<div class="tour-item clearfix">
<?php
	echo $this->Html->image('baggage.png', array('style'=>'float:left;clear:left;'));
?>
<div class="tour-item-inside-left">持ち物</div>
<div class="tour-item-inside"><?=$project['Project']['tour_bring']?></div>
</div>


<div class="tour-item clearfix">
<?php
	echo $this->Html->image('present.png', array('style'=>'float:left;clear:left;'));
?>
<div class="tour-item-inside-left">プランナーからの特典</div>
<div class="tour-item-inside"><?=$project['Project']['tour_special']?></div>
</div>


<div class="tour-item clearfix">
<?php
	echo $this->Html->image('study.png', array('style'=>'float:left;clear:left;'));
?>
<div class="tour-item-inside-left">スタディ内容</div>
<div class="tour-item-inside"><?=$project['Project']['tour_content']?></div>
</div>

<div class="tab-under">
<?php
	echo $this->Html->image('button_join.png', array('url'=>'#'));
?>
</div>
