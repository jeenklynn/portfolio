<div class="content-box">

    <form action="../auth.php" method="post">

    <h2>LOGIN</h2>

    <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

    <?php } ?>

    <label>User Name</label>

    <input class="input" type="text" name="username" placeholder="Username"><br>

    <label>Password</label>

    <input type="password" name="password" placeholder="Password"><br> 

    <button type="submit">Login</button>

    </form>

</div>