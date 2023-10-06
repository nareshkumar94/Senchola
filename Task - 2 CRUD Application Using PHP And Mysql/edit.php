<?php
$connection = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($connection, "crud_db");

$edit = $_GET['edit'];

$sql = "select * from student where id = '$edit'";

$run = mysqli_query($connection, $sql);


while ($row = mysqli_fetch_array($run)) {
    $uid = $row['Id'];
    $name = $row['Name'];
    $address = $row['Address'];
    $phone = $row['Phone_Number'];
}


?>



<?php
$connection = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($connection, "crud_db");


if (isset($_POST['submit'])) {
    $edit = $_GET['edit'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "update student set name= '$name', address ='$address', phone_number = '$phone' where id = '$edit'";

    if (mysqli_query($connection, $sql)) {
        echo '<script>location.replace("index.php")</script>';
    } else {
        echo "Some Error has occured" . $connection->error;
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h1>Student CRUD Application</h1>
                    </div>
                    <div class="card-body">
                        <form action="add.php" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $name; ?>">
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter Your Address" value="<?php echo $address; ?>">
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number" value="<?php echo $phone; ?>">
                            </div>
                            <br>

                            <input type="submit" class="btn btn-primary" name="submit" value="Edit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div>
</body>

</html>