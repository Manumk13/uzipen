<?php
/*
*    Conexión a la base de datos
*    E:
*    S: conn (variable de tipo connection)
*    SQL:
*/
function connection() {

	include 'configuration.inc.php';
			/* servidor de la BD */
	//
	$conexion = mysqli_connect($SERVER, $USER, $PASSWORD, $DB);
    if($conexion == true){
        echo "<p>Conexión realizada correctamente</p>";
        return $conexion;
    }
    else
        echo "<p>Conexión fallida</p>";
        return null;
 }
/*
*    Comprueba login
*    E:
*    S: booleano: conexión correcta
*    SQL: select * from usuarios WHERE ...
*/

function login_ok()    {
	include("configuration.inc.php");
	$ret = true;
	$conexion = mysqli_connect($SERVER, $USER, $PASSWORD, $DB);
	if($conexion){
		$sql = 'SELECT user,pass from usuario where user = "'.$_POST['usuario'].'" and pass = "'.$_POST['pass_user'].'"';
		$resultado = mysqli_query($conexion,$sql);
		$fila = mysqli_num_rows($resultado);
		$ret = ($fila != 0);
	}
	mysqli_close($conexion);
	return $ret;
}


function nuevoCliente(){

    include("configuration.inc.php");
    $nombreC=$_POST['nombreCliente'];
    $dire= $_POST['direccion'];
    $horario=$_POST['horario'];

    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    if($conexion){
        $insert="INSERT INTO cliente VALUES ('$nombreC' ,'$dire' ,'$horario')";
        $query=mysqli_query($conexion,$insert);
		

    }else{
		echo'error de conexion';
	}
	return $query;
		mysqli_close($conexion);
   

}
function nuevoProveedor(){

    include("configuration.inc.php");
    $nombreP=$_POST['nombreProveedor'];
    $correo= $_POST['correo'];
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    if($conexion){
        $insert="INSERT INTO proveedor VALUES ('$nombreP' ,'$correo')";
        $query=mysqli_query($conexion,$insert);
		
		
    }else{
		echo'error de conexion';
		}
		mysqli_close($conexion);
		return $query;

}

function nuevoProducto(){

    include("configuration.inc.php");
    $codigo=$_POST['codigo'];
    $des= $_POST['des'];
	$precio=$_POST['precio'];
    $almacen= $_POST['hay'];
	$cantidad=$_POST['cantidadAl'];
    $nombrePro= $_POST['nombrePro'];
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    if($conexion){
        $insert="INSERT INTO producto VALUES (default,'$codigo','$des','$precio','$almacen','$cantidad','$nombrePro')";
        $query=mysqli_query($conexion,$insert);
		
		
    }else{
		echo'error de conexion';
		}
		mysqli_close($conexion);
		return $query;

}
function nuevoPedido(){

    include("configuration.inc.php");
    $nombreC=$_POST['nombreC'];
    $codigo= $_POST['codigo'];
	$cantidad=$_POST['cantidadTotal'];
    $nombreP= $_POST['nombrePro']; 
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    if($conexion){
		
		$sql="SELECT precio_unidad from producto where codigo ='$codigo'";
		$total=mysqli_query($conexion,$sql);
		$resultado=mysqli_fetch_array($total);
        $insert="INSERT INTO pedido VALUES 
		(default,now(),'$nombreC','$codigo','$cantidad','$cantidad' *'$resultado[precio_unidad]','$nombreP')";
		$query=mysqli_query($conexion,$insert);
		
		
    }else{
		echo'error de conexion';
		}
		mysqli_close($conexion);
		return $query;

}

function mostrarCliente(){
    include("configuration.inc.php");
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    $sql = "SELECT * FROM cliente"; 
    $result=mysqli_query($conexion,$sql);

        echo'
				<div id="scroll">
					<table class="tabla" >
						<thead>
							<tr>
								<th>Nombre Cliente</th>
								<th>Dirección</th>
								<th>Horario</th>-
							</tr>		
						</thead>
						<tbody>';
						while($mostrar= mysqli_fetch_array($result)){
							echo'
							<tr>
								<td>'.$mostrar['nombre_cliente'].' </td>
								<td>'. $mostrar['direccion'].' </td>
								<td>'.$mostrar['horario'].' </td>
								';}
								echo'
							</tr>	
							</tbody>
					
							</table>
							</div>
							
							';
							mysqli_close($conexion);
							echo'
							
           
			</div> <!-- LARGE HEADER -->
			</div> <!-- END CONTENT -->
        </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
        </section>';
}	
							
function mostrarProveedor(){
    include("configuration.inc.php");
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    $sql = "SELECT * FROM proveedor"; 
    $result=mysqli_query($conexion,$sql);

        echo'
				<div id="scroll">
					<table class="tabla" >
						<thead>
							<tr>
								<th>Nombre Proveedor</th>
								<th>Correo electronico</th>
								
							</tr>		
						</thead>
						<tbody>';
						while($mostrar= mysqli_fetch_array($result)){
							echo'
							<tr>
								<td>'.$mostrar['nombre_proveedor'].' </td>
								<td>'. $mostrar['email'].' </td>
								
								';}
								echo'
							</tr>	
							</tbody>
					
							</table>
							</div>
							
							';
							mysqli_close($conexion);
							echo'
							
           
			</div> <!-- LARGE HEADER -->
			</div> <!-- END CONTENT -->
        </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
        </section>';
}	
    
function mostrarProducto(){
    include("configuration.inc.php");
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    $sql = "SELECT * FROM producto"; 
    $result=mysqli_query($conexion,$sql);

        echo'
				<div id="scroll">
					<table class="tabla" >
						<thead>
							<tr>
								<th>ID</th>
								<th>Codigo producto</th>
								<th>Descripcion</th>
								<th>Precio por unidad</th>
								<th>Hay en almacen</th>
								<th>Cantidad en almacen</th>
								<th>Nombre Proveedor</th>
								
							</tr>		
						</thead>
						<tbody>';
						while($mostrar= mysqli_fetch_array($result)){
							echo'
							<tr>
								<td>'.$mostrar['id_productos'].' </td>
								<td>'. $mostrar['codigo'].' </td>
								<td>'. $mostrar['descripcion'].' </td>
								<td>'. $mostrar['precio_unidad'].' </td>
								<td>'.$mostrar['En_almacen'].' </td>
								<td>'. $mostrar['cantidad'].' </td>
								<td>'.$mostrar['nombre_proveedor'].' </td>
								';}
								echo'
							</tr>	
							</tbody>
					
							</table>
							</div>
							
							';
							mysqli_close($conexion);
							echo'
							
           
			</div> <!-- LARGE HEADER -->
			</div> <!-- END CONTENT -->
        </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
        </section>';
}	
function mostrarPedido(){
    include("configuration.inc.php");
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    $sql = "SELECT pedidos.id_pedido, pedidos.fecha, pedidos.nombre_cliente,productos.codigo,productos.descripcion,pedidos.cantidad_producto,productos.precio_unidad,pedidos.precio_total , productos.nombre_proveedor 
	FROM producto AS productos 
	INNER JOIN pedido AS pedidos 
	ON (productos.codigo = pedidos.codigo)"; 
    $result=mysqli_query($conexion,$sql);

        echo'
				<div id="scroll">
					<table class="tabla" >
						<thead>
							<tr>
								<th>ID</th>
								<th>Fecha</th>
								<th>Nombre cliente</th>
								<th>Codigo producto</th>
								<th>Descripcion</th>
								<th>Cantidad de producto</th>
								<th>Precio por unidad</th>
								<th>Precio Total</th>
								<th>Nombre Proveedor</th>
							</tr>		
						</thead>
						<tbody>';
						while($mostrar= mysqli_fetch_array($result)){
							echo'
							<tr>
								<td>'.$mostrar['id_pedido'].' </td>
								<td>'. $mostrar['fecha'].' </td>
								<td>'. $mostrar['nombre_cliente'].' </td>
								<td>'. $mostrar['codigo'].' </td>
								<td>'.$mostrar['descripcion'].' </td>
								<td>'. $mostrar['cantidad_producto'].' </td>
								<td>'.$mostrar['precio_unidad'].' </td>
								<td>'. $mostrar['precio_total'].' </td>
								<td>'.$mostrar['nombre_proveedor'].' </td>
								';}
								echo'
							</tr>	
							</tbody>
					
							</table>
							</div>
							
							';
							mysqli_close($conexion);
							echo'
							
           
			</div> <!-- LARGE HEADER -->
			</div> <!-- END CONTENT -->
        </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
        </section>';
}
/*
*	Funcion que modifica el cliente
*	E:
*	S:
*	SQL: UPDATE into cliente SET
*/
function clienteModificado() {
	
	include("configuration.inc.php");
	$conexion = mysqli_connect($SERVER, $USER, $PASSWORD, $DB);
	$nombreC=$_POST['nombreCliente'];
	$direccion= $_POST['direccion'];
 	$horario=$_POST['horario'];
	if($conexion){
		$update="UPDATE cliente SET  direccion='$direccion',horario='$horario' WHERE  nombre_cliente='$nombreC'";            
		mysqli_query($conexion,$update);
		$resultado=mysqli_affected_rows($conexion);
	}else{
		echo'error de conexion';
	}
	mysqli_close($conexion);
	return  $resultado;
}
/*
*	Funcion que modifica el cliente
*	E:
*	S:
*	SQL: UPDATE into cliente SET
*/
function proveedorModificado() {
	include("configuration.inc.php");
	$conexion = mysqli_connect($SERVER, $USER, $PASSWORD, $DB);
	$nombreP=$_POST['nombreP'];
	$correo= $_POST['correo'];
	if($conexion){
		$update="UPDATE proveedor SET  email='$correo' WHERE  nombre_proveedor='$nombreP'";            
		mysqli_query($conexion,$update);
		$resultado=mysqli_affected_rows($conexion);
	}else{
		echo'error de conexion';
	}
	mysqli_close($conexion);
	return  $resultado;
}

function productoModificado(){

    include("configuration.inc.php");
    $codigo=$_POST['codigo'];
    $des= $_POST['des'];
	$precio=$_POST['precio'];
    $almacen= $_POST['hay'];
	$cantidad=$_POST['cantidadAl'];
    $nombrePro= $_POST['nombrePro'];
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    if($conexion){
		$update="UPDATE producto SET  descripcion='$des',precio_unidad='$precio',En_almacen='$almacen',cantidad='$cantidad',nombre_proveedor='$nombrePro' WHERE  codigo='$codigo'";   
		mysqli_query($conexion,$update);
		$resultado=mysqli_affected_rows($conexion);
		
    }else{
		echo'error de conexion';
	}
	mysqli_close($conexion);
	return $resultado;

}
function pedidoModificado(){

    include("configuration.inc.php");
	$id_ped=$_POST['id_p'];
    $nombreC=$_POST['nombreC'];
    $codigo= $_POST['codigo'];
	$cantidad=$_POST['cantidadTotal'];
    $nombreP= $_POST['nombrePro'];  
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    if($conexion){
		$sql="SELECT precio_unidad from producto where codigo ='$codigo'";
		$total=mysqli_query($conexion,$sql);
		$resultado=mysqli_fetch_array($total);
		$update="UPDATE pedido SET  nombre_cliente='$nombreC',codigo='$codigo',cantidad_producto='$cantidad',precio_total='$cantidad' * '$resultado[precio_unidad]',nombre_proveedor='$nombreP' WHERE  id_pedido='$id_ped'";   
		mysqli_query($conexion,$update);
		$resultado=mysqli_affected_rows($conexion);
		
		
    }else{
		echo'error de conexion';
		}
		mysqli_close($conexion);
		return $resultado ;

}

function pedidoEliminado(){

    include("configuration.inc.php");
	$id_ped=$_POST['id_p']; 
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    if($conexion){
		
		$update="DELETE FROM pedido WHERE  id_pedido='$id_ped'";   
		mysqli_query($conexion,$update);
		$resultado=mysqli_affected_rows($conexion);
		
		
    }else{
		echo'error de conexion';
		}
		mysqli_close($conexion);
		return $resultado ;

}
function productoEliminado(){

    include("configuration.inc.php");
	$codigo=$_POST['codigo']; 
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    if($conexion){
		
		$update="DELETE FROM producto WHERE  codigo='$codigo'";   
		mysqli_query($conexion,$update);
		$resultado=mysqli_affected_rows($conexion);
		
		
    }else{
		echo'error de conexion';
		}
		mysqli_close($conexion);
		return $resultado ;

}
function proveedorEliminado(){

    include("configuration.inc.php");
	$nombreP=$_POST['nombreP']; 
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    if($conexion){
		
		$update="DELETE FROM proveedor WHERE nombre_proveedor='$nombreP'";   
		mysqli_query($conexion,$update);
		$resultado=mysqli_affected_rows($conexion);
		
		
    }else{
		echo'error de conexion';
		}
		mysqli_close($conexion);
		return $resultado ;

}
function clienteEliminado(){

    include("configuration.inc.php");
	$nombreC=$_POST['nombreCliente']; 
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
    if($conexion){
		
		$update="DELETE FROM cliente WHERE  nombre_cliente='$nombreC'";   
		mysqli_query($conexion,$update);
		$resultado=mysqli_affected_rows($conexion);
		
		
    }else{
		echo'error de conexion';
		}
		mysqli_close($conexion);
		return $resultado ;

}
function mostrarFactura(){
    include("configuration.inc.php");
	$nombreC=$_POST['nombreC'];
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);

    $sql = "SELECT pedidos.id_pedido, pedidos.fecha, pedidos.nombre_cliente,productos.codigo,productos.descripcion,pedidos.cantidad_producto,productos.precio_unidad,pedidos.precio_total , productos.nombre_proveedor 
	FROM producto AS productos 
	INNER JOIN pedido AS pedidos 
	ON (productos.codigo = pedidos.codigo) Where pedidos.nombre_cliente ='$nombreC'"; 
    $result=mysqli_query($conexion,$sql);

	$query="SELECT pedidos.nombre_cliente, SUM(pedidos.precio_total) AS precio_factura 
	FROM producto AS productos 
	INNER JOIN pedido AS pedidos 
	on productos.codigo = pedidos.codigo
	WHERE pedidos.nombre_cliente ='$nombreC'";
	$resultado=mysqli_query($conexion,$query);
	$fila = mysqli_num_rows($result);
	$ret = ($fila != 0);
        echo'
				<div id="scroll">
					<table class="tabla" >
						<thead>
							<tr>
								<th>ID</th>
								<th>Fecha</th>
								<th>Nombre cliente</th>
								<th>Codigo producto</th>
								<th>Descripcion</th>
								<th>Cantidad de producto</th>
								<th>Precio por unidad</th>
								<th>Precio Total</th>
								<th>Nombre Proveedor</th>
							</tr>		
						</thead>
						<tbody>';
						while($mostrar= mysqli_fetch_array($result)){
							echo'
							<tr>
								<td>'.$mostrar['id_pedido'].' </td>
								<td>'. $mostrar['fecha'].' </td>
								<td>'. $mostrar['nombre_cliente'].' </td>
								<td>'. $mostrar['codigo'].' </td>
								<td>'.$mostrar['descripcion'].' </td>
								<td>'. $mostrar['cantidad_producto'].' </td>
								<td>'.$mostrar['precio_unidad'].' </td>
								<td>'. $mostrar['precio_total'].' </td>
								<td>'.$mostrar['nombre_proveedor'].' </td>
								';}
								echo'
							</tr>	
							</tbody>
					
							</table>
							<table class="tabla" >
					<thead>
						<tr>
							<th>Nombre del cliente</th>
							<th>Precio a pagar</th>
						</tr>		
					</thead>
					<tbody>';
						while($mostrar= mysqli_fetch_array($resultado)){
							echo'
							<tr>
								<td>'.$mostrar['nombre_cliente'].' </td>
								<td>'. $mostrar['precio_factura'].' </td>
								
								';}
								echo'
							</tr>	
							</tbody>
					
							</table>
							</div>
		
							';
							
							return $ret;
							printf($ret);
							mysqli_close($conexion);
							echo'
							
           
			</div> <!-- LARGE HEADER -->
			</div> <!-- END CONTENT -->
        </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
        </section>';
}
function mostrarAlmacen(){
include("configuration.inc.php");
$conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
$sql = "SELECT id_productos ,codigo,descripcion,En_almacen,cantidad FROM producto WHERE En_almacen='1';"; 
$result=mysqli_query($conexion,$sql);

	echo'
			<div id="scroll">
				<table class="tabla" >
					<thead>
						<tr>
							<th>ID producto</th>
							<th>Codigo del producto</th>
							<th>Descripcion</th>
							<th>En almacen</th>
							<th>Cantidad en el almacen</th>
						</tr>		
					</thead>
					<tbody>';
					while($mostrar= mysqli_fetch_array($result)){
						echo'
						<tr>
							<td>'.$mostrar['id_productos'].' </td>
							<td>'. $mostrar['codigo'].' </td>
							<td>'.$mostrar['descripcion'].' </td>
							<td>'. $mostrar['En_almacen'].' </td>
							<td>'.$mostrar['cantidad'].' </td>
							
							
							';}
							echo'
						</tr>	
						</tbody>
				
						</table>
						</div>
						
						';
						mysqli_close($conexion);
						echo'
						
	   
		</div> <!-- LARGE HEADER -->
		</div> <!-- END CONTENT -->
	</div> <!-- LARGE HEADER -->
	</div> <!-- END CONTENT -->
	</section>';
}
function mostrarEntreFechas(){
	include("configuration.inc.php");
	$nombreC=$_POST['nombreC'];
	$fechaV=$_POST['fechaV'];
    $fechaN=$_POST['fechaN'];
	$conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);

    $sql = " SELECT pedidos.id_pedido, pedidos.fecha, pedidos.nombre_cliente,productos.codigo  , 
	productos.descripcion ,pedidos.cantidad_producto ,productos.precio_unidad , pedidos.precio_total ,
	productos.nombre_proveedor 
	from producto AS productos 
	inner join pedido as pedidos 
	on productos.codigo = pedidos.codigo
	WHERE (pedidos.fecha BETWEEN '$fechaV' AND '$fechaN') AND pedidos.nombre_cliente='$nombreC' "; 
    $result=mysqli_query($conexion,$sql);
	$fila = mysqli_num_rows($result);
	$ret = ($fila != 0);
        echo'
				<div id="scroll">
					<table class="tabla" >
						<thead>
							<tr>
								<th>ID</th>
								<th>Fecha</th>
								<th>Nombre cliente</th>
								<th>Codigo producto</th>
								<th>Descripcion</th>
								<th>Cantidad de producto</th>
								<th>Precio por unidad</th>
								<th>Precio Total</th>
								<th>Nombre Proveedor</th>
							</tr>		
						</thead>
						<tbody>';
						while($mostrar= mysqli_fetch_array($result)){
							echo'
							<tr>
								<td>'.$mostrar['id_pedido'].' </td>
								<td>'. $mostrar['fecha'].' </td>
								<td>'. $mostrar['nombre_cliente'].' </td>
								<td>'. $mostrar['codigo'].' </td>
								<td>'.$mostrar['descripcion'].' </td>
								<td>'. $mostrar['cantidad_producto'].' </td>
								<td>'.$mostrar['precio_unidad'].' </td>
								<td>'. $mostrar['precio_total'].' </td>
								<td>'.$mostrar['nombre_proveedor'].' </td>
								';}
								echo'
							</tr>	
							</tbody>
					
							</table>
							
							</div>
		
							';
							
							return $ret;
							mysqli_close($conexion);
							echo'
							
           
			</div> <!-- LARGE HEADER -->
			</div> <!-- END CONTENT -->
        </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
        </section>';
}
function mostrarPedidoCliente(){
	include("configuration.inc.php");
	$nombreC=$_POST['nombreC'];
    $conexion = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);

    $sql = "SELECT pedidos.id_pedido, pedidos.fecha, pedidos.nombre_cliente,productos.codigo,productos.descripcion,pedidos.cantidad_producto,productos.precio_unidad,pedidos.precio_total , productos.nombre_proveedor 
	FROM producto AS productos 
	INNER JOIN pedido AS pedidos 
	ON (productos.codigo = pedidos.codigo) Where pedidos.nombre_cliente ='$nombreC'"; 
    $result=mysqli_query($conexion,$sql);
	$fila = mysqli_num_rows($result);
	$ret = ($fila != 0);
        echo'
				<div id="scroll">
					<table class="tabla" >
						<thead>
							<tr>
								<th>ID</th>
								<th>Fecha</th>
								<th>Nombre cliente</th>
								<th>Codigo producto</th>
								<th>Descripcion</th>
								<th>Cantidad de producto</th>
								<th>Precio por unidad</th>
								<th>Precio Total</th>
								<th>Nombre Proveedor</th>
							</tr>		
						</thead>
						<tbody>';
						while($mostrar= mysqli_fetch_array($result)){
							echo'
							<tr>
								<td>'.$mostrar['id_pedido'].' </td>
								<td>'. $mostrar['fecha'].' </td>
								<td>'. $mostrar['nombre_cliente'].' </td>
								<td>'. $mostrar['codigo'].' </td>
								<td>'.$mostrar['descripcion'].' </td>
								<td>'. $mostrar['cantidad_producto'].' </td>
								<td>'.$mostrar['precio_unidad'].' </td>
								<td>'. $mostrar['precio_total'].' </td>
								<td>'.$mostrar['nombre_proveedor'].' </td>
								';}
								echo'
							</tr>	
							</tbody>
					
							</table>
							
							</div>
		
							';
							
							return $ret;
							mysqli_close($conexion);
							echo'
							
           
			</div> <!-- LARGE HEADER -->
			</div> <!-- END CONTENT -->
        </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
        </section>';
}