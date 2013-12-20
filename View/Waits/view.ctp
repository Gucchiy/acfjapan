<div class="waits view">
<h2><?php  echo __('Wait'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($wait['Wait']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($wait['Wait']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($wait['Wait']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($wait['Wait']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($wait['Wait']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($wait['Wait']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($wait['Wait']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wait'), array('action' => 'edit', $wait['Wait']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wait'), array('action' => 'delete', $wait['Wait']['id']), null, __('Are you sure you want to delete # %s?', $wait['Wait']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Waits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wait'), array('action' => 'add')); ?> </li>
	</ul>
</div>
