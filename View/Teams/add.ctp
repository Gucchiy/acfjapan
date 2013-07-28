<div class="teams form">
<?php echo $this->Form->create('Team'); ?>
	<fieldset>
		<legend><?php echo __('Add Team'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Belongings'), array('controller' => 'belongings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Belonging'), array('controller' => 'belongings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
