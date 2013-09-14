<?php
	$now_url = $this->Html->url('',true);	
?>

<!-- Content -->
<div class="content">

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
							<p>コンテンツ</p>
						</div>
						
					</div>
					<div class="fb-like" data-href="<?=$now_url?>" data-send="false" data-width="130" data-show_faces="false" data-font=""></div>

					<?php
						$tab1_content = addslashes("<h2 style='border-bottom: solid 2px #F08337; padding-bottom: 15px;'>".$team['Team']['name']."</h2>"
							."<p>".$team['Team']['content']."</p>"
							.$this->Html->image($team['Team']['content_image']) );
					?>


					<script>
						
						tab_content = {
							'#tab1':"<?=$tab1_content?>",
							'#tab2':"test2",
							'#tab3':"test3"
						}
					
						function OnTabClick(id){
							$("#tab1").css('background-color',"#D3C1A6");
							$("#tab2").css('background-color',"#D3C1A6");
							$("#tab3").css('background-color',"#D3C1A6");
							$(id).css('background-color',"#F08337");
							$('#tab_content').html(tab_content[id]);
						}
						
					</script>					
					
					<div class="project clearfix" style="border: solid 15px #36160E; padding:15px; width:85%; position:relative; margin-top:50px; font-size:18px;">
						<div class="tab-click" style="background-color: #F08337;" id="tab1" onclick="OnTabClick('#tab1')">ご挨拶</div>
						<div class="tab-click" style="left:150px;" id="tab2" onclick="OnTabClick('#tab2')">組織概要</div>
						<div class="tab-click" style="left:285px;font-size:12px;padding-top:5px;height:45px;" id="tab3" onclick="OnTabClick('#tab3')">これまでの<br />プロジェクト</div>
						<div id="tab_content">
							<h2 style="border-bottom: solid 2px #F08337; padding-bottom: 15px;"><?=$team['Team']['name']?></h2>
							<p><?=$team['Team']['content']?></p>
							<?php
								echo $this->Html->image($team['Team']['content_image']);
							?>
							
						</div>

					</div>

				</div>

				<div class="five columns" id="rightside">

					<div id="item_info_side" class="clearfix">
						
					<?php
						echo $this->Html->image("{$team['Team']['logo']}");
					?>						
						
					</div>

					<div id="item_info_side" class="clearfix">
					<?php
							echo $this->Html->image('pickup.png')."<br /><br />";
					?>
					</div>

					<div id="item_info_side" class="clearfix">
					<?php
							echo $this->Html->image('news.png')."<br /><br />";
					?>						
					</div>

					<div id="item_info_side" class="clearfix">
					<?php
							echo $this->Html->image('member.png')."<br /><br />";
					?>						
					</div>

					<div id="item_info_side" class="clearfix">
					<?php
							echo $this->Html->image('history.png')."<br /><br />";
					?>						
					</div>
					
				</div>



			</div>
		</div>
	</div>
</div>

