<!-- Content -->
<div class="content">

	<!-- Start Content -->
	<div class="container main">

<div class="belongings index">
	<h2><?php echo __('Belongings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($belongings as $belonging): ?>
	<tr>
		<td><?php echo h($belonging['Belonging']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($belonging['User']['id'], array('controller' => 'users', 'action' => 'view', $belonging['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($belonging['Team']['name'], array('controller' => 'teams', 'action' => 'view', $belonging['Team']['id'])); ?>
		</td>
		<td><?php echo h($belonging['Belonging']['created']); ?>&nbsp;</td>
		<td><?php echo h($belonging['Belonging']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $belonging['Belonging']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $belonging['Belonging']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $belonging['Belonging']['id']), null, __('Are you sure you want to delete # %s?', $belonging['Belonging']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Belonging'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>

	</div>
</div>


