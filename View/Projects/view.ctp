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
							<h3><?=$project['User']['fbname']?></h3>
							<p>コンテンツ</p>
						</div>
						
					</div>
					
					<div class="fb-like" data-href="<?=$now_url?>" data-send="false" data-width="130" data-show_faces="false" data-font=""></div>
					
					<div class="project clearfix">
						
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

							echo $this->Form->create('ProjectComment');
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
