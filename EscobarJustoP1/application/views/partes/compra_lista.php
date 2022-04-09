<div class="container alturita">
	<div class="row">
		<div class="col-md-1"></div> 
			<div class="col">
				<div class="row">
					<div class="col-md-12" id="carrito"> 		
						<div class="cart" >
							<div class = "heading">
								<h5 class="text-center text-uppercase">Muchas gracias por su compra</h5>
							    <h6 class="text-center" id="h2" align="left">Detalles de su compra:</h6>
							</div>      
							<table class="table table-hover table-dark table-responsive-md" 	border="0" cellpadding="5px" cellspacing="1px">
								<?php // Todos los items de carrito en "$cart". 
								if ($cart = $this->cart->contents()): 
									//Esta función devuelve un array de los elementos agregados en el carro
								    ?>
								    <tr class="text-center fuenteTabla" id= "main_heading">
						                <td>ID</td>
								        <td>Descripción</td>
								        <td>Precio</td>
								        <td>Cantidad</td>
								        <td>Total</td>
								        <td>Total pagado</td>
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
								               	<?php echo $item['qty']; ?>
								            </td>
								                <?php $gran_total = $gran_total + $item['subtotal']; ?>
								            <td>
								                $ <?php echo number_format($item['subtotal'], 2) ?>
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

								   	<?php echo form_close();
						    	endif; ?>
							</table>
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