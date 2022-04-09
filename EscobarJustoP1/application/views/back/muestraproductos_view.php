<?php if (!$productos) { ?>

	<div class="container alturita">
		<div class="well text-uppercase">
			<h5><b>No hay Productos</b></h5>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-dark" href="<?php echo base_url('productos_agrega'); ?>">Agregar</a>
			<a type="button" class="btn btn-dark" href="<?php echo base_url('productos_eliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>	
	</div>

<?php } else { ?>
<div class="container alturita">
	<div class="well text-uppercase">
		<h5><b>Todos los Productos</b></h5>
	</div>
	<br>
	<div class="container datatable-container table-responsive">
		<div class="header-tools">
				<div class="tools">
					<ul>
						<li>
							<a href="<?php echo base_url('productos_agrega'); ?>">
							<i class="material-icons icono-color">add_circle</i></a>
						</li>
						<li>
							<a href="<?php echo base_url('productos_eliminados'); ?>">
							<i class="material-icons icono-color">delete</i></a>
						</li>
					</ul>
				</div>
			</div>
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
							<a href="<?php echo base_url("productos_elimina/$row->id");?>">
							<i class="material-icons icono-color" onclick="elimina_producto()">delete</i></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
	</div>
</div>
<?php } ?>
