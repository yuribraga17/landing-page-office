<?php
// Configuração do banco de dados
$host = 'localhost';
$user = 'seu-usuario';
$pass = 'sua-senha';
$dbname = 'seu-banco-de-dados';

// Conecta ao banco de dados
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
  die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtém as informações enviadas pelo usuário
  $nome = $_POST['nome'] ?? '';
  $email = $_POST['email'] ?? '';
  $mensagem = $_POST['mensagem'] ?? '';

  // Valida as informações
  if (empty($nome) || empty($email) || empty($mensagem)) {
    // Alguma informação está faltando, retorna uma mensagem de erro
    echo 'Por favor, preencha todos os campos.';
  } else {
    // Todas as informações foram preenchidas, insere as informações na tabela de contato
    $sql = "INSERT INTO contato (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    if (mysqli_query($conn, $sql)) {
      // Informações do formulário inseridas com sucesso na tabela de contato, retorna uma mensagem de sucesso
      echo 'Obrigado pelo seu contato. Sua mensagem foi enviada com sucesso!';
    } else {
      // Ocorreu um erro ao inserir as informações na tabela de contato, retorna uma mensagem de erro
      echo 'Desculpe, ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.';
    }
  }
} else {
  // O formulário não foi submetido, retorna uma mensagem de erro
  echo 'Desculpe, ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.';
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
