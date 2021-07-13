<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2 class="text-center">LOGIN</h2>
        <hr>
        <form class="user" method="POST" action="<?=base_url()?>index.php/login/aksi_login">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda">
            </div><br>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda">
            </div><br>

            <button type="submit" class="btn btn-primary">
                <a href="" style="color: white;">Submit</a>
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