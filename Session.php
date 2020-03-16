<?php
    class Session {

        function __construct()
        {
            session_start();
        }

        function save($id,$data)
        {
            $data = $this->clearData($data);
            $id = $this->clearData($id);
            $_SESSION[$id] = $data;

            return ;
        }

        function delete($id)
        {   
            $id = $this->clearData($id);
            if(isset($_SESSION[$id])){
                unset($_SESSION[$id]);
            }

            return ;
        }

        function select($id)
        {
            $id = $this->clearData($id);
            
            return $_SESSION[$id]??"";
        }

        function destroy()
        {
            session_destroy();

            return ;
        }

        public function clearData($text)
	    {
            $text=trim(strip_tags($text));
        
		    return $text;
        }

        public function isSession($id)
        {

            return isset($_SESSION[$id]);
        }
        
    }