<?php if ($this->result != 2): ?>
<form action="?a=add" method="POST">
	<p>
		<label for="code">code</label>
		<input type="text" name="code" >
	</p>
	<p>
		<label for="name">name</label>
		<input type="text" name="name" >
	</p>
	<p>
		<label for="weight">weight</label>
		<input type="text" name="weight" >
	</p>
	<p>
		<label for="price">price</label>
		<input type="text" name="price" >
	</p>
	<p>
		<label for="amount">amount</label>
		<input type="text" name="amount" >
	</p>	
	<input type="submit" value="Add">
</form>
<?php else: ?>
	<h1>Record was added</h1>
	<?php echo Tools::link(array('a'=>'view'),'View'); ?>
<?php endif; ?>
<?php if($this->result == 1): ?>
	<h1>Error, enter data correct</h1>
<?php endif; ?>