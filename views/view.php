<p>
	ID: <?=$this->p; ?> 
</p>
<p>
	Code: <?=$this->record->code; ?> 
</p>
<p>
	Name: <?=$this->record->name; ?> 
</p>
<p>
	Weight: <?=$this->record->weight; ?> 
</p>
<p>
	Price: <?=$this->record->price; ?> 
</p>
<p>
	Amount: <?=$this->record->amount; ?> 
</p>
<?= Tools::link(array('a'=>'delete', 'p'=>$this->p),'Delete'); ?> 
<?= Tools::link(array('a'=>'edit', 'p'=>$this->p),'Edit'); ?>