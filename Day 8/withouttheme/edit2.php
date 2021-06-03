<?php
$connection = mysqli_connect("localhost","root","","db_internship");
if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:table2.php");
}
$editid = $_GET['id'];

$editq = mysqli_query($connection,"select * from tbl_student where st_id='{$editid}'") or die(mysqli_error($connection));

$editdata = mysqli_fetch_array($editq);

if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $dob = $_POST['txt3'];
    $email = $_POST['txt4'];
    $password = $_POST['txt5'];
    $moblie = $_POST['txt6'];
    $address = $_POST['txt7'];
    $area = $_POST['txt8'];
    $bloodgroup = $_POST['txt9'];
    
$uq = mysqli_query ($connection,"update tbl_student set st_name='{$txt1}',st_gender='{$txt2}',st_dob='{$txt3},st_email='{$txt4},st_password='{$txt5},st_mobile='{$txt6},st_address='{$txt7},st_area='{$txt8},st_bloodgroup='{$txt9}' where user_id='{$editid}'") or die(mysqli_error($connection));
if($uq){
    echo "<script>alert{'Record Updated'};window.location='table2.php';</script>";
}
}
?>

<html>
    <body>
        <center>
        <h1>Student Registration Form</h1>
        <form method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" value="<?php echo $editdata['st_name']; ?>" name="txt1"/></br></td>
                </tr>
                <tr>
                   <td> Gender:</td>
                    <td> Male<input type="radio"
                    <?php if($editdata['st_gender']=="male"){echo "checked";}?>
                                value="male" name="txt2"/>
                      Female<input type="radio"
                    <?php if($editdata['st_gender']=="female"){echo "checked";}?>
                                value="female" name="txt2"/>
             </br>
                </tr> 
                <tr>
                    <td>Mobile No :</td>
                    <td><input type="number" value="<?php echo $editdata['st_mobile'];?>" name="txt6"/></br></td>
                </tr>
                <tr>
                    <td>D.O.B :</td>
                    <td><input type="number" value="<?php echo $editdata['st_dob'];?>" name="txt3"/></br></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="email" value="<?php echo $editdata['st_email'];?>" name="txt4"/></br></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="number" value="<?php echo $editdata['st_password'];?>" name="txt5"/></br></td>
                </tr>
                <tr>
                    <td>Address :</td>
                    <td><input type="text" value="<?php echo $editdata['st_address'];?>" name="txt7"/></br></td>
                </tr>
                 <tr>
                   <td> Area:</td>
                    <td>Ahmadabad<input type="radio" <?php if($editdata['st_area']=="Ahmadabad") {echo "checked";} ?> value="Ahmadabad" name="txt8"/>
                        Surat<input type="radio" <?php if($editdata['st_area']=="Surat") {echo "checked";} ?> value="Surat" name="txt8"/>
                        Gandhinagar<input type="radio" <?php if($editdata['st_area']=="Gandhinagar") {echo "checked";} ?> value="Gandhinagar" name="txt8"/>
                        Nadiyad<input type="radio" <?php if($editdata['st_area']=="Nadiyad") {echo "checked";} ?> value="Nadiyad" name="txt8"/>
                        Baroda<input type="radio" <?php if($editdata['st_area']=="Baroda") {echo "checked";} ?> value="Baroda" name="txt8"/>
                        </br></td>
                </tr>
                <tr>
                   <td> Bloodgroup:</td>
                    <td>A- <input type="checkbox" <?php if ($editdata['st_bloodgroup']=='A-'){ echo "checked";}?> name="txt9" value="A-">
                        A+ <input type="checkbox" <?php if ($editdata['st_bloodgroup']=='A+'){ echo "checked";}?> name="txt9" value="A+">
                        B- <input type="checkbox" <?php if ($editdata['st_bloodgroup']=='B-'){ echo "checked";}?> name="txt9" value="B-">    
                        B+ <input type="checkbox" <?php if ($editdata['st_bloodgroup']=='B+'){ echo "checked";}?> name="txt9" value="B+">
                        AB- <input type="checkbox" <?php if ($editdata['st_bloodgroup']=='AB-'){ echo "checked";}?> name="txt9" value="AB-">
                        AB+ <input type="checkbox" <?php if ($editdata['st_bloodgroup']=='AB+'){ echo "checked";}?> name="txt9" value="AB+">
                        O- <input type="checkbox" <?php if ($editdata['st_bloodgroup']=='O-'){ echo "checked";}?> name="txt9" value="O-">
                        O+ <input type="checkbox" <?php if ($editdata['st_bloodgroup']=='O+'){ echo "checked";}?> name="txt9" value="O+">
                </br></td>
                </tr> 
                <tr>
                <td><input type="Submit" value="Submit"/></td>
                </tr>
            </table>
        </form>
        </center>   
</body>
</html>
<a href='table2.php'>Display Record</a>