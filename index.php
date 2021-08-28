  <?php 
  $insert=false;
  if(isset($_POST['name'])){
  //set connection variables
 $server="localhost";
 $username="root";
 $password="";
//create database connection
 $con = mysqli_connect($server, $username,$password);

 //check valid connection
 if(!$con){
   die("connection to this database failed due to". mysqli_connect_error());

 }

 //collect all post variables

 $name=$_POST['name'];
 $email=$_POST['email'];
 $phoneno=$_POST['phoneno'];
 $age=$_POST['age'];
 $gender=$_POST['gender'];
$sql=" INSERT INTO `signedin2`.`registered` (`SlNo.`, `Name`, `email`, `phoneno`, `gender`,`age`, `time`) 
VALUES ('1', '$name', '$email', '$phoneno', '$gender','$age', current_timestamp());";
//echo $sql;


//query execution
 if($con->query($sql)==true){
 // echo "successfully inserted";

  //successful insert
  $insert=true;
 }
 else{
   echo "ERROR:$sql <br> $con->error";
 }

 //close database connection
$con->close();
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href='styles.css' />
</head>

<body>
<img class="backimg" src="images/backimg.jpg" />
    <div class="mainbox">
        <div class="text">
            <br>
            <h2>
                WELCOME TO OUR REGISTRATION WEBSITE.

            </h2>
            <p>
                <br>
                Sign Up for <span style="font-weight: bold; ">free!</span>
            </p>
            <form action="index.php" method="post">
                <p><input type="text" name="name" size="50" class="options style= " id="name"
                        placeholder="Enter Your Name" required /></p>
                <p><input type="email" name="email" size="50" class="options " id="email" placeholder="abc@example.com"
                        required /></p>
                <p><input type="number" name="phoneno"  class="options " id="phoneno"
                        placeholder="Enter Your Phone no" required /></p>
                <p><input type="number" name="age" class="options " id="age" placeholder="Enter Your age"
                        required /></p>
                <p><select name="gender" class="options" id="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Prefer Not to Say">Prefer Not to Say</option>
                            <option value="Others">Others</option>
                         
                          </select>
                </p>
                <button class="button">SIGN UP</button>
            </form>
        </div>
      
    </div>
</body>
</html>