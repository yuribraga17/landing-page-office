<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Yuri Dev</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://kit.fontawesome.com/002f4cf7f8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://kit.fontawesome.com/002f4cf7f8.css" crossorigin="anonymous">
  <link rel="icon" href="img/favicon.png"/>
  <meta name="description" content="Bem vindo a página do Yuri Dev, aqui você conhecerá ele melhor."/> <!-- Descrição do site -->
  <meta name="keywords" content="dev, developer, des, desenvolvedor, dev yuri, yuri dev, fullstack, back, back-end, front, front-end"/> <!-- Palavras chaves de busca -->
  <meta name="author" content="Yuri Braga"/> <!-- criador do site -->
</head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://wa.me/5532984132330" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
      z-index:1000;" target="_blank">
    <i style="margin-top:16px" class="fa fa-whatsapp"></i>
    </a>
	<header>
		<h1>Yuri Dev</h1>
    <nav>
			<ul>
				<li><a href="#">Início</a></li>
				<li><a href="#sobre">Sobre</a></li>
				<li><a href="#projetos">Portfólio</a></li>
				<li><a href="#contato">Contato</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section id="sobre">
			<h2>Sobre Mim</h2>
			<p>Olá, meu nome é Yuri Braga. Sou desenvolvedor web e gosto de criar coisas incríveis com código. Atualmente, estou estudando as tecnologias mais modernas do mercado, como React e Node.js.</p>
      <div class="round">
        <img src="img/yuri.jpg" alt="Foto de Yuri Braga">
      </div>
		</section>
    
		<section id="projetos">
			<h2>Meu Portfólio</h2>
			<div class="projeto">
				<img src="https://cdn.discordapp.com/attachments/539127279129853962/1084520825660649552/image.png" alt="Projeto 1">
				<h3>Site para Detetive virtual</h3>
				<p>Este é um projeto incrível que eu criei usando HTML e CSS. Ele tem uma interface moderna e é responsivo.</p>
				<a href="https://github.com/yuribraga17/brta">Ver Projeto</a>
			</div>

			<div class="projeto">
				<img src="https://cdn.discordapp.com/attachments/539127279129853962/1084293581969309846/image.png" alt="Projeto 2">
				<h3>Super mario</h3>
				<p>Este é outro projeto que eu criei usando HTML, CSS e JavaScript. Ele é uma aplicação web completa que permite aos usuários jogarem o mario.</p>
				<a href="https://github.com/yuribraga17/supermario-">Ver Projeto</a>
			</div>

			<div class="projeto">
				<img src="https://cdn.discordapp.com/attachments/1023657983391039619/1084207724235067472/image.png" alt="Projeto 3">
				<h3>Gestão de produtos</h3>
				<p>Este é uma aplicação web em PHP e MySQL para gerir os produtos em estoque.</p>
				<a href="https://github.com/yuribraga17/gestao-de-produtos">Ver Projeto</a>
			</div>
		</section>
		<section id="contato">
			<h2>Entre em Contato</h2>
			<form method="post" action="fun/enviar.php">
				<label for="nome"><strong>Nome:</strong></label>
				<input type="text" name="nome" id="nome" required>

				<label for="email"><strong>Email:</strong></label>
				<input type="email" name="email" id="email" required>

				<label for="mensagem"><strong>Mensagem:</strong></label>
				<textarea name="mensagem" id="mensagem" required></textarea>
        <br/>
				<button type="submit"><strong>Enviar</strong></button>
			</form>
		</section>
	</main>

  <footer>
    <div class="footer-container">
      <div class="menu">
        <p>Desenvolvido por <a href="https://github.com/yuribraga17">Yuri Braga</a></p>
        <ul>
          <li><a href="#sobre">Sobre</a></li>
          <li><a href="#projetos">Portfólio</a></li>
        </ul>
      </div>
      <div class="social-icons">
        <a href="https://github.com/yuribraga17"><i class="fa-brands fa-github"></i></a> <!-- Github -->
        <a href="https://twitter.com/braga_balafina"><i class="fa-brands fa-twitter"></i></a> <!-- Twitter -->
        <a href="https://instagram.com/yuri.braga17"><i class="fa-brands fa-instagram"></i></a> <!-- Instagram -->
      </div>
    </div>
  </footer>   
</body>
</html>
