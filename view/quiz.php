<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body bgcolor="#4CAF50">
    <div class="corpo">
        <div class="titulo">
            <p class="texto">Quiz do Harry Potter</p>
        </div>
        <form action="../model/respostas.php" method="POST">
            <h4>1 - No filme relíquias da morte parte 2 quem mata Nagini? </h4> 
            <!-- Neville Longbottom -->
            <select name="pergunta1">
                <option value="sv" selected>...</option> 
                <option value="op1">Neville</option> 
                <option value="op2">Harry</option>
                <option value="op3">Hermione</option>
            </select>

            <h4>2 - Quais são os integrantes do grupo trio de ouro? </h4>
            <!-- Harry, Hermione e Rony -->
            <select name="pergunta2">
                <option value="sv" selected>...</option> 
                <option value="op1">Neville, Harry e Gina Weasley</option> 
                <option value="op2">Harry, Hermione e Rony</option>
                <option value="op3">Luna, Neville e Draco</option>
            </select>

            <h4>3 - Qual é a plataforma para ir a Hogwarts? </h4>
            <!-- 9/3 4 -->
            <select name="pergunta3">
                <option value="sv" selected>...</option> 
                <option value="op1">9/3 4</option> 
                <option value="op2">Brás</option>
                <option value="op3">Sé</option>
            </select>

            <h4>4 - Em que filme Harry, Hermione e Rony descobrem um tal de Nicolau Flamel? </h4>
            <!-- Pedra Filosofal -->
            <select name="pergunta4">
                <option value="sv" selected>...</option> 
                <option value="op1">Harry Potter e a Pedra Filosofal</option> 
                <option value="op2">Harry Potter e a Ordem da Fênix</option>
                <option value="op3">Harry Potter e o Enigma do Príncipe</option>
            </select>

            <h4>5 - Quantas Horcrux existiam? </h4>
            <!-- 7 -->
            <select name="pergunta5">
                <option value="sv" selected>...</option> 
                <option value="op1">5</option> 
                <option value="op2">9</option>
                <option value="op3">7</option>
            </select>

            <h4>6 - Em que filme Luna aparece? </h4>
            <!-- Ordem da Fênix -->
            <select name="pergunta6">
                <option value="sv" selected>...</option> 
                <option value="op1">Harry Potter e a Pedra Filosofal</option> 
                <option value="op2">Harry Potter e a Ordem da Fênix</option>
                <option value="op3">Harry Potter e as Relíquias da Morte</option>
            </select>

            <p><input type="submit" value="Verificar" class="verificar"/></p>
        </form>
    </div>
</body>
</html>