<?php 
if (isset($_POST['button'])) {
  header("Location: tables.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Bootstrap -->
    <link rel="stylesheet" href="css/welcome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<form action="" method="POST">
  <div id="bigbg">
      <div id="bg1" class="back"></div><span id="W" class="let">W</span>
      <div id="bg2" class="back"></div><span id="E" class="let">E</span>
      <div id="bg3" class="back"></div><span id="L" class="let">L</span>
      <div id="bg4" class="back"></div><span id="C" class="let">C</span>
      <div id="bg5" class="back"></div><span id="O" class="let">O</span>
      <div id="bg6" class="back"></div><span id="M" class="let">M</span>
      <div id="bg7" class="back"></div><span id="El" class="let">E</span>
    </div>
    
    <div id="button">
    <button   class="btn btn-info btn-lg" name="button" >CHIEF</button>
        </div>
    </form>
</body>
<script>
    var x=document.getElementsByClassName('back');
var y=document.getElementsByClassName('let');
var button=document.getElementsByTagName('button');
window.addEventListener('load',doFirst,false);
function doFirst() {
  var i;
  button[0].addEventListener('mouseenter',function(){anim(0);},false);
  button[0].addEventListener('mouseleave',clear,false);
}
function anim(i) {
  y[i].style.opacity="1";
  y[i].style.transition="opacity .1s";
  y[i].style.transitionDelay="0.2s";
  x[i].style.transform="rotate("+(10-15*i)+"deg)";
  x[i].style.opacity="1";
  x[i].style.width="100px";
  x[i].style.transition="transform 1s,opacity 1s,width 1s";
  if(i<6)
  setTimeout(function(){anim(++i);},100);
}
function clear() {
  var i;
  for(i=6;i>=0;i--){
    y[i].style.opacity="0";
    y[i].style.transition="opacity .2s";
    y[i].style.transitionDelay="0.5s";
    x[i].style.transform="rotate(0deg)";
    x[i].style.opacity="0";
    x[i].style.width="0px";
    x[i].style.transition="transform 2s, opacity 2s,width 2s";
  }
}

</script>
</html>