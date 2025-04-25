<?php
class Produto
{
    private $codigo;
    private $nome;
    private $validade;
    private $qtdestoque;
    private $precounitario;

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