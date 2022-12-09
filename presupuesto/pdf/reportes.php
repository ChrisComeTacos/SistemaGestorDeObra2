<?php 

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    
        <script>
        alert("Por favor, debes iniciar sesión.");
        window.location = "../../login_registro.php";
        </script>
        ';
        session_destroy();
        die();

}

ob_start();



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <!-- Custom Style -->
    <link rel="stylesheet" href="../plantilla/plantilla.css" />

    <title>Invoice..!</title>
  </head>

  <body>
    <div class="page" size="A4">
      <div class="p-5">
        <section class="top-content bb d-flex justify-content-between">
          <div class="logo">
            <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/estudio_arquitectura/assets/img/LogoJACTORRES.svg" alt="" class="img-fluid" />
          </div>
            <div class="position-relative">
              <p>Presupuesto No. <span>XXXX</span></p>
            </div>
          </div>
        </section>

        <section class="store-user mt-5">
          <div class="col-10">
            <div class="row bb pb-3">
              <div class="col-7">
                <p>Estudio de arquitectura,</p>
                <h2>JACTORRES</h2>
                <p class="address">
                  Calle 5 #100 B, <br />
                  Colonia Bellavista, <br />CP: 24020
                </p>
                <div class="txn mt-2">Tel.9811041487</div>
              </div>
              <div class="col-5"></div>
            </div>
            <div class="row extra-info pt-3">
              <div class="col-7">dsdsds</div>
              <div class="col-5">
                <p>Deliver Date: <span>10-04.2021</span></p>
              </div>
            </div>
          </div>
        </section>

        <section class="product-area mt-4">
        <?php 
    include("../../php/conexion_be.php");

    $sql="SELECT id, descripcion, unidad, cantidad, precio_unitario, cantidad * precio_unitario AS subtotal FROM presupuesto";
    $query=mysqli_query($conexion,$sql);

?>

<table class="table">
                    <thead class="table-secondary table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Descripción</th>
                            <th>Unidad</th>
                            <th>Cantidad</th>
                            <th>Precio unitario</th>
                            <th>subtotal</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $total = 0;
                            while($row=mysqli_fetch_array($query)) {

                            $total = $total + $row['subtotal'];
                        ?>
                        <tr>
                            <th><?php echo $row['id'] ?></th>
                            <th><?php echo $row['descripcion'] ?></th>
                            <th><?php echo $row['unidad'] ?></th>
                            <th><?php echo $row['cantidad'] ?></th>
                            <th>$<?php echo number_format($row['precio_unitario'], 2, '.', ','); ?></th>
                            <th>$<?php echo number_format($row['subtotal'], 2, '.', ','); ?></th>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </section>

        <section class="balance-info">
          <div class="row">
            <div class="col-8">
              <p class="m-0 font-weight-bold">Note:</p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In
                delectus, adipisci vero est dolore praesentium.
              </p>
            </div>
            <div class="col-4">
              <table class="table border-0 table-hover">
                <tr>
                  <td>Sub Total:</td>
                  <td>800$</td>
                </tr>
                <tr>
                  <td>Tax:</td>
                  <td>15$</td>
                </tr>
                <tr>
                  <td>Deliver:</td>
                  <td>10$</td>
                </tr>
                <tfoot>
                  <tr>
                    <td>Total:</td>
                    <td><b>$<?php echo number_format($total, 2, '.', ','); ?></b></td>

                  </tr>
                </tfoot>
              </table>


            </div>
          </div>
        </section>


        <footer>
          <div class="social pt-3">
            <span class="pr-2">
              <i class="fas fa-mobile-alt"></i>
              <span>0123456789</span>
            </span>
            <span class="pr-2">
              <i class="fas fa-envelope"></i>
              <span>me@saburali.com</span>
            </span>
            <span class="pr-2">
              <i class="fab fa-facebook-f"></i>
              <span>/sabur.7264</span>
            </span>
            <span class="pr-2">
              <i class="fab fa-youtube"></i>
              <span>/abdussabur</span>
            </span>
            <span class="pr-2">
              <i class="fab fa-github"></i>
              <span>/example</span>
            </span>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>

<?php

$html=ob_get_clean();
// echo $html;

require_once '../libreria/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("presupuesto.pdf", array("Attachment" => false));


?>


