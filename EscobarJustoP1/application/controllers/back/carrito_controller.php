<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carrito_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('carrito_model');
		$this->load->model('producto_model');
        $this->load->library('cart');
	}

	public function index()
	{
	}
 
	public function catalogo(){

		$dat = array('productos' => $this->producto_model->get_productos());

		$data = array('titulo' => 'Todos los Productos');
		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];


		$this->load->view('front/head', $data);
		$this->load->view('front/menu');
		$this->load->view('partes/productos_catalogo', $dat);
		$this->load->view('front/footer');
	}


	//Este método llama a la página Productos, con el carrito si está logueado
	public function dieteticos()
	{
		$dat = array('productos' => $this->producto_model->get_dieteticos());

		$data = array('titulo' => 'Dieteticos');
		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];


		$this->load->view('front/head', $data);
		$this->load->view('front/menu');
		/*
		if ($session_data) 
		{
			$this->load->view('front/carritoparte_view' );
		}
		*/
		$this->load->view('partes/productos_catalogo', $dat);
		$this->load->view('front/footer');
	}

	public function planes()
	{
		$dat = array('productos' => $this->producto_model->get_planes());

		$data = array('titulo' => 'Planes');
		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];


		$this->load->view('front/head', $data);
		$this->load->view('front/menu');
		$this->load->view('partes/planes_catalogo', $dat);
		$this->load->view('front/footer');
	}
		
	//Agrega elemento al carrito
	function add()
	{
        // Genera array para insertar en el carrito
		$insert_data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('descripcion'),
			'price' => $this->input->post('precio_venta'),
			'qty' => 1
			);	

        // Inserta elemento al carrito
		$this->cart->insert($insert_data);
	      
        // Redirige a la misma página que se encuentra
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	
	//Elimina elemento del carrito o el carrito entero
	function remove($rowid) {
        //Si $rowid es "all" destruye el carrito
		if ($rowid==="all")
		{
			$this->cart->destroy();
		}
		else //Sino destruye sola fila seleccionada
		{ 
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
				);
            // Actualiza los datos
			$this->cart->update($data);
		}
		
        // Redirige a la misma página que se encuentra
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	//Actualiza el carrito que se muestra
	/*function actualiza_carrito()
    {        
	    // Recibe los datos del carrito, calcula y actualiza
       	$cart_info =  $_POST['cart'];

		foreach( $cart_info as $id => $cart)
		{	
		    $rowid = $cart['rowid'];
	    	$price = $cart['price'];
	    	$amount = $price * $cart['qty'];
	    	$qty = $cart['qty'];
	    
	    	$data = array(
					'rowid'   => $rowid,
	                'price'   => $price,
	                'amount' =>  $amount,
					'qty'     => $qty
					);
	         
			$this->cart->update($data);
		}

		// Redirige a la misma página que se encuentra
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}*/

	//PRUEBA ACTUALIZAR CARRITO ERROR DE STOCK
	function actualiza_carrito()
    {        
	    // Recibe los datos del carrito, calcula y actualiza
       	$cart_info =  $_POST['cart'];

		foreach( $cart_info as $id => $cart)
		{	
		    $rowid = $cart['rowid'];
	    	$price = $cart['price'];
	    	$amount = $price * $cart['qty'];
	    	$qty = $cart['qty'];
	    
	    	$data = array(
					'rowid'   => $rowid,
	                'price'   => $price,
	                'amount' =>  $amount,
					'qty'     => $qty
					);
	         
			$cantidad = $data['qty']; //cantidad al actualizar producto
			
 			//$stock_producto = 12; //valor constante de prueba
 			if ($cart = $this->cart->contents()):
 				foreach ($cart as $item):	
	    			$producto = $this->producto_model->edit_producto($item['id']);
 					foreach ($producto->result() as $row) 
					{
						$stock_producto = $row->stock;
					
					}
				endforeach;
			endif;
			
 	        if ($stock_producto < $cantidad) {
		    	//$var = "Cantidad de productos ingresada excede el stock disponible";
				//echo "<script> alert('".$var."'); </script>";
		    	echo "Cantidad de productos ingresada excede el stock disponible";
			}else{
	 	        $this->cart->update($data);
	 	    }
		}
		// Redirige a la misma página que se encuentra
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}


	//Muestra los detalles de la venta y confirma(función guarda_compra())
	function muestra_compra()
	{
		$data = array('titulo' => 'Confirmar compra');
		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];
		$data['apellido'] = $session_data['apellido'];
		$data['email'] = $session_data['email'];
		
		$this->load->view('front/head', $data);
		$this->load->view('front/menu', $data);
		$this->load->view('partes/compra', $data);
		$this->load->view('front/footer');

    }
    

    //Guarda los datos de la venta en la base de datos    
    public function guarda_compra()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['id'] = $session_data['id'];

		$total = $this->cart->total();
		
		$venta = array(
			'fecha' 		=> date('Y-m-d'),
			'usuario_id' 	=> $data['id'],
			'total_venta'	=> $total
		);	
		$venta_id = $this->carrito_model->insert_venta($venta); //inserta en la tabla venta_cabecera
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$venta_detalle = array(
					'venta_id' 		=> $venta_id,
					'producto_id' 	=> $item['id'],
					'cantidad' 		=> $item['qty'],
					'precio' 		=> $item['price'],
					'total' 		=> $item['subtotal']
					);	
            
            	$cust_id = $this->carrito_model->insert_venta_detalle($venta_detalle); //inserta en la tabla venta_detalle

            	//Descuenta del stock y lo guarda en la base de datos
            	$producto = $this->producto_model->edit_producto($item['id']);
            	foreach ($producto->result() as $row) 
				{
					$stock = $row->stock;
				}

            	$stock_edit = $stock - 	$item['qty'];

            	$stock_nuevo = array(
            		'stock'	=> $stock_edit
            		);

            	$modifica = $this->producto_model->update_producto($item['id'], $stock_nuevo);

			endforeach;
		endif;
	    

		$data = array('titulo' => 'Compra Finalizada');

		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['baja'] = $session_data['baja'];

        $this->load->view('front/head', $data);
		$this->load->view('front/menu', $data);
		$this->load->view('partes/compra_lista');
		$this->load->view('front/footer');

		$final = $this->cart->destroy();

	}

	function borrar_carrito() 
	{
		$this->cart->destroy();
			
        // Redirige a la misma página que se encuentra
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

}