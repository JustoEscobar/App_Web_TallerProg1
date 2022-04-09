<div class="container altura">
	<div class="row justify-content-center">
    	<div class="col-sm-12 col-md-6 bottom-padding">
  	      <div class="form-box">
            <div class="text-center">  
            <h5><b>MODIFICAR PRODUCTO</b></h5><br> 
            </div> 
	        	<?php echo validation_errors(); ?>   
	        		<div class="well bs-component form-horizontal">
						<?php echo form_open_multipart("verifico_modificaproducto/$id", 
						['class' => 'form-signin', 'role' => 'form']); ?>
						<fieldset>
							<div class="form-group">
								<label class="control-label">Descripción</label>
								<div>
								<?php echo form_input(['name' => 'descripcion', 
														'id' => 'descripcion', 
														'class' => 'form-control',
														'placeholder' => 'Descripcion', 
														'autofocus'=>'autofocus',
														'value'=>"$descripcion"]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Categoria</label>
								<div>
								<?php echo form_input(['name' => 'categoria_id', 
																'id' => 'categoria_id', 
																'class' => 'form-control',
																'placeholder' => '1- Productos dieteticos - 2-Planes Alimentarios', 
																'value'=>"$categoria_id"]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Precio Costo</label>
								<div>
								<?php echo form_input(['name' => 'precio_costo', 
																'id' => 'precio_costo', 
																'class' => 'form-control',
																'placeholder' => 'Precio Costo', 
																'value'=>"$precio_costo"]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Precio Venta</label>
								<div>
								<?php echo form_input(['name' => 'precio_venta', 
																'id' => 'precio_venta', 
																'class' => 'form-control',
																'placeholder' => 'Precio Venta',
																'value'=>"$precio_venta"]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Stock</label>
								<div>
								<?php echo form_input(['name' => 'stock', 
																'id' => 'stock', 
																'class' => 'form-control',
																'placeholder' => 'Stock',
																'value'=>"$stock"]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Stock Minimo</label>
								<div>
								<?php echo form_input(['name' => 'stock_min', 
																'id' => 'stock_min', 
																'class' => 'form-control',
																'placeholder' => 'Stock Minimo',
																'value'=>"$stock_min"]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Imagen Actual:</label>
								<img  id="imagen_view" name="imagen_view" class="img-thumbnail" 
								width="200px" height="200px" src="<?php  echo base_url($imagen); ?>" >
							</div>	
							<div class="form-group">
								<label class="control-label">Imagen</label>
								<div>
								<?php echo form_input(['type' => 'file',
																'name' => 'filename', 
																'id' => 'filename', 
																'class' => 'form-control', 
																'value' => "$imagen"]); ?> 
								</div>
								<br>
							</div>
							<div>
								<button type="submit" class="btn btn-lg btn-dark btn-block" onclick="modifica_producto()" >Modificar</button>
								<!--<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-dark btn-block'"); ?>-->		
								<?php echo form_close(); ?>
							</div>
						</fieldset>
					</div>
				</div>
			</div>
        </div> 
    </div>
</div>