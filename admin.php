<?php



if (isset($_POST['sub'])) {
$t1= $_POST['adminname'];
$t2= $_POST['pass'];



if(empty($t1) || empty($t2)){
  echo "<script>alert('FIELD REQUIRED')</script>";
  
}
else{
  if($t1=="Hut" && $t2==1601){
  header("Location: welcome.php");
  // echo "<script>alert('WELCOME CHIEF')</script>";
  
}
else{
  echo "<script>alert('INCORRECT')</script>";

}
}


}




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="css/admin.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
      integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm"
      crossorigin="anonymous"
    />
  </head>
  <link
    rel="stylesheet"
    type="text/css"
    href="//fonts.googleapis.com/css?family=Aguafina+Script"
  />
  <body>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/2ec17347d7.js"
      crossorigin="anonymous"
    ></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="admin">
     
<i class="fas fa-2x  fa-user-large" ></i>
      <h2 class="hed">ADMIN</h2>
    </div>

    <div class="all col-md-4 col-md-offset-4" id="login">
      <section id="inner-wrapper" class="login">
        <article>
          <form method="post">
            <div class="form-group">
              <div class="input-group">
                
                <input
                  type="text"
                  class="form-control"
                  placeholder="Admin Name"
                  name="adminname" 
                />
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                  name="pass"
                />
              </div>
            </div>
            <button type="submit" class="btn btn-success btn-block" name="sub">
              Login
            </button>
          </form>
        </article>
      </section>
    </div>
  </body>
</html>
