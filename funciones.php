<?php 
	
	$conexion=null;

	function conectar(){
		global $conexion;
		try{
		$conexion= new PDO('mysql:host=localhost;dbname=prueba','root','');

		}catch(PDOException $e){
			echo "ERROR".$e->getMessage();
			die();
		}
	}

	function retornarConexion(){
		global $conexion;
		return $conexion;
	}


	function validarLogin($usuario,$clave){
		global $conexion;
		$consulta= $conexion->prepare('select*from usuario where correo=:correo and pass=:clave');
		$consulta->execute(array(':correo'=>$usuario,':clave'=>$clave));
		$respuesta=$consulta->fetch();

		if($respuesta==true){
			session_start();
			$_SESSION['usuario']=$usuario;
			return true;
		}
		return false;
	}	

	function haIniciadoSession(){
		session_start();
		return isset($_SESSION['usuario']);
	}


	function desconectar(){
		global $conexion;
		mysqli_close($conexion);
	}


 ?>

 <script>
audio = new Audio("sound/alarma.mp3"); 
function empezar(){
   audio.pause();
   audio.currentTime = 0;
  $('#timerDiv').timer('remove');
  $('#timerDiv').timer({
    countdown: true,
    duration: "3h0m0s",     
    callback: function() {  
        audio.addEventListener('ended', function() {
    this.currentTime = 0;
    this.play();
}, false);
        audio.play();
    },
    format: '%H:%M:%S'  
});
    }
</script>