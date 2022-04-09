<?php if (!$ventas) { ?>
	<div class="container alturita">
		<div class="well text-uppercase">
			<h5><b>No se realizaron ventas</b></h5>
		</div>
	</div>

<?php } else { ?>
<div class="container alturita">
		<div class="well text-uppercase">
			<h5><b>Todos las ventas</b></h5>
		</div>	
		<br>
		<div class="container datatable-container table-responsive">
			<table id="mi_tabla" class="datatable">
					<thead>
						<tr>
							<th>FECHA</th>
							<th>NOMBRE</th>
							<th>APELLIDO</th>
							<th>PRODUCTO</th>
							<th>CANTIDAD</th>

							<th>TOTAL</th>

						</tr>
					</thead>
					<tbody>
						<?php foreach($ventas->result() as $row)
						{ ?>
						<tr>
							<td><?php echo $row->fecha;  ?></td>
							<td><?php echo $row->nombre;  ?></td>
							<td><?php echo $row->apellido;  ?></td>
							<td><?php echo $row->descripcion;  ?></td>
							<td><?php echo $row->cantidad;  ?></td>
							<td><?php echo $row->total;  ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
		</div>
</div>
<?php } ?>