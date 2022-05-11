<?php

if (isset($_POST['nome']) and isset($_POST['cpf']) and isset($_POST['email'])
 and isset($_POST['data']) and isset($_POST['endereco']) and isset($_POST['num_zona'])
  and isset($_POST['nome_zona']) and isset($_POST['end_zona']) and isset($_POST['sigla_partido'])
  and isset($_POST['nome_partido']) and isset($_POST['voto']))
{
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $email = $_POST['email'];
  $data = $_POST['data'];
  $endereco = $_POST['endereco'];

  $num_zona = $_POST['num_zona'];
  $nome_zona = $_POST['nome_zona'];
  $end_zona = $_POST['end_zona'];

  $sigla_partido = $_POST['sigla_partido'];
  $nome_partido = $_POST['nome_partido'];

  $voto = $_POST['voto'];

  $dados = "$nome\n$cpf\n$email\n$data\n$endereco\n$num_zona\n$nome_zona\n$end_zona\n$sigla_partido\n$nome_partido\n$voto\r\n\n";

  $arquivo = fopen('isset_post.txt', 'a+');
  fwrite($arquivo , $dados);
  fclose($arquivo);
}

echo 
 "
 <h1> Dados do eleitor: </h1>
 <b>Nome: </b> $nome 
 <br> <b>Cpf:</b> $cpf
 <br> <b>Email: </b>: $email 
 <br> <b>Data: </b>: $data 
 <br> <b>Endereço: </b>: $endereco
 <br> <h1> ZONA ELEITORAL: </h1>
 <br> <b>Número da Zona Eleitoral: </b>: $num_zona
 <br> <b>Nome do local: </b>: $nome_zona
 <br> <b>Endereço: </b>: $end_zona 
 <br> <h1> PARTIDO: </h1>
 <br> <b>Sigla do Partido: </b>: $sigla_partido
 <br> <b>Nome do partido: </b>: $nome_partido 
 <br> <h1> SEU VOTO: </h1>
 <br> <b>Seu voto: </b>: $voto ";
     
 echo "</br>";
echo "</br>";
echo "<form method='post'>";
echo
"<left>
    <button class='waves-effect waves-light btn type='submit' name='action'  formaction='isset_post.php'>Cadastrar
    </button>
    <button class='waves-effect waves-light btn type='submit' name='action'  formaction='le_texto_while.php'>Ler
    </button>
    <button class='waves-effect waves-light btn type='submit' name='action'  formaction='index.php'>Voltar
    </button>
    <button class='waves-effect waves-light btn type='submit' name='action'  formaction='delete.php'>Deletar
    </button>      
  </left>
    <br/>
        <br/>";
echo "</br>";
echo "</br>";