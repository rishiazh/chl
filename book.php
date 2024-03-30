
<html>
    <head>
        <style>

      body{
        display:flex;
        height:100vh;
        width:100vw;
        align-items:center;
        justify-content:center;
        flex-direction:column;
      }

      h1{
        font-size:30px;
      }

      .succ{
            color:green;
            font-size:20px;
      }
      .err{
        color:red;
        font-size:20px;
      }
        </style>
    </head>
<body>

<?php

if(isset($_POST['b1'])){
  $con=mysqli_connect("localhost","root","" );
  mysqli_select_db($con,'chl');

  $gname=$_POST['fn'];
  $gem=$_POST['email'];
  $gsub=$_POST['subject'];
  $gmess=$_POST['mes'];

  $sql="insert into message values('$gname','$gem','$gsub','$gmess')";
  mysqli_query($con,$sql);

  if(mysqli_affected_rows($con)>0)
  { ?>
     <h1>Thank You for choosing CHL. Visited again. </h1><br>
     <p class="succ">Your data is submitted succesfully.</p>
     <?php

  }else{
    ?>
    <p class="err">Your data is submitted succesfully.</p>
    <?php
  }


}
?>
</body>
</html>