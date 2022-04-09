<div class="container altura">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-6 bottom-padding">
        <div class="form-box">
          <div class="text-center">
            <h5><b>REGISTRARSE EN NUTRICION INTEGRAL</b></h5><br>
          </div> 
          <?php echo validation_errors(); ?>

              <!--Formulario-->

            <div class="well bs-component form-horizontal">
              <?php echo form_open('verifico_nuevoregistro', 
              [ 'class' => 'form-group', 
                'role' => 'form', 
                'id' => 'form_registro']); ?>
  
                  <fieldset>
                    <div class="form-group">
                      <label class="control-label fuente">Nombre:</label>
                      <div>
                        <?php echo form_input(['name' => 'nombre', 
                                                'id' => 'nombre', 
                                                'class' => 'form-control fuentePlaceholder',
                                                'placeholder' => 'Nombre', 
                                                'required'=>'required', 
                                                'autofocus'=>'autofocus',
                                                'value'=>set_value('nombre')]); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label fuente">Apellido:</label>
                      <div>
                        <?php echo form_input(['name' => 'apellido', 
                                                'id' => 'apellido', 
                                                'class' => 'form-control fuentePlaceholder',
                                                'placeholder' => 'Apellido', 
                                                'required'=>'required',
                                                'value'=>set_value('apellido')]); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label fuente">Email:</label>
                      <div>
                        <?php echo form_input(['type'=>'email', 
                                                'name' => 'email', 
                                                'id' => 'email', 
                                                'class' => 'form-control fuentePlaceholder',
                                                'placeholder' => 'Email', 
                                                'required'=>'required',
                                                'value'=>set_value('email')]); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label fuente">Nombre de Usuario:</label>
                      <div>
                        <?php echo form_input(['name' => 'usuario', 
                                                'id' => 'usuario', 
                                                'class' => 'form-control fuentePlaceholder',
                                                'placeholder' => 'Usuario', 
                                                'required'=>'required',
                                                'value'=>set_value('usuario')]); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label fuente">Contraseña:</label>
                      <div>
                        <?php echo form_password(['name' => 'pass', 
                                                  'id' => 'pass', 
                                                  'class' => 'form-control fuentePlaceholder',
                                                  'placeholder' => 'Contraseña', 
                                                  'required'=>'required']); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label fuente">Repetir Contraseña:</label>
                      <div>
                        <?php echo form_password(['name' => 're_pass', 
                                                'id' => 're_pass', 
                                                'class' => 'form-control fuentePlaceholder',
                                                'placeholder' => 'Repetir Contraseña', 
                                                'required'=>'required']); ?>
                      </div>
                    </div>

                    <div>
                      <br>
                      <button type="submit" class="btn btn-lg btn-dark" 
                      onclick="registro()" >Registrarse</button>
                      <!--<?php echo form_submit('submit', 'Registrarse',"class='btn btn-lg btn-dark' mt-3");?>-->
                      <?php echo form_reset ('reset', 'Editar', "class='btn btn-lg btn-dark'"); ?><br>
                      <?php echo form_close(); ?>
                    </div>
                  </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>



