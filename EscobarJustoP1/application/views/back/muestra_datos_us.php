<div class="container altura">
	<div class="row justify-content-center">
    	<div class="col-sm-12 col-md-4 bottom-padding">
  	      <div class="form-box">
            <div class="text-center">  
            <h5><b>MIS DATOS</b></h5><br> 
            </div> 
        		<div>     
					<?php echo form_open_multipart("verifico_modifica_datos_usuario/$id", 
					['class' => 'form-signin', 'role' => 'form']); ?>

						<div class="form-group">
							<?php echo form_label('Nombre:', 'nombre'); ?>
							<?php echo form_input(['name' => 'nombre', 
															'id' => 'nombre', 
															'class' => 'form-control',
															'placeholder' => 'Nombre', 
															'autofocus'=>'autofocus',
															'value'=>"$nombre"]); ?>
							<?php echo form_error('nombre'); ?>
						</div>
						<div class="form-group">
							<?php echo form_label('Apellido:', 'apellido'); ?>	
							<?php echo form_input(['name' => 'apellido', 
															'id' => 'apellido', 
															'class' => 'form-control',
															'placeholder' => 'Apellido', 
															'value'=>"$apellido"]); ?>
							<?php echo form_error('apellido'); ?>
						</div>
						<div class="form-group">
							<?php echo form_label('Email:', 'email'); ?>
							<?php echo form_input(['name' => 'email', 
															'id' => 'email', 
															'class' => 'form-control',
															'placeholder' => 'Email', 
															'value'=>"$email"]); ?>
							<?php echo form_error('email'); ?>
						</div>
						<div class="form-group">
							<?php echo form_label('Usuario:', 'usuario'); ?>	
							<?php echo form_input(['name' => 'usuario', 
															'id' => 'usuario', 
															'class' => 'form-control',
															'placeholder' => 'Usuario', 
															'value'=>"$usuario"]); ?>
							<?php echo form_error('usuario'); ?>
						</div>
						<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-dark btn-block'"); ?>		
						<?php echo form_close(); ?>
					</div>
				</div>
            </div> 
        </div>
    </div>