<?php
session_start();
$_SESSION['eno']=$_POST['eno'];
$_SESSION['name']=$_POST['name'];
$_SESSION['addr']=$_POST['addr'];
echo"Hello ".$_SESSION['name']." enter LIC details<br>";
?>
<form method="POST" action="Display.php">
Plan No:<input type="text" name="pno"><br>
Plan Name :<input type="text" name="pname"><br>
Premium :<input type="text" name="pre"><br>
<input type=submit value=Display>
</form>
<?php
    session_start();
            echo"<Center>"."<b>Employee Details</b>"."<br>";
            echo"Emp No:".$_SESSION['eno']."<br>";
            echo"Emp name:".$_SESSION['name']."<br>";
            echo"Address:".$_SESSION['addr']."<br>"."<hr>";
            echo"<b>LIC Plan Details:</b>"."<br>";
            echo"Plan No:".$_REQUEST['pno']."<br>";
            echo"Plan Name:".$_REQUEST['pname']."<br>";
            echo"Premium:".$_REQUEST['pre']."<br>"."<hr>";

 ?>
