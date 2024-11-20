<?php

namespace core;
    class Messages{
        
        private $errors = array();
        private $infos = array();
        private $messagesCount = 0;

        public function add_error($error){
            $this->errors[] = $error;
            $this->messagesCount ++;
        }

        public function add_info($info){
            $this->infos[] = $info;
            $this->messagesCount ++;
        }

        public function is_empty(){
            return $this->messagesCount == 0;
        }

        public function is_error(){
            return count($this->errors) > 0;
        }

        public function is_info(){
            return count($this->infos) > 0;
        }

        public function get_errors(){
            return $this->errors;
        }

        public function get_infos(){
            return $this->infos;
        }

        public function clear(){
            $this->errors = array();
            $this->infos = array();
            $this->messagesCount = 0;
        }

    }
?>