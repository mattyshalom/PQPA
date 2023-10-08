<?php
require_once ('config.php');
?>
<?php
if (isset($_POST)){
    $name   = $_POST['name'];
    $email   = $_POST['email'];
    $username   = $_POST['username'];
    $password   = sha1($_POST['password']);

    $sql = "INSERT INTO signup_users (name, email, username, password) VALUES (?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$name, $email, $username, $password]);
    if ($result){
        echo 'Registration Successful.';
    }else{
        echo 'There were errors while saving the data.';
    }
}else{
    echo 'No data';
}
?>