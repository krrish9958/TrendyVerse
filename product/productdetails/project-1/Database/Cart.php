<?php

class Cart
{
    public $db = null;

    public function __construct(DBcontroller $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }
//    insert into cart table
    public function insertintoCart($params= null, $table="cart"){
        if(this->db->con!=null){
            if($params!=null){
                $columns = implode(',', array_keys($params));
                print_r($params);
                $values = implode(',', array_keys($params));
                print_r($values);

            }
        }
    }
}