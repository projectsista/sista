<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
  <div class="container">
    <br>  
    <hr>  

    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
      <h4 class="card-title mt-3 text-center">Create Account</h4>
      <p class="text-center">Get started with your free account</p>
      <p>
        <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
      </p>
      <p class="divider-text">
            <span class="bg-light">OR</span>
        </p>
      <form>
      <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
            <input name="" class="form-control" placeholder="Full name" type="text">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
            <input name="" class="form-control" placeholder="Email address" type="email">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
        <select class="custom-select" style="max-width: 120px;">
            <option selected="">+62</option>
            <option value="1">+972</option>
            <option value="2">+198</option>
            <option value="3">+701</option>
        </select>
          <input name="" class="form-control" placeholder="Phone number" type="text">
      </div> <!-- form-group end.// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
            <input class="form-control" placeholder="Create password" type="password">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
            <input class="form-control" placeholder="Repeat password" type="password">
        </div> <!-- form-group// -->                                      
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
        </div> <!-- form-group// -->     
        <p class="text-center">Have an account? <a href="loginuser.html">Log In</a> </p>
        <p class="text-center">Are you admin? <a href="landingpage3.html">Admin</a> </p>          
    </form>
    </article>

    </div> <!-- card.// -->
    
    </div> 
    <!--container end.//-->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>

<style>
  .btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}
</style>