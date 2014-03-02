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
							RECOMMENDER
						</h1>
						<ul class="breadcrumb">
							<li><a href="<?=$root_url?>">TOP</a> <span class="divider">&raquo;</span></li>
							<li class="active">RECOMMENDER</li>
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
							<span>推薦する</span>
						</h2>
						
			　　　　　　<div class="callout block">
							<div class="callout-inner">
								<div class="col-text">
									<h3 class="headline">推薦者の皆さまへ</h3><br>
									<p>
社会貢献活動を行っている方々や、そのような活動にご興味を持っている方々を推薦することによって、企画者の方々がACF JAPANのサイト上でプロジェクトを立ち上げることができ、全員で応援することができます。一人ではプロジェクトを立ち上げる自信がない方でも、友達や知り合いの方々と一緒にプロジェクトを立ち上げ、成功に導きましょう！
</p>
								</div>
								
							</div>
						</div>			
				<div class="container main">

				<div class="row">
					<div class="sixteen columns">
						<div class="process">
							<div class="phase">
								<div class="icon">
									<?php
										echo $this->Html->image('player01.png');
										// <i class="icon-lightbulb"></i>
									?>
									<span></span>
								</div>
								<div class="description">
							<h3 class="headline">・どうやって推薦するの？</h3>このページの最下部にある、「推薦する」ボタンを押して頂き、所定の項目欄にご記入ください。企画者にも、推薦者からの推薦があった旨の連絡が届きます。

								</div>
							</div>
							<div class="phase">
								<div class="icon">
                                <?php
										echo $this->Html->image('player02.png');
										// <i class="icon-lightbulb"></i>
									?>
                                
									
									<span></span>
								</div>
								<div class="description">
									<h3 class="headline">・推薦されたらどうすればいいの？</h3>推薦者からの推薦後、企画者にはプロジェクト投稿用画面への案内状が届きます。プロジェクト投稿後、推薦者・企画者の両者の情報がプロジェクトページに掲載されます。

								</div>
							</div>
							<div class="phase">
								<div class="icon">
                                  <?php
										echo $this->Html->image('player03.png');
										// <i class="icon-lightbulb"></i>
									?>
									
									<span></span>
								</div>
								<div class="description">
									<h3 class="headline">・誰を推薦してもいいの？</h3>推薦者の知り合いの方に限定させて頂いております。また、プロジェクト投稿用の案内状をお送りしているので、企画者のメールアドレスをご記入ください。
								</div>
							</div>
							
							<br><br>
							
					</div>
				</div>

			</div>

									<div class="portfolio-isotope" style="padding-top: 100px;">
										
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

	</div>
</div>