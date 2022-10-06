<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio01</title>
</head>
<body>
    
    <table width="250">
        <form  action="acceso.php"  method="post">
                <tr> 
                    <td>Usuario:</td>
                    <td><input type="text" name="usr" size="14" maxlength="12"></td>
                </tr>
                <tr>
                    <td>Pasword:</td>
                    <td><input type="password" name="pwd" size="14" maxlength="12"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Validar"></td>
                </tr>
        </form>
    </table>

</body>
</html>