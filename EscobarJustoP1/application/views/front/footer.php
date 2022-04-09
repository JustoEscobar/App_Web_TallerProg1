<!--PIE DE PAGINA-->
        <footer id="footer">
            <section class="fondo-pie text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>La opción más rica, saludable y económica <br> en productos naturales.</h2>
                        </div>
                    </div>
                </div>
            </section>
            <div class="footer-top">
                <div class="container text-center text-md-left met-5">
                    <div class="row">
                        <div class="col-md-3 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">Mas informacion de la compañia</h6>
                            <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
                            <p class="mt-2 text-justify"> Esta compañia se dedica a la venta de productos dieteticos,consultas online,reservas de planes alimentarios..
                            </p>
                        </div>
                        <div class="col-md-2 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">Terminos y condiciones</h6>
                            <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">
                             <p class="mt-2 text-justify"> Esta compañia se dedica a la venta de productos dieteticos, consultas online, reservas de planes alimentarios..
                            </p>
                        </div>   
                        <div class="col-md-2 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">Redes sociales</h6>
                            <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">
                            <ul class="list-unstyled">
                                <li class="my-2"><a href="http://www.facebook.com" target="_blank"><img class = "iconos-redes" src="<?php echo base_url('assets/img/principal/redes/facebook.png'); ?>" alt= "Facebook"></a>Facebook</li>
                                <li class="my-2"><a href="http://www.instagram.com" target="_blank"><img class = "iconos-redes" src="<?php echo base_url('assets/img/principal/redes/instagram.png'); ?>" alt= "Instragram"></a>Instagram</li>
                                
                                <li class="my-2"><a href="http://www.youtube.com" target="_blank"><img class = "iconos-redes" src="<?php echo base_url('assets/img/principal/redes/youtube.png'); ?>" alt= "Youtube"></a>Youtube</li>
                                <li class="my-2"><a href="http://www.whatsapp.com" target="_blank"><img class = "iconos-redes" src="<?php echo base_url('assets/img/principal/redes/whatsapp.png'); ?>" alt= "Whatsapp"></a>Whatsapp</li>
                            </ul>
                        </div>
                        <div class="col-md-3 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">Informacion Contactos</h6>
                            <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px">
                            <ul class="list-unstyled">
                                <li class="my-2"><img class = "iconos-redes" src="<?php echo base_url('assets/img/footer/casa.svg'); ?>">Republica del libano 405</li>
                                <li class="my-2"><img class = "iconos-redes" src="<?php echo base_url('assets/img/footer/cel.svg'); ?>">Tel: 3777689096</li>
                                <li class="my-2"><img class = "iconos-redes" src="<?php echo base_url('assets/img/footer/correo.svg'); ?>">justoescobar@gmail.com</li>
                            </ul>
                        </div>
                    </div>       
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 text-md-left">
                            <p class="derechos text-light font-weight-bold">©2021 Todos los Derechos Reservados|Nutricion Integral</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-right">
                            <a href="<?php echo base_url('terminos'); ?>"><p class="derechos text-light font-weight-bold">Informacion de compañia|Privacion y Politica|Terminos y condiciones</p></a> 
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script> 
        <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/pooper.min.js'); ?>"></script>
        <script src="https://kit.fontawesome.com/441c0662d5.js" crossorigin="anonymous"></script>

        <!--datatables-->
        <script src="<?php echo base_url('assets/DataTables/datatables.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
        
        <!--mensajes de alerta-->
        <script src="<?php echo base_url('assets/plugins/sweetAlert2/sweetalert2.all.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/alertas.js'); ?>">
        </script>
        <script type="text/javascript">
            function confirm_delete() {
                var respuesta = confirm("Estas seguro que desear eliminar este Usuario?");
                if (respuesta=true) {
                    return true;
                }
                else{
                    return false;
                }
            }
        </script>

        <script type="text/javascript">
            function elimina_usuario(){
            alert("Usuario dado de baja con exito!");
        }    
        </script>

        <script type="text/javascript">
            function modifica_usuario(){
            alert("Usuario modificado con exito!");
        }    
        </script>

        <script type="text/javascript">
            function activa_usuario(){
            alert("Usuario activado con exito!");
        }    
        </script>

        <script type="text/javascript">
            function activa_producto(){
            alert("Producto activado con exito!");
        }    
        </script>

        <script type="text/javascript">
            function modifica_producto(){
            alert("Producto modificado con exito!");
        }    
        </script>

        <script type="text/javascript">
            function elimina_producto(){
            alert("Producto eliminado con exito!");
        }    
        </script>

        <script type="text/javascript">
            function registro(){
            alert("Registro exitoso, Bienvenido!!!");
        }    
        </script>

        <script type="text/javascript">
            function consulta(){
            alert("Consulta enviada con exito!!!");
        }    
        </script>

        <script type="text/javascript">
            function compra_finalizada(){
            alert("Compra finalizada, muchas gracias!!!");
        }    
        </script>
        <script type="text/javascript">
            function actualizar(){
                alert("Ojo con la cantidad de productos disponibles!!!")
            }
        </script>
        <script type="text/javascript">
            function usuario_baja(){
                alert("Usuario dado de baja!!!")
            }
        </script>
    </body>
</html>