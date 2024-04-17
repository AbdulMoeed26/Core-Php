<?php 
include('./template/header.php');

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $dsn = "mysql:host=localhost;dbname=testing";
    $username = "root";
    $password = "";
    try
    {
        $con = new PDO($dsn, $username, $password);
        $query = $con->prepare("insert into student (name, email, password, gender, country) values (?, ?, ?, ?, ?) ");
        $query->bindParam(1, $name);
        $query->bindParam(2, $email);
        $query->bindParam(3, $password);
        $query->bindParam(4, $gender); 
        $query->execute();
        echo "Record Inserted";
    }
    catch(PDOException $e)
    {
        echo $e;
    }
}


?>

<div class="container">
    <div class="row my-5">
        <div class="col-7">
            <h1>Registration Form</h1>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gender</label>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Country</label>
                    <select name="country" id="" class="form-control">
                        <option value="1">Pakistan</option>
                        <option value="2">India</option>
                        <option value="3">China</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" name="register" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>



<?php include('./template/footer.php')
?>