<html>

<head>
    <title>Registration</title>
</head>

<body>
    <?php
    if (isset($status)) {
        echo $status;
    }
    ?>
    <h2>Registration Form</h2>
    <form action="<?= base_url('register/savedata') ?>" method="post">
        <table cellspacing="20">
            <tr>
                <td>Empolyee Name</td>
                <td><input type="text" name="employee_name"></td>
            </tr>
            <tr>
                <td>Email Id</td>
                <td><input type="email" name="employee_email"></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="number" name="employee_phone_number"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Register"></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="<?= base_url('register/fetchdata') ?>">View Record</a></td>
            </tr>
        </table>
    </form>
</body>

</html>