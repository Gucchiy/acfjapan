<!-- Content -->
<div class="content">

	<!-- Start Content -->
	<div class="container main">
		
<div class="projects form">
<?php echo $this->Form->create('Project'); ?>
	<fieldset>
		<legend><?php echo __('Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('team_id');
		echo $this->Form->input('title');
		echo $this->Form->input('country');
		echo $this->Form->input('reach');
		echo $this->Form->input('result');
		echo $this->Form->input('special');
		echo $this->Form->input('overview');
		echo $this->Form->input('objective');
		echo $this->Form->input('activity_overview');
		echo $this->Form->input('activity');
		echo $this->Form->input('donation_text');
		echo $this->Form->input('content');
		echo $this->Form->input('want_ammount');
		echo $this->Form->input('deadline');
		echo $this->Form->input('status');
		echo $this->Form->input('type');
		echo $this->Form->input('price');
		echo $this->Form->input('image1');
		echo $this->Form->input('image2');
		echo $this->Form->input('image3');
		echo $this->Form->input('donation_price1');
		echo $this->Form->input('donation_price2');
		echo $this->Form->input('donation_price3');
		echo $this->Form->input('donation_price4');
		echo $this->Form->input('donation_price5');
		echo $this->Form->input('donation_price6');
		echo $this->Form->input('donation_text1');
		echo $this->Form->input('donation_text2');
		echo $this->Form->input('donation_text3');
		echo $this->Form->input('donation_text4');
		echo $this->Form->input('donation_text5');
		echo $this->Form->input('donation_text6');
		echo $this->Form->input('donation_image1');
		echo $this->Form->input('donation_image2');
		echo $this->Form->input('donation_image3');
		echo $this->Form->input('donation_image4');
		echo $this->Form->input('donation_image5');
		echo $this->Form->input('donation_image6');
		echo $this->Form->input('slide1');
		echo $this->Form->input('slide2');
		echo $this->Form->input('slide3');
		echo $this->Form->input('slide4');
		echo $this->Form->input('tour_title');
		echo $this->Form->input('tour_abstract');
		echo $this->Form->input('tour_image');
		echo $this->Form->input('tour_participations');
		echo $this->Form->input('tour_location');
		echo $this->Form->input('tour_from');
		echo $this->Form->input('tour_date');
		echo $this->Form->input('tour_stay');
		echo $this->Form->input('tour_cost');
		echo $this->Form->input('tour_bring');
		echo $this->Form->input('tour_special');
		echo $this->Form->input('tour_content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Project.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Project.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entries'), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry'), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Investments'), array('controller' => 'investments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investment'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participations'), array('controller' => 'participations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participation'), array('controller' => 'participations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Comments'), array('controller' => 'project_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Comment'), array('controller' => 'project_comments', 'action' => 'add')); ?> </li>
	</ul>
</div>

	</div>
</div>
