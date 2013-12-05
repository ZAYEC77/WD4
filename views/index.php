<h4>List of records</h4>
<?php $i = 0; ?>
<?php foreach ($this->records as $key => $value): ?>
	<div>
		<span>Name: <?= $value->name; ?></span>
		<span>Price: <?= $value->price; ?></span>
		<?= Tools::link(array('a'=>'view', 'p'=>$i),'View'); ?>
		<?= Tools::link(array('a'=>'delete', 'p'=>$i),'Delete'); ?>
		<?= Tools::link(array('a'=>'edit', 'p'=>$i++),'Edit'); ?>
	</div>
<?php endforeach; ?>