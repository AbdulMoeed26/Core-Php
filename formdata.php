<?php
include('./template/header.php');

if(isset($_POST['btnregister']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    echo "name: $name <br/>email: $email<br/>Password: $password<br/>DOB: $dob<br/>gender: $gender<br/>Country: $country ";

}


?>
    
<div class="container">
    <div class="row">
        <div class="col-8">
            <form  class="form-vertical" action="" method = "Request">
                <div class="mb-3">
                    <label for="name" class = "form-label">Enter Name</label>
                    <input type="text" name = "name" class = "form-control" id = "name">
                </div>
                <div class="mb-3">
                    <label for="">Enter Email</label>
                    <input type="email" name = "email" class = "form-control" >
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" name = "password" class = "form-control">
                </div>
                <div class="mb-3">
                    <label for="">Date of birth</label>
                    <input type="date" name = "dob" class = "form-control">
                </div>
                <div class="mb-3">
                <label for="" class = "form-label">Gender</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" checked name="gender" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="0">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class = "form-label">Select Country</label>
                    <select class = "form-select" name="country" id="">
                        <option value="PAK">Pakistan</option>
                        <option value="IND">India</option>
                        <option value="CN">China</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class = "form-label">Upload Image</label>
                    <input type="file" class = "form-control" name = "myimage" >
                </div>
                <div class="mb-3">
                    <input type="submit" name = "btnregister" class = "btn btn-success form-control" >
                </div>
            </form>
        </div>
    </div>
</div>



<?php
include('./template/footer.php');
?>
    



