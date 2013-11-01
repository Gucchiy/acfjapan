<?php
	$now_url = $this->Html->url('',true);
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=673806045966655";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<style>
	
	
</style>

<div class="content">
<div class="container main"><div class="row"><div class="portfolio-detail clearfix">

		<div class="sixteen columns">
			<h2 class="portfolio-title">
				<?=$project['Project']['title']?>
			</h2>
		</div>


		<div class="eleven columns user_info clearfix" style="clear:both">
			<div class="face">
				<img src='https://graph.facebook.com/<?=$project['User']['fbid']?>/picture' />			
			</div>
			<div class="data">
				<h3><?=$project['User']['fbname']?></h3>
				<p>コンテンツ</p>
			</div>
			
		</div>
		
		<div class="eleven columns project">
		
			<div id="fb-root"></div><script>(function(d, s, id) {</br>var js, fjs = d.getElementsByTagName(s)[0];</br>if (d.getElementById(id)) {return;}</br>js = d.createElement(s); js.id = id;</br>js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";</br>fjs.parentNode.insertBefore(js, fjs);</br>}(document, 'script', 'facebook-jssdk'));</script></br><div class="fb-like" data-href="<?=$now_url?>" data-send="false" data-width="130" data-show_faces="false" data-font=""></div>
		
			<?php
				// print_r($project['User']);
				echo $this->Html->image($project['Project']['image1']);
				if(strlen($project['Project']['overview'])){
					echo "<p>".$project['Project']['overview']."</p>";
				}
		
			?>
			
			<h2>
				<?php
					echo $this->Html->image('title.png');
				?>
				&nbsp;&nbsp;事業目標
			</h2>
			<P>
				<?php
					echo $project['Project']['objective'];
				?>
			</P>
			<?php
				if(strlen($project['Project']['image2'])){
					echo $this->Html->image($project['Project']['image2']);
				}	
			?>
			
			<h2>
				<?php
					echo $this->Html->image('title.png');
				?>
				&nbsp;&nbsp;主な活動
			</h2>
			<P>
				<?php
					echo $project['Project']['activity_overview'];
				?>
			</P>
			<h2>
				<?php
					echo $this->Html->image('title.png');
				?>
				&nbsp;&nbsp;プレイヤーの活動内容
			</h2>
			<P>
				<?php
					echo $project['Project']['activity'];
				?>
			</P>
			<?php
				if(strlen($project['Project']['image3'])){
					echo $this->Html->image($project['Project']['image3']);
				}
				
				echo $project['Project']['donation_text'];	
			?>
	
			<?php
				echo "test";
				echo $this->Form->create('ProjectComment');
				echo $this->Form->input('content',array('size'=>'50'));
				echo $this->Form->end('コメントする');
			
				// print_r($project['ProjectComment']);
			
				foreach($project['ProjectComment'] as $project_comment ){
	
					echo "<img src='https://graph.facebook.com/{$project_comment['User']['fbid']}/picture' />";
					
					echo "<p>{$project_comment['content']}</p>";
	//				print_r($project_comment);
	//				echo "<p>{$project_comment['ProjectComment']['content']}</p>";
	//				print_r( $project_comment['User'] );
				}
			
			?>
		</div>

	</div>

	<div class="four columns">
		<h2 style="">現在の支援総額</h2>
		<div class="hart_progress">
			<?php
				echo $this->Html->image("hart/000.png");
			?>
		</div>
		<p class="total_amount">&yen; 0円</p>
		<div class="time">
		<?php
	  		echo $this->Html->image('watch.png');
			
			$remain_date = date("d", strtotime("now")-strtotime($project['Project']['deadline']));
			echo "&nbsp;残り{$remain_date}日";
		?>			
		</div>
		<div class="box">
			<div class="brown_title">プレイヤー</div>
			<div class="value">現地での活動して応援</div>
		</div>
	  	<div class="progress">
	  	<?php
	  		echo $this->Html->image('people-beige.png'); 
	  		echo $this->Html->image('people-beige.png'); 
	  		echo $this->Html->image('people-beige.png'); 
	  		echo $this->Html->image('people-beige.png'); 
	  		echo $this->Html->image('people-beige.png'); 
	  	?>
	  	</div>
		<div class="box">
			<div class="brown_title">パートナー</div>
			<div class="value">特典をゲットして応援</div>
		</div>
		<div class="col-btn">
			<?php
				echo $this->Html->link("このプロジェクトを応援する！", array('controller'=>'projects','action'=>'view',$project['Project']['id']), array('class'=>'btn'));
			?>
		</div>
	</div>
			
	
</div></div></div>
	
</div>
