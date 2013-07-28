<div class="projects view">
<h2><?php  echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['User']['id'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Team']['name'], array('controller' => 'teams', 'action' => 'view', $project['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($project['Project']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($project['Project']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Want Ammount'); ?></dt>
		<dd>
			<?php echo h($project['Project']['want_ammount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deadline'); ?></dt>
		<dd>
			<?php echo h($project['Project']['deadline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($project['Project']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($project['Project']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($project['Project']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($project['Project']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($project['Project']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Entries'); ?></h3>
	<?php if (!empty($project['Entry'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Entry'] as $entry): ?>
		<tr>
			<td><?php echo $entry['id']; ?></td>
			<td><?php echo $entry['project_id']; ?></td>
			<td><?php echo $entry['title']; ?></td>
			<td><?php echo $entry['content']; ?></td>
			<td><?php echo $entry['created']; ?></td>
			<td><?php echo $entry['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'entries', 'action' => 'view', $entry['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'entries', 'action' => 'edit', $entry['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'entries', 'action' => 'delete', $entry['id']), null, __('Are you sure you want to delete # %s?', $entry['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entry'), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Investments'); ?></h3>
	<?php if (!empty($project['Investment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Investment'] as $investment): ?>
		<tr>
			<td><?php echo $investment['id']; ?></td>
			<td><?php echo $investment['project_id']; ?></td>
			<td><?php echo $investment['user_id']; ?></td>
			<td><?php echo $investment['amount']; ?></td>
			<td><?php echo $investment['comment']; ?></td>
			<td><?php echo $investment['created']; ?></td>
			<td><?php echo $investment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'investments', 'action' => 'view', $investment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'investments', 'action' => 'edit', $investment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'investments', 'action' => 'delete', $investment['id']), null, __('Are you sure you want to delete # %s?', $investment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Investment'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Participations'); ?></h3>
	<?php if (!empty($project['Participation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Participation'] as $participation): ?>
		<tr>
			<td><?php echo $participation['id']; ?></td>
			<td><?php echo $participation['project_id']; ?></td>
			<td><?php echo $participation['user_id']; ?></td>
			<td><?php echo $participation['amount']; ?></td>
			<td><?php echo $participation['comment']; ?></td>
			<td><?php echo $participation['created']; ?></td>
			<td><?php echo $participation['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'participations', 'action' => 'view', $participation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'participations', 'action' => 'edit', $participation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'participations', 'action' => 'delete', $participation['id']), null, __('Are you sure you want to delete # %s?', $participation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Participation'), array('controller' => 'participations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
