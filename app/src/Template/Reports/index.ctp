<div class="reports index">
	<h2><?= __('Reports') ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?= $this->Paginator->sort('id') ?></th>
		<th><?= $this->Paginator->sort('report_date') ?></th>
		<th><?= $this->Paginator->sort('employee') ?></th>
		<th><?= $this->Paginator->sort('activity') ?></th>
		<th><?= $this->Paginator->sort('comments') ?></th>
		<th><?= $this->Paginator->sort('created') ?></th>
		<th><?= $this->Paginator->sort('modified') ?></th>
		<th class="actions"><?= __('Actions') ?></th>
	</tr>
	<?php foreach ($reports as $report): ?>
	<tr>
		<td><?= h($report->id) ?>&nbsp;</td>
		<td><?= h($report->report_date) ?>&nbsp;</td>
		<td><?= h($report->employee) ?>&nbsp;</td>
		<td><?= h($report->activity) ?>&nbsp;</td>
		<td><?= h($report->comments) ?>&nbsp;</td>
		<td><?= h($report->created) ?>&nbsp;</td>
		<td><?= h($report->modified) ?>&nbsp;</td>
		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $report->id]) ?>
			<?= $this->Html->link(__('Edit'), ['action' => 'edit', $report->id]) ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
	<p><?= $this->Paginator->counter() ?></p>
	<ul class="pagination">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'));
		echo $this->Paginator->numbers();
		echo $this->Paginator->next(__('next') . ' >');
	?>
	</ul>
</div>
<div class="actions">
	<h3><?= __('Actions') ?></h3>
	<ul>
		<li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?></li>
	</ul>
</div>
