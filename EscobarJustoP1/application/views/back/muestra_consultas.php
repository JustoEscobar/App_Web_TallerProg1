<?php if (!$muestra_consultas) { ?>
	<div class="container alturita">
		<div class="well text-uppercase">
			<h5><b>No se realizaron Consultas</b></h5>
		</div>
	</div>

<?php } else { ?>
<div class="container alturita">
		<div class="well text-uppercase">
			<h5><b>Consultas sin responder</b></h5>
		</div>	
		<br>
			<div class="container datatable-container table-responsive">
				<div class="header-tools">
					<div class="tools">
						<ul>
							<li>
								<a href="<?php echo base_url('consultas_eliminadas'); ?>">
								<i class="material-icons icono-color">delete</i></a>
							</li>
						</ul>
					</div>
				</div>	
				<table id="mi_tabla" class="datatable">
					<thead>
						<tr>
							<th>ID</th>
							<th>NOMBRE</th>
							<th>EMAIL</th>
							<th>TELEFONO</th>
							<th>MENSAJE</th>
							<th>CONTESTADO</th>
							<th>VISAR</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($muestra_consultas->result() as $row)
						{ ?>
						<tr>
							<td><?php echo $row->id;  ?></td>
							<td><?php echo $row->nombre;  ?></td>
							<td><?php echo $row->email;  ?></td>
							<td><?php echo $row->telefono;  ?></td>
							<td><?php echo $row->mensaje;  ?></td>
							<td><?php echo $row->contestado;  ?></td>
							<td>
								<a href="<?php echo base_url("consultas_elimina/$row->id");?>">
								<i class="material-icons icono-color">thumb_up</i></a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
		</div>
</div>
<?php } ?>