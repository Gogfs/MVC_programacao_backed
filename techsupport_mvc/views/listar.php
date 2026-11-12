<?php

$lista = new chamadoController();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<div class="max-w-5xl mx-auto">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold text-gray-800">Chamados de Suporte</h1>
        <a href="index.php?acao=novo" class="bg-teal-600 hover:bg-teal-700 text-white font-semibold px-4 py-2 rounded">
            Novo Chamado
        </a>
</div>



<table class="border-collapse border border-gray-300 w-full mt-6">
        <thead>
            <tr class="bg-teal-600 text-white">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Título</th>
                <th class="border border-gray-300 px-4 py-2">Descrição</th>
                <th class="border border-gray-300 px-4 py-2">Prioridade</th>
                <th class="border border-gray-300 px-4 py-2">Data Criação</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                foreach($chamados as $linha): 
            ?>
                <tr class="text-center hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">
                        <?php echo htmlspecialchars($linha["id"]); ?>
                    </td>

                    <td class="border border-gray-300 px-4 py-2">
                        <?php echo htmlspecialchars($linha["titulo"]); ?>
                    </td>

                    <td class="border border-gray-300 px-4 py-2">
                        <?php echo htmlspecialchars($linha["descricao"]); ?>
                    </td>

                    <td class="border border-gray-300 px-4 py-2">
                        <?php echo htmlspecialchars($linha["prioridade"]); ?>
                    </td>

                    <td class="border border-gray-300 px-4 py-2">
                    <?php echo htmlspecialchars($linha["data_criacao"]); ?>
                    </td>
                </tr>
            <?php 
                endforeach;
            ?>
        </tbody>
    </table>

</body>
</html>