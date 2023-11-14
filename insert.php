<html>
    <head>
        <title> insert page </title>
</head>
<body>
    <center>
        <?php
        $user = 'root'; //username
        $pass = ''; //password= empty
        $db ='itsoft';// database name
        
        $db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");

        $conn=mysqli_connect("localhost","root", "", "itsoft");
        //check connection
        if($conn==false)
        {
            die("ERROR: could not connect." .mysqli_connect_error());
        }
        //taking  all 5 value form the form data (input)
        $first_name=$_REQUEST['first_name'];
        $last_name=$_REQUEST['last_name'];
        $dob=$_REQUEST['dob'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $comform_pass=$_REQUEST['comform_pass'];
        $email=$_REQUEST['email'];

        //performing insert query exection
        //here our table name form
        $sql="INSERT INTO students VALUES('$first_name', '$last_name', '$dob', '$username', '$password', '$comform_pass', '$email')";
        if(mysqli_query($conn, $sql)){
            echo "<h3> Now You can Login with username & password."."please browse your localhost php my admin</h3>";
        
        }
        else{
            echo"ERROR:Hush! sorry $sql.".mysqli_error($conn);
        }
        //close connection
        mysqli_close($conn)
        ?>
        <a href="login.php">Login</a>
    </center>
    </body>
    </html>