<?php
class CategoriaService
{
    private $conexao;
    private $categoria;
    public function __construct(Conexao $conexao, Categoria $categoria)
    {
        $this->conexao = $conexao->conectar();
        $this->categoria = $categoria;
    }
    public function cadastrar()
    {
        $query = "INSERT INTO tbcategoria(nome, descricao)
                    VALUES(:nome, :descricao)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":nome", $this->categoria->__get("nome"));
        $stmt->bindValue(":descricao", $this->categoria->__get("descricao"));
        $stmt->execute();
    }
    public function listar()
    {
        $query = "SELECT * FROM tbcategoria";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }
    public function remover()
    {
        $query = "DELETE FROM tbcategoria
        WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":id", $this->categoria->__get("id"));
        $stmt->execute();
        #return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function buscarId()
    {
        $query = "SELECT * FROM tbcategoria
                WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":id", $this->categoria->__get("id"));
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function editar()
    {
        $query = "UPDATE tbcategoria
        SET nome =:nome, descricao = :descricao
        WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":nome", $this->categoria->__get("nome"));
        $stmt->bindValue(":descricao", $this->categoria->__get("descricao"));
        $stmt->bindValue(":id", $this->categoria->__get("id"));
        return $stmt->execute();
        # $stmt->fetch(PDO::FETCH_OBJ);
    }
}

?>