<!DOCTYPE html>
<html>
    <head>
    <script src="jquery-3.5.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <?php include "koneksi_db.php" ?> 
    </head>
    <body>
        <h2>Login</h2><br>
        <form action="slogin.php" onsubmit="kekosongan()" method="post" name ="flogin" id="flogin">
            Username :<input type="text" id ="un" name="un">
            Password :<input type="password" id ="pw" name="pw">
            <input type =  "submit" id = "btn" value = "Login" /> 
        </form>
        
            <h2>Daftar</h2><br>
            <form method="post" id="fd">
            Username :<input type="text" name="und">
            Password :<input type="password" name="pwd">
            
        </form>
        <button id="tdaf">Daftar</button>
        <script>
            		$("#tdaf").click(function() {
			var fdv = $("#fd").serialize();

		
			$.ajax({
				type: "POST",
				dataType: "html",
				url: "input.php",
				data: fdv,
				success: function(data) {
					$("#sukses").html(data);

				}
			});
		});
        
        </script>
        <script>  
            function kekosongan()  
            {  
                var username=document.flogin.un.value;  
                var password=document.flogin.pw.value;  
                if(username.length=="" && password.length=="") {  
                    alert("Isi dulu username ama passwordnya kntl");  
                    return true;  
                }  
                else  
                {  
                    if(username.length=="") {  
                        alert("username lo kosong cokk");  
                        return true;  
                    }   
                    if (password.length=="") {  
                    alert("euh, password kosong");  
                    return true;  
                    }  
                }                             
            }  
        </script>  


    </body>
</html>