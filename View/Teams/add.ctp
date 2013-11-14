<!-- Content -->
<div class="content">

	<!-- Start Content -->
	<div class="container main">

<div class="teams form">
<?php echo $this->Form->create('Team'); ?>
	<fieldset>
		<legend><?php echo __('Add Team'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('logo');
		echo $this->Form->input('image');
		echo $this->Form->input('content');
		echo $this->Form->input('content_image');
		echo $this->Form->input('abstract');
		echo $this->Form->input('abstract_image');
		echo $this->Form->input('team_name');
		echo $this->Form->input('team_location');
		echo $this->Form->input('team_tel');
		echo $this->Form->input('team_fax');
		echo $this->Form->input('team_email');
		echo $this->Form->input('team_establish');
		echo $this->Form->input('team_representation');
		echo $this->Form->input('team_role');
		echo $this->Form->input('team_value');
		echo $this->Form->input('team_image');
		echo $this->Form->input('history_year1');
		echo $this->Form->input('history_content1');
		echo $this->Form->input('history_year2');
		echo $this->Form->input('history_content2');
		echo $this->Form->input('history_year3');
		echo $this->Form->input('history_content3');
		echo $this->Form->input('history_year4');
		echo $this->Form->input('history_content4');
		echo $this->Form->input('history_year5');
		echo $this->Form->input('history_content5');
		echo $this->Form->input('history_year6');
		echo $this->Form->input('history_content6');
		echo $this->Form->input('history_year7');
		echo $this->Form->input('history_content7');
		echo $this->Form->input('history_year8');
		echo $this->Form->input('history_content8');
		echo $this->Form->input('history_year9');
		echo $this->Form->input('history_content9');
		echo $this->Form->input('history_year10');
		echo $this->Form->input('history_content10');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Belongings'), array('controller' => 'belongings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Belonging'), array('controller' => 'belongings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>

	</div>
</div>