<div class="aids index">
	<h2><?php echo __('Aids'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('participation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($aids as $aid): ?>
	<tr>
		<td><?php echo h($aid['Aid']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aid['Participation']['id'], array('controller' => 'participations', 'action' => 'view', $aid['Participation']['id'])); ?>
		</td>
		<td><?php echo h($aid['Aid']['amount']); ?>&nbsp;</td>
		<td><?php echo h($aid['Aid']['comment']); ?>&nbsp;</td>
		<td><?php echo h($aid['Aid']['created']); ?>&nbsp;</td>
		<td><?php echo h($aid['Aid']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aid['Aid']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aid['Aid']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aid['Aid']['id']), null, __('Are you sure you want to delete # %s?', $aid['Aid']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Aid'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Participations'), array('controller' => 'participations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participation'), array('controller' => 'participations', 'action' => 'add')); ?> </li>
	</ul>
</div>
