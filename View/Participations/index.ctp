<div class="participations index">
	<h2><?php echo __('Participations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($participations as $participation): ?>
	<tr>
		<td><?php echo h($participation['Participation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($participation['Project']['title'], array('controller' => 'projects', 'action' => 'view', $participation['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($participation['User']['id'], array('controller' => 'users', 'action' => 'view', $participation['User']['id'])); ?>
		</td>
		<td><?php echo h($participation['Participation']['amount']); ?>&nbsp;</td>
		<td><?php echo h($participation['Participation']['comment']); ?>&nbsp;</td>
		<td><?php echo h($participation['Participation']['created']); ?>&nbsp;</td>
		<td><?php echo h($participation['Participation']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $participation['Participation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $participation['Participation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $participation['Participation']['id']), null, __('Are you sure you want to delete # %s?', $participation['Participation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Participation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aids'), array('controller' => 'aids', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aid'), array('controller' => 'aids', 'action' => 'add')); ?> </li>
	</ul>
</div>
