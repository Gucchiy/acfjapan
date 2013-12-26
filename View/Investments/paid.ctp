<?php
	$now_url = $this->Html->url('',true);	
	$now_base_url = $this->Html->url(array('controller'=>'projects','action'=>'index'), true);
	$root_url = $this->Html->url("/",true);
	$num = $investment['Investment']['num'];
	// print_r($this->data);
	// echo $now_base_url;
	// echo $num;
	// echo $root_url;
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
							echo $this->Html->link('PROJECT', array('controller'=>'projects', 'action'=>'view', $investment['Project']['id']));
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
					<?=$investment['Project']['title']?>
				</h2>
				<!-- Portfolio Info -->
				<div class="elevent columns">


					<h3 style="margin-top:50px;">
						<?php
							echo $this->Html->image('privilege.png');
						?>
						こちらの商品の購入を完了しました。ご購入ありがとうございます。
					</h3>
					<?php
						// $url = $root_url."investments/exec/".$project['Project']['id']."/".$i;
						// <div class="donation" style="width:190px;float:left;">
					?>
						<div class="donation">
						<?php
							if(strlen($investment['Project']['donation_image'.$num])){
								echo $this->Html->image($investment['Project']['donation_image'.$num]); 												
							}

						?>
						<p class="price">&yen; <?=number_format($investment['Project']['donation_price'.$num])?></p>
						<?=$investment['Project']['donation_text'.$num];?>
		
					</div>
					
					<p>個数：<?=$investment['Investment']['amount']?></p>
					<p>合計：<?=number_format($investment['Investment']['total'])?>円</p>

					<h3>商品を下記住所にお送りいたしますので、今しばらくお待ちください。</h3>
					<p><?=$investment['Investment']['address']?></p>

				</div>
				<!-- End Portfolio Info -->


			</div>
		</div>

	</div>

</div>
<!-- End Content -->
