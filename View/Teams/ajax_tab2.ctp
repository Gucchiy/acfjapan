<div class="tab-team clearfix">
	<div class="tab-team-item">団体名</div>
	<div class="tab-team-item">所在地</div>
	<div class="tab-team-item">連絡先</div>
	<div class="tab-team-item">設立</div>
	<div class="tab-team-item">代表者</div>
<?php
	if(strlen($team['Team']['team_role']) > 2 ){
		
		echo "<div class='tab-team-item'>{$team['Team']['team_role']}</div>\n";
	}
?>
</div>
<div class="tab-team-content clearfix">
	<div class='tab-team-content-item'><?=$team['Team']['team_name']?></div>
	<div class='tab-team-content-item'><?=$team['Team']['team_location']?></div>
	<div class='tab-team-content-item'>TEL: <?=$team['Team']['team_tel']?> / FAX: <?=$team['Team']['team_fax']?><br />E-mail: <?=$team['Team']['team_email']?></div>
	<div class='tab-team-content-item'><?=date("Y年n月j日",strtotime($team['Team']['team_establish']))?></div>
	<div class='tab-team-content-item'><?=$team['Team']['team_representation']?></div>
<?php
	if(strlen($team['Team']['team_role']) > 2 ){
		
		echo "<div class='tab-team-content-item'>{$team['Team']['team_value']}</div>\n";
	}
?>
</div>

<?php
	if(strlen($team['Team']['team_image'])>2){
		echo '<div style="padding-top:15px;text-align: center; clear:both;">'.$this->Html->image($team['Team']['team_image'])."</div>\n";
		
	}

?>