<div class="waits index">
	<h2><?php echo __('Waits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($waits as $wait): ?>
	<tr>
		<td><?php echo h($wait['Wait']['id']); ?>&nbsp;</td>
		<td><?php echo h($wait['Wait']['email']); ?>&nbsp;</td>
		<td><?php echo h($wait['Wait']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($wait['Wait']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($wait['Wait']['password']); ?>&nbsp;</td>
		<td><?php echo h($wait['Wait']['created']); ?>&nbsp;</td>
		<td><?php echo h($wait['Wait']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wait['Wait']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wait['Wait']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wait['Wait']['id']), null, __('Are you sure you want to delete # %s?', $wait['Wait']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Wait'), array('action' => 'add')); ?></li>
	</ul>
</div>
