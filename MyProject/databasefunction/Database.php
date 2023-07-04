<?php


class Database{

    public $connection;
    public $statement;

    public $config = [

        'host'=>'localhost',
        'port'=>'3306',
        'dbname'=>'freelancing_system',
        'charset'=>'utf8mb4'

    ];

    public function __construct($username = 'root', $password='')
    {
        $dsn = 'mysql:'.http_build_query($this->config,'',';');
        
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        
    }

    public function query($query, $params = []){

        $this->statement = $this->connection->prepare($query);
        
        $this->statement->execute($params);

        return $this;
    }


    public function find(){
        
        return $this->statement->fetch();
        
    }
    
    public function get(){
        
        return $this->statement->fetchAll();
}

    public function abort($code  = 404){
        http_response_code($code);

        require '404.php';
        die();
    }

}
?>