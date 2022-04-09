<?php if (!$compras) { ?>
	<div class="container alturita">
		<div class="well">
			<h3>No se realizaron compras</h3>
		</div>
	</div>

<?php } else { ?>
<div class="container alturita">
		<div class="well text-uppercase">
			<h5><b>Compras realizadas en Nutricion Integral</b></h5>
		</div>	
		<br>
		<div class="container datatable-container table-responsive">
			<div class="header-tools">
			</div>
			<table id="mi_tabla" class="datatable">
					<thead>
						<tr>
							<th>FECHA</th>
							<th>PRODUCTO</th>
							<th>CANTIDAD</th>
							<th>TOTAL</th>

						</tr>
					</thead>
					<tbody>
						<?php foreach($compras->result() as $row)
						{ ?>
						<tr>
							<td><?php echo $row->fecha;  ?></td>
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