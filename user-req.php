<?php
    include('header.php');
    include('db.php');
?>
<body>
    <?php
        include('navigation.php');
    ?>
    <form action="#" method="POST" class="user-req">
        <h1>Request your Account</h1>
        <input type="email" name="email" placeholder="E-Mail" required autofocus>
        <input type="text" name="user" placeholder="Username" required>
        <input type="password" name="pw" placeholder="Password">
        <input type="password" name="pw-rep" placeholder="repeat Password">
        <input type="submit" name="submit-req">
    </form>
</body>
<?php
        if(isset($_POST['submit-req'])) {
            $stmt = $DB->prepare('SELECT `email`, `username` FROM `accounts` WHERE `username` = ? OR `email` = ?');
            $stmt->bindParam(1, $_POST['user']);
            $stmt->bindParam(2, $_POST['email']);
            $stmt->execute();
            $row = $stmt->fetch();

            if($_POST['user'] != $row['username']) {
                $error = '<div class="success">You requested your Account successfully, you will get a response to your E-Mail once we have updates on your case</div>"';
            }
            else {
                $error = '<div class="error">The account already exists!</div>"';
            }
        }
    ?>
</html