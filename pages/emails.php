<!DOCTYPE html>
<html>
<head>
	<title>Exibição de Mensagens</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/emails.css">
</head>
<body>
	<header>
		<h1>Exibição de Mensagens</h1>
		<nav>
			<ul>
				<li><a href="index.html">Página Inicial</a></li>
				<li><a href="contato.html">Entre em Contato</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section>
			<h2>Mensagens Recebidas</h2>
			<?php
				// Faz a conexão com o banco de dados
				$conexao = mysqli_connect("localhost", "usuario", "senha", "banco_de_dados");

				// Verifica se a conexão foi bem-sucedida
				if (mysqli_connect_errno()) {
					echo "Não foi possível conectar ao banco de dados: " . mysqli_connect_error();
				} else {
					// Seleciona todas as mensagens da tabela "mensagens"
					$resultado = mysqli_query($conexao, "SELECT * FROM mensagens");

					// Verifica se há mensagens na tabela
					if (mysqli_num_rows($resultado) == 0) {
						echo "<p>Não há mensagens para exibir.</p>";
					} else {
						// Exibe as mensagens em uma tabela
						echo "<table>";
						echo "<tr><th>Nome</th><th>Email</th><th>Mensagem</th><th>Data</th></tr>";

						while ($linha = mysqli_fetch_assoc($resultado)) {
							echo "<tr>";
							echo "<td>" . $linha['nome'] . "</td>";
							echo "<td>" . $linha['email'] . "</td>";
							echo "<td>" . $linha['mensagem'] . "</td>";
							echo "<td>" . date('d/m/Y H:i:s', strtotime($linha['data'])) . "</td>";
							echo "</tr>";
						}

						echo "</table>";
					}

					// Fecha a conexão com o banco de dados
					mysqli_close($conexao);
				}
			?>
		</section>
	</main>

	<footer>
		<p>Exibição de Mensagens - Todos os direitos reservados</p>
	</footer>
</body>
</html>
