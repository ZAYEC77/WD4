<?php if ($this->result != 2): ?>
<form action="?a=edit&p=<?= $this->p; ?>" method="POST">
	<p>
		<label for="code">code</label>
		<input type="text" name="code" value="<?= $this->record->code; ?>" >
	</p>
	<p>
		<label for="name">name</label>
		<input type="text" name="name" value="<?= $this->record->name; ?>">
	</p>
	<p>
		<label for="weight">weight</label>
		<input type="text" name="weight" value="<?= $this->record->weight; ?>">
	</p>
	<p>
		<label for="price">price</label>
		<input type="text" name="price" value="<?= $this->record->price; ?>">
	</p>
	<p>
		<label for="amount">amount</label>
		<input type="text" name="amount" value="<?= $this->record->amount; ?>">
	</p>	
	<input type="submit" value="Edit">
</form>
<?php else: ?>
	<h1>Record was edited</h1>
	<?php echo Tools::link(array('a'=>'view'),'View'); ?>
<?php endif; ?>
<?php if($this->result == 1): ?>
	<h1>Error, enter data correct</h1>
<?php endif; ?>