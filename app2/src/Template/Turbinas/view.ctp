
<div class='container'>

	<div class="row">
		<div class="col-sm-6">
			<span class="glyphicon glyphicon-tower"></span>
			<h1><?= h($turbinas->nombre) ?></h1>
			<p>Direccion: <?= h($turbinas->direccion) ?></p>
			<p>Estado: <?= h($turbinas->status) ?></p>
			<p><small>Creada: <?= $turbinas->created->format(DATE_RFC850) ?></small></p>
		</div>
	<?php echo $this->Html->link('Volver',"javascript:history.back()"); ?>
	</div>
</div>