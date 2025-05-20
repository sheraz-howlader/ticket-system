<?php
    class DB{
        protected $db;

        public function __construct(){
            try {
                $this->db = new PDO('mysql:host=localhost;dbname=ticket-system','admin','mdSHIraj@123');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function prepare($sql){
            return $this->db->prepare($sql);
        }
    }