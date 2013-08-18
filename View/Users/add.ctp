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
					<?php 
						echo $this->Form->create('User',array('onsubmit'=>'return OnSubmit()','name'=>'userAddForm'));

						echo $this->Html->image('member-mail.png');
						
						echo $this->Form->input('email');
						echo $this->Form->input('fbname', array('label'=>'お名前'));
						echo $this->Form->input('password');
						echo $this->Form->input('password_confirm', array('type'=>'password','label'=>'Password確認用', 'div'=>'input passwordd required'));
						
						echo $this->Form->input('agree', array('type'=>'checkbox','label'=>'<a href="#">利用規約</a>に同意する','div'=>'input checkbox required','name'=>'agree'));
						
						echo $this->Form->end(__('新規登録')); ?>
					</fieldset>

				</div>

				<div class="six columns">
					<script>
						function OnClick()
						{
							if(document.addFormFb.agreefb[1].checked) return true;
							alert('「利用規約に同意する」をチェックする必要があります。');
							return false;
						}
					</script>
					<fieldset><form name="addFormFb">
					<?php
					
						echo $this->Html->image('member-fb.png',array('url'=>$fb_login_url_top,'onclick'=>'return OnClick()'));
						echo '<br /><br />';
						echo $this->Form->input('agree', array('type'=>'checkbox','label'=>'<a href="#">利用規約</a>に同意する','div'=>'input checkbox required','name'=>'agreefb'));
					?>
					</fieldset></form>

					<fieldset style="margin-top: 10px;">
					<?php
						echo $this->Html->image('member-other.png');
					?>
					<ul style="margin-top:10px;">
						<li><a href="<?=$fb_login_url_top?>">facebook でログイン</a></li>
						<li>メールアドレスでログイン</li>
					</ul>
					
					<?php
						echo $this->Form->create('User',array('controller'=>'Users','action'=>'login'));

						echo $this->Form->input('email');
						echo $this->Form->input('password');
										
						echo $this->Form->end(__('ログイン'));
					?>
										
					</fieldset>

				</div>

			</div>
		</div>
	</div>
</div>


