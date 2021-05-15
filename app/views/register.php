<?php
    require_once 'header.php';

   if(isset($this->notice['success'])){
        echo '<div class="alert alert-success" role="alert">';
            echo $this->notice["success"];
        echo '</div>';
   }
?>
<h1>Register Now</h1>

<form action="" method="post">
    <label for="name">Name</label><br>
    <input type="text" name="name" id="name" required> <br><br>

    <label for="email">Email</label><br>
    <input type="email" name="email" id="email" required> <br><br>
   
    <label for="phone">Phone No.</label><br>
    <input type="text" name="phone" id="phone"> <br><br>

    <label for="password" >Password</label><br>
    <input type="password" name="password" id="password" required><br> <br>
  
    <label for="confirmPassword">Confirm Password</label><br>
    <input type="password" name="confirmPassword" id="confirmPassword" required> <br><br>

    <input type="submit" name="register" value="Register">
</form>

<?php
    require_once 'header.php';
?>