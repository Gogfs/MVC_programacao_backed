<?php
require_once '../config/database.php';
require_once '../models/ChamadoModel.php';
require_once '../controllers/ChamadoController.php';


$chamadoController = new ChamadoController($pdo);