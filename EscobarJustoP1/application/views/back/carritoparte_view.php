<div class="container alturita">
	<div class="row">
		<div class="col-md-1"></div> 
			<div class="col"> 
				<div class="row">
					<div class="col-md-12" id="carrito"> 		
						<div class="cart" >
							<div class = "heading">
							    <h5 class="text-left text-uppercase" id="h2" align="center"><b>Productos en tu Carrito</b></h5>
							</div>
							<div class="alturita" align="left">
								<a type="button" class="btn btn-dark" href="<?php echo base_url('planes'); ?>">Ver Planes</a>
								<a type="button" class="btn btn-dark" href="<?php echo base_url('productos'); ?>">Ver Productos</a>
								<br> <br> 
							</div>  
							<div class="text ml-2" align="center"> 
					        	<?php  $cart_check = $this->cart->contents();
								// Si el carrito está vacio, mostrar el siguiente mensaje
								if (empty($cart_check)) 
								{
									echo 'No hay productos en tu carrito'; 
								} ?> 
							</div>
							<div class="container datatable-container">    
							<table class="datatable table-responsive-md">
								<?php // Todos los items de carrito en "$cart". 
								if ($cart = $this->cart->contents()): 
									//Esta función devuelve un array de los elementos agregados en el carro
								    ?>
								    <tr class="text-center text-uppercase">
						                <th>ID</th>
								        <th>Descripción</th>
								        <th>Precio</th>
								        <th>Cantidad</th>
								        <th>Subtotal</th>
								        <th>Cancelar Producto</th>
								    </tr>
								    
									<?php // Crea un formulario y manda los valores a carrito_controller/actualiza carrito
								    echo form_open('carrito_actualiza');
								    $gran_total = 0;
								    $i = 1;
								    foreach ($cart as $item):
								    	echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
							            echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
								        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
							            echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
								        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
						           		?>
					                    <tr class="text-center fuenteTabla">
								            <td>
						                		<?php echo $i++; ?>
					                        </td>
								            <td>
								            	<?php echo $item['name']; ?>
								            </td>
								            <td>
								                $ <?php echo number_format($item['price'], 2); ?>
								            </td>
								            <td>
								               	<?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 
					                          		'maxlength="3" size="1" style="text-align: center"'); ?>
								            </td>
								                <?php $gran_total = $gran_total + $item['subtotal']; ?>
								            <td>
								                $ <?php echo number_format($item['subtotal'], 2) ?>
								            </td>
								            <td> 
								           		<?php // Imagen
								                	//$path = '<img src= '. base_url('img/cart_cross.jpg') . ' width="25px" height="20px">';
								                $path = '<i class="material-icons icono-color">delete</i>';

								                echo anchor('carrito_elimina/' . $item['rowid'], $path); 
								                            ?>
								            </td>
						                </tr>
								        <?php 
								    endforeach; 
								    ?>
								                    
								    <tr>  
								        <td colspan="5"> </td>
 							        	<td class="text-center"> 
								            <b>Total: $
								            	<?php //Gran Total
								            	echo number_format($gran_total, 2); 
				                            	?>
								            </b>
								        </td> 
								    </tr>
								    <tr>
								        <td> </td>
								        <td> </td>
								        <td>
						            		<!-- Borrar carrito usa mensaje de confirmacion javascript implementado en partes/head_view -->
					                		<input type="button" class ='btn btn-dark btn-md' value="Borrar Carrito" onclick="window.location = 'borrar_carri' "> 
							        	</td>
									    <td class="text-center">
									       	<!-- Submit boton. Actualiza los datos en el carrito -->
						                	<input type="submit" class ='btn btn-dark btn-md' value="Actualizar" onclick="actualizar()">
						                	
						                </td>
							            <td class="text-left">
									        <!-- " Confirmar orden envia a carrito_controller/muestra_compra  -->
									        <input type="button"class ='btn btn-dark btn-md' value="Confirmar Orden" onclick="window.location = 'confirma_compra' ">
									    </td>
									    <td> </td>
								    </tr>

								   	<?php echo form_close();
						    	endif; ?>
							</table>
						</div>
					        <div class="text-center">    
							</div>
					    </div>					
						<br>											
					</div>
				</div>
			</div>
			<div class="col-md-1">
			</div>
	</div>	
</div>
