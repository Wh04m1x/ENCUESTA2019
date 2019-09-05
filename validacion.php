
<?php session_start(); 
ob_start(); 

include("conexion.php");
//include_once('ajax/class/function.php');

if(isset($_POST['login']))
{

$user_unsafe=$_POST['id_usuario'];
$pass_unsafe=$_POST['clave'];

$user = mysqli_real_escape_string($con,$user_unsafe);
$pass = mysqli_real_escape_string($con,$pass_unsafe);

//$pass = hash_r2($pass1);


$query=mysqli_query($con,"SELECT * FROM usuarios WHERE  id_usuario = '$user' and clave ='$pass'")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
           $counter=mysqli_num_rows($query);
           $status=$row['id_tipo_usuario'];
	  	if ($counter == 0) 
		  {	
		ECHO	"<script type='text/javascript'>alert('USUARIO Y/O CONTRASEÑA NO SON CORRECTOS');
			document.location='index.php'</script>";
		  } 
	  else
		  {
			  /*
			$_SESSION['usuario'] = $row['empleado'];
			$_SESSION['logeado'] = true;
			$_SESSION['start'] = time();
			$_SESSION['expira'] = $_SESSION['start'] + (60 * 60);
			$_SESSION['rol'] = $row['rol'];
			*/

			$_SESSION['id_usuario'] = $row['id_usuario'];
			$_SESSION['u_usuario'] = $row['nombres'];
		  	if ($status == '1')
		  		{
					ECHO	"<script type='text/javascript'>alert('1');
					document.location='index.php'</script>";
				 	echo "<script type='text/javascript'>document.location='administrador/index.php'</script>";
				 }
			  elseif($status == '2')
			  {
				ECHO	"<script type='text/javascript'>alert('2');
				document.location='index.php'</script>";
				echo "<script type='text/javascript'>document.location='usuario/index.php'</script>";

				
				//echo "<script type='text/javascript'>document.location='paginas/users/home_usuario.php'</script>";
			}
	
		// echo "<script type='text/javascript'>document.location='pages/home.php'</script>";
	  }
}