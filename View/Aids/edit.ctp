<div class="aids form">
<?php echo $this->Form->create('Aid'); ?>
	<fieldset>
		<legend><?php echo __('Edit Aid'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aid.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aid.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aids'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Participations'), array('controller' => 'participations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participation'), array('controller' => 'participations', 'action' => 'add')); ?> </li>
	</ul>
</div>
