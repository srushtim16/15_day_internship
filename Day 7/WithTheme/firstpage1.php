
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>TOUR PLANNER</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './themepart/menu.php';
include './themepart/logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
            <div><img src="TOUR image.jpg" width="900" height="350" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to Registration Form</a></h2>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                            <?php
$connection = mysqli_connect("localhost", "root", "", "db_internship");
        
if($_POST){
    
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    $dob = $_POST['txt4'];
    $email = $_POST['txt5'];
    $password = $_POST['txt6'];
    $address = $_POST['txt7'];
    $area = $_POST['txt8'];
    $bloodgroup = $_POST['txt9'];
    
    $q = mysqli_query($connection, "insert into tbl_student (st_name,st_gender,st_dob,_email,st_mobile,st_address,st_area,st_password,st_bloodgroup) "
            . "values('{$name}','{$gender}','{$mobile}','{$dob}','{$email}','{$address}','{$password}','{$area}','{$bloodgroup}')") or die(mysqli_error($connection));
    if($q){
        echo"<script>alter('Record Added')</script>";
    }
    
 }

?>

<html>
    <body><center>
        <h1>Student Registration Form</h1>
        <form method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="number" name="txt1"/></br></td>
                </tr>
                <tr>
                   <td> Gender:</td>
                    <td><select name="txt2">
                <option>male</option>
                <option>female</option>
            </select></br></td>
                </tr> 
                <tr>
                    <td>Mobile No :</td>
                    <td><input type="number" name="txt3"/></br></td>
                </tr>
                <tr>
                    <td>D.O.B :</td>
                    <td><input type="date" name="txt4"/></br></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="email" name="txt5"/></br></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="number" name="txt6"/></br></td>
                </tr>
                <tr>
                    <td>Address :</td>
                    <td><input type="text" name="txt7"/></br></td>
                </tr>
                 <tr>
                   <td> Area:</td>
                    <td><select name="txt8">
                <option>Ahmadabad</option>
                <option>Baroda</option>
                <option>Surat</option>
                <option>Gandhinagar</option>
                <option>Nadiad</option>
                </select></br></td>
                </tr>
                <tr>
                   <td> Bloodgroup:</td>
                    <td><select name="txt9">
                <option>A-</option>
                <option>A+</option>
                <option>B-</option>
                <option>B+</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>O-</option>
                <option>O+</option>
                </select></br></td>
                </tr> 
                <tr>
                <td><input type="Submit" value="Submit"/></td>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>

        <a href='table3.php'>Display Record</a>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
                <?php
                    include './themepart/sidebar.php';
                 ?>
				<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
        include './themepart/footer.php';
?>
<!-- end #footer -->
</body>
</html>
