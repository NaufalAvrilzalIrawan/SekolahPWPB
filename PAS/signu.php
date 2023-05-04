<html>
<head>
    <title>Signup</title>

    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<h1>Sign Up</h1>
<form method="POST" id="formd">
<table>
    <tr>
        <td>Username</td>
        <td> : </td>
        <td><input type="text" id="user" name="user"></input></td>
    </tr>
    <tr>
        <td>Password</td>
        <td> : </td>
        <td><input type="password"  id="pass" name="pass"></input></td>
    </tr>
    <tr>
        <td></td>
    </tr>
</table>
</form>
<button type="button" onclick="d()" id="daftar">Daftar</button>

<script>
    function d() {
        var fdv = $("#formd").serialize();


    // menggunakan ajax untuk mengirim dan menerima data dari server
        $.ajax({
            type : "POST",
            dataType : "html",
            url : "input.php",
            data : fdv,
            success : function(data) {
                $("#berhasil").html(data);
            }
        });
    };
</script>
</body>
</html>