<?php

class UsuarioService
{
    private $usuario;
    private $conexao;
    public function __construct(Conexao $conexao, Usuario $usuario)
    {
        $this->conexao = $conexao->conectar();
        $this->usuario = $usuario;
    }
    public function inserir()
    {
        $query = "INSERT INTO tbusuarios(nome, email, senha, tipo, telefone, endereco)
                    VALUES(:nome, :email, :senha, :tipo, :telefone, :endereco)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":nome", $this->usuario->__get("nome"));
        $stmt->bindValue(":email", $this->usuario->__get("email"));
        $stmt->bindValue(":senha", $this->usuario->__get("senha"));
        $stmt->bindValue(":tipo", $this->usuario->__get("tipo"));
        $stmt->bindValue(":telefone", $this->usuario->__get("telefone"));
        $stmt->bindValue(":endereco", $this->usuario->__get("endereco"));
        $stmt->execute();
    }
    public function listar()
    {
        $query = "SELECT id, nome, email, telefone, endereco FROM tbusuarios";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function remover()
    {
        $uqery = "DELETE FROM tbusuarios
        WHERE id = :id";
        $stmt = $this->conexao->prepare($uqery);
        $stmt->bindValue(":id", $this->usuario->__get("id"));
        $stmt->execute();
    }
    public function buscarId()
    {
        $query = "SELECT * FROM tbusuarios
                WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue("id", $this->usuario->__get("id"));
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function editar()
    {
        $query = "UPDATE tbusuarios
                SET nome = :nome,email = :email, senha = :senha, tipo = :tipo, telefone = :telefone, endereco = :endereco
                WHERE id = :id";
        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue("nome", $this->usuario->__get("nome"));
        $stmt->bindValue("email", $this->usuario->__get("email"));
        $stmt->bindValue(":senha", $this->usuario->__get("senha"));
        $stmt->bindValue(":tipo", $this->usuario->__get("tipo"));
        $stmt->bindValue(":telefone", $this->usuario->__get("telefone"));
        $stmt->bindValue(":endereco", $this->usuario->__get("endereco"));
        $stmt->bindValue(":id", $this->usuario->__get("id"));

        return $stmt->execute();
        #$stmt->fetch(PDO::FETCH_OBJ);
    }

}
?>