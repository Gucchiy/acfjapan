<style>

</style>


<!-- Content -->
<div class="content">


	
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="sixteen columns">
						<h1 class="page-title">
							CONTACT
						</h1>
						<ul class="breadcrumb">
							<li><a href="#">TOP</a> <span class="divider">&raquo;</span></li>
							<li class="active">CONTACT</li>
						</ul>
					</div>
				</div>
			</div>

		<!-- Start Content -->
	
			
<div class="container main">
				<div class="sixteen columns"></div>
                
                
                <h2 class="title">
							<span>お問い合わせフォーム</span>
						</h2>

				<div class="eleven columns">
					<div class="row">
					<?php
					  // <form id="contact-form" class="form" method="post" action="php/contact.php">
						echo $this->Form->create('Contact', array('class'=>'form'));
					?>			

						  		
						
			　　　　　　<div class="callout block">
							<div class="callout-inner">
								<div class="col-text">
									
									<p>ACF JAPANへのお問い合わせは、こちらのお問い合わせフォームから承っております。企画・参加・応援に関する内容の他、素晴らしい取り組みを行っている方々に関する情報提供も受け付けております。</p>
								</div>
								
							</div>
						</div>

							<?php
								// <div class="form-row"
								// <label for="contactform_name" class="form-label">お名前</label>
								//		<div class="form-item">
								echo $this->Form->input('name', array('label'=>'お名前'));
								// <input type="text" id="contactform_name" name="ContactForm[name]" class="required">
								//		</div>
								// </div>

								echo $this->Form->input('email', array('label'=>'メールアドレス'));
								
								echo $this->Form->input('contact_subject_id', array('label'=>'概　要','empty'=>'お選び下さい'));
								
								echo $this->Form->input('comment');
							?>
                            
                            
                            <div class="alert">
							ご返信は、5日以内（土・日・祝を除く）に対応させていただいておりますが、内容によってはご返信できない場合もございますので予めご了承いただけますようお願い申し上げます。また、5日以内に返信がない場合には、送信ができていない場合がございますので、お手数をおかけしますが再度お問い合わせいただけますようお願い申し上げます。
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

				<div class="five columns">
					<div class="row">
					  <h3 class="title">
							<span>Contact Info</span>
						</h3>

					  						<ul class="label-list">
							<li></li>
							<li></li>
							<li>
								<span class="label"><i class="icon-envelope"></i> Email</span>
								<span><a href="mailto:mail@acfjapan.com">mail［アット］acfjapan.com
								</a><br>
							  </span>
                              ※ こちらのお問い合わせフォームがお使いいただけない場合は、上記メールアドレス宛に内容をご送信下さい<br />
                              <br />
※ ［アット］を@に変換してご送信下さい
						  </li>
						</ul>
						
				  </div>
				</div>

			</div>
</div>