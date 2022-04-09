<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');


class Usuario_model extends CI_Model
{
	
	/* Constructor de la Clase */
	function __construct()
	{
		parent::__construct();
	}

	/* ----------------------- Retorna todos los Usuarios ----------------------- */
	
	function get_usuarios()
	{
		//$this->db->select('id, nombre, apellido, username');
		$query = $this->db->get('usuarios');

		if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
	}

	/* ----------------------- Retorna todos los Usuarios No Eliminados ----------- */

	function get_usuarios_no_elim()
    {
        $query = $this->db->get_where('usuarios', array('baja' => 'NO'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

	/* ----------------------- Retorna todos los Administradores ----------------------- */

	function get_administradores()
	{
	    $query = $this->db->get_where('usuarios', array('baja' => 'NO', 'perfil_id' => '1'));
	    
	    if($query->num_rows()>0) {
	        return $query;
	    } else {
	        return FALSE;
	    }        
	}

	/* ----------------------- Retorna todos los Usuarios-Clientes ----------------------- */

	function get_usuarios_clientes()
	{
	    $query = $this->db->get_where('usuarios', array('baja' => 'NO', 'perfil_id' => '2'));
	    
	    if($query->num_rows()>0) {
	        return $query;
	    } else {
	        return FALSE;
	    }        
	}
	
	/* ----------------------- Inserta un Usuario ----------------------- */

	function add_usuario($data)
	{
		$this->db->insert('usuarios', $data);
	}
	
	/* ----------------------- Método para editar un usuario ----------------------- */
	function edit_usuario($id)
	{
		$query = $this->db->get_where('usuarios', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
	}
	
	/* ----------------------- Método para actualizar un usuario ----------------------- */
	function update_usuario($id, $data)
	{
		$this->db->where('id', $id);
        $query = $this->db->update('usuarios', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
	}

	/* ----------------------- Eliminación y activación logica de un Usuario ----------------------- */

	function estado_usuario($id, $data){
	    $this->db->where('id', $id);
	    $query = $this->db->update('usuarios', $data);
	    if($query) {
	        return TRUE;
	    } else {
	        return FALSE;
	    }
	}

	/* ----------------------- Retorna todos los Usuarios inactivos o eliminados ----------------------- */

	function not_active_usuarios()
	{
	    $query = $this->db->get_where('usuarios', array('baja' => 'SI'));
	    if($query->num_rows()>0) {
	        return $query;
	    } else {
	        return FALSE;
	    }        
	}


	/* ----------------------- Método para borrar un Usuario ----------------------- */
	function delete_usuario($id)
	{			
		$this->db->where('id', $id);
		$query = $this->db->delete('usuarios'); 
		return true;	
	}


	/*HACER MIS COMPRAS*/

    function obtener_compras($id){
    	$this->db->select('vc.fecha, pr.descripcion, vd.cantidad, vd.total');
    	$this->db->from('ventas_cabecera as vc');
    	$this->db->join('usuarios as us', 'us.id = vc.usuario_id');
    	$this->db->join('ventas_detalle as vd','vd.venta_id = vc.id');
    	$this->db->join('productos as pr', 'pr.id = vd.producto_id');

    	$this->db->where('usuario_id', $id);
    	$this->db->order_by('fecha', 'DESC');

    	$query = $this->db->get();

        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }   
}