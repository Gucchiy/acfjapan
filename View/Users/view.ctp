<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter1'); ?></dt>
		<dd>
			<?php echo h($user['User']['twitter1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter2'); ?></dt>
		<dd>
			<?php echo h($user['User']['twitter2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fbid'); ?></dt>
		<dd>
			<?php echo h($user['User']['fbid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fbname'); ?></dt>
		<dd>
			<?php echo h($user['User']['fbname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fbtoken'); ?></dt>
		<dd>
			<?php echo h($user['User']['fbtoken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cardnum'); ?></dt>
		<dd>
			<?php echo h($user['User']['cardnum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Belonging'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Belonging']['id'], array('controller' => 'belongings', 'action' => 'view', $user['Belonging']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Belongings'), array('controller' => 'belongings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Belonging'), array('controller' => 'belongings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Investments'), array('controller' => 'investments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investment'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participations'), array('controller' => 'participations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participation'), array('controller' => 'participations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Belongings'); ?></h3>
	<?php if (!empty($user['Belonging'])): ?>
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
		foreach ($user['Belonging'] as $belonging): ?>
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
	<h3><?php echo __('Related Investments'); ?></h3>
	<?php if (!empty($user['Investment'])): ?>
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
		foreach ($user['Investment'] as $investment): ?>
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
	<?php if (!empty($user['Participation'])): ?>
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
		foreach ($user['Participation'] as $participation): ?>
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
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($user['Project'])): ?>
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
		foreach ($user['Project'] as $project): ?>
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
