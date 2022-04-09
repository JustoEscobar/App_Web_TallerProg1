<?php if (!$consultas) { ?>

	<div class="container alturita">
		<div class="well text-uppercase">
			<h5><b>No hay consultas contestadas</b></h5><br>
		</div>	
	</div>

<?php } else { ?>
<div class="container alturita">
	<div class="well text-uppercase">
		<h5><b> Consultas contestadas</b></h5><br>
	</div>
	<div class="container datatable-container table-responsive">
		<table id="mi_tabla" class="datatable" style="width: 100%;">
			<thead>
				<tr class="text-uppercase">
					<th>ID</th>
					<th>NOMBRE</th>
					<th>EMAIL</th>
					<th>TELEFONO</th>
					<th>MENSAJE</th>
					<th>CONTESTADO</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($consultas->result() as $row)
				{ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->telefono;  ?></td>
					<td><?php echo $row->mensaje;  ?></td>
					<td><?php echo $row->contestado;  ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php } ?>