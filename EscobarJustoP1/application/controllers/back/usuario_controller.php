<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Usuario_controller extends CI_controller{
		
		function __construct()
		{
			parent::__construct();
			$this ->load->model('usuario_model');
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
			
		/**
		* Muestra todos los usuarios en tabla */
		function index()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Usuarios');
			
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['baja'] = $session_data['baja'];

			$dat = array('usuarios' => $this->usuario_model->get_usuarios_no_elim() );

			$this->load->view('front/head',$data);
			$this->load->view('front/menu');
			$this->load->view('back/muestrausuarios_view',$dat);
			$this->load->view('front/footer');
			}else{
			redirect('login', 'refresh'); }
		}

			
		/**
		* Muestra formulario para agregar usuario
		*/
		function form_agrega_usuario()  	//Si se modifica, modificar (agrega_usuario) tambien
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Agregar Usuario');
			
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['baja'] = $session_data['baja'];

			$this->load->view('front/head', $data);
			$this->load->view('front/menu');
			$this->load->view('back/agregausuario_view');
			$this->load->view('front/footer');
			}else{
			redirect('login', 'refresh'); }
		}

		/**
		* Verifica datos ingresados en el formulario para agregar usuario
		*/
		function agrega_usuario()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[usuarios.email]');
			$this->form_validation->set_rules('usuario', 'Usuario', 
												'trim|required|is_unique[usuarios.usuario]');
			$this->form_validation->set_rules('perfil_id', 'perfil_id', 'required');
			$this->form_validation->set_rules('pass', 'Contraseña','required');
			$this->form_validation->set_rules('re_pass', 'Repetir contraseña', 'required|matches[pass]');
				

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
											'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('matches',
											'<div class="alert alert-danger">Los contraseña ingresada no coincide</div>');

			$this->form_validation->set_message('is_unique',
											'<div class="alert alert-danger">El campo %s ya existe</div>');

			$pass = $this->input->post('re_pass',true);

			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'usuario'=>$this->input->post('usuario',true),
				'perfil_id'=>$this->input->post('perfil_id',true),
				'pass'=>($pass),
			);


			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
				$this->load->view('front/head', $data);
				$this->load->view('front/menu');
				$this->load->view('partes/agregausuario_view');
				$this->load->view('front/footer');		
			}
			
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$usuario = $this->usuario_model->add_usuario($data);

				//Redirecciono a la pagina de perfil
				redirect('usuarios_todos','refresh');
			}	
		}
			
		/**
		* Muestra para modificar un usuario
		*/
		function muestra_modificar()
		{
			$id = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id);

			if ($datos_usuario != FALSE) {
				foreach ($datos_usuario->result() as $row) 
				{
					$id = $row->id;
					$nombre = $row->nombre;
					$apellido = $row->apellido;
					$email = $row->email;
				}

				$dat = array('usuario' =>$datos_usuario,
					'id'=>$id,
					'nombre'=>$nombre,
					'apellido'=>$apellido,
					'email'=>$email,
				);
			} 
			else 
			{
				return FALSE;
			}
			if($this->_veri_log()){
			$data = array('titulo' => 'Modificar Usuario');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['baja'] = $session_data['baja'];

			$this->load->view('front/head', $data);
			$this->load->view('front/menu');
			$this->load->view('back/modificausuario_view', $dat);
			$this->load->view('front/footer');
			}else{
			redirect('login', 'refresh');
			}
		}

		/**
		* Verifica datos para modificar un usuario
		*/
		function modificar_usuario()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('perfil_id', 'perfil_id', 'required');

			$id = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id);

			$dat = array(
				'id'=>$id,
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'perfil_id'=>$this->input->post('perfil_id',true)
			);

			if ($this->form_validation->run()==FALSE)
			{
				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];
				$data['baja'] = $session_data['baja'];

				$this->load->view('front/head', $data);
				$this->load->view('front/menu');
				$this->load->view('back/modificausuario_view', $dat);
				$this->load->view('front/footer');
			}	
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$usuario = $this->usuario_model->update_usuario($id, $dat);

				//Redirecciono a la pagina de perfil
				redirect('usuarios_todos','refresh');
			}	
		}

		function modificar_datos_usuario()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('usuario', 'usuario', 'required');

			$id = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id);

			$dat = array(
				'id'=>$id,
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'usuario'=>$this->input->post('usuario',true)
			);

			if ($this->form_validation->run()==FALSE)
			{
				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];
				$data['baja'] = $session_data['baja'];

				$this->load->view('front/head', $data);
				$this->load->view('front/menu');
				$this->load->view('back/muestra_datos_us', $dat);
				$this->load->view('front/footer');
			}	
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$usuario = $this->usuario_model->update_usuario($id, $dat);

				//Redirecciono a la pagina de perfil
				redirect('panel','refresh');
			}	
		}
		/**
		* Obtiene los datos del usuario a eliminar
		$ this-> uri-> segment (n)

		Permite recuperar un segmento específico. Donde n es el número de segmento que desea recuperar. Los segmentos están numerados de izquierda a derecha. 

		*/
		function eliminar_usuario(){
		    $id = $this->uri->segment(2); 
		    $data = array(
		   		'baja'=>'SI'
		    );

		   	$this->usuario_model->estado_usuario($id, $data);
		   	redirect('usuarios_todos', 'refresh');
		}

		/**
		* Obtiene los datos del usuario a activar
		*/
		function activar_usuario(){
		    $id = $this->uri->segment(2);
		    $data = array(
		    	'baja'=>'NO'
		    );

		    $this->usuario_model->estado_usuario($id, $data);
		    redirect('usuarios_eliminados', 'refresh');
		}

		/**
		* Usuarios eliminados logicamente
		*/
		function muestra_eliminados()
		{    	
		    if($this->_veri_log()){
		    $data = array('titulo' => 'Usuarios eliminados');

			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['baja'] = $session_data['baja'];
				
			$dat = array(
			    'usuarios' => $this->usuario_model->not_active_usuarios()
			);

			$this->load->view('front/head', $data);
			$this->load->view('front/menu');
			$this->load->view('back/muestrauseliminados_view', $dat);
			$this->load->view('front/footer');
			}else{
			redirect('login', 'refresh');}
		}

		function listar_compras()
		{ 
            if($this->_veri_log()){
			$data = array('titulo' => 'Mis compras');
		
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['baja'] = $session_data['baja'];
			
			$dat = array('compras' => $this->usuario_model->obtener_compras($session_data['id']));

			$this->load->view('front/head',$data);
			$this->load->view('front/menu');
			$this->load->view('back/muestra_compras',$dat);
			$this->load->view('front/footer');
            }else{
			redirect('login', 'refresh');
            }
        }

        function mostrar_datos(){
        	if($this->_veri_log()){
				$data = array('titulo' => 'Mis datos');
		
				$session_data = $this->session->userdata('logged_in');
				$data['id'] = $session_data['id'];
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];
				$data['apellido'] = $session_data['apellido'];
				$data['email'] = $session_data['email'];
				$data['usuario'] = $session_data['usuario'];

        		$this->load->view('front/head',$data);
				$this->load->view('front/menu');
				$this->load->view('back/muestra_datos_us');
				$this->load->view('front/footer');
            	}else{
				//redirect('login', 'refresh');
            }
        }
	}
/*End of file*/