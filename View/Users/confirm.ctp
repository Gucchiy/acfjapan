<script>
	function OnSubmit()
	{
		if(document.userAddForm.agree[1].checked) return true;
		alert('「利用規約に同意する」をチェックする必要があります。')
		return false;		
	}
	
</script>


<!-- Content -->
<div class="content">
	
	<!-- Page Header -->
	<div class="page-header">
		<div class="container">
			<div class="sixteen columns">
				<h1 class="page-title">
					Member <span>join our awesome team to get many benefits</span>
				</h1>
				<ul class="breadcrumb">
					<?php
						// <li><a href="#">Home</a> <span class="divider">&raquo;</span></li>
						// <li class="active">Portfolio</li>
					?>
				</ul>
			</div>
		</div>
	</div>


	<!-- Start Content -->
	<div class="container main">

		<div class="row">
			<div class="portfolio-detail clearfix">

				<!-- Portfolio Title -->
				<div class="sixteen columns">
					<h3 class="title">
						<span>新規メンバー登録</span>
					</h3>
				</div>
				<!-- End Portfolio Title -->
				<!-- Portfolio Info -->
				<div class="ten columns">
					<fieldset>
					<p>ようこそ、<?=$user_data['User']['fbname']?>さん。登録を完了するために、利用規約に同意ください。</p>
					<?php 
						echo $this->Form->create('User',array('onsubmit'=>'return OnSubmit()','name'=>'userAddForm'));
						
						echo $this->Form->input('agree', array('type'=>'checkbox','label'=>'<a href="#">利用規約</a>に同意する','div'=>'input checkbox required','name'=>'agree'));
						
						echo $this->Form->end(__('新規登録')); ?>
					</fieldset>

				</div>

			</div>
		</div>
	</div>
</div>


