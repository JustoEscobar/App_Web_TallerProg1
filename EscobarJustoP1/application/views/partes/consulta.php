<!--CONSULTAS Y CONTACTOS-->
    <div class="container altura">
      <div class="row">
        <div class="col-sm-12 col-md-6 bottom-padding">
          <div class="form-box"> 
            <div class="text-center">
              <h5><b>CONSULTAS</b></h5><br>
            </div>
            <?php echo validation_errors(); ?>

                <!-- Formulario de Consultas -->
              <div class="well bs-component form-horizontal">
                <?php echo form_open('verifico_nuevaconsulta', 
                          [ 'class' => 'form-group','role' => 'form','id' => 'form_registro']); ?>
                  <fieldset>                 
                    <div class="form-group">
                        <label class="control-label">Nombre</label>
                          <div>
                            <?php echo form_input(['name' => 'nombre', 
                                                  'id' => 'nombre', 
                                                  'class' => 'form-control fuentePlaceholder',
                                                  'placeholder' => 'Nombre', 
                                                  'required'=>'required',
                                                  'autofocus'=>'autofocus']); ?>
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email:</label>
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
                        <label class="control-label">Telefono</label>
                          <div>
                            <?php echo form_input(['name' => 'telefono', 
                                                  'id' => 'telefono', 
                                                  'class' => 'form-control fuentePlaceholder',
                                                  'placeholder' => 'Telefono', 
                                                  'required'=>'required',
                                                  'autofocus'=>'autofocus']); ?>
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Mensaje</label>
                          <div>
                            <?php echo form_input(['name' => 'mensaje', 
                                                  'id' => 'mensaje', 
                                                  'class' => 'form-control fuentePlaceholder',
                                                  'placeholder' => 'Mensaje', 
                                                  'required'=>'required',
                                                  'autofocus'=>'autofocus']); ?>
                          </div>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-dark" 
                      onclick="consulta()" >Enviar</button>
                      <!--<?php echo form_submit('submit', 'Enviar',"class='btn btn-dark' mt-3"); ?>-->
                      <?php echo form_submit('reset', 'Cancelar',"class='btn btn-dark'"); ?>     
                      <?php echo form_close(); ?> 
                    </div> 
                  </fieldset>
              </div>
            </div>
          </div>
        <div class="col-sm-12 col-md-6">
          <div class="row">
            <div class="col-sm-12 bottom-padding-20">
              <span class="text-uppercase font-weight-bold"><u>MEDIOS DE PAGO</u></span>
              <br>
              <ul class="list-unstyled">
                <li class="my-2"><img class = "iconos-pagos" src="assets/img/principal/pagos/mercado-pago.svg" alt= "Icono MP">Pagá con mercado pago</li>
                <li class="my-2"><img class = "iconos-pagos" src="assets/img/principal/pagos/tarjeta-cred.png" alt= "Tarj cred">Tarjetas de credito en hasta 12 cuotas</li>
                <li class="my-2"><img class = "iconos-pagos" src="assets/img/principal/pagos/tarjeta-deb.png" alt= "Tarj deb">Tarjetas de débito</li>
                <li class="my-2"><img class = "iconos-pagos" src="assets/img/principal/pagos/efectivo.png" alt= "efectivo">Efectivo en Pago facil, Rapipago</li>          
              </ul>
            </div> 
            <div class="col-sm-12 bottom-padding-20">
              <span class="text-uppercase font-weight-bold"><u>ATENCION TELEFONICA</u></span>
              <br>
              <img class="iconos-pagos" src="assets/img/principal/pagos/fijo.png">(03468) 444-781 / 653 / 5312
              <br>
              <br>
            </div>
            <div class="col-sm-12 bottom-padding-20">
              <span class="text-uppercase font-weight-bold"><u>CONTACTO</u></span>
              <br>
               <img class="iconos-pagos" src="assets/img/principal/pagos/correo.svg">   info@integralnutricion.com.ar
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>
      <br> 
      <div class="row">  
        <div class="col-sm-12">
          <div class="containerMapa">
            <iframe class="shadow p-3 mb-5 bg-mapa rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3490.055880184932!2d-59.09865218547826!3d-28.98571508979959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x944e63f2256d1e0d%3A0x76aecf5334921158!2sNutrici%C3%B3n%20Integral!5e0!3m2!1ses-419!2sar!4v1619280292807!5m2!1ses-419!2sar" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div> 
      </div>    
    </div>