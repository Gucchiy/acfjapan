<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$root_url = $this->Html->url('/',true);
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- @font-face Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600">

	<?php
		echo $this->Html->meta('icon');


		echo $this->Html->css('cake.generic');

/*
		echo $this->Html->css('normalize');
		echo $this->Html->css('skeleton');
		echo $this->Html->css('typography');
		echo $this->Html->css('layout');
		echo $this->Html->css('form');
		echo $this->Html->css('shortcodes');
		echo $this->Html->css('elements');
		echo $this->Html->css('ie.css');
		echo $this->Html->css('jquery.minicolors');
		echo $this->Html->css('youxi.themer');
*/		
		echo $this->Html->css('icons/glyphicons/style');
		echo $this->Html->css('icons/zocial/zocial');
		echo $this->Html->css('icons/social/social');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
/*		
		echo $this->Html->script('jquery-1.9.1.min');
		echo $this->Html->script('jflickrfeed.min');
		echo $this->Html->script('jquery.tweet.min');
		echo $this->Html->script('jquery.fitvids.min');
		echo $this->Html->script('gmap3.min');
		echo $this->Html->script('jquery.isotope.min');
		echo $this->Html->script('jquery.carouFredSel-6.2.0-packed');
		echo $this->Html->script('jquery.flexslider-min');
		echo $this->Html->script('jquery.timeline.min');
		echo $this->Html->script('jquery.magnific-popup.min');
		echo $this->Html->script('jquery-easing-1.3');
		echo $this->Html->script('jquerytransit');
		echo $this->Html->script('layerslider.transitions');
		echo $this->Html->script('layerslider.kreaturamedia.jquery.min');
		echo $this->Html->script('less-1.3.3.min');
		echo $this->Html->script('jquery.minicolors');
		echo $this->Html->script('youxi.themer.min');
		echo $this->Html->script('youxi.plugins.min');
		echo $this->Html->script('youxi.setup');
*/
?>
<!-- Stylesheets -->
<link rel="stylesheet" href="<?=$root_url?>assets/css/normalize.css">
<link rel="stylesheet" href="<?=$root_url?>assets/css/skeleton.css">
<link rel="stylesheet" href="<?=$root_url?>assets/css/typography.css">
<link rel="stylesheet" href="<?=$root_url?>assets/css/layout.css">
<link rel="stylesheet" href="<?=$root_url?>assets/css/form.css">
<link rel="stylesheet" href="<?=$root_url?>assets/css/shortcodes.css">
<link rel="stylesheet" href="<?=$root_url?>assets/css/elements.css">
<link rel="stylesheet" href="<?=$root_url?>assets/css/ie.css">

<!-- Icons -->
<link rel="stylesheet" href="<?=$root_url?>assets/icons/glyphicons/style.css">
<link rel="stylesheet" href="<?=$root_url?>assets/icons/zocial/zocial.css">
<link rel="stylesheet" href="<?=$root_url?>assets/icons/social/social.css">

<!-- LayerSlider CSS -->
<link rel="stylesheet" href="<?=$root_url?>plugins/layerslider/css/layerslider.css">

<!-- FlexSlider CSS -->
<link rel="stylesheet" href="<?=$root_url?>plugins/flexslider/flexslider.css">

<!-- Magnific Popup -->
<link rel="stylesheet" href="<?=$root_url?>plugins/magnificpopup/jquery.magnific-popup.css">


<!-- jQuery -->
<script src="<?=$root_url?>assets/js/jquery-1.9.1.min.js"></script>

<!-- Third Party Plugins -->
<script src="<?=$root_url?>plugins/jflickrfeed/jflickrfeed.min.js"></script>
<script src="<?=$root_url?>plugins/tweet/jquery.tweet.min.js"></script>
<script src="<?=$root_url?>plugins/fitvids/jquery.fitvids.min.js"></script>
<script src="<?=$root_url?>plugins/map/gmap3.min.js"></script>
<script src="<?=$root_url?>plugins/isotope/jquery.isotope.min.js"></script>
<script src="<?=$root_url?>plugins/caroufredsel/jquery.carouFredSel-6.2.0-packed.js"></script>
<script src="<?=$root_url?>plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="<?=$root_url?>assets/js/jquery.timeline.min.js"></script>
<script src="<?=$root_url?>plugins/magnificpopup/jquery.magnific-popup.min.js"></script>

<!-- LayerSlider Parallax 3D Slider -->
<script src="<?=$root_url?>plugins/layerslider/js/jquery-easing-1.3.js"></script>
<script src="<?=$root_url?>plugins/layerslider/js/jquerytransit.js"></script>
<script src="<?=$root_url?>plugins/layerslider/js/layerslider.transitions.js"></script>
<script src="<?=$root_url?>plugins/layerslider/js/layerslider.kreaturamedia.jquery.min.js"></script>

<!-- Themer Assets -->
<script src="<?=$root_url?>themer/less-1.3.3.min.js"></script>
<script src="<?=$root_url?>themer/minicolors/jquery.minicolors.js"></script>
<script src="<?=$root_url?>themer/youxi.themer.min.js"></script>
<link rel="<?=$root_url?>stylesheet" href="themer/minicolors/jquery.minicolors.css">
<link rel="<?=$root_url?>stylesheet" href="themer/youxi.themer.css">

<!-- Template Script -->
<script src="<?=$root_url?>assets/js/youxi.plugins.min.js"></script>
<script src="<?=$root_url?>assets/js/youxi.setup.js"></script>

<?php
	echo $this->Html->css('acf');
?>


</head>
<?php
	$root_url = $this->Html->url("/");
	// $this->Html->url($root_url, true);
?>

<body class="wide">
	
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=673806045966655";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Main Content Wrap (1024px wide by default) -->
	<div class="main-wrap">

		<!-- Header -->
		<header class="header">
			<div class="container">
				<div class="sixteen columns">
					<div class="header-row">
						<div class="header-col brand">
							<a href="<?=$root_url?>" class="logo"><?php echo $this->Html->image('brand-logo.png', array('alt'=>'ACF'))?></a>
							<span class="tagline">ACF－アジア・クラウド・ファンディング―</span>
						</div>

						<nav class="header-col navigation">
							<?php
								if(isset($fb_login_url)){
									echo $this->Html->link('新規登録', array('controller'=>'users','action'=>'add'),array('class'=>'newuser'));
									echo $this->Html->link('ログイン', array('controller'=>'users','action'=>'login'),array('class'=>'login'));
									echo $this->Html->link('Facebook ログイン', $fb_login_url,array('class'=>'fblogin'));
									
								}else{

									if(isset($fb_logout_url))
										echo $this->Html->link('ログアウト', $fb_logout_url, array('class'=>'login') );
									
								}
							?>
							
							<ul>
								<li class="active">
									<a href="index.html">応援する</a>
									
								</li>
								<li>
									<a href="#">参加する</a>
									
								</li>
								<li>
									<a href="#">企画する</a>
									
                                      
								</li>
								
								
								<li><a href="contact.html">ACFとは？</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

		<!-- Footer -->
		<footer class="footer">

			<!-- Footer Top -->
			<div class="footer-top"><div class="container">

					<!-- Text -->
					<div class="one-third column">
						<div class="footer-logo">
							<?php
								echo $this->Html->image('footer-logo.png', array('style'=>"width: 70px;", 'alt'=>'Youxi'));
							?>
						</div>
						<p>ACFアジア・クラウド・ファンディングでは、女性ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
					</div>

					<!-- Facebook -->
					<div class="one-third column">
						<div class="foot_fb">
							<div class="fb-like" data-href="http://acfjapan.com/" data-width="300" data-show-faces="true" data-send="true" style="margin:0px"></div>
						</div>

					</div>

					<!-- Tweets -->
					<div class="one-third column">
						<h4>MENU</h4>
                        <ul class="footer-nav">
							<li><a href="index.html">企画する</a></li>
							<li><a href="portfolio-3.html">参加する</a></li>
                            <li><a href="portfolio-3.html">応援する</a></li>
							<li><a href="blog.html">お問い合わせ</a></li>
							<li><a href="contact.html">Q＆A</a></li>
                            
					  </ul>
						<div class="tweets" data-twitter-username="envato" data-count="2"></div>
					</div>
				</div></div>

			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="seven columns">
						Copyright <a href="http://www.youxithemes.com">ACF</a>. All Rights Reserved.
					</div>
					<div class="nine columns">
						<ul class="footer-nav">
							<li><a href="index.html">利用規約</a></li>
							<li><a href="portfolio-3.html">特定商取引法上の表示</a></li>
							<li><a href="blog.html">個人情報保護方針</a></li>
							<li><a href="contact.html">運営会社</a></li>
                            
					  </ul>
					</div>
				</div>
			</div>
			
		</footer>
		<!-- End Foooter -->
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
