<div class="waits form">
<?php echo $this->Form->create('Wait'); ?>
	<fieldset>
		<legend><?php echo __('Add Wait'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Waits'), array('action' => 'index')); ?></li>
	</ul>
</div>
