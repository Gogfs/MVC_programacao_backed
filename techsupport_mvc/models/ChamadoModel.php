<?php

class ChamadoModel{
    private $pdo;

    public  function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function listarTodos(){
        $sql = "SELECT * FROM chamados ORDER BY data_criacao DESC";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $chamados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $chamados;
    }

    public function criar($titulo, $descricao, $prioridade){
        $sql = "INSERT INTO chamados(titulo, descricao, prioridade)
        VALUES (:titulo, :descricao, :prioridade)";

        $stmt = $this->spdo->prepare($sql);

        return $stmt->execute([
        'titulo' => $titulo,
        'descricao' => $descricao,
        'prioridade' => $prioridade

        ]);
    }

}