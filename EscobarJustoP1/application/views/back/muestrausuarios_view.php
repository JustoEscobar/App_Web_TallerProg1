<?php if (!$usuarios) { ?>
	<div class="container alturita">
		<div class="well text-uppercase">
			<h5><b>No hay Usuarios registrados</b></h5>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('usuarios_agrega'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('usuarios_eliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>	
	</div>

<?php } else { ?>
<div class="container alturita">
		<div class="well text-uppercase">
			<h5><b>Todos los Usuarios</b></h5>
		</div>	
		<br>
		<div class="container datatable-container table-responsive">
			<div class="header-tools">
				<div class="tools">
					<ul>
						<li>
							<a href="<?php echo base_url('usuarios_agrega'); ?>">
							<i class="material-icons icono-color">group_add</i></a>
						</li>
						<li>
							<a href="<?php echo base_url('usuarios_eliminados'); ?>">
							<i class="material-icons icono-color">delete</i></a>
						</li>
					</ul>
				</div>
			</div>
			<table id="mi_tabla" class="datatable">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">NOMBRE</th>
							<th scope="col">APELLIDO</th>
							<th scope="col">EMAIL</th>
							<th scope="col">PERFIL</th>
							<th scope="col">ELIMINADO</th>
							<th scope="col">ACCIONES</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($usuarios->result() as $row)
						{ ?>
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
								<a href="<?php echo base_url("usuarios_elimina/$row->id");?>">
								<i class="material-icons icono-color" onclick="elimina_usuario()">delete</i></a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
		</div>
</div>
<?php } ?>