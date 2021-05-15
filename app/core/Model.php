<?php

class Model{
    
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllData($tablename)
    {
        $result = $this->db->query("SELECT * FROM $tablename");
        return $result;
    }

    public function insertData($tablename , $keys = [], $values = [])
    {
        $newkeys = [];
        $newvalues = [];

        foreach ($keys as $key) {
            $newkeys[] = '`' . $key . '`'; 
        }
        $keys = implode(', ', $newkeys);
        
        
        foreach ($values as $value) {
            $newvalues[] = '"' . $value . '"';
        }
        $values = implode(', ', $newvalues);
        
        // dprintr($values);

        // echo "INSERT INTO $tablename ( $keys ) VALUES ( $values)";

        // die();


        // $inserted = $this->db->query("INSERT INTO $tablename (`uname`, `uemail`, `uphone`, `upass`) VALUES ( , 'test@email.com', '234', '343');");
        
        $inserted = $this->db->query("INSERT INTO `$tablename` ( $keys ) VALUES ( $values);");

        return $inserted;
    }
}
