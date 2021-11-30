<?php include("index.html")
?>
<body>
<div class="register">
<form action="Connect.php" method="post">


<br><br>
Name:
<input type="text" size="30" placeholder="enter your name" name="name" requied />
<br><br>
Year:
<input type="number" name="year" />
<br><br>
Dob:
<input type="date" name="dob" />
<br><br>
Gender:
<input type="radio" name="gen" value="male" />Male
<input type="radio" name="gen" value="female" />Female
<br><br>
Email:
<input type="email" size="30" name="mail" />
<br><br>
Password:
<input type="password" name="pass" min="4" maxlength="8" />
<br><br>
Dept:

<select name="dep">
    
<option value=""></option>
<option value="cse">CSE</option>
<option value="ece">ECE</option>
<option value="it">IT</option>
<option value="eee">EEE</option>
<option value="mech">MECH</option>
</select>
<br><br>
<input type="submit" value="Register" />

</form>
</div>
</body>
<?php include("Foot.html")
?>