<?php
if (isset($_POST['nome']) && !empty($_POST['email'])) {
	
 // Dados da conexão com o banco.
$dsn = "mysql:dbname=teste;host=localhost";
$dbuser = "root";
$dbpass = "";


try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo 'E-mail válido!';
	} else {
		echo 'E-mail inválido!';
	}
	//$senha = md5($_POST['senha']);
	if ($nome == '') { die('Campo nome em branco'); }
	if ($email == '') { die ('Campo email em branco'); }
	//if ($senha == '') { die('Campo senha em branco'); }
	$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
	$sql->bindValue(":email", $email);
	$sql->execute();
	if($sql->rowCount() > 0) {
		
	} else {

	$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
	$sql = $pdo->query($sql);

}
	if($sql->insert->rowCount()>0) {
		echo "<script>alert('Enviado com sucesso!');</script>";
	}
} catch (PDOException $e) {
	echo "<strong>Falha: </strong>".$e->getMessage();		
}

//header("Location: contato.php");

}

?>