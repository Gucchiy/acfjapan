<!-- Content -->
<div class="content">

	<!-- Start Content -->
	<div class="container main">

<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contact'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('contact_subject_id');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contact.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Contact.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contact Subjects'), array('controller' => 'contact_subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Subject'), array('controller' => 'contact_subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>

	</div>
</div>
