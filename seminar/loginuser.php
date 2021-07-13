<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script>
        function login() {
            username = document.getElementById("username").value;
            password = document.getElementById("password").value;
    
            if (username == "" || password == "") {
                alert("Username / Password Tidak Boleh Kosong");
                return false;
            }
            else if (password.length < 8) {
                alert("Password Kurang dari 8");
                return false;
            }
            else if (username == "Andrean" & password == "qwertyuiop") {
                window.location = "chat.html";
                return false;
            }else{
                alert("Username / Password anda salah");
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h2 class="text-center">LOGIN</h2>
        <hr>
        <form action="">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="" class="form-control" placeholder="Masukan Username Anda">
            </div><br>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="" class="form-control" placeholder="Masukan Password Anda">
            </div><br>

            <button type="submit" class="btn btn-primary" onclick="return login()">
                <a href="landingpage2.html" style="color: white;">Submit</a>
            </button>
            <button type="submit" class="btn btn-danger">Cancel</button>
            
        </form>
    </div>
 





    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>

<style>
    .container{
        width: 30%;
        margin-top: 9%;
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.4);
        padding: 40px;
    }
    
    button{
        width: 48%;
    }
</style>