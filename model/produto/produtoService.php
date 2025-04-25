<?php
class ProdutoService
{
    private $conexao;
    private $produto;
    public function __construct(Conexao $conexao, Produto $produto)
    {
        $this->conexao = $conexao->conectar();
        $this->produto = $produto;
    }
    public function inserir()
    {
        $query = "INSERT INTO tbprodutos(nome, validade, qtdestoque, precounitario)
                VALUES(:nome, :validade, :qtdestoque, :precounitario)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":nome", $this->produto->__get("nome"));
        $stmt->bindValue(":validade", $this->produto->__get("validade"));
        $stmt->bindValue(":qtdestoque", $this->produto->__get("qtdestoque"));
        $stmt->bindValue(":precounitario", $this->produto->__get("precounitario"));
        $stmt->execute();
    }
    public function listar()
    {
        $query = "SELECT * FROM tbprodutos";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function remover()
    {
        $query = "DELETE FROM tbprodutos
                WHERE codigo = :codigo";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":codigo", $this->produto->__get("codigo"));
        $stmt->execute();
    }
    public function buscarId()
    {
        $query = "SELECT * FROM tbprodutos
                WHERE codigo = :codigo";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue("codigo", $this->produto->__get("codigo"));
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function editar()
    {
        $query = "UPDATE tbprodutos
                SET nome = :nome, validade = :validade, qtdestoque = :qtdestoque, precounitario = :precounitario
                WHERE codigo = :codigo";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":nome", $this->produto->__get("nome"));
        $stmt->bindValue(":validade", $this->produto->__get("validade"));
        $stmt->bindValue(":qtdestoque", $this->produto->__get("qtdestoque"));
        $stmt->bindValue(":precounitario", $this->produto->__get("precounitario"));
        $stmt->bindValue(":codigo", $this->produto->__get("codigo"));
        return $stmt->execute();

    }
}


?>