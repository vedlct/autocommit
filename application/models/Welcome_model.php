<?php
//birds_model.php (Array of Objects)
class Welcome_model extends CI_Model{
//birds_model.php (Array of Strings)

    function get_products($q){
        $this->db->select('product_name');
        $this->db->like('product_name', $q);
        $query = $this->db->get('products');
       // $query=$this->db->query("SELECT * FROM `products` WHERE `product_name` LIKE "%$q%" ");
       // return $query->result();
        if($query->num_rows() > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = htmlentities(stripslashes($row['product_name'])); //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }

//        $newar=array();
//        $query=$this->db->query("SELECT * FROM `products` WHERE `product_name` LIKE "%$q%" ");
//        //return $query->result();
//        foreach ($query->result() as $s){
//
//            array_push($newar , $s->product_name);
//
//        }
//
//        echo json_encode($newar);
    }

}