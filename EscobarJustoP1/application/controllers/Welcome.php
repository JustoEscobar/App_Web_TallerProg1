<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function _constuct(){
		parent::_construct();
	}

	public function index(){
		$data['titulo']= 'principal';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];

		$this ->load->view('front/head', $data);
		$this ->load->view('front/menu');
		$this ->load->view('partes/principal');
		$this ->load->view('front/footer');
	}
	
	public function quienes(){
		$data['titulo']= 'acerca-de';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];

		$this ->load->view('front/head', $data);
		$this ->load->view('front/menu');
		$this ->load->view('partes/quienes');
		$this ->load->view('front/footer');
	}

	public function consulta(){
		$data['titulo']= 'consultas';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];

		$this ->load->view('front/head', $data);
		$this ->load->view('front/menu');
		$this ->load->view('partes/consulta');
		$this ->load->view('front/footer');
	}

	public function terminos(){
		$data['titulo']= 'terminos';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];

		$this ->load->view('front/head', $data);
		$this ->load->view('front/menu');
		$this ->load->view('partes/terminos');
		$this ->load->view('front/footer');
	}

	public function registrarse(){
		$data['titulo']='Registrarse';


		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];


		$this->load->view('front/head',$data);
		$this->load->view('front/menu');
		$this->load->view('partes/registro'); 
		$this->load->view('front/footer');
	}

	public function loguearse(){
		$data['titulo']='Ingresar'; 


		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];


		$this->load->view('front/head',$data);
		$this->load->view('front/menu'); 
		$this->load->view('partes/login'); 
		$this->load->view('front/footer');
	}

	public function us_logueado(){
		$data['titulo']='Usuario Logueado'; 


		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];

		$this->load->view('front/head',$data);
		$this->load->view('front/menu');
		$this->load->view('partes/principal'); 
		$this->load->view('front/footer');
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
        session_destroy();
		//Pagina que carga despues del logout
		redirect('inicio');
	}

	public function carrito(){
		$data['titulo']='Carrito de Compras'; 


		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];

		$this->load->view('front/head',$data);
		$this->load->view('front/menu');
		$this->load->view('back/carritoparte_view'); 
		$this->load->view('front/footer');
	}

	public function factura_prueba(){
		$data['titulo']='Factura'; 


		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];

		$this->load->view('front/head',$data);
		$this->load->view('front/menu');
		$this->load->view('back/factura'); 
		$this->load->view('front/footer');
	}

}

