<?php if (!$productos) { ?>

	<div class="container altura">
		<div class="well text-uppercase">
			<h5><b>No hay Productos eliminados</b></h5>
		</div>	
	</div>

<?php } else { ?>
<div class="container altura">
	<div class="well text-uppercase">
		<h5><b>Todos los Productos Eliminados</b></h5>
	</div>
	<div class="container datatable-container table-responsive">
		<table id="mi_tabla" class="datatable" style="width:100%;">
			<thead>
				<tr class="text-uppercase">
					<th>ID</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Imagen</th>
					<th>Eliminado</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row)
				{ 
					$imagen = $row->imagen;	?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->categoria_id;  ?></td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
					<td><img height="80px" src="<?php echo $imagen; ?>"/></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td>
						<a href="<?php echo base_url("productos_modifica/$row->id");?>">
						<i class="material-icons icono-color">edit</i></a>
						<a href="<?php echo base_url("productos_activa/$row->id");?>"><i class="material-icons icono-color" onclick="activa_producto()">thumb_up</i></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php } ?>