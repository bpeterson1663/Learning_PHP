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

      $names = array("Fred", "Rob", "Ian");
       if ($_POST["submit"]) {

         if ($_POST["name"]) {

           foreach ($names as $name) {
              if ($POST['name'] == $name) echo "I know you! Your name is ".$name;
              $knowYou = 1;
            }
        if (!$knowYou) echo "I don’t know you, ".$name;

        } else {
          echo "Please enter your name";
        }
       }
    ?>
    <form method="post">
      <label for="name">Name</label>
      <input name="name" type="text"/>
      <input type="submit" name="submit" value="Submit Your Name"/>
    </form>
  </body>
</html>
