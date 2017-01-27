<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Modelo-vista-controlador</title>
</head>
<body>
    <h1>Login</h1>
    <table border="1">
        <tr>
            <td><strong>Usuario logeado</strong></td>
        </tr>
        <?php
        if (count($pd)>0) {
               echo "usuario logeado ".$pd[0]["usuario"];
            }else{
                header("location:../");
            }
        ?>
    </table>
</body>
</html>
