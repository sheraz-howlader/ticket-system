<?php

    class User extends Model{

        protected $table = 'users';

        public function __construct(){
            parent:: __construct();
        }

        public function checkUser($email)
        {
            $sql = "SELECT * FROM $this->table WHERE email='$email'";
            return $this->first($sql);
        }

        public function create($data)
        {
            $columns = implode(',', array_keys($data));
            $placeholders = ':' . implode(',:', array_keys($data));
            $sql = "INSERT INTO {$this->table} ($columns) VALUES ($placeholders)";

            return $this->insert($sql, $data);
        }
    }