<div class="aids view">
<h2><?php  echo __('Aid'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aid['Aid']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aid['Participation']['id'], array('controller' => 'participations', 'action' => 'view', $aid['Participation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($aid['Aid']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($aid['Aid']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($aid['Aid']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($aid['Aid']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aid'), array('action' => 'edit', $aid['Aid']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aid'), array('action' => 'delete', $aid['Aid']['id']), null, __('Are you sure you want to delete # %s?', $aid['Aid']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aids'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aid'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participations'), array('controller' => 'participations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participation'), array('controller' => 'participations', 'action' => 'add')); ?> </li>
	</ul>
</div>
