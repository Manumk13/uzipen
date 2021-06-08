<?php

function show_content()
{

	if ($_SERVER['REQUEST_METHOD'] == 'GET') {	// GET
		if (!isset($_GET['cmd'])) {										// carga inicial de la página
			show_login();
		} else {
			switch ($_GET['cmd']) {										// vemos qué llegó por el GET
				case 'origin':
					show_origin();								// los mostramos
					break;
				case 'inserts':
					show_insert();
					break;

				case 'nuevoCliente':
					show_nuevo_cliente();
					mostrarCliente();
					break;

				case 'nuevoProveedor':
					show_nuevo_proveedor();
					mostrarProveedor();
					break;

				case 'nuevoProducto':
					show_nuevo_productor();
					mostrarProducto();
					break;
				case 'nuevoPedido':
					show_nuevo_pedido();
					mostrarPedido();
					break;

				case 'update':
					show_update();
					break;
				case 'updateCliente':
					show_update_cliente();
					mostrarCliente();
					break;
				case 'updateProveedor':
					show_update_proveedor();
					mostrarProveedor();
					break;
				case 'updateProducto':
					show_update_producto();
					mostrarProducto();
					break;
				case 'updatePedido':
					show_update_pedido();
					mostrarPedido();
					break;
				case 'delete':
					show_delete();								// los mostramos
					break;
				case 'deletePedido':
					show_delete_pedido();
					mostrarPedido();
					break;
				case 'deleteProducto':
					show_delete_producto();
					mostrarProducto();
					break;
				case 'deleteProveedor':
					show_delete_proveedor();
					mostrarProveedor();
					break;
				case 'deleteCliente':
					show_delete_cliente();
					mostrarCliente();
					break;
				case 'select':
					show_query();
				
					break;
				case 'factura':
					show_factura_cliente();

					break;
				case 'almacen':
					show_almacen();
					mostrarAlmacen();
					break;
				case 'pedidoC':
					show_lista_pedidos();
					
					break;	
				case 'entreFechas':
					show_entre_fechas();	
					break;					
				case 'logout':
					show_login();
					break;

				default:
					show_msg("Error, operación no permitida");
					break;
			}
		}
	} else {																// POST
		if (isset($_POST['login'])) {

			if (isset($_SESSION['user'])) {								// login ok (comprobado en actualizar_sesion)
				if (login_ok()) {
					show_origin();
				} else {
					show_login();
				}
			}
		} elseif (isset($_POST['registroC'])) {
			if (nuevoCliente() == true  ) {
				show_msg("SE HA REGISTRADO CORRECTAMENTE EL CLIENTE");
				show_nuevo_cliente();
				mostrarCliente();
			} else {
				show_msg("OCURRIO UN ERROR NO SE PUEDO REGISTRAR EL NUEVO CLIENTE");
				show_nuevo_cliente();
				mostrarCliente();
			}
		} elseif (isset($_POST['registroPro'])) {
			if (nuevoProveedor() == true) {
				show_msg("SE HA REGISTRADO CORRECTAMENTE EL PROVEEDOR");
				show_nuevo_proveedor();
				mostrarProveedor();
			} else {
				show_msg("OCURRIO UN ERROR NO SE PUEDO REGISTRAR EL NUEVO PROVEEDOR");
				show_nuevo_proveedor();
				mostrarProveedor();
			}
		} elseif (isset($_POST['registroP'])) {
			if (nuevoProducto() == true) {
				show_msg("SE HA REGISTRADO CORRECTAMENTE EL PRODUCTO");
				show_nuevo_productor();
				mostrarProducto();
			} else {
				show_msg("OCURRIO UN ERROR AL REGISTRAR EL PRODUCTO");
				show_nuevo_productor();
				mostrarProducto();
			}
		} elseif (isset($_POST['registroPed'])) {
			if (nuevoPedido() == true) {
				show_msg("SE HA REGISTRADO CORRECTAMENTE EL PEDIDO");
				show_nuevo_pedido();
				mostrarPedido();
			} else {
				show_msg("OCURRIO UN ERROR AL REGISTRAR EL PEDIDO");
				show_nuevo_pedido();
				mostrarPedido();
			}
		} elseif (isset($_POST['updateC'])) {
			if (clienteModificado() == true and productoModificado() > 0) {
				show_msg("SE HA MODIFICADO CORRECTAMENTE EL CLIENTE");
				show_update_cliente();
				mostrarCliente();
			} else {
				show_msg("OCURRIO UB ERROR AL MODIFICAR EL CLIENTE");
				show_update_cliente();
				mostrarCliente();
			}
		} elseif (isset($_POST['updateP'])) {
			if (proveedorModificado() == true and productoModificado() > 0) {
				show_msg("SE HA MODIFICADO CORRECTAMENTE EL PROVEEDOR");
				show_update_proveedor();
				mostrarProveedor();
			} else {
				show_msg("OCURRIO UB ERROR AL MODIFICAR EL PROVEEDOR");
				show_update_proveedor();
				mostrarProveedor();
			}
		} elseif (isset($_POST['updateProd'])) {
			if (productoModificado() == true) {
				show_msg("SE HA MODIFICADO CORRECTAMENTE EL PRODUCTO");
				printf(productoModificado());
				show_update_producto();
				mostrarProducto();
			} else {
				show_msg("OCURRIO UB ERROR AL MODIFICAR EL PRODUCTO");
				show_update_producto();
				mostrarProducto();
			}
		} elseif (isset($_POST['updatePed'])) {
			if (pedidoModificado() == true) {
				printf(pedidoModificado());
				show_msg("SE HA MODIFICADO CORRECTAMENTE EL PEDIDO");
				show_update_pedido();
				mostrarPedido();
			} else {
				show_msg("OCURRIO UN ERROR AL MODIFICAR EL PEDIDO");
				printf(pedidoModificado());
				show_update_pedido();
				mostrarPedido();
			}
		} elseif (isset($_POST['deletePed'])) {
			if (pedidoEliminado() == true) {
				show_msg("SE HA ELIMINADO CORRECTAMENTE EL PEDIDO");
				show_delete_pedido();
				mostrarPedido();
			} else {
				show_msg("OCURRIO UN ERROR AL MODIFICAR EL PEDIDO");
				show_delete_pedido();
				mostrarPedido();
			}
		} elseif (isset($_POST['deleteProd'])) {
			if (productoEliminado() == true) {
				show_msg("SE HA ELIMINADO CORRECTAMENTE EL PRODUCTO");
				show_delete_producto();
				mostrarProducto();
			} else {
				show_msg("OCURRIO UN ERROR AL ELIMINAR EL PRODUCTO");
				show_delete_producto();
				mostrarProducto();
			}
		} elseif (isset($_POST['deleteP'])) {
			if (proveedorEliminado() == true) {
				show_msg("SE HA ELIMINADO CORRECTAMENTE EL PROVEEDOR");
				show_delete_pedido();
				mostrarProveedor();
			} else {
				show_msg("OCURRIO UN ERROR AL ELIMINAR EL PROVEEDOR");
				show_delete_pedido();
				mostrarProveedor();
			}
		} elseif (isset($_POST['deleteC'])) {
			if (clienteEliminado() == true) {
				show_msg("SE HA ELIMINADO CORRECTAMENTE EL CLIENTE");
				show_delete_cliente();
				mostrarCliente();
			} else {
				show_msg("OCURRIO UN ERROR AL ELIMINAR EL CLIENTE");
				show_delete_cliente();
				mostrarCliente();
			}
		} elseif (isset($_POST['fact'])) {
			show_factura_cliente();
			
			if (mostrarFactura()==true) {
				show_msg("SE HA GENERADO CORRECTAMENTE LA FACTURA");
				
				
			} else {
				show_msg("OCURRIO UN ERROR ALGENERAR LA FACTURA");
				
				
			}
		} elseif (isset($_POST['pedidoC'])) {
			show_lista_pedidos();
			if (mostrarPedidoCliente() == true) {
								
			} else {
				show_msg("OCURRIO UN ERROR AL LISTAR LOS PRODUCTOS DEL CLIENTE");

			}
		}elseif (isset($_POST['fecha'])) {
			show_entre_fechas();
			if (mostrarEntreFechas() == true) {
								
			} else {
				show_msg("OCURRIO UN ERROR AL LISTAR LOS PRODUCTOS DEL CLIENTE");

			}
		} elseif (isset($_POST['backup'])) {

			if (true) {
				show_msg("backup guardado");
			} else {
				show_msg("Error no realizar el backup");
			}
		}
	}
}


/*
* Realiza algunas acciones relacionadas con la sesión
* S: 
* SQL:
*/
function actualizar_sesion()
{
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {							// POST

		if (isset($_POST['login'])) {

			if (login_ok()) {
				$_SESSION['user'] = $_POST['usuario'];					// Creamos la sesión

				$_SESSION['admin'] = ($_POST['usuario'] == 'manu');
			}
		}
	} else {															// GET

		if (isset($_GET['cmd'])) {

			if ($_GET['cmd'] == 'logout') {

				unset($_SESSION);
				session_destroy();
			}
		}
	}
}
