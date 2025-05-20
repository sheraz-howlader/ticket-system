<?php
    class Load{
        public function view($fileName, $rcvData = array()){
            if ($rcvData == true) {
                extract($rcvData);
            }
           include 'views/'.$fileName.'.php';
        }

        public function model($modelName){
            include 'app/Models/'.$modelName.'.php';
            return new $modelName();
         }
    }