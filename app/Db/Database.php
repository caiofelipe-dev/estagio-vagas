<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database {

    /**
     * Host de conexão com o banco de dados
     * @var string
     */
    const HOST = 'localhost';

    /**
     * Nome do banco de dados
     */
    const NAME = 'estagio_vagas';

    /**
     * Usuário do banco
     * @var string
     */
    const USER = 'root';

    /**
     * Senha de acesso ao banco de dados
     * @var string
     */
    const PASS = '123';

    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private $table;

    /**
     * Instância de conexão com o banco de dados
     * @var PDO
     */
    private $connection;

    /**
     * Define a tabela, instancia e conexão
     * @param string
     */
    public function __construct($table = null) {
        $this->table = $table;
        $this->setConnection();
    }

    /**
     * Método responsável por executar queries dentro do banco de dados
     * @param string $query
     * @param array $params
     * @return PDOStatement
     */
    public function execute($query,$params = []) {
        
    }

    /**
     * Método responsável por criar uma conexão com o banco de dados
     */
    private function setConnection() {
        try {
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("ERROR: ".$e->getMessage());
        }
    }

    /**
     * Método responsável por inserir dados no banco
     * @param array $values [ field => value ]
     * @return integer // o Id inserido
     */
    public function insert($values) {
        //DADOS DA QUERY
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');

        //MONTA A QUERY
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

    }
}