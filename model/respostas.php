<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php include_once '../control/quiz.php'; ?>
</head>
<body bgcolor="#4CAF50">
    <?php
        $quiz = new Quiz();
        $p1 = $_POST['pergunta1'];
        $p2 = $_POST['pergunta2'];
        $p3 = $_POST['pergunta3'];
        $p4 = $_POST['pergunta4'];
        $p5 = $_POST['pergunta5'];
        $p6 = $_POST['pergunta6'];
        $quiz->setPergunta1($p1);
        $quiz->setPergunta2($p2);
        $quiz->setPergunta3($p3);
        $quiz->setPergunta4($p4);
        $quiz->setPergunta5($p5);
        $quiz->setPergunta6($p6);
        $quiz->verificaRespostas();
    ?>
    <p class="acertos"><?php echo $quiz->getResposta(); ?>  acertos!</p>
</body>
</html>