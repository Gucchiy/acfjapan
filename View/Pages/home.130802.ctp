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

<!-- Slider Wrap -->
<div class="slider-wrap">

	<!--LayerSlider begin-->
	<div class="layerslider" style="height: 440px;" 
		data-hover-bottom-nav="true" data-show-bar-timer="true" data-show-circle-timer="false">

		<!-- LayerSlider layer (Hot Air Balloon) -->
		<div class="ls-layer" style="slidedelay: 6000; delayout: 500; transition2d: all;">
        

		    <!--LayerSlider background-->
		    <?php
		    	echo $this->Html->image("demo/slides/dynamic/bg_1.jpg", array("class"=>"lg-bg"));
				echo $this->Html->image("demo/slides/dynamic/balloon.png", 
					array("class"=>"ls-s-1", "style"=>"left: 160px; top: 50px", "rel"=>"slidedirection: left; scalein: 0.2; durationout: 2000; scaleout: 0.5; durationin: 4000; durationout: 2000;"));
				
			?>
		    
			<div class="ls-s-1" 
				style="padding: 10px 20px; border-radius: 3px; background-color: #333333; font-size: 26px; font-weight: 300; white-space: nowrap; color: #ffffff; left: 620px; top: 100px;"
				rel="slidedirection: fade; slideoutdirection: fade; delayin: 2000; scalein: 2; durationin: 1500;">
				カンボジアの女の子に教育の機会を！
			</div>

			<div class="ls-s-1"
				style="left: 620px; top: 175px; font-size: 14px; line-height: 25px; white-space: nowrap; color: #666666;"
				rel="delayin: 3000; slidedirection: fade; slideoutdirection: bottom;">
					5000円の支援で、この子たちが半年間学べる●●●●<br>
                    あああああああああああああああああ
			</div>
		</div>

		<!-- LayerSlider layer (Girl with iPad) -->
		<div class="ls-layer" style="slidedelay: 6000; delayout: 1200; transition2d: all;">

			<?php
			
				$this->Html->image("demo/slides/dynamic/bg_2.jpg", array("class"=>"ls-bg"));
				$this->Html->image("demo/slides/dynamic/girl.png", array("class"=>"ls-s-1", "style"=>"left: 382px; top: 60px;", 
					"rel"=>"slidedirection: bottom; slideoutdirection: bottom; durationout: 750; durationin: 750; delayin: 750; delayout: 1000;"));
				$this->Html->image("demo/slides/dynamic/imac.png", array("class"=>"ls-s-1", "style"=>"left: 687px; top: 100px;", 
					"rel"=>"slidedirection: right; slideoutdirection: right; durationout: 750; durationin: 750; delayout: 1000;"));
				$this->Html->image("demo/slides/dynamic/iphone.png", array("class"=>"ls-s-1", "style"=>"left: 697px; top: 260px;", 
					"rel"=>"slidedirection: top; slideoutdirection: right; durationout: 750; durationin: 750; delayin: 500; delayout: 1000;"));
			
			?>

			<div class="ls-s-1" 
				style="padding: 10px 20px; border-radius: 3px; background-color: #ffffff; font-size: 26px; color: #181818; white-space: nowrap; left: 80px; top: 90px;"
				rel="slidedirection: fade; slideoutdirection: left; delayin: 1500; delayout: 1000; durationin: 500; durationout: 500;">
				Why do we &nbsp;&nbsp; Youxi?
			</div>
			<div class="ls-s3 accent" 
				style="font-size: 18px; left: 239px; top: 108px;"
				rel="slidedirection: fade; scalein: 0; delayin: 1500; delayout: 750; scaleout: 3;">
				<i class="icon-heart"></i>
			</div>

			<div class="ls-s-1" 
				style="font-size: 14px; color: #787878; left: 90px; top: 172px;"
				rel="slidedirection: bottom; slideoutdirection: bottom; delayin: 2500; durationin: 250; durationout: 400; delayout: 800;">
				<span style="margin-right: 5px;"><i class="icon-ok-2"></i></span> Fully Responsive Layout
			</div>
			<div class="ls-s-1" 
				style="font-size: 14px; color: #787878; left: 90px; top: 206px;"
				rel="slidedirection: bottom; slideoutdirection: bottom; delayin: 2700; durationin: 250; durationout: 400; delayout: 600;">
				<span style="margin-right: 5px;"><i class="icon-ok-2"></i></span> Retina Display Ready
			</div>
			<div class="ls-s-1" 
				style="font-size: 14px; color: #787878; left: 90px; top: 240px;"
				rel="slidedirection: bottom; slideoutdirection: bottom; delayin: 2900; durationin: 250; durationout: 400; delayout: 400;">
				<span style="margin-right: 5px;"><i class="icon-ok-2"></i></span> Clean and Professional Design
			</div>
			<div class="ls-s-1" 
				style="font-size: 14px; color: #787878; left: 90px; top: 274px;"
				rel="slidedirection: bottom; slideoutdirection: bottom; delayin: 3100; durationin: 250; durationout: 400; delayout: 200;">
				<span style="margin-right: 5px;"><i class="icon-ok-2"></i></span> W3C Compliant HTML5 &amp; CSS3
			</div>
			<div class="ls-s-1" 
				style="font-size: 14px; color: #787878; left: 90px; top: 308px;"
				rel="slidedirection: bottom; slideoutdirection: bottom; delayin: 3300; durationin: 250; durationout: 400;">
				<span style="margin-right: 5px;"><i class="icon-ok-2"></i></span> Premium Plugins Included
			</div>
		</div>

		<!-- LayerSlider layer (Browsers) -->
		<div class="ls-layer" style="slidedelay: 6000; delayout: 1200; transition2d: all;">

			<?php
				$this->Html->image("demo/slides/dynamic/bg_31.jpg", array("class"=>"ls-bg"));
				$this->Html->image("demo/slides/dynamic/chrome.png", array("class"=>"ls-s-1", "style"=>"left: 222px; top: 280px;", 
					"rel"=>"slidedirection: top; slideoutdirection: right; rotateout: 180; rotatein: -360; durationout: 1500; durationin: 2000; delayin: 1500; delayout: 1000; easingin: easeOutBounce;"));
			?>

			<div class="ls-s3"
				style="left: 216px; top: 385px; color: #ffffff; font-size: 13px; padding: 5px 10px;"
				rel="slidedirection: fade; scalein: 4; delayin: 4000; easingin: easeOutExpo;">
				Google Chrome
			</div>

			<img class="ls-s-1" src="demo/slides/dynamic/firefox.png" 
				style="left: 342px; top: 280px;"
				rel="slidedirection: top; slideoutdirection: right; rotateout: 180; rotatein: 360; durationout: 1500; durationin: 2000; delayin: 2000; delayout: 1000; easingin: easeOutBounce;" alt="">
			<div class="ls-s3"
				style="left: 363px; top: 385px; color: #ffffff; font-size: 13px; padding: 5px 10px;"
				rel="slidedirection: fade; scalein: 4; delayin: 4000; easingin: easeOutExpo;">
				Firefox
			</div>

			<img class="ls-s-1" src="demo/slides/dynamic/safari.png" 
				style="left: 462px; top: 280px;"
				rel="slidedirection: top; slideoutdirection: right; rotateout: 180; rotatein: -360; durationout: 1500; durationin: 2000; delayin: 2500; delayout: 1000; easingin: easeOutBounce;" alt="">
			<div class="ls-s3"
				style="left: 486px; top: 385px; color: #ffffff; font-size: 13px; padding: 5px 10px;"
				rel="slidedirection: fade; scalein: 4; delayin: 4000; easingin: easeOutExpo;">
				Safari
			</div>

			<img class="ls-s-1" src="demo/slides/dynamic/opera.png" 
				style="left: 582px; top: 280px;"
				rel="slidedirection: top; slideoutdirection: right; rotateout: 180; rotatein: 360; durationout: 1500; durationin: 2000; delayin: 2000; delayout: 1000; easingin: easeOutBounce;" alt="">
			<div class="ls-s3"
				style="left: 605px; top: 385px; color: #ffffff; font-size: 13px; padding: 5px 10px;"
				rel="slidedirection: fade; scalein: 4; delayin: 4000; easingin: easeOutExpo;">
				Opera
			</div>

			<img class="ls-s-1" src="demo/slides/dynamic/ie.png" 
				style="left: 702px; top: 280px;"
				rel="slidedirection: top; slideoutdirection: right; rotateout: 180; rotatein: -360; durationout: 1500; durationin: 2000; delayin: 1500; delayout: 1000; easingin: easeOutBounce;" alt="">
			<div class="ls-s3"
				style="left: 730px; top: 385px; color: #ffffff; font-size: 13px; padding: 5px 10px;"
				rel="slidedirection: fade; scalein: 4; delayin: 4000; easingin: easeOutExpo;">
				IE8+
			</div>

			<div class="ls-s-1" 
				style="padding: 10px 20px; border-radius: 3px; background-color: #ffffff; font-weight: 300; font-size: 26px; color: #181818; white-space: nowrap; left: 50%; top: 90px;"
				rel="slidedirection: fade; slideoutdirection: left; delayout: 1000; durationin: 2000; durationout: 500;">
				Youxi Never Abandons Any of These!
			</div>
		</div>

		<!-- LayerSlider layer (Green Planet) -->
		<div class="ls-layer" style="slidedelay: 5000; delayout: 1200; transition2d: all;">

			<!--LayerSlider background-->
			<img class="ls-bg" src="demo/slides/dynamic/bg_3.jpg" alt="">

			<!--LayerSlider sublayers-->
			<img class="ls-s-1" src="demo/slides/dynamic/earth.png" 
				style="left: 382px; top: 60px;"
				rel="slidedirection: right; slideoutdirection: right; scalein: 0.5; rotatein: -32; rotateout: -32; durationout: 2000; durationin: 2000; easingin: easeOutQuad;" alt="">

			<div class="ls-s-1" 
				style="padding: 10px 20px; border-radius: 3px; background-color: #3d5066; font-weight: 300; font-size: 26px; color: #ffffff; white-space: nowrap; left: 80px; top: 90px;"
				rel="slidedirection: fade; slideoutdirection: left; rotatein: 180; delayin: 2000;">
				So what are you waiting for?
			</div>

			<div class="ls-s-1" 
				style="padding: 10px 20px; border-radius: 3px; background-color: #ffffff; font-weight: 300; font-size: 20px; color: #181818; white-space: nowrap; left: 80px; top: 160px;"
				rel="slidedirection: left; slideoutdirection: fade; scaleout: 4; delayin: 2800;">
				<a href="http://www.themeforest.net" style="color: #181818;">&raquo; Buy Now on ThemeForest!</a>
			</div>
		</div>

	</div>
	<!-- LayerSlider end -->

</div>
<!-- End Slider Wrap -->
