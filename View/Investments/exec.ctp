<?php
	$now_url = $this->Html->url('',true);	
	$now_base_url = $this->Html->url(array('controller'=>'projects','action'=>'index'), true);
	$root_url = $this->Html->url("/",true);
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

				<h2 class="portfolio-title">
					<?=$project['Project']['title']?>
				</h2>
				<!-- Portfolio Info -->
				<div class="five columns">


					<h3 style="margin-top:50px;">
						<?php
							echo $this->Html->image('privilege.png');
						?>
						こちらの商品を購入します。
					</h3>
					<?php
						// $url = $root_url."investments/exec/".$project['Project']['id']."/".$i;
						// <div class="donation" style="width:190px;float:left;">
					?>
						<div class="donation" >
						<?php
							if(strlen($project['Project']['donation_image'.$num])){
								echo $this->Html->image($project['Project']['donation_image'.$num]); 												
							}

						?>
						<p class="price">&yen; <?=number_format($project['Project']['donation_price'.$num])?></p>
						<?=$project['Project']['donation_text'.$num];?>
		
					</div>


				</div>
				<!-- End Portfolio Info -->

				<div class="eleven columns">
					<div class="row">
					<?php
					if(isset($investment_id)){
					?>
						<p>下記内容で購入を受け付けました。よろしければカード決済にお進みください。</p>
						<form action="<?=$settlement?>" method="post">
							
							<P>個数：<?=$this->data['Investment']['amount']?></P>
							<P>合計：<?=number_format($this->data['Investment']['total'])?>円</P>
							<p>お届け先:<?=$this->data['Investment']['address']?></p>
							<div class="button-row">
								<button type="submit" class="btn">カード決済手続きへ</button>
							</div>
							<input type="hidden" name="clientip" value="1011003469" />
							<input type="hidden" name="money" value="<?=$this->data['Investment']['total']?>" />
							<input type="hidden" name="sendid" value="<?=$investment_id?>" />
							<input type="hidden" name="success_url" value="<?=$root_url?>investments/paid/<?=$investment_id?>" />
							<input type="hidden" name="success_str" value="Back to ACF Japan" />
							<input type="hidden" name="failure_url" value="<?=$now_url?>" />
							<input type="hidden" name="failure_str" value="Back to ACF Japan"/>
							
						</form>
						
						
					<?php	
					}else{
					
						echo $this->Form->create('Investment', array('class'=>'form'));
					?>			

						  		
					<div style="padding:15px; margin-left:30px;" >
						個数 <select name="data[Investment][amount]" id="amount" style="width:5em;">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>						
						</select>
						<div id='total' style="font-size:15px"></div>

						<?php
							/*
							echo $this->Form->input('cardnum', array('label'=>'カードの種類','empty'=>'お選び下さい','type'=>'select', 'options'=>array('VISA','MASTER','UC')));
							echo $this->Form->input('cardname', array('label'=>'カード名義'));
							echo $this->Form->input('cardnum', array('label'=>'カード番号'));
							echo $this->Form->input('expdate', array('label'=>'カード有効期限','type'=>'date', 'dateFormat' => 'YM', 'monthNames' => false,'separator' => '/', 'style'=>'width:20%'));
							echo $this->Form->input('cardpass', array('label'=>'パスワード','type'=>'password'));
							 * 
							 */
							echo "商品をお届けする住所<br />";
							echo $this->Form->textarea('address', array('style'=>'width:30em;height:5em;'));
							echo $this->Form->hidden('total');
						?>
						<div class="button-row">
							<button type="submit" class="btn">購入手続きへ</button>
						</div>
					<?php
						echo $this->Form->end();
					// </form>
					?>
						
					</div>


					</div>
				</div>
				<script>
					var cost = <?=$project['Project']['donation_price'.$num]?>;
				
					function onSelect(){
						
						var total = $('#amount').val() * cost;
						$('#total').html( '合計: &yen;'+String( total ).replace( /(\d)(?=(\d\d\d)+(?!\d))/g, '$1,' ));
						$('input[name="data[Investment][total]"]').val( total );
					}


					$('select[id="amount"]').change( onSelect );
					// $('#total').html();
					onSelect();
					
				</script>
				<?php
				}
				?>

			</div>
		</div>

	</div>

</div>
<!-- End Content -->
