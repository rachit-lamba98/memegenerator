 <?php
 session_start();
// include('memefunctions.php');
// setdata();
if(isset($_POST['submit']))
{ 
  
    //  header("Location: generatedmeme.php");
    $jpg_image = imagecreatefromjpeg('mema.jpg');
    $white = imagecolorallocate($jpg_image, 255, 255, 255);
    $text_a =$_POST['text_a'] ;
    $text_b =$_POST['text_b'] ;
    imagettftext($jpg_image, 25, 0, 50, 50, $white, "./font.ttf", $text_a);
    imagettftext($jpg_image, 25, 0, 50, 300, $white, "./font.ttf", $text_b);
    imagejpeg($jpg_image, "./genmeme.jpg");
    imagedestroy($jpg_image);
    echo "<script type='text/javascript'>window.location.href = 'generatedmeme.php';</script>";
    exit();
    

}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meme Generator</title>
    
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>
    @keyframes rubberBand {
  0% {transform: scale(1);}
  30% {transform: scaleX(1.25) scaleY(0.75);}
  40% {transform: scaleX(0.75) scaleY(1.25);}
  60% {transform: scaleX(1.15) scaleY(0.85);}
  100% {transform: scale(1);}
}
.rubberBand {
  animation-name: rubberBand;
}
.text {
  text-align: center;
  margin-top: 56px;
  color: #fff;
  
  font-family: sans-serif;
  text-transform: uppercase;
}

.animated {
  animation-duration: 2.5s;
  animation-fill-mode: both;
  animation-iteration-count: 2;
}

</style>

</head>
<body>
  
   <h1  class='mt-3 text-success text-center display-4 text animated rubberBand'>Meme Generator - Think hard !</h1><br>
   <div class="container" style="margin:20px;">
  <div class="row">
    <div class="col" style="position: relative;">
   <span id="generated"> <img src="https://imgflip.com/s/meme/Roll-Safe-Think-About-It.jpg" style="width:700px;height:450px;"> </span>
     <div id="meme_a" style=" position: absolute;
    bottom: 240px;
    min-height :200px;
    width:500px;
    right: 60px;
    color: white;
    text-align: center;
    padding-left: 20px;
    font-weight: bold;
    font-size: 2em;
    padding-right: 20px;">
    
     </div>
     
     <div style=" position: absolute;
    bottom: 50px;
    height :100px;
    width:650px;
    right: 50px;
    color: white;
    text-align:justify;
    padding-left: 20px;
    padding-right: 20px;">
         <h2 id="meme_b" ></h2>
     </div>
      
    </div>
    <div class="col" >
      <div class = 'container'>
                  

          <div class='form-group'>
                <form method="post">
                    <h2>Top Text</h2>
                    <textarea placeholder='Type Here..' class='mt-2 form-control' id='text_a' name="text_a" rows='2'></textarea><br>
                     <h2>Bottom Text</h2>
                    <textarea placeholder='Type Here..' class='mt-2 form-control' id='text_b' name="text_b" rows='2'></textarea><br>
                    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Generate"> <!--add data-toggle="modal" data-target="#myModal" -->
                </form>
                <!-- The Modal -->
<!--<div class="modal" id="myModal">-->
<!--  <div class="modal-dialog">-->
<!--    <div class="modal-content">-->

      <!-- Modal Header -->
      <!--<div class="modal-header">-->
      <!--  <h4 class="modal-title">Modal Heading</h4>-->
      <!--  <button type="button" class="close" data-dismiss="modal">&times;</button>-->
      <!--</div>-->

      <!-- Modal body -->
      <!--<div class="modal-body">-->
      <!--  Modal body..-->
      <!--</div>-->

      <!-- Modal footer -->
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
      <!--</div>-->

<!--    </div>-->
<!--  </div>-->
<!--</div>-->
                  
        
         </div>
          <!--<input type = 'hidden' id = 'url' value = ".$id.">-->
          
          
          </div>
         
            
    </div>
  </div>
  </div>
  
  
  
  <script type='text/javascript'>
  
  $(document).ready(function() {
  
//   $("form").submit(function(){
//       e.preventDefault();

      

$('#text_a').keyup(function(){

   
    var text_a = $('#text_a').val();
    $("#meme_a").html(text_a);

  


    //   $.ajax({
    //                  type:"POST",
    //                  url :"memefunctions.php",
    //                  data: {
    //                   meme_a:"yes",

    //                   text_a:text_a

    //                  },
    //                  success : function(msg){
    //                   $('#meme_a').html(msg);
                       

    //                  }
    //              });

});

$('#text_b').keyup(function(){

   
    var text_b = $('#text_b').val();
     $('#meme_b').html(text_b);

  


    //   $.ajax({
    //                  type:"POST",
    //                  url :"memefunctions.php",
    //                  data: {
    //                   meme_b:"yes",

    //                   text_b:text_b

    //                  },
    //                  success : function(msg){
    //                   $('#meme_b').html(msg);
                       

    //                  }
    //              });

 });
 
 
//  $("#submit").click(function(){
//      alert("momos");
//      $.ajax({
//          type:"POST",
//          url: "createimage.php",
//          data:{
//              submit: "yes",
//              text_a: text_a,
//              text_b: text_b
//          },
//          success: function(msg){
//              alert(msg);
//              $(".modal-body").html(msg);
//          },
//          error: function(msg){
//              alert(msg);
//              $(".modal-body").html(msg);
//          }
//      });
//  });

//   });
});    
  </script> 
</body>
</html>







