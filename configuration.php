<?php
if(isset($_POST['submit'])){

	$server=$_POST["server"];
	$user=$_POST["user"];
    $pass=$_POST["password"];
    $db=$_POST["database"];
    $filename="config/db_config.php";
    $file=fopen($filename, "w+");
    if($file == false){
    	echo("Error in opening new file");
    	exit();
    }
    fwrite($file,'$connection'."=mysqli_connect(".$server.",".$user.",".$pass.",".$db.");");
    session_start();

    $_SESSION['configdone']="confoguration is set";

    fclose($file);



}

?>
<!DOCTYPE html>
<html>
<head>

	<title></title>
	

	<script>
		const time

	


	</script>
</head>

<body>
	

	<div class="container my-5">
  <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="form-group">
        <label>SERVER</label>
        <input type="text" class="form-control"  name="server" autocomplete="off">
        </div>

        <div class="form-group">
        <label >USER</label>
        <input type="text" class="form-control"  name="user"  autocomplete="off">
        </div>

        <label>PASSWORD</label>
        <input type="password" class="form-control"  name="password" autocomplete="off">
        </div>

        <div class="form-group">
        <label >DATABASE</label>
        <input type="text" class="form-control"  name="database" autocomplete="off">
        </div>


        <div class="card-footer">
        <button type="submit" name="submit" class="btn btn-primary w-20">Submit</button>
        </div>

</form>
</body>
</html>
