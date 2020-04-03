<?php
require('functions/connection.php');


function borrarPaciente($idBorrar){
	global $mysqli;
	$sql = "DELETE FROM clientes WHERE id_cl = $idBorrar";
	if($result = $mysqli->query($sql)){
		return true;
	}else{
		return false;
	}
}
function borrarCotizacion($idBorrar){
	global $mysqli;
	$sql = "DELETE FROM cotizaciones WHERE id_cot = $idBorrar";
	if($result = $mysqli->query($sql)){
		return true;
	}else{
		return false;
	}
}
function borrarPedido($idBorrar){
	global $mysqli;
	$sql = "DELETE FROM pedidos WHERE id = $idBorrar";
	if($result = $mysqli->query($sql)){
		return true;
	}else{
		return false;
	}
}
function borrarGasto($idBorrar){
	global $mysqli;
	$sql = "DELETE FROM egresos WHERE id = $idBorrar";
	if($result = $mysqli->query($sql)){
		return true;
	}else{
		return false;
	}
}
function borrarIngreso($idBorrar){
	global $mysqli;
	$sql = "DELETE FROM ingresos WHERE id = $idBorrar";
	if($result = $mysqli->query($sql)){
		return true;
	}else{
		return false;
	}
}
function editaPaciente($id,$nombre,$apellido,$telefono,$calle,$numero,$colonia,$cp,$ciudad,$correo){
	global $mysqli;
	$sql = "UPDATE clientes SET nombre = '".$nombre."', apellido = '".$apellido."', telefono = '".$telefono."', calle = '".$calle."', numero = '".$numero."', colonia = '".$colonia."', cp = '".$cp."', ciudad = '".$ciudad."', correo = '".$correo."' WHERE id_cl = '".$id."'";
	if($result = $mysqli->query($sql)){
		return true;
	}else{
		return false;
	}
}
function editaGasto($id_g,$fecha,$concepto,$cantidad,$monto){
	global $mysqli;
	$sql = "UPDATE egresos SET fecha = '".$fecha."', concepto = '".$concepto."', cantidad = '".$cantidad."', monto = '".$monto."' WHERE id = '".$id_g."'";
	if($result = $mysqli->query($sql)){
		return true;
	}else{
		return false;
	}
}
function editaIngreso($id_g,$fecha,$concepto,$cantidad,$monto){
	global $mysqli;
	$sql = "UPDATE ingresos SET fecha = '".$fecha."', concepto = '".$concepto."', cantidad = '".$cantidad."', monto = '".$monto."' WHERE id = '".$id_g."'";
	if($result = $mysqli->query($sql)){
		return true;
	}else{
		return false;
	}
}
function insertaNota($nota,$id_usuario){
	global $mysqli;
	$sql = "INSERT INTO notas(nota,id_usuario) VALUES('$nota','$id_usuario')";

	if($result = $mysqli->query($sql)){
		return true;
	}else{
		return false;
	}
}
function agregaCotizacion($nombre,$apellido,$id_cliente,$cp,$costo_cot,$productos_json,$totalPedido,$fecha){
	global $mysqli;
	$sql = "INSERT INTO cotizaciones(nombre_cot,apellido_cot,id_cliente_cot,cp_cot,costo_cot,productos_cot,total_cot, fecha_cot) VALUES('$nombre','$apellido','$id_cliente','$cp','$costo_cot','$productos_json','$totalPedido','$fecha')";

	if($result = $mysqli->query($sql)){
		return $mysqli->insert_id;
	}else{
		return false;
	}
}
function agregaGasto($fecha,$concepto,$cantidad,$monto){
	global $mysqli;
	$sql = "INSERT INTO egresos(fecha,concepto,cantidad,monto) VALUES('$fecha','$concepto', '$cantidad','$monto')";

	if($result = $mysqli->query($sql)){
		return true;
	}else{
		return false;
	}
}
function agregaIngreso($fecha,$concepto,$cantidad,$monto){
	global $mysqli;
	$sql = "INSERT INTO ingresos(fecha,concepto,cantidad,monto) VALUES('$fecha','$concepto', '$cantidad','$monto')";

	if($result = $mysqli->query($sql)){
		return true;
	}else{
		return false;
	}
}
function agregaPaciente($nombre,$apellido,$telefono,$calle,$numero,$colonia,$cp,$ciudad,$correo){
	global $mysqli;
	$sql = "INSERT INTO clientes(nombre,apellido,telefono,calle,numero,colonia,cp,ciudad,correo) VALUES('$nombre','$apellido','$telefono','$calle','$numero','$colonia','$cp','$ciudad','$correo')";

	if($result = $mysqli->query($sql)){
		return $mysqli->insert_id;
	}else{
		echo mysqli_error($mysqli);
	}

}
function agregaProducto($producto,$precio){
	global $mysqli;
	$sql = "INSERT INTO productos(producto,precio) VALUES('$producto','$precio')";

	if($result = $mysqli->query($sql)){
		return true;
	}else{
		echo mysqli_error($mysqli);
	}

}
function agregaPedido($id_cliente,$productos,$notas,$envio,$total,$start,$end,$estado,$color){
	global $mysqli;
	$sql = "INSERT INTO pedidos(id_cliente,productos,notas,costo_envio,total,start,end,estado,color) VALUES('$id_cliente','$productos','$notas','$envio','$total', '$start','$end','$estado','$color')";

	if($result = $mysqli->query($sql)){
		return true;
	}else{
		echo mysqli_error($mysqli);
	}

}
function editaPedido($id_ped,$id_cliente,$productos,$notas,$envio,$total,$start,$end,$estado,$color){
	global $mysqli;
	$sql = "UPDATE pedidos SET id_cliente = '$id_cliente', productos = '$productos', notas = '$notas', costo_envio = '$envio', total = '$total', start = '$start', end = '$end', estado = '$estado', color = '$color' WHERE id = '$id_ped'";

	if($result = $mysqli->query($sql)){
		return true;
	}else{
		echo mysqli_error($mysqli);
	}

}
function editaCotizacion($id_cot,$id_cliente){
	global $mysqli;
	$sql = "UPDATE cotizaciones SET id_cliente_cot = '$id_cliente' WHERE id_cot = '$id_cot'";

	if($result = $mysqli->query($sql)){
		return true;
	}else{
		echo mysqli_error($mysqli);
	}

}
function cuentaUsuarios(){
	global $mysqli;
	$sql = "SELECT COUNT(*) FROM clientes";
	$result = $mysqli->query($sql);
	$count = mysqli_fetch_array($result);
	return $count[0];
}
function cuentaNotas(){
	global $mysqli;
	$sql = "SELECT COUNT(*) FROM notas";
	$result = $mysqli->query($sql);
	$count = mysqli_fetch_array($result);
	return $count[0];
}


// Comienzan funciones del login
	function isNull($emailNumber,$name,$last_name,$password){
		if(strlen(trim($emailNumber)) < 1 || strlen(trim($name)) <1 || strlen(trim($last_name)) <1 || strlen(trim($password)) <1){
			return true;
		}else{
			return false;
		}
	}

	function isEmail($emailNumber){

		if(filter_var($emailNumber,FILTER_VALIDATE_EMAIL)){
			return true;
		}else{
			return false;
		}

	}
	function isNumber($emailNumber){
		if(is_numeric($emailNumber)){
			return true;
		}else{
			return false;
		}
	}

	function emailExist($emailNumber){
		global $mysqli;


		$stmt = $mysqli->prepare("SELECT id_user FROM users WHERE email = ? LIMIT 1");
		$stmt->bind_param('s',$emailNumber);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();

		if($num>0){
			return true;
		}
		else{
			return false;
		}
	}

	function numberExist($emailNumber){
		global $mysqli;
		$stmt = $mysqli->prepare("SELECT id_user FROM users WHERE phone = ? LIMIT 1");
		$stmt->bind_param('s',$emailNumber);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();

		if($num>0){
			return true;
		}
		else{
			return false;
		}
	}

	function hashPassword($password){

		$hash = password_hash($password, PASSWORD_DEFAULT);
		return $hash;
	}

	function registerEmail($emailNumber,$name, $last_name, $hash, $user_type, $active){
		global $mysqli;
		
		$stmt = $mysqli->prepare("INSERT INTO users(email,name,last_name,password,user_type,activation) VALUES(?,?,?,?,?,?)");
		$stmt->bind_param('ssssii',$emailNumber,$name,$last_name,$hash,$user_type,$active);

		if($stmt->execute()){
			return $mysqli->insert_id;
		}else{
			return 0;
		}

	}
	function registerNumber($emailNumber,$name,$last_name,$hash,$user_type,$active){

		global $mysqli;
		$stmt= $mysqli->prepare("INSERT INTO users(phone,name,last_name,password,user_type,activation) VALUES(?,?,?,?,?,?)");
		$stmt->bind_param('ssssii', $emailNumber,$name,$last_name,$hash,$user_type,$active);

		if($stmt->execute()){
			
					
			return $mysqli->insert_id;
		}else{
			return 0;
		}

	}

	function resultBlock($errors,$bien){
		if(count($errors) > 0)
		{
			echo "<div class='error'>";
			echo "<ul>";
			foreach($errors as $error)
			{
				echo "<li>".$error."</li>";
			}
			echo "</ul>";
			echo "</div>";
		}else{
			echo "<div class='bien'>";
			echo "<ul>";
			echo $bien;
			echo "</ul>";
			echo "</div>";
		}
	}

	function isNullLogin($emailNumber,$password){
		if(strlen(trim($emailNumber)) < 1 || strlen(trim($password))<1){
			return true;
		}else
		{
			return false;
		}
	}

	function login($emailNumber,$password){
		global $mysqli;

		$stmt = $mysqli->prepare("SELECT id_user, user_type,password, name FROM users WHERE email = ? || phone = ? LIMIT 1");
		$stmt->bind_param("ss", $emailNumber,$emailNumber);
		$stmt->execute();
		$stmt->store_result();
		$rows = $stmt->num_rows;

		if($rows>0){
			if(isActive($emailNumber)){
				$stmt->bind_result($id,$user_type,$passwd,$name);
				$stmt->fetch();

				$passValidate = password_verify($password,$passwd);

				if($passValidate){
					lastSession($id);
					$_SESSION['id_user'] =$id;
					$_SESSION['user_type'] = $user_type;
					$_SESSION['name'] = $name;
					?><script>window.location.replace("index.php");</script><?php
				}else{
					$errors = 'La contraseña es incorrecta.';
				}
			}else{
				$errors ='Tu cuenta esta desactivada.';
			}

		}else{
			$errors = 'El teléfono correo o contraseña están mal escritos.';
		}
		return $errors;
	}

	function isActive($emailNumber){

		global $mysqli;

		$stmt = $mysqli->prepare("SELECT activation FROM users WHERE email = ? || phone = ?");
		$stmt->bind_param("ss",$emailNumber,$emailNumber);
		$stmt->execute();
		$stmt->bind_result($activation);
		$stmt->fetch();

		if($activation == 1){
			return true;
		}else{
			return false;
		}
	}
	function lastSession($id){
		global $mysqli;

		$stmt = $mysqli->prepare("UPDATE users SET last_session=NOW() WHERE id_user = ?");
		$stmt->bind_param("s",$id);
		$stmt->execute();
		$stmt->close();
	}

?>

