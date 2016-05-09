<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sending Email</title>
  </head>
  <body>
    <?php
      // 
      // $emailTo ="bpeterson1663@gmail.com";
      // $subject ="First Email Subject";
      // $body = "Awesome Job!";
      // $headers="From: bpeterson1663@gmail.com";
      //
      // if(mail($emailTo, $subject, $body, $headers)){
      //     echo "Mail Sent Successfully";
      // }
      // else{
      //   echo "Mail did not send";
      // }

      $names=array("Brady", "Mike", "Nathan");


      if($_POST["submit"]){
        if($_POST['name']){//Will return true if name has a value when submited

          foreach ($names as $name){
            if ($_POST["name"]==$name);
              echo "Your name is in the array as ".$name;
              $knowYou = 1;
          }
        }

        if(!$knowYou){
          echo "Your name is not in the array. Sorry ".$_POST['name'];
        }
      }else {
        echo "Please enter your name";
      }

    ?>
    <form method="POST">
      <label for="name">Name</label>
      <input name="name" type="text"/>
      <input type="submit" name="submit" value="Submit Your Name"/>
    </form>
  </body>
</html>
