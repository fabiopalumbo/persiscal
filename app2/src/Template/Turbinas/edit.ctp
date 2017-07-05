
<div class='container'>

	<div class="row">
		<div class="col-sm-6">
<h1>Editar Turbina</h1>
<?php

    echo $this->Form->create($turbinas);
    echo $this->Form->input('nombre', ['class' => '3']);
    echo $this->Form->input('direccion', ['rows' => '3']);
    echo $this->Form->button(__('Editar Turbina'));	
    echo $this->Form->end();
?>

</div>

	<?php echo $this->Html->link('Volver',"javascript:history.back()"); ?>
	</div>
</div>