<html>

<head>
    <title>Displaying Records</title>
    <style>
        .result,
        .result td,
        .result th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            margin: auto;
            background-color: lightblue;
        }

        .result th {
            background-color: lightskyblue;
        }
    </style>
</head>

<body>
    <a href="<?= base_url('register/employee') ?>">Go to registeration Form</a>

    <?php
    if (isset($data)) {
    ?>
        <form action="<?= base_url('register/update') ?>" method="post">
            <table cellspacing="20">
                <tr>
                    <td>Id</td>
                    <td><input name="employee_id" value="<?= $data[0]->id ?>" readonly=""></td>
                </tr>
                <tr>
                    <td>Employee Name</td>
                    <td><input name="name" value="<?= $data[0]->employee_name ?>"></td>
                </tr>
                <tr>
                    <td>Email Id</td>
                    <td><input name="email" value="<?= $data[0]->employee_email ?>"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input name="phone_number" value="<?= $data[0]->employee_phone_number ?>"></td>
                </tr>
                <tr>
                    <td><button>Update</button></td>
                </tr>
            </table>
        </form>


    <?php
    } else {
    ?>
        <table class="result">
            <tr>
                <th>Action</th>
                <th>ID</th>
                <th>Employee Name</th>
                <th>Employee Email</th>
                <th>Employee Phone Number</th>
            </tr>
            <?php
            if (isset($table)) {
                foreach ($table as $row) {
            ?>
                    <tr>
                        <td><a href="<?= base_url('register/edit/' . $row->id) ?>">Edit</a></td>
                        <td><?= $row->id ?></td>
                        <td><?= $row->employee_name ?></td>
                        <td><?= $row->employee_email ?></td>
                        <td><?= $row->employee_phone_number ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    <?php
    }
    ?>
</body>

</html>