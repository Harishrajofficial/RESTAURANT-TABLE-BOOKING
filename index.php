<?php 
if (isset($_POST['go'])) {
  header("Location: register.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mr HUT</title>

    <!-- css style -->
    <link rel="stylesheet" href="css/MrHUT.css" />


    <!-- Script link -->

    <!-- <script src="log.js"></script> -->

    <!-- Bootstrap -->
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/2ec17347d7.js"
      crossorigin="anonymous"
    ></script>
    
<!-- Script Bootstrap link -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>



    <style>

.banner-image{
        background-image: url("imgs/main.jpg");
        background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
        -webkit-filter: blur(3px);
-moz-filter: blur(3px);
-o-filter: blur(3px);
-ms-filter: blur(3px);
filter: blur(3px);
       } 


.col-lg-6{
  color: white;
  position: absolute;
  top: 100%;
  left: 50%;

}

/* book table */

.book-img{
  position: relative;
  top: 2211px;
  background-image: url("imgs/booktable.jpg");
  background-position: center;
background-repeat: no-repeat;
background-size: cover;
  -webkit-filter: blur(2px);
-moz-filter: blur(2px);
-o-filter: blur(2px);
-ms-filter: blur(2px);
filter: blur(2px);
}

.title {
  position: relative;
  top: 1590px;
  color: white;
  font-size: 5rem;
}

.title1 {
  position: relative;
  top: 1660px;
  color: rgb(15, 22, 24);
  font-size: 4rem;
  font-family: Arial, Helvetica, sans-serif;
}

.btn2{
  position: relative;
  top: 1750px;
  
}
.fas {
    color:white;
}

/* blog */
.btit{
    position: relative;
  top: 50px;
}


/* reviews */
.revtit{
    
    position: relative;
    top:30px;
    height:200px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.rev1 {
  width: 475px;
  height: 400px;
}

.eric {
  width: 474px;
  height: 400px;
}
.rev{
    position: relative;
    top:3000px;
}

/* contact us */
.find {
  position: absolute;
  top: 6650px;
  width: 100%;
  height: 70%;
}
.map {
  position: relative;
  top: 5px;
  width: 500px;
  height: 440px;
}


/* footer */

.footer {
  height: 300px;
  position: absolute;
  top: 6990px;
}
.fcon {
  position: relative;
  top: 130px;
}


    </style>
  </head>

  <body >


    <!-- NAVBAR -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 ">

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a href="#" class="nav-link text-white">Home</a></li>
            <li class="nav-item"><a href="#about" class="nav-link text-white">About Us</a></li>
            <li class="nav-item"><a href="#gallary" class="nav-link text-white">Gallery</a></li>
            <li class="nav-item"><a href="#booktable" class="nav-link text-white">Book-Table</a></li>
          </ul>

          <i>
            <img src="imgs/logo.svg" class="brand-img" alt="" width="100px">
          </i>
        
          <div class="mx-auto"></div> 
          <ul class="navbar-nav ">
            <li class="nav-item"><a href="#blog" class="nav-link text-white">Blog</a></li>
            <li class="nav-item"><a href="#Reviews" class="nav-link text-white">Reviews</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link text-white">Contact Us</a></li>
            <li class="nav-item"><a href="register.php" class="nav-link text-white  btn-primary" >LOGIN</a></li>
         <a href="admin.php"  class="nav-link " ><i class="fas fa-1x  fa-user-large" ></i></a>

          </ul>
        </div>
      
         <button type="button"
         class="navbar-toggler"
         data-bs-targets="#navbarNav"
         data-bs-toggle="collapse"
         aria-controls="navbarNav"
         aria-expanded="false"
         aria-label="Toggle Navbar"
         >
           <span class="navbar-toggler-icon"></span>
         </button>

      </div>
    </nav>

    <!-- Banner image -->

  
    <div class="banner-image w-100 vh-100 ">  </div>
    <div class="bg-text">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Mr Hut</h1>
            <h2 class="display-4 mb-5">Always fresh &amp; Delightful</h2>
            <a class="btn btn-lg btn-primary" href="#gallary">View Our gallary</a>
        </div> 
    </div>
  
        <!--  About Section  -->

        
   <div class="ABTimg bg-dark " id="about">
    <img src="imgs/aboutsection.jpg " alt="">
    <div class="col-lg-6">
      <div class="row justify-content-center">
          <div class="col-sm-8  py-5 my-5 border">
              <h2 class="mb-4 ">About Us</h2>
              <p>“Although the skills aren’t hard to learn, finding the happiness and finding the satisfaction and finding fulfillment in continuously serving somebody else something good to eat, is what makes a really good restaurant.”  <br>The business of feeding people is the most amazing business in the world. Chef and Founder of World Central Kitchen.</p>
              <p><b>“A good restaurant is like a vacation; it transports you, and it becomes a lot more than just about the food.”</b></p>
              <p>There are people with otherwise chaotic and disorganized lives, a certain type of person that’s always found a home in the restaurant business in much the same way that a lot of people find a home in the military.</p>
              <p>There’s the common misconception that restaurants make a lot of money. It’s not true. If you look at maybe the top chef in the world, or at least monetarily, it’s like Wolfgang Puck, but he makes as much money as an average crappy investment banker.</p>
              <p>Find what’s hot, find what’s just opened and then look for the worst review of the week. There is so much to learn from watching a restaurant getting absolutely panned and having a bad experience. Go and see it for yourself. </p>
              <p>You’ve always got to work to your highest ability level. When times are great and restaurants are jamming, that’s when some restaurants get sloppy and take things for granted. Never take things for granted.</p>
              <p>Let’s face it: if you and I have the same capabilities, the same energy, the same staff, if the only thing that’s different between you and me is the products we can get, and I can get a better product than you, I’m going to be a better chef.</p>
      </div>
  </div>
  </div>
  </div>


      <!--  gallary Section  -->

   <div  id="gallary"  class="somespc bg-dark  ">
    <h2 class="section-title">OUR MENU</h2>

   </div>

<!-- set 1 -->


   <div >

    <div >
        <img src="imgs/gallary-1.jpg" alt="" class="gallary-img1" >
    </div>

    <div >
        <img src="imgs/gallary-2.jpg" alt="" class="gallary-img2">
    </div>

    <div >
        <img src="imgs/gallary-3.jpg" alt="" class="gallary-img3">
    </div>

 <!-- set 2 -->

    <div >
      <img src="imgs/gallary-4.jpg" alt="" class="gallary-img4">
  </div>

  <div >
      <img src="imgs/gallary-5.jpg" alt="" class="gallary-img5">
  </div>

  <div>
      <img src="imgs/gallary-6.jpg" alt="" class="gallary-img6">
  </div>

 <!-- set 3 -->

 <div >
  <img src="imgs/gallary-7.jpg" alt="" class="gallary-img7">
</div>

<div>
  <img src="imgs/gallary-8.jpg" alt="" class="gallary-img8">
 </div>

<div >
  <img src="imgs/gallary-9.jpg" alt="" class="gallary-img9">
</div>

 <!-- set 4 -->


<div >
  <img src="imgs/gallary-10.jpg" alt="" class="gallary-img10">
</div>

<div >
  <img src="imgs/gallary-11.jpg" alt="" class="gallary-img11">
</div>

<div >
  <img src="imgs/gallary-12.jpg" alt="" class="gallary-img12">
 </div>


</div>


    <!-- book a table Section  -->

<form action="" method="POST">
        <div >

        <div class="book-img w-100 vh-100" id="booktable">  </div>

        <div class=" text-center" >
          <h2 class="title ">BOOK A TABLE</h2>
          </div>

          <div class=" text-center">
            <b><h4 class="title1">RESERVE YOUR TABLE <br> RIGHT NOW!!! </h4></b>
          </div>

        <div class=" text-center">
            <button class="btn2 btn-lg btn-primary"  name="go">FIND TABLE</button>
        </div>

</div>
</form>
  

    <!-- BLOG Section  -->

 
    <div id="blog" class="container-fluid bg-dark   ">
        <div  class="btit"  >
      <h2 class=" section-title py-5 ">EVENTS AT THE Mr HUT</h2></div>
      <div class="row justify-content-center">
          <div class="col-sm-7 col-md-4 mb-5">
              <ul class="nav nav-pills nav-justified" >
                  <li class="nav-item">
                      <a class="nav-link active"  href="#foods" >Foods</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link "  href="#juice" >Juices</a>
                  </li>
              </ul>
          </div>
      </div>

      <div >
        <div id="foods">
            <div class="row">
                <div class="col-md-4" >
                    <div class="card bg-transparent border" >
                        <img src="imgs/blog-1.jpg" alt="" >
                        <div class="card-body" >
                            <h1 class="mb-4"><a href="#foods" class="badge badge-primary">Rs.450</a></h1>
                            <h4 >Chicken Burger</h4>
                            <p >My tried and tested Crispy Chicken Burger with Honey Mustard Coleslaw is the best you're going to eat </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card bg-transparent border " >
                        <img src="imgs/EGGS-TOAST-OLIVE-OIL.png" alt=""  class="eg">
                        <div class="card-body">
                            <h1 class=" mb-4"><a href="#foods" class="badge badge-primary">Rs.120</a></h1>
                            <h4 >Hard-Boiled Egg and Herb Toast</h4>
                            <p>Hard-boiled eggs are a snack superstar—they’re portable and packed with protein.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card bg-transparent border ">
                        <img src="imgs/blog-3.jpg" alt="" >
                        <div class="card-body">
                            <h1 class=" mb-4"><a href="#foods" class="badge badge-primary">Rs.400</a></h1>
                            <h4 >Beef burger with Onions</h4>
                            <p>Spice up your barbecue with jalapeños filled burgers, and why have cheese melted on top. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div >
            <div id="juice" class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card bg-transparent border">
                        <img  src="imgs/blog-4.jpg" alt="" >
                        <div class="card-body">
                            <h1 class=" mb-4"><a href="#" class="badge badge-primary">Rs.199</a></h1>
                            <h4 > MINT LEMONADE</h4>
                            <p >Mint lemonade is such a refreshing drink on a hot day. It tastes like lemonade, sweet and tart, but with just a hint of cooling mint. </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 my-3 my-md-0">
                    <div class="card bg-transparent border">
                        <img src="imgs/Blueberry-Lemonade.webp" alt="" class="bl">
                        <div class="card-body">
                            <h1 class=" mb-4"><a href="#" class="badge badge-primary">Rs.239</a></h1>
                            <h4 >BLUEBERRY LEMONADE</h4>
                            <p >With blueberry season in full swing here in Florida, we had to get out to our local farm for the u-pick season and to sip some of their delicious blueberry lemonade! </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 my-3 my-md-0">
                    <div class="card bg-transparent border">
                        <img src="imgs/blog-6.jpg" alt="" >
                        <div class="card-body">
                            <h1 class=" mb-4"><a href="#" class="badge badge-primary">Rs.229</a></h1>
                            <h4 >Orange juice</h4>
                            <p>Orange juice is a liquid extract of the orange tree fruit, produced by squeezing or reaming oranges.Bright and sweet orange juice is delicious to enjoy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



    <!-- REVIEWS Section  -->

    
    <div class="rev container-fluid wow fadeIn bg-dark " id="Reviews" >
        <div class="revtit">
        <h2 class="section-title my-5 " >REVIEWS</h2>
        </div>
        <div class=" row mt-3 mb-5 ">
            <div class="col-md-4 my-3 my-md-0 ">
                 <div class="rev1 border"  >
                    <img class="eric" src="imgs/eric_anic_.jpg" alt="">
                    </div>
                <div class="con border" >
                    <h3  >Eric </h3>
                    <div >
                        <p>“One of the best places I’ve eaten on Cape Cod. Great cocktails, awesome”.We enjoyed the Eggs Benedict served on homemade focaccia bread and hot coffee.  Perfect  service. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                 <div class="rev1 border" >
                        <img class="eric" src="imgs/bill dan.jfif" alt="">
                        </div>
                <div class="border">
                    <h3 >Bill Dan</h3>
                    <div >
                        <p>“Very good service, good menu … not overly extensive. Food was very good quality all around. They know how to prepare home fries and their omelets are top-notch. Prices were reasonable.”</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                  <div class="rev1 border" >
                        <img class="eric" src="imgs/sunkita.jfif" alt="">
                        </div>
                <div class="border" >
                    <h3 >Sunkingta</h3>
                    <div >
                        <p>“Potato pancakes were good. Will try the hash next time. Biscuits were great also.”“Great selection! My go to favorite is the Cape Cod Ruben.I just had the mushroom  with scallops and loved it!”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <!-- CONTACT Section  -->


     <div id="contact" class="find container-fluid bg-dark  border-top ">
        <div class="row">
            <div class=" col-md-6 px-0 border">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15664.13630846736!2d76.96040269640064!3d11.036070176060834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s1st%20Street%2C%20Gandhipuram%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1687786554048!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

           
                <div class="content col-md-6 px-5 has-height-lg ">
                
                <h3>FIND US</h3>
                    <p><span class="ti-location-pin pr-3"></span> 24 Gandhipuram 1st , Coimbatore</p>
                    <p><span class="ti-support pr-3"></span>99456 17890</p>
                    <p><span class="ti-email pr-3"></span>Hutofficial@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

        <!-- page footer  -->


        <div class=" footer container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
            <div class="fcon row">
                <div class="col-sm-4">
                    <h3>EMAIL US</h3>
                    <P class="text-muted">Hutofficial@gmail.com</P>
                </div>
                <div class="col-sm-4">
                    <h3>CALL US</h3>
                    <P class="text-muted">99456 17890</P>
                </div>
                <div class="col-sm-4">
                    <h3>FIND US</h3>
                    <P class="text-muted">24 Gandhipuram 1st , Coimbatore </P>
                </div>
            </div>
        </div>

<!-- social -->


<script>

//   scroll  

  var nav = document.querySelector('nav');
  window.addEventListener('scroll',function () {
if (window.pageYOffset > 100){
  nav.classList.add('bg-dark','shadow');
}else{
  nav.classList.remove('bg-dark','shadow');
}
  })
</script>

  </body>
</html>



































