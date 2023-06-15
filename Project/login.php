<?php
    require_once 'Includes/header.php';
    ?>
    
    <div>
<h1>Login</h1>
<p>No Account? <a href="register.php">Register here!</a></p>

<form action="" method="post">
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="PassWord">
    <button type="submit" name="submit">Login</button>
</form>
</div>
<?php
    require_once 'Includes/footer.php';
    ?>