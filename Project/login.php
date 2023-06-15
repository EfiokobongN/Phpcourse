<?php
    require_once 'Includes/header.php';
    ?>
    
    <div>
<h1>Login</h1>


<form action="" method="post">
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="PassWord">
    <button type="submit" name="submit">Login</button>
</form>
<p class="text">No Account? <a href="register.php">Register here!</a></p>
</div>
<?php
    require_once 'Includes/footer.php';
    ?>