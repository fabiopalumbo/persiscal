<div class='container'>
<h1>Turbinas</h1>
<div class="row">
    <?php if(!empty($turbinas)): foreach($turbinas as $turbina): ?>
    <div class="turbina-box">
        <div class="turbina-content">
            <div class="caption">
                <div class="col-sm-6">
		<h4>
			<?= $this->Html->link(
			    $turbina->nombre,
			    ['action' => 'view', $turbina->id])
			?>
		</h4>
		<div>
                <div class="col-sm-3">
			<?= $this->Html->image('turbina.png', ['alt' => 'Turbina'], ['class' => 'img-responsive']); ?>
			<p>Direccion: <?php echo $turbina->direccion; ?></p>
			
		</div>
		<div class="col-sm-3">
		<p>	<?= $this->Html->link('Editar', ['action' => 'edit', $turbina->id],['class' => 'btn btn-info']) ?>
		        <?= $this->Form->postLink(
	                'Eliminar', ['action' => 'delete', $turbina->id],['class' => 'btn btn-danger', 'confirm' => 'Seguro?'])
	        ?>
		</p>
			
		</div>
            </div>
        </div>
    </div>
    <?php endforeach; else: ?>
	
    	<p class="no-record">Ninguna turbina encontrada......</p>
    <?php endif; ?>

	<div class='clearfix'></div>
<?= $this->Html->link(
    'Agregar Turbina',
    ['controller' => 'Turbinas', 'action' => 'add' ], ['class' => 'btn btn-default '])
 ?>

</div>
</div>