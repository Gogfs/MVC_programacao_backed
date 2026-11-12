<?php

class ChamadoController{
    private ChamadoModel $chamadoModel; 

    public function __construct($pdo){
        $this->chamadoModel = new ChamadoModel($pdo);
    }

    public function index(){
        $chamados = $this->chamado->listarTodos();
        include 'views/chamados/listar.php';
    }

    public function novo(){
        include 'views/chamados/novo.php';
    }

    public function salvar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $titulo = trim(strip_tags($_POST['titulo'] ?? ''));
            $descricao = trim(strip_tags($_POST['descricao'] ?? ''));
            $prioridade = trim(strip_tags($_POST['prioridade'] ?? 'Baixa'));

            $this->chamadoModel->criar($titulo, $descricao, $prioridade);

            header('Location: index.php?acao=listar');
            exit;
        }
    }
}
