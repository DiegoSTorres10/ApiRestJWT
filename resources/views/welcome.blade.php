<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ApiRestJWT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body style="background: linear-gradient(to right, #dcdcdc, #808080);">
    <div class="container-fluid px-5 mt-5">
        <h1 class="text-center font-weight-bold">Bienvenido a ApiRestJWT</h1>
        <p class="mt-2 fs-3">Este proyecto esta realizado con Laravel + JWT el cual consta de una una APIRestFull que
            contiene datos
            de clientes para su uso, para ello algunas funciones son necesarias la autenticacion y otras no a
            continuación se presenta una tabla con las respectivas rutas con los metodos. Para su uso en la red debes
            colcoar apijst.torreswebdev.com + la ruta que gustes hacer, y si te gustaría tener esta API en tu
            computadora local visita mi GitHub Haga clic <a href="https://github.com/DiegoSTorres10/ApiRestJWT"
                target="_blank">aquí</a> para acceder al repositorio. <br>
            A continuación se presenta una tabla con los metodos, una descripción, la ruta necesaria y si necesita
            autenticacion de la API
            Si no puede crear un nuevo usuario utilizar:
            *email: diegostorres10@gmail.com
            *password: 12345678
        </p>

        <div class="container mt-2">
            <div class="table-responsive">
                <table class="table table-bordered my-3 mb-5">
                    <thead class="table-primary">
                        <tr>
                            <th>Método</th>
                            <th>Descripción</th>
                            <th>Ruta</th>
                            <th>Autenticación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>POST</td>
                            <td>Entrar a la API</td>
                            <td>api/v1/login</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>Registrar en la API</td>
                            <td>api/v1/register</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>Cerrar sesión</td>
                            <td>api/v1/logout</td>
                            <td>Sí</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>Información del usuario</td>
                            <td>api/v1/get-user</td>
                            <td>Sí</td>
                        </tr>
                        <tr>
                            <td>GET</td>
                            <td>Todos los clientes</td>
                            <td>api/v1/customers</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>GET</td>
                            <td>Mostrar cliente</td>
                            <td>api/v1/customers/{id}/show</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>Crear cliente</td>
                            <td>api/v1/customers/register</td>
                            <td>Sí</td>
                        </tr>
                        <tr>
                            <td>PUT</td>
                            <td>Actualizar cliente</td>
                            <td>api/v1/customers/{id}</td>
                            <td>Sí</td>
                        </tr>
                        <tr>
                            <td>Delete</td>
                            <td>Eliminar cliente</td>
                            <td>api/v1/customers/{id}/delete</td>
                            <td>Sí</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <p class="mt-2 fs-3">
            Se recomienda utilizar Postman para realizar las peticiones. A continuación se presenta una serie de
            capturas para el proceso de los metodos
        </p>
        <!-- Registro -->
        <div class="card mb-5">
            <img src="https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Register.png"
                class="card-img-top" alt="Registro">
            <div class="card-body">

                <h4 class="card-title">Registro</h4>
                <p class="card-text">Para registrarte, utiliza Postman o un programa similar y envía un JSON con campos:
                    name, email y password.</p>
            </div>
        </div>

        <!-- Login -->
        <div class="card mb-5">
            <img src="https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Login.png"
                class="card-img-top" alt="Login">
            <div class="card-body">
                <h5 class="card-title">Inicio de Sesión</h5>
                <p class="card-text">Para iniciar sesión, proporciona el correo electrónico y la contraseña. Si es
                    exitoso, se te devolverá un token.</p>
            </div>
        </div>

        <!-- Logout -->
        <div class="card mb-5">
            <img src="https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Logout.png"
                class="card-img-top" alt="Logout">
            <div class="card-body">
                <h5 class="card-title">Cerrar Sesión</h5>
                <p class="card-text">Para cerrar sesión, envía el token obtenido durante el inicio de sesión.</p>
            </div>
        </div>

        <!-- get-user -->
        <div class="card mb-5">
            <img src="https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Get-user.png"
                class="card-img-top" alt="Get User">
            <div class="card-body">
                <h5 class="card-title">Obtener Usuario</h5>
                <p class="card-text">Para obtener los datos del usuario, envía el token y se devolverá la información
                    del usuario.</p>
            </div>
        </div>

        <!-- Mostrar todos los clientes -->
        <div class="card mb-5">
            <img src="https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Customers.png"
                class="card-img-top" alt="Mostrar todos los clientes">
            <div class="card-body">
                <h5 class="card-title">Mostrar todos los clientes</h5>
                <p class="card-text">Simplemente realiza una solicitud GET a la dirección de la API para mostrar a todos
                    los clientes registrados.</p>
            </div>
        </div>

        <!-- Mostrar un cliente específico -->
        <div class="card mb-5">
            <img src="https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/ShowCustomer.png"
                class="card-img-top" alt="Mostrar un cliente específico">
            <div class="card-body">
                <h5 class="card-title">Mostrar un cliente específico</h5>
                <p class="card-text">Para ver solo un cliente, realiza la solicitud GET correspondiente sin un cuerpo en
                    la petición.</p>
            </div>
        </div>

        <!-- Nuevo cliente -->
        <div class="card mb-5">
            <img src="https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Part1RegisterCustomer.png"
                class="card-img-top" alt="Nuevo Cliente - Parte 1">
            <div class="card-body">
                <h5 class="card-title">Nuevo Cliente</h5>
                <p class="card-text">Primero, debes ingresar el token que se te da al iniciar sesión para realizar esta
                    solicitud.</p>
            </div>
        </div>

        <div class="card mb-5">
            <img src="https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Part2RegisterCustomer.png"
                class="card-img-top" alt="Nuevo Cliente - Parte 2">
            <div class="card-body">
                <h5 class="card-title">Nuevo Cliente</h5>
                <p class="card-text">Posteriormente, debes enviar los datos en el cuerpo: FullName, Phone, Email,
                    Address (Opcional).</p>
            </div>
        </div>

        <!-- Actualizar Cliente -->
        <div class="card mb-5">
            <img src="https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/UpdateCustomer.png"
                class="card-img-top" alt="Actualizar Cliente">
            <div class="card-body">
                <h5 class="card-title">Actualizar Cliente</h5>
                <p class="card-text">Para actualizar, primero debes colocar el token, luego en la dirección de la API,
                    coloca el ID del cliente y envía los nuevos datos (FullName, Phone, Email, Address (Opcional)).</p>
            </div>
        </div>

        <!-- Eliminar Cliente -->
        <div class="card mb-5">
            <img src="https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/DeletedCustomer.png"
                class="card-img-top" alt="Eliminar Cliente">
            <div class="card-body">
                <h5 class="card-title">Eliminar Cliente</h5>
                <p class="card-text">Para eliminar, realiza el primer paso, que es colocar el token, luego en la
                    dirección de la API, ingresa el ID del cliente y, si todo va bien, recibirás un mensaje de
                    eliminación.</p>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
