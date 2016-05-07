<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sending Email</title>
  </head>
  <body>
    <?php

      $emailTo ="bpeterson1663@gmail.com";
      $subject ="First Email Subject";
      $body = "Awesome Job!";
      $headers="From: bpeterson1663@gmail.com";

      if(mail($emailTo, $subject, $body, $headers)){
          echo "Mail Sent Successfully";
      }
      else{
        echo "Mail did not send";
      }

      
      if($_GET["submit"]){
        if($_GET['name']){//Will return true if name has a value when submited
          echo "Your name is ".$_GET['name'];
        }
      }else {
        echo "Please enter your name";
      }

    ?>
    <form>
      <label for="name">Name</label>
      <input name="name" type="text"/>
      <input type="submit" name="submit" value="Submit Your Name"/>
    </form>
  </body>
</html>
