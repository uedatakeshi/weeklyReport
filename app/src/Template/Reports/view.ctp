<div class="reports view">
	<h2><?= __('Report') ?></h2>
	<dl>
		<dt><?= __('Id') ?></dt>
		<dd>
			<?= h($report->id) ?>
			&nbsp;
		</dd>
		<dt><?= __('Report Date') ?></dt>
		<dd>
			<?= h($report->report_date) ?>
			&nbsp;
		</dd>
		<dt><?= __('Employee') ?></dt>
		<dd>
			<?= h($report->employee) ?>
			&nbsp;
		</dd>
		<dt><?= __('Activity') ?></dt>
		<dd>
			<?= h($report->activity) ?>
			&nbsp;
		</dd>
		<dt><?= __('Comments') ?></dt>
		<dd>
			<?= h($report->comments) ?>
			&nbsp;
		</dd>
		<dt><?= __('Created') ?></dt>
		<dd>
			<?= h($report->created) ?>
			&nbsp;
		</dd>
		<dt><?= __('Modified') ?></dt>
		<dd>
			<?= h($report->modified) ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('Edit Report'), ['action' => 'edit', $report->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Report'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # %s?', $report->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?> </li>
	</ul>
</div>
