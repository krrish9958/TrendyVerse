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
    }

//    get product using item_id
    public function getProduct($item_id = null, $table = 'product')
    {
        if (isset($item_id)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$item_id}");

            $resultArray = array();
            //Fetching product data
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        }

    }

//    storing user id and password
    public function userLogin($user_id = null, $user_password = null ,$table = 'user')
    {
        if ($this->db->con!=null){
            if ($user_id!=null){
                if ($user_password!=null){
                    $column1 = implode(", ", array_keys($user_id));
                    $column2 = implode(", ", array_keys($user_password));
                    $value1 = implode(", ", array_values($user_id));
                    $value2 = implode(", ", array_values($user_password));
                    $result = $this->db->con->query("INSERT INTO %s(%s, %s) VALUES (%s, %s) ", $table, $column1, $column2, $value1, $value2);
                    return $result;
                }

            }
        }
    }
}
?>