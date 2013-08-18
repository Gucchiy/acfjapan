<!-- Content -->
<div class="content">
	
	<!-- Page Header -->
	<div class="page-header">
		<div class="container">
			<div class="sixteen columns">
				<h1 class="page-title">
					Login <span>join our awesome team to get many benefits</span>
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
						<span>メンバーログイン</span>
					</h3>
				</div>
				<!-- End Portfolio Title -->
				<!-- Portfolio Info -->
				<div class="ten columns">
					<fieldset>
					<?php 
						echo $this->Form->create('User',array('name'=>'userLoginForm'));

						echo $this->Html->image('login-mail.png');
						
						echo $this->Form->input('email');
						echo $this->Form->input('password');
						
						echo $this->Form->input('preserve', array('type'=>'checkbox','label'=>'ログイン状態を保持する'));
						
						echo $this->Form->end(__('ログイン')); ?>
					</fieldset>

				</div>

				<div class="six columns">
					<script>
						function OnClick()
						{
							// ログイン状態の保持について、何か実装するべきかも
							return true;
						}
					</script>
					<fieldset><form name="loginFormFb">
					<?php
					
						echo $this->Html->image('login-fb.png',array('url'=>$fb_login_url_top,'onclick'=>'return OnClick()'));
						echo '<br /><br />';
						echo $this->Form->input('preserve', array('type'=>'checkbox','label'=>'ログイン状態を保持する','name'=>'preservefb'));
					?>
					</fieldset></form>

					<fieldset style="margin-top: 10px;">
					<?php
						echo $this->Html->image('login-other.png');
					?>
					<ul style="margin-top:10px;">
						<li>メールアドレスを忘れた方はこちら</li>
						<li><?=$this->Html->link('新規ユーザー登録はこちら',array('action'=>'add'))?></li>
					</ul>
					</fieldset>

				</div>

			</div>
		</div>
	</div>
</div>
