<?php 
 
 class Database 
    {
        public $db;
        public $data;
        public $dbhost = 'localhost';
        public $dbuser = 'root';
        public $dbpass = '';
        public $dbname = 'phpdasar';

        public function __construct()
        {
            try {
                $this->db = new PDO("mysql:host={$this->dbhost};dbname={$this->dbname}", $this->dbuser, $this->dbpass);
            } 
            catch(PDOException $e) 
            {
                echo $e->getMessage();
            }
                
        }

        public function query($query)
        {
            $this->data = $this->db->prepare($query);
        }
        public function execute()
        {
            return $this->data->execute();
        }

        public function checkRow(){
            return $this->data->rowCount();
        }

        public function singleData()
        {
            $this->data->execute();
            return $this->data->fetch(PDO::FETCH_ASSOC);
        }

        public function allData()
        {
            $this->data->execute();
            return $this->data->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    
?>
