<?php
	$root_url = $this->Html->url("/");
	// $this->Html->url($root_url, true);
?>


<style>

</style>


<!-- Content -->
<div class="content">


	
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="sixteen columns">
						<h1 class="page-title">
							PARTNER <span>Let's lead the project to success!</span>
						</h1>
						<ul class="breadcrumb">
							<li><a href="<?=$root_url?>">TOP</a> <span class="divider">&raquo;</span></li>
							<li class="active">PARTNER</li>
						</ul>
					</div>
				</div>
			</div>

		<!-- Start Content -->
	
	
	<div class="container main">
		<div class="row">
			<div class="portfolio-detail clearfix">
								
				<div class="sixteen columns">
				
					
				
									<h2 class="title">
							<span>応援する</span>
						</h2>
						
			　　　　　　<div class="callout block">
							<div class="callout-inner">
								<div class="col-text">
									<h3 class="headline">応援者の皆さまへ</h3><br>
あなたは「応援者」として、プロジェクトを「応援」することができます。商品の購入を通じて、アジアにおける子供・女性たちに夢と希望を与えるためのプロジェクトを応援することができます。日本を含むアジアの社会問題に取り組むプロジェクトの中で、貴方が特に共感したプロジェクトを応援しましょう！ACF JAPANではクレジットカード決済のみご用意があります。一度決済した場合、商品の性質上キャンセル等が出来ませんので予めご了承ください。
									<p

</p>

								</div>


								
							</div>
						</div>			
				</div>


						<div class="portfolio-isotope" style="padding-top: 30px;">
							
							<?php
								foreach($projects as $project ){
									$total_investment = 0;
									foreach($project['Investment'] as $investment ){
										
										$total_investment += $investment['total'];
									}
									$want_amount = $project['Project']['want_ammount'];
		
									$progress_plane = $total_investment/$want_amount;
									$progress = ceil($progress_plane*10.0/2);
									if($progress > 5){$progress = 5;}
									// echo $progress.'&nbsp;';
									$progress_5 = MROUND($progress_plane*100,5);
									// echo $progress_5;
									$hart_filename = sprintf("hart/%03d.png",$progress_5);
							
									$remain_date = ceil((strtotime($project['Project']['deadline'])-(strtotime("now")))/(60*60*24));

							?>
		
								<!-- Portfolio Item -->
								<div class="one-third column portfolio-item photography">
									<figure class="item-image">
										<?php
											echo $this->Html->image($project['Project']['image1'], array('url'=>array('controller'=>'projects','action'=>'view',$project['Project']['id'])));
										?>
										<div class="hart_progress">
											<?php
												echo $this->Html->image($hart_filename);
											?>
										</div>								
									</figure>
								  <div class="item-info">
									  	<div class="progress">
									  	<?php
									  		for($i=0;$i<$progress;$i++){
										  		echo $this->Html->image('people-orange-top.png'); 				  			
									  		}
									  		for($i=$progress;$i<5;$i++){
										  		echo $this->Html->image('people-beige-top.png'); 				  			
									  		}
									  	?>
									  	</div>
									  	<div class="time">
									  	<?php
									  		echo $this->Html->image('watch.png');
											
											// $remain_date = date("d", strtotime("now")-strtotime($project['Project']['deadline']));
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
		</div>

	</div>
</div>