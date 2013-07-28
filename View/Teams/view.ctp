<div class="teams view">
<h2><?php  echo __('Team'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($team['Team']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($team['Team']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($team['Team']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($team['Team']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($team['Team']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Team'), array('action' => 'edit', $team['Team']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Team'), array('action' => 'delete', $team['Team']['id']), null, __('Are you sure you want to delete # %s?', $team['Team']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Belongings'), array('controller' => 'belongings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Belonging'), array('controller' => 'belongings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Belongings'); ?></h3>
	<?php if (!empty($team['Belonging'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($team['Belonging'] as $belonging): ?>
		<tr>
			<td><?php echo $belonging['id']; ?></td>
			<td><?php echo $belonging['user_id']; ?></td>
			<td><?php echo $belonging['team_id']; ?></td>
			<td><?php echo $belonging['created']; ?></td>
			<td><?php echo $belonging['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'belongings', 'action' => 'view', $belonging['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'belongings', 'action' => 'edit', $belonging['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'belongings', 'action' => 'delete', $belonging['id']), null, __('Are you sure you want to delete # %s?', $belonging['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Belonging'), array('controller' => 'belongings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($team['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Want Ammount'); ?></th>
		<th><?php echo __('Deadline'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($team['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['user_id']; ?></td>
			<td><?php echo $project['team_id']; ?></td>
			<td><?php echo $project['title']; ?></td>
			<td><?php echo $project['content']; ?></td>
			<td><?php echo $project['want_ammount']; ?></td>
			<td><?php echo $project['deadline']; ?></td>
			<td><?php echo $project['status']; ?></td>
			<td><?php echo $project['type']; ?></td>
			<td><?php echo $project['price']; ?></td>
			<td><?php echo $project['created']; ?></td>
			<td><?php echo $project['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
