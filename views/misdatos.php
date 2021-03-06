<?php

require_once('models/mMisDatos.php');

$obj=new mMisDatos();
$data=$obj->getDatos($_SESSION['idPersona'],$_SESSION['idTipoUsuario']);

?>

<div class="col-md-8 col-md-offset-2">

    
    <div class="panel panel-success">
          <div class="panel-heading">
                <h3 class="panel-title">Mis datos</h3>
          </div>
          <div class="panel-body">
                <?php foreach($data as $row): ?>
                <label for="">Nombre</label>
                <p><?php echo $row['nombre']." ".$row['appaterno']." ".$row['apmaterno'];?></p>
                <label for="">Correo personal</label>
                <p><?php echo $row['correoPersonal'];?></p>
                <label for="">Correo institucional</label>
                <p><?php echo $row['correoInstitucional'];?></p>
                <label for="">Teléfono</label>
                <p><?php echo $row['telefono'];?></p>
                <label for="">Sexo</label>
                <p><?php echo $row['sexo'];?></p>
                <label for="">Fecha alta</label>
                <p><?php echo $row['fechaAlta'];?></p>
                <?php if ($_SESSION['idTipoUsuario']==1):?>
                <?php endif;?>
                <?php if ($_SESSION['idTipoUsuario']==2):?>
                    <label for="">Área</label>
                    <p><?php echo $row['area'];?></p>
                <?php endif; ?>
                <?php if ($_SESSION['idTipoUsuario']==3):?>
                    <label for="">Departamento</label>
                    <p><?php echo $row['departamento'];?></p>
                <?php endif;?>
                <?php if ($_SESSION['idTipoUsuario']==4):?>
                    <label for="">Carrera</label>
                    <p><?php echo $row['carrera'];?></p>
                    <label for="">Periodo</label>
                    <p><?php echo $row['periodo'];?></p>
                <?php endif;?>
                <?php if ($_SESSION['idTipoUsuario']==5):?>
                    <label for="">Carrera</label>
                    <p><?php echo $row['carrera'];?></p>
                    <label for="">Semestre</label>
                    <p><?php echo $row['semestre'];?></p>
                    <label for="">Tutor</label>
                    <p><?php echo $row['fidTutor'];?></p>
                <?php endif;?>
                <?php endforeach; ?>
          </div>
    </div>
</div>