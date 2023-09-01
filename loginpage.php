<?php
    include('header.php');

    if(isset($_POST['submit'])) {
        if($_POST['user'] == 'Luca' && $_POST['pw'] == '123') {
            echo 'hallo';
        }
        else {
            echo 'bye';
        }
    }
?>
<body>
    <?php   
    include('navigation.php');
    ?>
    <div>
        <form action="#" method="POST" class="login-form">
            <h1>LOGIN</h1>
            <p id="staff">staff only</p>
            <input type="text" name="user" placeholder="username" required autofocus>
            <input type="password" name="pw" placeholder="password" required>
            <input type="submit" name="submit">
            <p id="no-account">
                dont have an account?
                <br>
                Request one <a href="user-req.php">here</a>
            </p>
        </form>
    </div>
</body>
</html>