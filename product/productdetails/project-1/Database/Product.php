<?php 
//use to fetch product data
class Product{
    public $db = null;
    public function __construct(DBcontroller $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //Fetch product data using getData method
    public function getData($table = 'product'){
       $result = $this->db->con->query("SELECT * FROM {$table}");

       $resultArray = array();
//Fetching product data
       while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[] = $item;
       }
       return $resultArray;
    } public function getData2($table2 = 'menswear'){
       $result1 = $this->db->con->query("SELECT * FROM {$table2}");

       $resultArray1 = array();
//Fetching product data
       while ($item = mysqli_fetch_array($result1, MYSQLI_ASSOC)){
           $resultArray1[] = $item1;
       }
       return $resultArray1;
    }
}
?>