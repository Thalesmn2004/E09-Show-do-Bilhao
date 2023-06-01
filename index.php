<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    </head>
<body>
    <h1>Prova de Conceito</h1>
    <?php
    // Arrays com os dados das perguntas
    $enunciados = array(
        "Quais o menor e o maior país do mundo?",
        "Qual o nome do presidente do Brasil que ficou conhecido como Jango?",
        "Quem pintou a Mona Lisa?",
        "Quanto é 18.526 + 89?",
        "Qual o livro mais vendido no mundo a seguir à Bíblia?",
    );

    $alternativas = array(
        array("Nauru e China", "Mônaco e Canadá", "Vaticano e Rússia", "Malta e Estados Unidos"),
        array("João Goulart", "João Figueiredo", "Getúlio Vargas", "Jacinto Anjos"),
        array("Leonardo da Vinci", "Pablo Picasso", "Vincent van Gogh", "Michelangelo"),
        array("18.615", "17.615", "18.515", "17.515"),
        array("O Senhor dos Anéis", "Dom Quixote", "O Pequeno Príncipe", "Ela, a Feiticeira"),
    );

    $alternativaCorreta = array(2, 0, 0, 0, 1); // Índice da alternativa correta para cada pergunta

    // Loop para carregar e exibir as perguntas
    for ($i = 0; $i < count($enunciados); $i++) {
        echo "<h3>Pergunta " . ($i + 1) . ":</h3>";
        echo "<p>" . $enunciados[$i] . "</p>";
        echo "<ul>";
        for ($j = 0; $j < count($alternativas[$i]); $j++) {
            echo "<li>" . $alternativas[$i][$j] . "</li>";
        }
        echo "</ul>";
        echo "<p>Alternativa correta: " . $alternativas[$i][$alternativaCorreta[$i]] . "</p>";
        echo "<hr>";
    }
    ?>
</body>
</html>