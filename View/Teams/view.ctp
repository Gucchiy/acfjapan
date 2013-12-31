<?php
	$now_url = $this->Html->url('',true);	
	$now_base_url = $this->Html->url(array('controller'=>'teams','action'=>'index'), true);
	$root_url = $this->Html->url("/");
?>

<!-- Content -->
<div class="content">

	<!-- Page Header -->
	<div class="page-header">
		<div class="container">
			<div class="sixteen columns">
				<h1 class="page-title">
					TEAM
				</h1>
				<ul class="breadcrumb">
					<li><a href="<?=$root_url?>">TOP</a> <span class="divider">&raquo;</span></li>
					<li class="active">TEAM</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Start Content -->
	<div class="container main">

		<div class="row">
			<div class="portfolio-detail clearfix">

				<!-- Portfolio Info -->
				<div class="eleven columns">
					<h2 class="portfolio-title">
						<?=$team['Team']['name']?>
					</h2>
					<div class="project clearfix">
					<?php
						if(strlen($team['Team']['image']) > 2 ){
							
							echo $this->Html->image($team['Team']['image']);
							
						}						
					?>

					</div>

					<div class="user_info clearfix" style="clear:both">
						
						<div class="planner">代表者</div>
						
						<div class="face">
							<?php
								if(strlen($team['User']['fbid']>2)){
									
									echo $this->Html->image("https://graph.facebook.com/{$team['User']['fbid']}/picture");
								
								}else{
									
									echo $this->Html->image($team['User']['image']);
								}
							?>
							
						</div>
						<div class="data">
							<h3><?=$team['User']['fbname']?></h3>
							<p><?=$team['User']['introduce']?></p>
						</div>
						
					</div>
					<div class="fb-like" data-href="<?=$now_url?>" data-send="false" data-width="130" data-show_faces="false" data-font=""></div>

					<script>
						$.ajax({
							type: "POST",
							url: "<?=$now_base_url?>"+"/ajax_tab1/"+<?=$team['Team']['id']?>,
							data: "id=<?=$team['Team']['id']?>",
							success: function(html){
								$('#tab_content').html(html);
							}
						});


						function OnTabClick(id){
							for(i=1; i <= 3; i++ ){
								
								$("#tab"+i+"a").css("visibility","hidden");
							}
							
							$("#"+id+"a").css("visibility","visible");
							$.ajax({
								type: "POST",
								url: "<?=$now_base_url?>"+"/ajax_"+id+"/"+<?=$team['Team']['id']?>,
								data: "id=<?=$team['Team']['id']?>",
								success: function(html){
									$('#tab_content').html(html);
								}
							});
						}
						
					</script>	
					
					<div class="tab-disp clearfix" >
						<div class="tab-click-tab1-team" id="tab1" onclick="OnTabClick('tab1')"></div>
						<div class="tab-click-tab2-team" id="tab2" onclick="OnTabClick('tab2')"></div>
						<div class="tab-click-tab3-team" id="tab3" onclick="OnTabClick('tab3')"></div>
						<div class="tab-click-tab1-team-a" id="tab1a" onclick="OnTabClick('tab1')"></div>
						<div class="tab-click-tab2-team-a" id="tab2a" onclick="OnTabClick('tab2')"></div>
						<div class="tab-click-tab3-team-a" id="tab3a" onclick="OnTabClick('tab3')"></div>
						<div id="tab_content">
						</div>
					</div>

				</div>
				
				<div class="five columns" id="rightside">

					<div id="item_info_side" class="clearfix">
						
						<?php
							echo $this->Html->image("{$team['Team']['logo']}",array('style'=>'margin-bottom:20px;'));
						?>						

						
						<?php
								echo $this->Html->image('pickup.png')."<br /><br />";
						?>
						<div class="sidebox">
							
						</div>
						
						
						<?php
								echo $this->Html->image('news.png')."<br /><br />";
						?>						
						<div class="sidebox">
							
						</div>
						<?php
								echo $this->Html->image('member.png')."<br /><br />";
						?>						
						<div class="sidebox">
							
						</div>
						<?php
								echo $this->Html->image('history.png')."<br /><br />";
						?>						
						<div class="sidebox">
						<?php
							for($i=1; $i<=10; $i++ ){
									
								if(strlen($team['Team']["history_year{$i}"]) > 2 ){
										
									$year = $team['Team']["history_year{$i}"];
									$content = $team['Team']["history_content{$i}"];
									
									echo "{$year}年&nbsp; {$content}<br />\n"; 
								}
							}
						?>							
						</div>
					</div>
					
				</div>



			</div>
		</div>
	</div>
</div>

