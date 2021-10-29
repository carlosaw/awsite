<?php $page = 'contato'; require 'pages/header.php'; ?>
    
    <div style="font-size:25px; color:red; text-align:center; margin-top:10px;"><u><strong> CONTATO</strong></u></div>

    <div style="text-align:center; font-size:18px; margin-top:35px;">Cadastre-se para receber nossas Newsletter</div>
<div class="box_contact">
	<div class="contato">
    	
    	<?php
    	if(isset($_POST['nome'])) {
    		$nome = $_POST['nome'];
    		file_put_contents("teste.txt", $nome, FILE_APPEND);
    		header("Location: contato.php");
    		} 
       	?>
   	<form method="POST" >
    	<h2 id="cad"> Cadastro <i class="fas fa-database"></i></h2>
    	<input type="text" name="nome" placeholder="Nome" autocomplete="off" 	required style="width:300px; height:30px;"><br><br>
    	
    	<input type="text" name="email" placeholder="Email" required style="width:300px; height:30px;">
    	<br><br>
    	
    	<button class="submit" style="width:100px; height:30px;"> Cadastrar <i class="fas fa-lock hover"></i></button>
    </div>
</div><br/><br/>
	<div style="text-align:center; font-size:20px; margin-top:15px;">Faça-nos uma visita!</div><br/>
	<div class="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d480.2189391276325!2d-56.12973453588764!3d-15.658215170149594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939dadcf6c23197f%3A0xfa35e4838c2175d2!2sAW%20Regulagens!5e0!3m2!1spt-BR!2sbr!4v1568060085677!5m2!1spt-BR!2sbr" width="800" height="450" frameborder="0" style="border:solid 2px #CCC; box-shadow: 7px 10px 12px #CCC;" allowfullscreen=""></iframe>
	</div><br/><br/>

    <?php
      require "recebedor.php";
    ?>
    </form>

<?php require 'pages/footer.php'; ?>