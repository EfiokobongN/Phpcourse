<?php
    require_once 'Includes/header.php';
    ?>
<div>
<h1 class="reg">Register</h1>


<form action="includes/register-inc.php" method="post">
<input type="text" name="username" placeholder="Username">
<input type="text" name="email" placeholder="E-mail">
<input type="password" name="password" placeholder="PassWord">
<input type="password" name="confirmPassword" placeholder="Confirm PassWord">
    <button type="submit" name="submit" class="btn">Register</button>
</form>
<p class="text">Alredy Have An Account? <a href="login.php">Login!</a></p>
</div>
<?php
    require_once 'Includes/footer.php';
    ?>