<html>
    <head>
        <title>Resultado do quiz</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
           
            $RESP0_CORRETA = [
                "366",
                "Leornado da Vinci",
                "Dentista",
                "6 pernas",
                "Verdadeiro",
                "Borboletas",
            ];

            $PONTUACAO = 0;

            $RESPO_TEXT = [
                $_POST["questao_1"],
                $_POST["questao_2"],
                $_POST["questao_3"],
            ];

            $RESPO_SELECAO = [
                $_POST["questao_4"],
                $_POST["questao_5"],
                $_POST["questao_6"],
            ];

            foreach ($RESPO_TEXT as $RESPO_TEXT) {
                if (in_array($RESPO_TEXT, $RESP0_CORRETA)){
                    $PONTUACAO++;
                }
            }

            foreach ($RESPO_SELECAO as $RESPO_SELECAO) {
                if (in_array($RESPO_SELECAO, $RESP0_CORRETA)){
                    $PONTUACAO++;
                }
            }

            echo "<p> Sua pontuação total é: $PONTUACAO / 6 </p>";
        ?>
    </body>
</html>