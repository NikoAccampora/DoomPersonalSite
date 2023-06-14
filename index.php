<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niko's DOOM Blogspot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"> </script>
  <script>
$( document).ready(function(){
    $("#section1")
        .hide();
});

$( document ).ready(function(){
    $(".MenuBtn").click(function(){
      $("#section1").animate({width: 'show'});      
    });			
});		
  
</script>

  </head>
<style>
  body { 
    background-image: url("rsc/img/graph/bg.jpg"); 
    background-size: 100%;
  }
  <?php include 'css/style.css'; ?>
  </style>
<body>
  <center>
    <header id="mainheader">
      <h1>Niko's Doom Blogspot</h1>
      <p style="font-size:130%;">Welcome to my domain, mortal.</p>
		  <hr>
		  <p style="font-size:150%;">Now, what do you seek?</p>
    </header>
  </center>
  <nav id="nav1">
    <h3>My Goods</h3>
    <ul>
      <li><a target="section1" href="raridoom.php" class="MenuBtn">Raridoom CE</a></li>
      <li><a target="section1" href="mswep.php" class="MenuBtn">MS Weapons</a></li>
      <li><a target="section1" href="blitzstorm.php" class="MenuBtn">BlitzStorm</a></li>
      <li><a target="section1" href="monsterlist.php" class="MenuBtn">C. Monsters</a></li>
    </ul>
    <h3>Other Mods</h3>
    <ul>
      <li><a target="section1" href="o_booster.php" class="MenuBtn">Booster</a></li>
      <li><a target="section1" href="o_trailblazer.php" class="MenuBtn">Trailblazer</a></li>
    </ul>
  </nav>
  <section id="section1">
      <iframe id="ShowFrame" name="section1">
      </iframe>
    </section>
    <footer id="foot1">
      <t class="bigletter" style="font-size: 140%;">Email:</t><t>  nikoaccampora@gmail.com</t>
      <br>
      <t class="bigletter" style="font-size: 140%;">Phone:</t><t> (+55) 51991576613</t>
    </footer> 
</body>
</html>