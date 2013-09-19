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
							PLAYER <span>Join our study tour for a life like experience!</span>
						</h1>
						<ul class="breadcrumb">
							<li><a href="<?=$root_url?>">TOP</a> <span class="divider">&raquo;</span></li>
							<li class="active">PLAYER</li>
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
							<span>参加する</span>
						</h2>
						
			　　　　　　<div class="callout block">
							<div class="callout-inner">
								<div class="col-text">
									<h3 class="headline">参加する（プレイヤーの皆さまへ）</h3><br>
									<p>貴方は「プレイヤー」として、こうしたプロジェクトに「参加」し、現地交流ができます。スタディツアー/ボランティア活動としてプロジェクトが行われる現地へ直接参加し、現地交流を通じて理解を深めることができます。プロジェクトページ毎にスタディツアー専用の交流掲示板がございますので、プランナーと共に皆様で交流してください。ボランティア体験や現地の人々との触れ合いを含んだスタディツアーは、きっとあなたの人生を豊かにするでしょう！


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
										echo $this->Html->image('history.png');
										// <i class="icon-lightbulb"></i>
									?>
									<span>スタディツアー</span>
								</div>
								<div class="description">
							<h3 class="headline">・どうやって参加するの？</h3>各プロジェクトページの中の＜スタディツアー（Link貼る）＞の中で、プランナー（企画者）や他のプレイヤー（参加者）と交流しながら、日程・予算・持ち物・見たい場所などを決定していきます。
								</div>
							</div>
							<div class="phase">
								<div class="icon">
									<i class="icon-brush"></i>
									<span>予算</span>
								</div>
								<div class="description">
									<h3 class="headline">・どれくらいの費用がかかるの？</h3>ある程度人数がまとまるため安くいける！その代わり海外だと5000円、国内だと3000円がプランナーに寄付される。それ相当の特典がもらえるのも嬉しいポイントです。
								</div>
							</div>
							<div class="phase">
								<div class="icon">
									<i class="icon-cogwheels"></i>
									<span>あああ</span>
								</div>
								<div class="description">
									<h3 class="headline">・ああああああ</h3>あああああああああああああああああああ
								</div>
							</div>
							<div class="phase">
								<div class="icon">
									<i class="icon-display"></i>
									<span>いいい</span>
								</div>
								<div class="description">
									<h3 class="headline">・いいいいいい</h3>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</div>
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