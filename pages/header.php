<html>

<head>
    <!--<meta charset="utf-8">-->
    <meta name="viewport" content="width=device-width,user-scalable=0" /><!--a larg do site tem larg dispositvo--> 
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/template.css" /><!--acessar css-->
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script><!--Função para esconder botão ou não-->

<title>AW Regulagens</title>
</head>

<body>

<header><!--tudo dentro do header faz parte do layout cabeçalho-->
	<div class="container">
		<div class="logo">
			<a href="index.php"><img src="assets/images/AW4.png" /></a>
		</div>
		<div class="check">
			<img src="assets/images/check1.jpg"/>
		</div>
		<div class="menu">
			<nav><!--indicador de menu-->
			    <div class="menuMobile">
			    	<div class="mm_line"></div>
			    	<div class="mm_line"></div>
			    	<div class="mm_line"></div>
			    </div>
			    <div class="fone">(65) 3682-5291</div>
			    <ul>
				    <li class="<?php if($page=='index'){echo'active';} ?>"><a href="index.php">Início</a></li>
				    <li class="<?php if($page=='empresa'){echo'active';} ?>"><a href="empresa.php" >Empresa</a></li>
				    <li class="<?php if($page=='injecaoEletronica'){echo'active';} ?>"><a href="injecaoEletronica.php">Inj.Eletr.</a></li>
				    <li class="<?php if($page=='suspensao'){echo'active';} ?>"><a href="suspensao.php">Suspensão</a></li>
				    <li class="<?php if($page=='freios'){echo'active';} ?>"><a href="freios.php">Freios</a></li>
				    <li class="<?php if($page=='contato'){echo'active';} ?>"><a href="contato.php">Contato</a></li>
			    </ul>
			</nav><!--indicador de menu-->
		</div>
	</div>
</header>
<div class="line" style="height:5px; background-color:red; "></div>

<section id="banner">
</section><!--fecha section de banner-->

<div class="line" style="height:5px; background-color:red;"></div>