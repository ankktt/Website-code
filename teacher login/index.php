<?php  
   if(isset($_POST["submit"])){
       $username= $_POST["username"];
       $password= $_POST["pass"];
       if(strlen($password)<=8){
           echo "<span style='color:red;'>Password should be more then 8 digit</span>";
       }
          
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hello.php" method="POST"> 
        Username: <input type="text" name="username"><br></br>
        Password: <input type="password" name="pass"><br></br>
        <input type="submit" value="submit" name="submit">
     </form>   
</body>
</html>