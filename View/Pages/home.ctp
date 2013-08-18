<?php
	if( isset($fb_login_url)){

		/*
			echo $this->Html->div(
				'login',
				$this->Html->link(
					$this->Html->image('facebook_login.png', array('alt'=> __('CFacebookへログイン', true), 'border' => '0')),
					$fb_login_url,
					array('escape' => false)
				),
				array('escape'=>false)				
			);
		 * 
		 */
	}else{
		
		/*
		if($fb_logout_url){
			
			echo $this->Html->link('ユーザーページへジャンプ', array('controller'=>'users','action'=>'index'));
			echo "<br /><br />\n";
			echo $this->Html->link('ログアウト', $fb_logout_url );
		}
		 * 
		 */
	}
	
	// if( isset($fb_me) ){ print_r($fb_me);}
?>
<style>

	
</style>



		<!-- Slider Wrap -->
		<div class="slider-wrap">

			<!--LayerSlider begin-->
			<div class="layerslider" style="height: 440px;" 
				data-hover-bottom-nav="true" data-show-bar-timer="true" data-show-circle-timer="false">

<?php

	foreach($projects as $project){

		$disp_data_array = array($project['Project']['title'],$project['Project']['objective'],$project['Project']['overview'],$project['Project']['title']);
    	for($i=1; $i<4; $i++){
    		
			$image_path = $project['Project']["slide{$i}"];
			if( !strlen($image_path) ) continue;
		
?>
				<!-- LayerSlider layer (Hot Air Balloon) -->
				<div class="ls-layer" style="slidedelay: 3000; delayout: 500;">
				<!-- div class="ls-layer" style="slidedelay: 6000; delayout: 500; transition2d: all;" -->
        		        
				    <!--LayerSlider background-->
				    <img class="ls-bg" src="img/<?=$image_path?>" alt="">
				    <?php
				    	echo $this->Html->link('', array('controller'=>'projects','action'=>'view',$project['Project']['id']),array( 'class'=>'ls-link'));

						$disp_data = $disp_data_array[$i-1];
						if(strlen($disp_data)>2){

				    ?>
						<div class="ls-s-1"
							style="overflow:hidden; left: 0; top: 350px; font-size: 18px; padding:10px; line-height: 25px; white-space: nowrap; color: #E9E4D9; background-color: #36160E"
							rel="delayin: 500; slidedirection: fade; slideoutdirection: fade;">
							<?php										
								// echo $disp_data;
								echo mb_substr($disp_data,0,45).'<br />';
								echo mb_substr($disp_data,46,45).'<br />';
								echo mb_substr($disp_data,91,44).'…';
							?>
						</div>
					<?php
						}
					?>
				</div>
<?php
		}
	}
?>
			</div>
		</div>
		<!-- End Slider Wrap -->

		<!-- Content -->
		<div class="content">

			<!-- Highlight -->
		  <div class="highlight"><div class="container">
		  <?php
		  
		  		$disp_num = rand(0, count($projects)-1);
				$disp_project = $projects[$disp_num];		  
		  ?>
		  	
		  	
					<div class="sixteen columns">
						<div class="highlight-inner">
							<div class="col-text">
								<h2 class="headline"><span class="accent">新着情報</span>：NEWS　<?=$disp_project['Project']['title']?></h2>
								<p><?=mb_substr($disp_project['Project']['objective'],0,90)?>...</p>
						  </div>
							<div class="col-btn">
								<?php
									echo $this->Html->link("このプロジェクトを応援する！", array('controller'=>'projects','action'=>'view',$disp_project['Project']['id']), array('class'=>'btn'));
								?>
							</div>
						</div>
					</div>
				</div></div>
			<!-- End Highlight -->
						
			<!-- Start Content --><div class="container main">

				<div class="portfolio-isotope">

					<div class="sixteen columns">
						<div class="portfolio-filter" data-label="並び替え">
							<ul>
								<li><a href="#" data-filter="*">All</a></li>
								<li><a href="#" id="createdate">新着順</a></li>
								<li><a href="#" id="wantamount">金額順</a></li>
								<li><a href="#" data-filter=".seo">あと一歩</a></li>
								<li><a href="#" id="sort">Title</a></li>
							</ul>
						</div>
					</div>

					<?php
						foreach($projects as $project ){
					?>

						<!-- Portfolio Item -->
						<div class="one-third column portfolio-item photography">
							<figure class="item-image">
								<?php
									echo $this->Html->image($project['Project']['image1'], array('url'=>array('controller'=>'projects','action'=>'view',$project['Project']['id'])));
								?>
								<div class="hart_progress">
									<?php
							  			echo $this->Html->image('hart/000.png'); 
									?>
								</div>								
							</figure>
						  <div class="item-info">
							  	<div class="progress">
							  	<?php
							  		echo $this->Html->image('people-beige-top.png'); 
							  		echo $this->Html->image('people-beige-top.png'); 
							  		echo $this->Html->image('people-beige-top.png'); 
							  		echo $this->Html->image('people-beige-top.png'); 
							  		echo $this->Html->image('people-beige-top.png'); 
							  	?>
							  	</div>
							  	<div class="time">
							  	<?php
							  		echo $this->Html->image('watch.png');
									
									$remain_date = date("d", strtotime("now")-strtotime($project['Project']['deadline']));
									echo "&nbsp;残り{$remain_date}日";
								?>
							  	</div>
							  	<div class="want_amount">
								  	<div class="amount_title">
								  		募集金額
								  	</div>
								  	<div class="value">
								  		&yen; <?=number_format($project['Project']['want_ammount'])?>
								  	</div>
							  	</div>
							    <div class="from">
							  	<?php							  								  	
							  		echo $this->Html->image("flags/{$project['Project']['country']}.png");
									echo "&nbsp;by ".$project['User']['fbname'];
									if( isset($project['Team']['name']) ){
										echo "（{$project['Team']['name']}）";
									}
							  	?>
							  	</div>
								<h5 class="item-title" style="clear:both;">
									<?php
										echo $this->Html->link($project['Project']['title'],array('controller'=>'projects','action'=>'view',$project['Project']['id']));
									?>
								</h5>
								<div class="information">
									<div class="if_reach">
									<?php
										echo $this->Html->image('pegasus.png');
									?>
									達成すると
									</div>
									<p style="margin-left:10px;">
										誰が：<?=$project['Project']['reach']?><br />
										こうなる：<?=$project['Project']['result']?>
									</p>
									<div class="special">
									<?php
										echo $this->Html->image('privilege.png');
									?>
									特典
									</div>
									<p style="margin:0px 0px 0px 10px; padding:0px 0px 15px 0px">
										<?=$project['Project']['special']?>
									</p>
								</div>
							</div>
							<div class="hidden_create_date">
								<?=$project['Project']['created']?>
							</div>
							<div class="hidden_total_progress">
								0
							</div>
							<div class="hidden_want_amount">
								<?=$project['Project']['want_ammount']?>
							</div>
							

						</div>
						<!-- End Portfolio Item -->
						<?php
							}
						?>


					</div>

				</div>

			</div>
		</div>
		<!-- End Content -->

			
		</div>

</div>