<?php
	$now_url = $this->Html->url('',true);	
	$now_base_url = $this->Html->url(array('controller'=>'projects','action'=>'index'), true);
	$root_url = $this->Html->url("/");
	// echo $now_base_url;
?>

<!-- Content -->
<div class="content">

	<!-- Page Header -->
	<div class="page-header">
		<div class="container">
			<div class="sixteen columns">
				<h1 class="page-title">
					応援する
				</h1>
				<ul class="breadcrumb">
					<li><a href="<?=$root_url?>">TOP</a> <span class="divider">&raquo;</span></li>
					<li class="active">
						<?php
							echo $this->Html->link($project['Project']['title'], array('controller'=>'projects', 'action'=>'view', $project['Project']['id']));
						?>
						<span class="divider">&raquo;</span>
					</li>
					<li class="active">応援する</li>

				</ul>
			</div>
		</div>
	</div>

	<!-- Start Content -->
	<div class="container main">

		<div class="row">
			<div class="portfolio-detail clearfix">

				<h2 class="portfolio-title">
					<?=$project['Project']['title']?>
				</h2>
					<h3 style="margin-top:50px;">
						<?php
							echo $this->Html->image('privilege.png');
						?>
						商品を選択ください。
					</h3>
					<?php
						for( $i = 1; $i < 7; $i++ ){
															
							if( $project['Project']['donation_price'.$i] ){
								
								$url = $root_url."investments/exec/".$project['Project']['id']."/".$i;
					?>
							<div class="donation" style="width:190px;float:left;">
								<a href="<?=$url?>" class="donation clearfix">
									<?php
										if(strlen($project['Project']['donation_image'.$i])){
											echo $this->Html->image($project['Project']['donation_image'.$i]); 												
										}

									?>
									<p class="price">&yen; <?=number_format($project['Project']['donation_price'.$i])?></p>
									<?=$project['Project']['donation_text'.$i];?>
								</a>
					
							</div>
					<?php
							}
						}						
					?>
			</div>
		</div>

	</div>

</div>
<!-- End Content -->
