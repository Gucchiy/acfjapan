<div class="aids form">
<?php echo $this->Form->create('Aid'); ?>
	<fieldset>
		<legend><?php echo __('Add Aid'); ?></legend>
	<?php
		echo $this->Form->input('participation_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Aids'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Participations'), array('controller' => 'participations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participation'), array('controller' => 'participations', 'action' => 'add')); ?> </li>
	</ul>
</div>
