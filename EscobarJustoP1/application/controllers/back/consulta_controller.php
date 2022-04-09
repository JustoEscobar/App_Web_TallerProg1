<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Consulta_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('consulta_model');
		}

		private function _veri_log()
    	{
	    	if ($this->session->userdata('logged_in')) 
	    	{
	    		return TRUE;
	    	} else {
	    		return FALSE;
	    	}
    	}
		
		function index()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[consultas.email]');
			$this->form_validation->set_rules('telefono', 'Telefono', 'required|numeric');
			$this->form_validation->set_rules('mensaje', 'Mensaje', 'required');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			
			$this->form_validation->set_message('is_unique',
										'<div class="alert alert-danger">El campo %s ya existe</div>');

			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'=>$this->input->post('nombre',true),
				'email'=>$this->input->post('email',true),
				'telefono'=>$this->input->post('telefono',true),
				'mensaje'=>$this->input->post('mensaje',true),
			);


			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
				$this->load->view('front/head', $data);
				$this->load->view('front/menu');
				$this->load->view('partes/consulta');
				$this->load->view('front/footer');		
			}
			
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$consultas = $this->consulta_model->add_consulta($data);

				//Redirecciono a la pagina de perfil
				redirect('consulta');
			}	
		}

		function listar_consultas()
	    { 
             if($this->_veri_log()){
			$data = array('titulo' => 'Consultas');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['baja'] = $session_data['baja'];


			$dat = array('muestra_consultas' => $this->consulta_model->get_consultas());

			$this->load->view('front/head',$data);
			$this->load->view('front/menu');
			$this->load->view('back/muestra_consultas',$dat);
			$this->load->view('front/footer');
            }else{
			redirect('login', 'refresh');
            }
         }

        function eliminar_consulta(){
		    $id = $this->uri->segment(2); 
		    $data = array(
		   		'contestado'=>'SI'
		    );

		   	$this->consulta_model->estado_consulta($id, $data);
		   	redirect('muestra_consultas', 'refresh');
		}


         function muestra_eliminados()
		{    	
		    if($this->_veri_log()){
		    $data = array('titulo' => 'Consultas contestadas');
		    
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['baja'] = $session_data['baja'];
				
			$dat = array(
			    'consultas' => $this->consulta_model->not_active_consultas()
			);

			$this->load->view('front/head', $data);
			$this->load->view('front/menu');
			$this->load->view('back/muestra_consul_elim', $dat);
			$this->load->view('front/footer');
			}else{
			redirect('login', 'refresh');}
		}	
	}

/* End of file 
*/