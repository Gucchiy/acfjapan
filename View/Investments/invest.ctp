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
							echo $this->Html->link('PROJECT', array('controller'=>'projects', 'action'=>'view', $project['Project']['id']));
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

				<!-- Portfolio Info -->
				<div class="sixteen columns">

					<h2 class="portfolio-title">
						<?=$project['Project']['title']?>
					</h2>
										
					
				</div>
				<!-- End Portfolio Info -->
			</div>
		</div>

	</div>

</div>
<!-- End Content -->
