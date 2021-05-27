

<html>
    <body><center>
        <h1>Registration Form</h1>
        <form action="registrationform2.php" method="POST">
            <table>
                <tr>
                    <td>First name</td>
                    <td><input type="text" name="txt1"/></td>
                </tr>
                <tr>
                    <td>Second name</td>
                    <td><input type="text" name="txt2"/></td>
                </tr>
                <tr>
                    <td>Age :</td>
                    <td><input type="number" name="txt3"/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="txt4"/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="txt5"/></td>
                </tr>
                <tr>
                    <td>D.O.B</td>
                    <td><input type="date" name="txt6"/></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="txt7" value="Male">male
                        <input type="radio" name="txt7" value="Female">female
                        <input type="radio" name="txt7" value="Other">other</td>
                </tr>
                <tr>
                    <td><input type="Submit" value="submit" /></td>
                    <td><input type="Reset" /></td>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>
