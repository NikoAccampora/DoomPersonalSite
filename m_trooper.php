<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niko's DOOM Blogspot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#likebtn").click(
                function(){
                $("#likebtn").text("Liked!");
                $("#likebtn").css('background-color','rgb(0,140,0)');
                $("#likebtn").css('border-color','rgb(0,255,0)');
                });
        })
        </script>
  </head>
<style>
  <?php include 'css/style.css'; ?>
  body { background-color: rgba(0,0,0,0);}
  </style>
<body>
    <center>
    <h2>Stormtrooper</h2>
    <br><br>
    <img src="rsc/img/gif/troo.gif" width="10%" style="image-rendering: pixelated">  
    </center>
    <br><br>
    <t class="stat">Health: </t><t>40</t>
    <br>
    <t class="stat">Attack: </t><t>Weak</t>
    <br>
    <t class="stat">Type: </t><t>Ranged</t>
    <br><br>
    <center>
    <h3>Info</h3>
    <t>
      Mainstray of the SS Theta's security force. A human soldier armed with a laser rifle. 
      Though weak, they are often deployed in large groups.
    </t>
    <br><br>
    <button id="likebtn">Like</button>
    <br><br>
    <h3>*No download link available yet*</h3>
    <br>
    <a target="section1" href="monsterlist.php" style="font-size: 150%;">Other Monsters</a>
    </center>
</body>
</html>