<!-- Content -->
<div class="content">

	<!-- Start Content -->
	<div class="container main">

<div class="contactSubjects form">
<?php echo $this->Form->create('ContactSubject'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contact Subject'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContactSubject.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ContactSubject.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contact Subjects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>

	</div>
</div>
