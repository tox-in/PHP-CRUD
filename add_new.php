<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email  = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `crud`(`first_name`, `last_name`, `email`, `gender`) VALUES ('$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn,$sql);

    if($result) {
        header("Location: index.php?msg=New record created successfully");
    }
    else {
        echo "Failed:" .mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <Bootstrap> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      
    <!-- <Fontawesome> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP CRUD Application</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 " style="background-color:deepskyblue">
        PHP complete crud Application
    </nav>
     <div class="container">
        <div class="text-center mb-4">
             <h3>Add New User</h3>
             <p class="text-muted">
                Fill the form to add new user
             </p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px">
            <div class="row mb-3">
                <div class="col">
                    <label for="form-label">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Albert">
                </div>
            <div class="column">
                    <label for="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Einstein">
                </div>
                </div>
                <div class="mb-3">
                <label for="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="aeinstein@gmail.com">
                </div>
                <div class="form-group mb-3">
                <label for="form-label">Gender:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                    <label for="female" class="form-input-label">Female</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">SAVE</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
        </form>
        </div>
     </div>

<!-- <Bootstrap> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>