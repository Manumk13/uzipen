<?php


function show_header()
{

    echo '
    <!DOCTYPE html>

    <html lang="en" class="no-js">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <title>Indus HTML5 Free Responsive Template | Template stock</title>
    
            <link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css" />
            <link rel="stylesheet" type="text/css" href="view/css/et-lineicon.css" />
            <link rel="stylesheet" type="text/css" href="view/css/font-awesome.min.css" />
            <link rel="stylesheet" type="text/css" href="view/css/style.css" />
            <link rel="stylesheet" type="text/css" href="view/css/prop.css" />
            <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,400italic,500italic,700" rel="stylesheet" type="text/css"/>
            
        </head>
        <section id="home">
    
    
    
    ';
}

function show_origin()
{

    echo '
           
                        <h1>Hola admin que deseas hacer hoy?</h1>
                        </div>
                        </div>
                        <div class="row">
                            <div class= "origen">
                                <div><a href="index.php?cmd=inserts">Introduccio de nuevos datos:</a></div>
                                <div><a href="index.php?cmd=update">Modificacíon de datos</a></div>
                                <div><a href="index.php?cmd=delete">Eliminacio de registros</a></div>
                                <div><a href="index.php?cmd=select">Cosultas especificas</a></div>
                            </div>
                        </div> <!-- END ROW -->
                    </div> <!-- END COUNTDOWN -->
                </div> <!-- LARGE HEADER -->
            </div> <!-- END CONTENT -->
        </section>
    
    
    ';
}
function show_original()
{

    echo '
           
            <div class="content">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <div id="countdown_dashboard" class="home-main container">
                        <div class="row">
                            <div class="logo">
                                <img src="view/images/logou.jpg" alt="logo">
                               
    
    
    ';
}

/*
*	Muestra el formulario de contacto
*	E:
*	S:
*	SQL:
*/
function show_login()
{

    echo '

                            <h1>Hola registrate para acceder a los datos</h1>
                            </div>
                            <div id="slider">
                                <form action="index.php" method="post" role="form">

                                        <h2>LOG IN</h2>

                                        <input id="usuario" type="text" name="usuario" placeholder="Introduce tu usuario" required="" ><br><br>
                    
                                        <input id="pass" type="password" name="pass_user" placeholder="password" required="" ><br><br>
                        
                                        <button type="submit" name="login">Login</button><br><br>

                                </form>
                            </div>
                        </div>
                    </div> <!-- END ROW -->
                </div> <!-- END COUNTDOWN -->
            </div> <!-- LARGE HEADER -->
            </div> <!-- END CONTENT -->
        </section>';
}

/*
*	Muestra el menu de introduccio de nuevos inserts 
*	E:
*	S:
*	SQL:
*/

function show_insert()
{

    echo '
            <h1>¿En que tabla desea introducir un nuevo registro?</h1>
                <div class="flotar"><a href="index.php?cmd=origin">volver</a></div>
                <div class="limpiar"></div>    
            </div>
            </div>
            <div class="row">
                <div class= "origen">
                    <div><a href="index.php?cmd=nuevoCliente">Nuevo cliente</a></div>
                    <div><a href="index.php?cmd=nuevoProveedor">Nuevo proveedor</a></div>
                    <div><a href="index.php?cmd=nuevoProducto">Nuevo producto</a></div>
                    <div><a href="index.php?cmd=nuevoPedido">Nuevo pedido</a></div>
                </div>
            </div> <!-- END ROW -->
        </div> <!-- END COUNTDOWN -->
        </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
        </section>
';
}

function show_nuevo_cliente()
{

    echo '
        <h1>Introduce el nuevo cliente</h1>
        <div class="flotar"><a href="index.php?cmd=inserts">volver a insertar datos</a></div>
        <div class="limpiar"></div> 
                </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Registra el nuevo cliente</h2>

                        <form id="formulario" action="index.php?cmd=nuevoCliente" method="post">
                
                            <label>Introduce el nombre del cliente: <input placeholder="Nombre del cliente" type="text" name="nombreCliente" id="cliente"></label><br><br>
                            <label>Introduce la dirección del cliente: <input placeholder="Dirección del cliente" type="text" name="direccion" id="direccion"></label><br><br>
                            <label>Introduce el horario del cliente: <input placeholder="Horario del cliente" name="horario" type="text" id="horario" ></label> <br />
                            <input type="submit" name="registroC" value="Enviar">
                        </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de clientes</h3>';
}

function show_nuevo_proveedor()
{

    echo '
        <h1>Introduce el nuevo proveedor</h1>
        <div class="flotar"><a href="index.php?cmd=inserts">volver a insertar datos</a></div>
        <div class="limpiar"></div> 
                </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Registra el nuevo proveedor</h2>

                        <form id="formulario" action="index.php?cmd=nuevoProveedor" method="post">
                
                            <label>Introduce el nombre del proveedor: <input placeholder="Nombre del proveedor" type="text" name="nombreProveedor" id="proveedor"></label><br><br>
                            <label>Introduce la dirección del cliente: <input placeholder="Correo del proveedor" type="email" name="correo" id="correo"></label><br><br>
                            <input type="submit" name="registroPro" value="Enviar">
                        </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de proveedores</h3>
                    ';
}

function show_nuevo_productor()
{

    echo '
        <h1>Introduce tu nuevo producto</h1>
        <div class="flotar"><a href="index.php?cmd=inserts">volver a insertar datos</a></div>
        <div class="limpiar"></div> 
        </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Registra el nuevo producto</h2>

                        <form id="formulario" action="index.php?cmd=nuevoProducto" method="post">
                            <div class="flotar" >
                                <label>Introduce el codigo del producto: <input placeholder="Codigo del producto" type="text" name="codigo" id="codigo"></label><br><br>
                                <label>Introduce la descripcion del producto: <input placeholder="Descripcion" type="text" name="des" id="des"></label><br><br>
                                <label>Introduce el precio producto: <input placeholder="Codigo del producto" type="number" name="precio" id="precio" step=0.01></label><br><br>
                            </div>
                            <div >    
                                <label>Esta en el almacen: <input placeholder=" Si hay (1)/si no hay(0)" type="number" name="hay" id="hay" step=0.01></label><br><br>
                                <label>Introduce la cantidad en almacen: <input placeholder="Cantidad en almacen" type="number" name="cantidadAl" id="cantidadAl"></label><br><br>
                                <label>Introduce el nombre del proveedor: <input placeholder="Nombre proveedor" type="text" name="nombrePro" id="nombrePro"></label><br><br>    
                                <input type="submit" name="registroP" value="Enviar">
                            </div>
                            <div class="limpiar"></div>
                            </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de productos</h3>
                    ';
}

function show_nuevo_pedido()
{

    echo '
        <h1>Introduce tu nuevo pedido:</h1>
        <div class="flotar"><a href="index.php?cmd=inserts">volver a insertar datos</a></div>
        <div class="limpiar"></div>         
        </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Registra el nuevo pedido</h2>

                        <form id="formulario" action="index.php?cmd=nuevoPedido" method="post">
                            
                            <div >    
                                <label>Introduce el nombre del cliente: <input placeholder="NombreCliente" type="text" name="nombreC" id="nombreC" ></label><br><br>
                                <label>Introduce el codigo del producto: <input placeholder="Codigo producto" type="text" name="codigo" id="codigo"></label><br><br>
                                <label>Introduce la cantidad de producto: <input placeholder="cantidad de producto" type="number" name="cantidadTotal" id="cantidadTotal"></label><br><br>    
                                <label>Introduce el nombre del proveedor: <input placeholder="Nombre proveedor" type="text" name="nombrePro" id="nombrePro"></label><br><br>    
                                
                                <input type="submit" name="registroPed" value="Enviar">
                            </div>
                            <div class="limpiar"></div>
                            </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de pedidos</h3>
                    ';
}
function show_update()
{

    echo '
            <h1>¿En que tabla desea modificar datos?</h1>
            <div class="flotar"><a href="index.php?cmd=origin">volver</a></div>
            <div class="limpiar"></div>   
            </div>
            </div>
            <div class="row">
                <div class= "origen">
                    <div><a href="index.php?cmd=updateCliente">Modificar cliente</a></div>
                    <div><a href="index.php?cmd=updateProveedor">Modificar proveedor</a></div>
                    <div><a href="index.php?cmd=updateProducto">Modificar producto</a></div>
                    <div><a href="index.php?cmd=updatePedido">Modificar pedido</a></div>
                </div>
            </div> <!-- END ROW -->
        </div> <!-- END COUNTDOWN -->
        </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
        </section>
';
}

function show_update_cliente()
{

    echo '
                <h1>Modifica el cliente que deseas</h1>
                <div class="flotar"><a href="index.php?cmd=update">volver a modificar datos</a></div>
                <div class="limpiar"></div>   
                </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Modificar cliente existente</h2>

                        <form id="formulario" action="index.php?cmd=updateCliente" method="post">
                
                            <label>Introduce el nombre del cliente: <input placeholder="Nombre del cliente" type="text" name="nombreCliente" id="cliente"></label><br><br>
                            <label>Introduce la nueva dirección del cliente: <input placeholder="Dirección del cliente" type="text" name="direccion" id="direccion"></label><br><br>
                            <label>Introduce el nuevo horario del cliente: <input placeholder="Horario del cliente" name="horario" type="text" id="horario" ></label> <br />
                            <input type="submit" name="updateC" value="Enviar">
                        </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de clientes</h3>
                    ';
}
function show_update_proveedor()
{

    echo '
                <h1>Modifica el proveedor que deseas:</h1>
                <div class="flotar"><a href="index.php?cmd=update">volver a modificar datos</a></div>
                <div class="limpiar"></div>  
                </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Modificar proveedor existente</h2>

                        <form id="formulario" action="index.php?cmd=updateProveedor" method="post">
                
                            <label>Introduce el nombre del proveedor: <input placeholder="Nombre del proveedor" type="text" name="nombreP" id="proveedor"></label><br><br>
                            <label>Introduce el nuevo correo: <input placeholder="Dirección del nuevo cliente" type="email" name="correo" id="correo"></label><br><br>
                            <input type="submit" name="updateP" value="Enviar">
                        </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de proveedores:</h3>
                    ';
}
function show_update_producto()
{

    echo '
                <h1>Modifica el producto que deseas:</h1>
                <div class="flotar"><a href="index.php?cmd=update">volver a modificar datos</a></div>
                <div class="limpiar"></div>  
                </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Modificar producto existente:</h2>

                        <form id="formulario" action="index.php?cmd=updateProducto" method="post">
                            <div class="flotar" >
                                <label>Introduce el codigo del producto que desea modificar: <input placeholder="Codigo del producto" type="text" name="codigo" id="codigo"></label><br><br>
                                <label>Introduce la nueva descripcion del producto: <input placeholder="Descripcion" type="text" name="des" id="des"></label><br><br>
                                <label>Introduce el nuevo precio producto: <input placeholder="Codigo del producto" type="number" name="precio" id="precio" step=0.01></label><br><br>
                            </div>
                            <div >    
                                <label>Esta en el almacen: <input placeholder=" Si hay (1)/si no hay(0)" type="number" name="hay" id="hay" step=0.01></label><br><br>
                                <label>Introduce la nueva cantidad en almacen: <input placeholder="Cantidad en almacen" type="number" name="cantidadAl" id="cantidadAl"></label><br><br>
                                <label>Introduce el nombre del nuevo proveedor: <input placeholder="Nombre proveedor" type="text" name="nombrePro" id="nombrePro"></label><br><br>    
                                <input type="submit" name="updateProd" value="Enviar">
                            </div>
                            <div class="limpiar"></div>
                            </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de productos</h3>
                    ';
}
function show_update_pedido()
{

    echo '
         <h1>Modifica el pedido que deseas:</h1>
         <div class="flotar"><a href="index.php?cmd=update">volver a modificar datos</a></div>
         <div class="limpiar"></div>  
         </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Modificar pedido existente:</h2>

                        <form id="formulario" action="index.php?cmd=updatePedido" method="post">
                            
                            <div > 
                                <label>Introduce el id del pedido: <input placeholder="ID/primera columna de la tabla" type="number" name="id_p" id="id_p"></label><br><br>       
                                <label>Introduce el nuevo nombre del cliente: <input placeholder="Nombre Cliente" type="text" name="nombreC" id="nombreC" ></label><br><br>
                                <label>Introduce el nuevo codigo del producto: <input placeholder="Codigo producto" type="text" name="codigo" id="codigo"></label><br><br>
                                <label>Introduce la nueva cantidad de producto: <input placeholder="cantidad de producto" type="number" name="cantidadTotal" id="cantidadTotal"></label><br><br>    
                                <label>Introduce el nuevo nombre del proveedor: <input placeholder="Nombre proveedor" type="text" name="nombrePro" id="nombrePro"></label><br><br>    
                                
                                <input type="submit" name="updatePed" value="Enviar">
                            </div>
                            <div class="limpiar"></div>
                            </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de pedidos</h3>
                    ';
}

function show_delete()
{

    echo '
            <h1>¿En que tabla deseas borrar un  registro?</h1>
                <div class="flotar"><a href="index.php?cmd=origin">Volver</a></div>
                <div class="limpiar"></div>    
            </div>
            </div>
            <div class="row">
                <div class= "origen"> 
                    <div><a href="index.php?cmd=deletePedido">Eliminar un pedido</a></div>
                    <div><a href="index.php?cmd=deleteProducto">Eliminar un producto</a></div>
                    <div><a href="index.php?cmd=deleteProveedor">Eliminar un proveedor</a></div>
                    <div><a href="index.php?cmd=deleteCliente">Eliminar un cliente</a></div>
                </div>
            </div> <!-- END ROW -->
        </div> <!-- END COUNTDOWN -->
        </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
        </section>
';
}
function show_delete_cliente()
{

    echo '
                <h1>Elimina el cliente que deseas</h1>
                <div class="flotar"><a href="index.php?cmd=delete">volver a eliminar datos</a></div>
                <div class="limpiar"></div>   
                </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Eliminar cliente existente</h2>

                        <form id="formulario" action="index.php?cmd=deleteCliente" method="post">
                
                            <label>Introduce el nombre del cliente: <input placeholder="Nombre del cliente" type="text" name="nombreCliente" id="cliente"></label><br><br>
                             <input type="submit" name="deleteC" value="Enviar">
                        </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de clientes</h3>
                    ';
}
function show_delete_proveedor()
{

    echo '
                <h1>Elimina el proveedor que deseas:</h1>
                <div class="flotar"><a href="index.php?cmd=delete">volver a eliminar datos</a></div>
                <div class="limpiar"></div>  
                </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Eliminar proveedor existente</h2>

                        <form id="formulario" action="index.php?cmd=deleteProveedor" method="post">
                
                            <label>Introduce el nombre del proveedor: <input placeholder="Nombre del proveedor" type="text" name="nombreP" id="proveedor"></label><br><br>
                             <input type="submit" name="deleteP" value="Enviar">
                        </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de proveedores:</h3>
                    ';
}
function show_delete_producto()
{

    echo '
                <h1>Elimina el producto que deseas:</h1>
                <div class="flotar"><a href="index.php?cmd=delete">volver a eliminar datos</a></div>
                <div class="limpiar"></div>  
                </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Eliminar producto existente:</h2>

                        <form id="formulario" action="index.php?cmd=deleteProducto" method="post">
                            <div >
                                <label>Introduce el codigo del producto que desea eliminar: <input placeholder="Codigo del producto" type="text" name="codigo" id="codigo"></label><br><br>
                                <input type="submit" name="deleteProd" value="Enviar">
                            </div>
                            
                            </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de productos</h3>
                    ';
}
function show_delete_pedido()
{

    echo '
         <h1>Elimina el pedido que deseas:</h1>
         <div class="flotar"><a href="index.php?cmd=delete">volver a eliminar datos</a></div>
         <div class="limpiar"></div>  
         </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Eliminar pedido existente:</h2>

                        <form id="formulario" action="index.php?cmd=deletePedido" method="post">
                            
                            <div > 
                                <label>Introduce el id del pedido: <input placeholder="ID/primera columna de la tabla" type="number" name="id_p" id="id_p"></label><br><br>       
                                <input type="submit" name="deletePed" value="Enviar">
                            </div>
                            
                            
                            </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de pedidos</h3>
                    ';
}
function show_query()
{

    echo '
            <h1>¿Que deseas consultar?</h1>
                <div class="flotar"><a href="index.php?cmd=origin">Volver</a></div>
                <div class="limpiar"></div>    
            </div>
            </div>
            <div class="row">
                <div class= "origen"> 
                    <div><a href="index.php?cmd=factura">Listar pedidos de un cliente y factura</a></div>
                    <div><a href="index.php?cmd=almacen">Ver productos del almacen</a></div>
                    <div><a href="index.php?cmd=entreFechas">Ver los pedidos entre dos fechas de tiempo</a></div>
                    <div><a href="index.php?cmd=pedidoC">Lista de pedidos de un cliente</a></div>
                </div>
            </div> <!-- END ROW -->
        </div> <!-- END COUNTDOWN -->
        </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
        </section>
';
}

function show_factura_cliente()
{

    echo '
         <h1>Introduce el nombre del cliente que deseas hacer factura:</h1>
         <div class="flotar"><a href="index.php?cmd=select">volver a mis consultas</a></div>
         <div class="limpiar"></div>  
         </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Introduce el nombre del cliente para ver la factura:</h2>

                        <form id="formulario" action="index.php?cmd=factura" method="post">
                            
                            <div > 
                                <label>Introduce el nombre del cliente: <input placeholder="Nombre del cliente" type="text" name="nombreC" id="nombreC"></label><br><br>       
                                <input type="submit" name="fact" value="Enviar">
                            </div>
                            
                            
                            </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de pedidos</h3>
                    ';
}
function show_almacen()
{

    echo '
         <h1>Este es el almacen de productos de UZIPEN:</h1>
         <div class="flotar"><a href="index.php?cmd=select">volver a mis consultas</a></div>
         <div class="limpiar"></div>  
         </div>
                </div>
                <div class="row">
                    <div class= "origen">
                    
                            <h3>Productos en el almacen</h3>
                    ';
}
function show_lista_pedidos()
{

    echo '
         <h1>Introduce el nombre del cliente al deseas revisar sus pedidos:</h1>
         <div class="flotar"><a href="index.php?cmd=select">volver a mis consultas</a></div>
         <div class="limpiar"></div>  
         </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Introduce el nombre del cliente para ver la lista de pedidos realizados:</h2>

                        <form id="formulario" action="index.php?cmd=factura" method="post">
                            
                            <div > 
                                <label>Introduce el nombre del cliente: <input placeholder="Nombre del cliente" type="text" name="nombreC" id="nombreC"></label><br><br>       
                                <input type="submit" name="pedidoC" value="Enviar">
                            </div>
                            
                            
                            </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de pedidos</h3>
                    ';
}
function show_entre_fechas()
{

    echo '
         <h1>Introduce el nombre del cliente al deseas revisar sus pedidos:</h1>
         <div class="flotar"><a href="index.php?cmd=select">volver a mis consultas</a></div>
         <div class="limpiar"></div>  
         </div>
                </div>
                <div class="row">
                    <div class= "origen">
                        <h2>Introduce el nombre del cliente para ver la lista de pedidos realizados:</h2>

                        <form id="formulario" action="index.php?cmd=factura" method="post">
                            
                            <div > 
                                <label>Introduce el nombre del cliente: <input placeholder="Nombre cliente" type="text" name="nombreC" id="nombreC"></label><br><br>       
                                <label>Introduce la fecha mas antigua: <input placeholder="Fecha antigua" type="date" name="fechaV" id="fechaV"></label><br><br>       
                                <label>Introduce la fecha mas reciente: <input placeholder="Fecha nueva" type="date" name="fechaN" id="fechaN"></label><br><br>       
                                <input type="submit" name="fecha" value="Enviar">
                            </div>
                            
                            
                            </form>        
                    </div>
                    <div class= "origen">
                            <h3>Lista de pedidos</h3>
                    ';
}
/*
*	Muestra el formulario de contacto
*	E:
*	S:
*	SQL:
*/
function show_footer()
{

    echo '
            <footer class="footer">
            <div class="container text-center">
                
                <div class="row">
                    <p class="copyright">Copyright© 2016 <a href="http://templatestock.co">Template Stock</a></p>
                </div>
            </div>
        </footer>
            
        <!-- JAVASCRIPTS -->
        <script src="view/js/jquery.min.js"></script>
        <script src="view/js/jquery.lwtCountdown-1.0.js"></script>
        <script src="view/js/jquery.stellar.min.js"></script>
        <script src="view/js/jquery.nicescroll.min.js"></script>
        <script src="view/js/animated.js"></script>
        <script src="view/js/main.js"></script>
        </body>
        </html>
    ';
}

function show_msg($msg)
{
    echo "<script type='text/javascript'>alert('" . $msg . "');</script>";
}
