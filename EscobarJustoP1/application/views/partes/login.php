        <div class="container altura">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-4 bottom-padding">
              <div class="form-box">
                <div class="text-center">
                  <h5><b>NUTRICIÓN INTEGRAL</b></h5><br>
                </div> 
                        <?php echo validation_errors(); ?>

                        <!-- Formulario de Login -->
                          
                        <div>
                            <?php echo form_open('verifico_usuario', 
                                             ['class' => 'form-signin', 'role' => 'form']); ?>
                              
                              <div class="form-group">
                                <label class="control-label fuente">Nombre de Usuario:</label>
                                <div>
                                      <?php echo form_input(['name' => 'usuario', 
                                                       'id' => 'usuario', 
                                                       'class' => 'form-control fuentePlaceholder',
                                                       'placeholder' => 'Usuario', 
                                                       'required'=>'required',
                                                       'autofocus'=>'autofocus']); ?>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label fuente">Contraseña:</label>
                                <div>
                                      <?php echo form_password(['type' => 'password',
                                                    'name' => 'pass', 
                                                        'id' => 'pass', 
                                                        'class' => 'form-control fuentePlaceholder',
                                                        'placeholder' => 'Contraseña', 
                                                        'required'=>'required']); ?>
                                </div>
                              </div>
                                <?php echo form_submit('submit', 'Iniciar Sesion',"class='btn btn-dark btn-block'"); ?>     
                                <?php echo form_close(); ?>   
                        </div>
                      </div>
                    </div> 
                  </div>
              </div>
          