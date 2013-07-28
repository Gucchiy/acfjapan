<div class="participations view">
<h2><?php  echo __('Participation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participation['Participation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participation['Project']['title'], array('controller' => 'projects', 'action' => 'view', $participation['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participation['User']['id'], array('controller' => 'users', 'action' => 'view', $participation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($participation['Participation']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($participation['Participation']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($participation['Participation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($participation['Participation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participation'), array('action' => 'edit', $participation['Participation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participation'), array('action' => 'delete', $participation['Participation']['id']), null, __('Are you sure you want to delete # %s?', $participation['Participation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aids'), array('controller' => 'aids', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aid'), array('controller' => 'aids', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Aids'); ?></h3>
	<?php if (!empty($participation['Aid'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Participation Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($participation['Aid'] as $aid): ?>
		<tr>
			<td><?php echo $aid['id']; ?></td>
			<td><?php echo $aid['participation_id']; ?></td>
			<td><?php echo $aid['amount']; ?></td>
			<td><?php echo $aid['comment']; ?></td>
			<td><?php echo $aid['created']; ?></td>
			<td><?php echo $aid['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'aids', 'action' => 'view', $aid['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'aids', 'action' => 'edit', $aid['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'aids', 'action' => 'delete', $aid['id']), null, __('Are you sure you want to delete # %s?', $aid['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aid'), array('controller' => 'aids', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
