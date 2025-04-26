<?php
class Categoria
{
    private $id;
    private $nome;
    private $descricao;
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    public function __get($atributo)
    {
        return $this->$atributo;
    }
}

?>