<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>


<?php include('./constant/connect.php');

$idUsuario = $_SESSION['userId'];
$idRol = $_SESSION['rol'];
$idSelect = $_POST['idSelect'];
$sql = "SELECT * from users where  user_id='" . $_POST['idSelect'] . "'"; 
$result = $connect->query($sql)->fetch_assoc();  

?>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Editar datos de usuario</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Editar datos</li>
                <td><?php //echo $idSelect ?></td>
            </ol>
        </div>
    </div>


    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-8" style=" margin-left: 10%;">
                <div class="card">
                    <div class="card-title">

                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            
                            <form class="form-horizontal" method="POST" id="submitUserForm" action="php_action/editUser.php?>" enctype="multipart/form-data">

                                <input type="hidden" name="currnt_date" class="form-control">
                                <input required type="hidden" name="idSelect" class="form-control"  value=<?php echo $idSelect;?>>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input required type="text" name="editusername" id="editusername" class="form-control" value=<?php echo $result['username'];?>>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Apellido</label>
                                        <div class="col-sm-9">
                                            <input required type="text" name="editapellido" id="editapellido" class="form-control"  value=<?php echo $result['apellido'];?>>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Fecha de nacimiento</label>
                                        <div class="col-sm-9">
                    <input required type="date" name="editfechanac" id="editfechanac" class="form-control" min='1900-01-01' max='2013-12-31' place="fecha de nacimiento "value= <?php echo $result['fechanac'];?>>
                                            
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input required type="email" name="editemail" id="editemail" class="form-control" value=<?php echo $result['email'];?>>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                    <style>
                                        input::-webkit-outer-spin-button,
                                        input::-webkit-inner-spin-button {
                                        -webkit-appearance: none;
                                        margin: 0;
                                        }
                                        </style>
                                        <label class="col-sm-3 control-label">Telefono</label>
                                        <div class="col-sm-9">
                                            <input required type="number" min="7" max="15" name="edittelefono" id="edittelefono" class="form-control" value=<?php echo $result['telefono'];?>>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Contraseña</label>
                                        <div class="col-sm-9">
                                            <input required type="password" name="editcontraseña" id="editcontraseña" class="form-control" 
                                             required="" placeholder="Su clave sera encriptada">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Rol</label>
                                        <div class="col-sm-9">
                                        <select name="editrol" id="editrol">
                                        <option value=2>Usuario</option>
                                        <option value=1>Administrador</option>
                                    </select>
                                        </div>
                                    </div>

                                    
                                    </div>

                                </div>
                               

                                <button type="submit" name="create" id="edituser" class="btn btn-primary btn-flat m-b-30 m-t-30">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <?php include('./constant/layout/footer.php'); ?>