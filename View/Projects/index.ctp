<!-- Content -->
<div class="content">

	<!-- Start Content -->
	<div class="container main">



<div class="projects index">
	<h2><?php echo __('Projects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('want_ammount'); ?></th>
			<th><?php echo $this->Paginator->sort('deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['User']['id'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['Team']['name'], array('controller' => 'teams', 'action' => 'view', $project['Team']['id'])); ?>
		</td>
		<td><?php echo h($project['Project']['title']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['want_ammount']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['deadline']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['status']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['type']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['price']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['created']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $project['Project']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entries'), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry'), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Investments'), array('controller' => 'investments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investment'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participations'), array('controller' => 'participations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participation'), array('controller' => 'participations', 'action' => 'add')); ?> </li>
	</ul>
</div>

	</div>
</div>