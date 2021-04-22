<html>
<head>
<title>Halaman Login</title>
    <link href="" rel="stylesheet" type="text/css" />
</head>
<body Onload="document.login.username.focus();">
    <div id="header"></div>
    <div id="content">
        <h2>Login</h2>
        <form name="Login" action="1index.php" method="POST">
            <table>
                <tr><td>Username</td><td> : <input type="text" name="username" require></td></tr>
                <tr><td>Passwoard</td><td> : <input type="passwoard" name="passwoard" require></td></tr>
                <tr><td colspan="2"><input type="submit" value="Login"></td></tr>
            </table>
        </form>
    <div>
    <div id="footer"></div>
</body>
</html>