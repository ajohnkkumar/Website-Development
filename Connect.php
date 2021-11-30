<?php
    $Name=$_POST["name"];
    $Yr=$_POST["year"];
    $Dob=$_POST["dob"];
    $Gen=$_POST["gen"];
    $mail=$_POST["mail"];
    $pass=$_POST["pass"];
    $dept=$_POST["dep"];

    $con=mysql_connect("localhost","root","");
    mysql_select_db("Intern");
    mysql_query("insert into collegebus(Name, Year, Dob, Gen, Mail, Password, Dept) values('$Name', '$Yr', '$Dob', '$Gen', '$mail', '$pass', '$dept')") ;
    echo("Registered Successfully!");
    include("Register.php");
    mysql_close($con);
?>