<?php include("index.html")
?>
<body>
    <div style="height:900px;" class="overrall">
    <div style="height:300px;" class="content">
        <p> This app consists of 2 sections namely<br></p>
        <ul>
            <li> Driver Login </li>
            <li> Student Login </li>
        </ul>
        <h4>Driver Login</h4>
        <p>The Driver Login is where the driver of the bus needs to input his details.<br>
        The app retrieves his real-time location and displays it in the map for the respective route number of the bus.
        </p>
        <h4>Student Login</h4>
        <p>The Student Login is where the user or the student enters the Route Number of the bus.<br>
        The app matches the student's Route Number with the Route Number of the Driver and displays his location in 
        <br>realtime thereby enabling the student to track his/her college bus in real time.
        </p>
    </div>
    <div style="margin-left:auto; margin-right:auto; width:1000px; height:500px" class="about">
        <div style="float:left; margin-left:100px;" class="im4">
            <img src="Images\login.jpeg" height="500px" width="250px" />
        </div>
        <div style="float:right; margin-right:100px;" class="im5">
            <img src="Images\student.jpeg" height="500px" width="250px" />
        </div>
    </div>
</div>
</body>

<?php include("Foot.html")
?>