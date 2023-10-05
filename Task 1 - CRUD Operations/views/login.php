<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Login Page</h1>
        <form>
            <table cellspacing ="20">
                <tr>
                    <td>Empolyee mail</td>
                    <td><input type="email" name="employee_mail"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name ="employee_phone_number"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Login"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="<?= base_url('register/employee') ?>">New Registeration</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>