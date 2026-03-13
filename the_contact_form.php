<?php

$name="";
$email="";
$message="";
$error="";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $name = $_POST['name'];
}

if(strpos($email,"@")==false){
$error = "invalid email";
echo $error;
}else {
    echo"form submitted successfuly";
    $name=" ";
    $message="";
    $email="";
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"if>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valid email</title>
</head>
<body>
    <form method="post">
  name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
  email: <input type="text" name="email" value="<?php echo $email; ?>"><?php if($error): ?>
    <?php endif; ?><br>
  <label>message</label>
  <textarea name ="message"><?php echo $message; ?></textarea><br>
<button type="submit">Send</button>
<span style="color:red;"><?php echo $message; ?></span>
</form>
</body>
</html>
  
