<?php
    include('header.php');
    include('db.php');
    include('navigation.php');
?>
<body>
    <form action="#" method="POST" class="signup-form">
        <h1>SIGN UP A USER</h1>
        <p>if there is a request for a user account :&rpar;</p>
        <input type="email" name="email" placeholder="email" required>
        <input type="text" name="user" placeholder="username" required autofocus>
        <input type="password" name="pw" placeholder="password" required>
        <input type="password" name="pw-rep" placeholder="repeat password" required>
        <input type="submit" name="submit-user">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit-user'])) {
        $stmt = $DB->prepare('SELECT `email`, `username` FROM `accounts` WHERE `email` = ? OR `username` = ?');
        $stmt->bindParam(1, $_POST['email']);
        $stmt->bindParam(2, $_POST['user']);
        $stmt->execute();
        $row = $stmt->fetch();

        if($_POST['user'] != $row['username']) {
            $stmt = $DB->prepare('INSERT INTO `accounts` (`email`, `username`, `password`) VALUES (?, ?, ?) ');
            $stmt->bindParam(1, $_POST['email']);
            $stmt->bindParam(2, $_POST['user']);
            $stmt->bindParam(3, $_POST['pw']);
            $stmt->execute();
        }
    }
?>

<!-- 
    - die Emial entneheme ich aus der Anfrage die ich über das Formular dann bekomme
    - Für Username wird es in dem Formular ein Feld geben was deirekt prüft ob der eingegeben Wert bereits vergeben ist und wenn 
        nicht, dann überneheme ich es - wenn es vergeben ist, kommt eine meldung an den User
    - user kriegt einmalieges passwort und muss dies dann bei der erstanmeldung ändern, dazu lege ich noch richtlinien fest 
-->
