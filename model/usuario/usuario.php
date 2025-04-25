<?php
class Usuario
{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $tipo;
    private $telefone;
    private $endereco;
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