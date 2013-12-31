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
							テストツール
						</h1>
						<ul class="breadcrumb">
							<li><a href="<?=$root_url?>">TOP</a> <span class="divider">&raquo;</span></li>
							<li class="active">迷惑メール化のチェッカー</li>
						</ul>
					</div>
				</div>
			</div>

		<!-- Start Content -->
	
			
<div class="container main">
				<div class="sixteen columns"></div>
                
                
                <h2 class="title">
							<span>迷惑メール化するメールのチェック</span>
						</h2>

				<div class="thirteen columns">
					<div class="row">
					<?php
					  // <form id="contact-form" class="form" method="post" action="php/contact.php">
						echo $this->Form->create('Check', array('class'=>'form'));
					?>			

						  		
						
			　　　　　　<div class="callout block">
							<div class="callout-inner">
								<div class="col-text">
									
									<p>このフォームを用いて、acfjapan.com ドメインからのメールを送信できます。各種メールが迷惑メールに入るかどうかを確認できます。</p>
								</div>
								
							</div>
						</div>

							<?php
								echo $this->Form->input('email', array('label'=>'宛先メールアドレス'));
								echo $this->Form->input('subject', array('label'=>'subject'));
								echo $this->Form->textarea('content', array('style'=>'width:60em;height:30em;'));
							?>
                            
                            
                            <div class="alert">
                            	送信後、迷惑メールに入った場合、「迷惑メールではない」処理を行ってください。
                            </div>

							<div class="button-row">
								<button type="submit" class="btn">送信する</button>
							</div>
						<?php
							echo $this->Form->end();
						// </form>
						?>

					</div>
				</div>

			</div>
</div>