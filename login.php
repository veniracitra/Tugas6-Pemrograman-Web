<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Login</title>
</head>
<body>
    <form method="POST" action="loginAct.php">
        <table width="400" align="center" cellpadding="2" cellspacing="2" >
            <tr>
                <td width="140"> Nama </td>
                <td> <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="140"> Email </td>
                <td> <input type="text" name="email"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnLogin" value="Login">
                    <input type="reset" name="btnReset" value="Reset">
                </td>
            </tr>
        </table>
    </form>    
</body>
</html>
