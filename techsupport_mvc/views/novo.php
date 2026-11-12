<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="index.php?acao=salvar" method="POST" class="flex flex-col justify-center items-center gap-4">
        <input type="text" name="titulo" placeholder="Título" class="bg-gray-200 text-teal-600 p-2 w-[450px] rounded-md">
        <textarea name="descricao" rows="5"></textarea>
            
        <select name="prioridade">
            <option value="Alta">Alta</option>
            <option value="Média">Média</option>
            <option value="Baixa">Baixa</option>
        </select>

        <div class="flex mt-4 gap-4">
            <button type="reset" class="border-2 border-teal-600 text-teal-600 w-[150px] px-4 py-1 rounded-full transition duration-300 ease-in-out hover:bg-teal-600 hover:text-white">Limpar</button>
            <button type="submit" class="bg-teal-600 text-white w-[200px] px-4 py-1 rounded-full transition duration-300 ease-in-out hover:border-2 border-teal-600 hover:text-teal-600 hover:bg-white">Cadastrar chamado</button>
        </div>
                
    </form>
</body>
</html>