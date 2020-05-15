<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Ventas</title>
    </head>
    <body style="background: #748a9f">
        <br />
        <div align="center">
            <h1>VENTAS</h1>
        </div>

        <div align="right">
            <a href="index.html">Salir</a>
        </div>
        <hr />
        <br />

        <?php
            if(isset($_GET['producto']))
            {
                include('Conexion.php');
                $con = new Conexion();
                $producto=$_GET['producto'];
                $precio=$_GET['precio'];

                $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";
                $consulta=$con->query($query);
                $con->close();
             ?>
                <table align="center" border=1>
                    <tr>
                        <td>
                            <p>Producto</p>
                        </td>
                        <td>
                            <p>Precio</p>
                        </td>
                    </tr>
                    <?php
                         
                        $con = new Conexion();
                        $query="SELECT * FROM `carrito` WHERE 1;";
                        $pro=$con->query($query);
                        $con->close();

                        while($row=mysqli_fetch_assoc($pro))
                        {
                            echo " 
                                <tr>
                                    <td>
                                        <p>".$row['producto']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['precio']."</p>
                                    </td>
                                </tr>
                            ";
                        }
                    ?>
                </table>
            <?php                   
            }
        ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="clo-10 ">
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th scope="col">Juego</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Agregar Carrito</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="Juegos/Spiderman.jpg" style="width:150px" />
                                </td>
                                <td>
                                    <p>
                                        Spider-Man es un videojuego de acción y aventura basado en el popular superhéroe hómonimo de la editorial Marvel Comics.​ Fue desarrollado por Insomniac Games y publicado por Sony Interactive Entertainment en exclusiva para la consola PlayStation 4.
                                    </p>
                                </td>
                                <td>
                                    <p>$20.00</p>
                                </td>
                                <td>
                                    <a href="?producto=Spider-man&precio=20">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="Juegos/RDR2.jpeg" style="width:150px" />
                                </td>
                                <td>
                                    <p>
                                        Red Dead Redemption 2 es un videojuego de acción-aventura western, en un mundo abierto y en perspectiva de primera y tercera persona, ​ con componentes para un jugador y multijugador.​ Fue desarrollado por Rockstar Studios. Es la precuela de Red Dead Redemption y el tercer juego de la saga Red Dead.
                                    </p>
                                </td>
                                <td>
                                    <p>$60.00</p>
                                </td>
                                <td>
                                    <a href="?producto=RDR2&precio=60">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="Juegos/GTA5.jpg" style="width:150px" />
                                </td>
                                <td>
                                    <p>
                                        Grand Theft Auto V es un videojuego de acción-aventura de mundo abierto desarrollado por el estudio Rockstar North y distribuido por Rockstar Games. Fue lanzado el 17 de septiembre de 2013 para las consolas PlayStation 3 y Xbox 360.
                                    </p>
                                </td>
                                <td>
                                    <p>$44.00</p>
                                </td>
                                <td>
                                    <a href="?producto=GTA5&precio=44">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="Juegos/TLOU2.jpg" style="width:150px" />
                                </td>
                                <td>
                                    <p>
                                        The Last of Us: Part II es un próximo videojuego de acción-aventura desarrollado por Naughty Dog y publicado por Sony. Su lanzamiento está programado para el 19 de junio de 2020.​
                                    </p>
                                </td>
                                <td>
                                    <p>$85.00</p>
                                </td>
                                <td>
                                    <a href="?producto=TLOU2&precio=85">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="Juegos/Outlast.jpg" style="width:150px" />
                                </td>
                                <td>
                                    <p>
                                        Outlast 2 es un videojuego de horror de supervivencia en primera persona desarrollado y publicado por Red Barrels Games.
                                    </p>
                                </td>
                                <td>
                                    <p>$36.00</p>
                                </td>
                                <td>
                                    <a href="?producto=Outlast&precio=36">Comprar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>