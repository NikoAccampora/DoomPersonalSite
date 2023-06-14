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
    <h2>BlitzStorm</h2>
    <!--<video width="480" height="360" controls src="rsc/vid/sb.mp4"></video>-->
    <iframe width="480" height="360" src="https://www.youtube.com/embed/O74K_HJcGUk"> </iframe>
    <br><br>
    <h3 style="font-size:160%;">About</h3>
    <t>
      You're the pint-sized war machine BlitzStorm; built to destroy. This brings a whole new gameplay experience
      where you collect "power" pods to become acquire more weapons and become even stronger.
      Blast, burn, kill, destroy! Be the cute little killer robot you always wanted to be!
    </t>
    <br><br>
    <button id="likebtn">Like</button>
    <br><br>
    <h3>*No download link available yet*</h3>
    </center>
    
</body>
</html>