<?php
	if( isset($fb_login_url)){

			echo $this->Html->div(
				'login',
				$this->Html->link(
					$this->Html->image('facebook_login.png', array('alt'=> __('CFacebookへログイン', true), 'border' => '0')),
					$fb_login_url,
					array('escape' => false)
				),
				array('escape'=>false)				
			);
	}else{
		
		if($fb_logout_url){
			
			echo $this->Html->link('ユーザーページへジャンプ', array('controller'=>'users','action'=>'index'));
			echo "<br /><br />\n";
			echo $this->Html->link('ログアウト', $fb_logout_url );
		}
	}
	
	// if( isset($fb_me) ){ print_r($fb_me);}
?>