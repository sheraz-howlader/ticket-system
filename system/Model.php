<?php
    class Model extends DB{

        public function __construct(){
            parent::__construct();
         }

        public function first($sql){
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        //public function all($sql){
        //    $stmt = $this->db->prepare($sql);
        //    $stmt->execute();
        //    return $stmt->fetchAll(PDO::FETCH_OBJ);
        //}

        //insert
        public function insert($sql, $data){
            $stmt = $this->db->prepare($sql);
            return $stmt->execute($data);
        }

        //select, update, delete
        public function execute($sql){
            $stmt = $this->db->prepare($sql);
            return $stmt->execute();
        }
    }