    <?php
    session_start();
    include('connection.php');
    $mname=$_POST['mname'];
    $contact=$_POST['contact'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    mysql_query("INSERT INTO member(gender, contact, username, password)VALUES('$mname', '$contact', '$username', '$password')");
    header("location: index.php?remarks=success");
    mysql_close($con);
    ?>
