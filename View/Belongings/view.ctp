<div class="belongings view">
<h2><?php  echo __('Belonging'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($belonging['Belonging']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($belonging['User']['id'], array('controller' => 'users', 'action' => 'view', $belonging['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($belonging['Team']['name'], array('controller' => 'teams', 'action' => 'view', $belonging['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($belonging['Belonging']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($belonging['Belonging']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Belonging'), array('action' => 'edit', $belonging['Belonging']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Belonging'), array('action' => 'delete', $belonging['Belonging']['id']), null, __('Are you sure you want to delete # %s?', $belonging['Belonging']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Belongings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Belonging'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($belonging['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Twitter1'); ?></th>
		<th><?php echo __('Twitter2'); ?></th>
		<th><?php echo __('Fbid'); ?></th>
		<th><?php echo __('Fbname'); ?></th>
		<th><?php echo __('Fbtoken'); ?></th>
		<th><?php echo __('Cardnum'); ?></th>
		<th><?php echo __('Belonging Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($belonging['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['twitter1']; ?></td>
			<td><?php echo $user['twitter2']; ?></td>
			<td><?php echo $user['fbid']; ?></td>
			<td><?php echo $user['fbname']; ?></td>
			<td><?php echo $user['fbtoken']; ?></td>
			<td><?php echo $user['cardnum']; ?></td>
			<td><?php echo $user['belonging_id']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
