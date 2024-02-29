<html>
    <head>
        <title>Quiz de conhecimento geral</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>

    <h3> Quiz de conhecimento geral </h3><br>

    <form action="resultadoQuiz.php" method="post">

            <label for="login">Nome:</label>
            <input type="text" name="Nome"><br>

            <h4> Que começe a brincadeira: </h4>
             
            <label for="questao_1">Questão 1: Quantos dias tem um ano bissexto? </label>
            <input type="tex" id="questao_1" name="questao_1"><br><br>

            <label for="questao_2">Questão 2: Quem pintou a Mona Lisa</label>
            <input type="tex" id="questao_2" name="questao_2"><br><br>

            <label for="questao_3">Questão 3:Qual era a profissão de Tiradentes? </label>
            <input type="tex" id="questao_3"  name="questao_3"><br>

            <h4>Perguntas de múltipla escolha: </h4>
           
            <label for="questao_4"> Questão 4: Quantas pernas tem uma mosca? </label><br>
             <select id= "questao_4" name = "questao_4">
             <option value="4 pernas">4 pernas</option>
             <option value="6 pernas">6 pernas</option>
             <option value="8 pernas">8 pernas</option>
             <option value="9 pernas">9 pernas</option>

           </select><br><br>

           <label for="questao_5">Questão 5: A mistura da cor vermelha com a cor verde resulta no marrom</label><br>
             <select id= "questao_5" name = "questao_5">
             <option value="Verdadeiro">Verdadeiro</option>
             <option value="Falso">Falso</option>

           </select><br><br>

           <label for="questao_6">Questão 6: Panapaná é o coletivo de que? </label><br>
             <select id= "questao_6" name = "questao_6">
             <option value="Formigas">Formigas</option>
             <option value="Borboletas">Borboletas</option>
             <option value="Papagaios">Papagaios</option>
             <option value="Corujas">Corujas</option>

           </select><br><br>

    

            <button type="submit">Verificar</button>
        </form>

    </body>
</html>
