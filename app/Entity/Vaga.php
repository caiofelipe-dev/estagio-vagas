<?php

namespace App\Entity;

use \App\Db\Database;

class Vaga {
    /**
    * Identificador único da vaga
    * @var integer
    */
    public $id;

    /**
     * Título da vaga
     * @var string
     */
    public $titulo;

    /**
     * Descrição da vaga (pode conter html)
     * @var string
     */
    public $descricao;

    /**
     * Define se a vaga está ativa
     * @var string(s/n)
     */
    public $ativo;

    /**
     * Dat de publicação da vaga
     * @var string
     */
    public $data;

    /**
     * Método responsável por cadastrar uma nova vaga no database
     * @return boolean
     */
    public function cadastrar() {
        //DEFINIR A DATA
        $this->data = date('Y-m-d H:i:s');

        //INSERIR A VAGA NO BANCO
        $obDatabase = new Database('vagas');
        echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;

        //ATRIBUIR O ID DA VAGA NA INSTANCIA


        //RETORNAR SUCESSO
    }
}

?>