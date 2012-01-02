<form method="POST" action="controllers/register.php" class="session">
    <div class="notice">Do you already have an account? <a href="./?page=login">Enter here</a></div>
    <?php
        if( isset( $_GET[ 'error' ] ) ){
            ?><div class="error">Δοκιμάστε ξανά.</div><?php
        }
    ?>
    <div>
        <label>Username:</label>
        <input type="text" name="username" />
    </div>
    <div>
        <label>Password:</label>
        <input type="password" name="password" />
    </div>
    <div>
        <label>Email:</label>
        <input type="text" name="email" />
    </div>
    <div>
        <input type="submit" value="Signup!" />
    </div>
    <div>
        <input type="hidden" name="page" value="doregister" />
    </div>
</form>