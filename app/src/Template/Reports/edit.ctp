<div class="reports form">
<?= $this->Form->create($report) ?>
	<fieldset>
		<legend><?= __('Edit Report'); ?></legend>
	<?php
		echo $this->Form->input('report_date');
		echo $this->Form->input('employee');
		echo $this->Form->input('activity');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
<div class="actions">
	<h3><?= __('Actions') ?></h3>
	<ul>
		<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # %s?', $report->id)]) ?></li>
		<li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?></li>
	</ul>
</div>
