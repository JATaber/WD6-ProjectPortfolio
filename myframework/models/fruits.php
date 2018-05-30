<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/18/18
 * Time: 10:12 AM
 */

class fruits{

    public function __construct($parent)
    {
        $this->db = $parent->db;
    }

    public function select($sql, $value=array()){

        $this->sql = $this->db->prepare($sql);
        $this->sql->execute($value);
        //$result = $this->db->execute($value);
        $data = $this->sql->fetchAll();

        return $data;
    }

    public function add($sql, $value=array()){

        $this->sql = $this->db->prepare($sql);
        $this->sql->execute($value);
        //$results = $this->db->execute($value);

    }

    public function delete($sql, $value=array()){
        $this->sql = $this->db->prepare($sql);
        $this->sql->execute($value);
    }

    public function update($sql, $value=array()){
        $this->sql = $this->db->prepare($sql);
        $this->sql->execute($value);
    }
}