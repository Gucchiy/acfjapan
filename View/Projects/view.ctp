<?php
	$now_url = $this->Html->url('',true);	
	$now_base_url = $this->Html->url(array('controller'=>'projects','action'=>'index'), true);
	// echo $now_base_url;
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
						<?=$project['Project']['title']?>
					</h2>

					<div class="user_info clearfix" style="clear:both">
						
						<div class="planner">プランナー</div>
							
						
						<div class="face">
							<?php
								if(strlen($project['User']['fbid']>2)){
									
									echo $this->Html->image("https://graph.facebook.com/{$project['User']['fbid']}/picture");
								
								}else{
									
									echo $this->Html->image($project['User']['image']);
								}
							?>
							
						</div>
						<div class="data">
							<h3>
							<?php
								echo $project['User']['fbname'];
								if($project['Project']['team_id']){
									
									echo "&nbsp;（";
									echo $this->Html->link($project['Team']['name'],array('controller'=>'teams','action'=>'view',$project['Project']['team_id']));
									echo "）";
									
								}		
							?>
							</h3>
							<p><?=$project['User']['introduce']?></p>
						</div>
						
					</div>
					
					<div class="fb-like" data-href="<?=$now_url?>" data-send="false" data-width="130" data-show_faces="false" data-font=""></div>
					
					<script>
						$.ajax({
							type: "POST",
							url: "<?=$now_base_url?>"+"/ajax_tab1/"+<?=$project['Project']['id']?>,
							data: "id=<?=$project['Project']['id']?>",
							success: function(html){
								$('#tab_content').html(html);
							}
						});


						function OnTabClick(id){
							$("#tab1").css('background-color',"#D3C1A6");
							$("#tab2").css('background-color',"#D3C1A6");
							$("#tab3").css('background-color',"#D3C1A6");
							$("#"+id).css('background-color',"#F08337");
							$.ajax({
								type: "POST",
								url: "<?=$now_base_url?>"+"/ajax_"+id+"/"+<?=$project['Project']['id']?>,
								data: "id=<?=$project['Project']['id']?>",
								success: function(html){
									$('#tab_content').html(html);
								}
							});
							// $('#tab_content').html(tab_content[id]);
						}
						
					</script>					
					
					<div class="tab-disp clearfix">
						<div class="tab-click" style="background-color: #F08337;" id="tab1" onclick="OnTabClick('tab1')">HOME</div>
						<div class="tab-click" style="left:150px;font-size:12px;padding-top:12px;height:38px;line-height: 13px" id="tab2" onclick="OnTabClick('tab2')">プランナー<br />活動日記</div>
						<?php if($project['Project']['type']==2 ){ ?>
							<div class="tab-click" style="left:285px;font-size:12px;padding-top:12px;height:38px;line-height: 13px" id="tab3" onclick="OnTabClick('tab3')">プレイヤー<br />スタディツアー</div>
						<?php }	?>
						<div id="tab_content">
						
						</div>
					</div>

				</div>

				<div class="five columns" id="rightside">

					<div id="item_info_side" class="clearfix">

						<h5>現在の支援総額</h5>
						<div class="hart_progress">
							<?php
								echo $this->Html->image("hart/000.png");
							?>
						</div>
						<h2>&yen; 0円</h2>
						<div class="time">
						<?php
					  		echo $this->Html->image('watch.png');
							
							$remain_date = date("d", strtotime("now")-strtotime($project['Project']['deadline']));
							echo "&nbsp;残り{$remain_date}日";
						?>			
						</div>
						<div class="box clearfix">
							<div class="brown_title">プレイヤー</div>
							<div class="value">現地での活動して応援</div>
						</div>
					  	<div class="progress">
					  	<?php
					  		echo $this->Html->image('people-beige.png'); 
					  		echo $this->Html->image('people-beige.png'); 
					  		echo $this->Html->image('people-beige.png'); 
					  		echo $this->Html->image('people-beige.png'); 
					  		echo $this->Html->image('people-beige.png'); 
					  	?>
					  	</div>
						<div class="box clearfix">
							<div class="brown_title">パートナー</div>
							<div class="value">特典をゲットして応援</div>
						</div>
						<br />
						<div class="col-btn">
							<?php
								echo $this->Html->link("このプロジェクトを応援する！", array('controller'=>'projects','action'=>'view',$project['Project']['id']), array('class'=>'btn'));
							?>
						</div>
						<h3 style="margin-top:50px;">
							<?php
								echo $this->Html->image('privilege.png');
							?>
							特典（商品・サービス
						</h3>
						<?php
							for( $i = 1; $i < 7; $i++ ){
																
								if( $project['Project']['donation_price'.$i] ){
						?>
									<div class="donation">
										<?php
											if(strlen($project['Project']['donation_image'.$i])){
												echo $this->Html->image($project['Project']['donation_image'.$i]); 												
											}

										?>
										<p class="price">&yen; <?=number_format($project['Project']['donation_price'.$i])?></p>
										<?=$project['Project']['donation_text'.$i];?>
									</div>
						
							
						<?php
								}
							}						
						?>
						
						
						
					</div>
					
				</div>
				<!-- End Portfolio Info -->
			</div>
		</div>

	</div>

</div>
<!-- End Content -->
