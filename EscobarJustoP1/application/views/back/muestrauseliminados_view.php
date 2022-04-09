<?php if (!$usuarios) { ?>

	<div class="container altura">
		<div class="well text-uppercase">
			<h5><b>No hay usuarios Eliminados</b></h5>
		</div>	
	</div>

<?php } else { ?>
<div class="container altura">
	<div class="well text-uppercase">
		<h5><b>Usuarios eliminados</b></h5>
	</div>	
	<div class="container datatable-container table-responsive">
		<table id="mi_tabla" class="datatable">
				<thead>
					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>APELLIDO</th>
						<th>EMAIL</th>
						<th>PERFIL</th>
						<th>ELIMINADO</th>
						<th>ACCIONES</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($usuarios->result() as $row){ ?>
					<tr>
						<td><?php echo $row->id;  ?></td>
						<td><?php echo $row->nombre;  ?></td>
						<td><?php echo $row->apellido;  ?></td>
						<td><?php echo $row->email;  ?></td>
						<td><?php echo $row->perfil_id;  ?></td>
						<td><?php echo $row->baja;  ?></td>
						<td>
							<a href="<?php echo base_url("usuarios_modifica/$row->id");?>">
							<i class="material-icons icono-color">edit</i></a>
							<a href="<?php echo base_url("usuarios_activa/$row->id");?>"><i class="material-icons icono-color" onclick="activa_usuario()">thumb_up</i></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
	</div>
</div>
<?php } ?>