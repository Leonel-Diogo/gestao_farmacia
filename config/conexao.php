<?php
class Conexao
{
    private $host = "localhost";
    private $dbname = "gestao_farmacia";
    private $usuario = "root";
    private $senha = "";

    public function conectar()
    {
        try {
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->usuario,
                $this->senha
            );
            return $conexao;
        } catch (PDOException $erro) {
            echo "<strong>Erro de conexão: </strong>" . $erro->getMessage();
        }
    }
}

?>