<?php
include('../app/config.php');
include ('../layout/sesion.php');

include ('../app/controllers/usuarios/listado_de_usuarios.php');

// Header

include ('../layout/parte1.php'); 
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <stro class="m-0">Listado de usuarios</stro>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

        <div class="row">
            <div class="col-md-8">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Usuarios registrados</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <table class="table table-bordered table-hover table-striped table-sm">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                       
                    </tr>
                    <tr> 
                        <tbody?>
                            <?php 

                            foreach ($usuarios_datos as $usuario)  { ?>
                                <tr>
                                    <td><?php echo $usuario['id_usuario']; ?></td>
                                    <td><?php echo $usuario['nombres']; ?></td>
                                    <td><?php echo $usuario['email']; ?></td>
                               </tr>                
                                <?php } ?>
                        </tbody>
                    </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            </div>
        </div>

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


<!--Footer-->
<?php
include ('../layout/parte2.php');
?>







   