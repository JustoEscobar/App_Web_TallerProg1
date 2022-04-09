<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Producto_model extends CI_Model{
		
	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

    /**
    * Retorna todos los productos
    */
    function get_productos()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna todos los productos dieteticos
    */
    function get_dieteticos()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '1'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna todos los planes alimentarios
    */
    function get_planes()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '2'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Inserta un producto
    */
    public function add_producto($data){
        $this->db->insert('productos', $data);
    }

    /**
    * Retorna todos los datos de un producto
    */
    function edit_producto($id){

        $query = $this->db->get_where('productos', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
    }

    /**
    * Actualiza los datos de un producto
    */
    function update_producto($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('productos', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Eliminación y activación logica de un producto
    */
    function estado_producto($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('productos', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function get_stock_producto($id){
        $query = $this->db->get_where('productos', array('stock'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }  
    }

    /**
    * Retorna todos los productos inactivos o eliminados
        */
    function not_active_productos()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
    function get_ventas_cabecera()
    {   
        //select * from ventas_cabecera;
        $query = $this->db->get_where('ventas_cabecera');
       
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }
    
        function get_ventas_detalle($id)
    {
        $this->db->join('productos','productos.id = ventas_detalle.producto_id');   

        //select * from ventas_detalle;
        $query = $this->db->get_where('ventas_detalle', array('venta_id' => $id));
       
          
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }

    function obtener_ventas(){
        $this->db->select('vc.fecha, us.nombre, us.apellido, pr.descripcion, vd.cantidad, vd.total');
        $this->db->from('ventas_cabecera as vc');
        $this->db->join('usuarios as us', 'vc.usuario_id = us.id');
        $this->db->join('ventas_detalle as vd', 'vc.id = vd.venta_id');
        $this->db->join('productos as pr', 'vd.producto_id = pr.id');

        $query = $this->db->get();

        if ($query->num_rows()>0) {
            return $query;
        }
        else{
            return FALSE;
        }
    }

    public function contar_productos($type){
        if(!empty($type)){
            $this->db->where('categoria_id', $type);
        }

        return $this->db->count_all_results('productos_activos');
    }
    //obtiene la lista de prodcutos limitado de acuerdo al limite de cantidad
    public function list_prod_abm($type,$limit,$offset){
        if ($type == 'act'){
            $this->db->where('eliminado', 'NO');
        }else{
            $this->db->where('eliminado', 'SI');
        }

        $this->db->limit($type,$offset);
        $query = $this->db->get('productos');
        return $query->result();
    }


} 