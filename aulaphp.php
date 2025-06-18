<h1><em> Minha primeira aula de php </em></h1>

<?php
// Exibindo uma mensagem na tela
echo "<em>Olá mundo</em>";
echo "<br>";

//comentário de uma linha 
# comentário de uma linha 

  /*
   comentario multiplos linhas 
   Aqui pode escreva varias linhas de comentario
   Sem se preocupar com limite de uma linha 
   */

   //variáveis iniciam com cifrão ($)
   //podem conter letras numeros e o caracter 
   //nao ter espaco em branco
   //nao podem ter caracteres especiais , exeto do sublinhado (_)
   // nao pode palavras reservadas do PHP
   $nome = "<em>Gigih</em>"; //string
   $idade = 17; // inteiro
   $altura = 1.55;// float
   $peso = 55.0; // float
   $casada = false; // booleano ( true ou falser )
   $filhos = null; // nulo (sem valor definitivo ) (cachorros e gatos )
   
   // para aparecer as variaveis coloca-se o echo 

   echo "Nome:$nome <br>";
   echo "Idade:$idade <br>";
   echo "Altura:$altura <br>";
   echo "Peso:$peso <br>";
 
   // Calculando o IMC
    $imc = $peso / ($altura * $altura);

    //Exibindo o resultado do IMC com uma mensagem 
    if ($imc < 18.5) {
         echo "Você está abaixo do peso . ";
    } elseif ($imc < 24.9) {
       echo " Você esta com o peso normal. ";
    } elseif ($imc < 29.9) {
      echo " Você esta com sobrepeso.";
    } else {
      echo " Voce esta obeso .";
    }
        
     
   ?>