<?php
  include('db.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chat Project</title>
    <script src="vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="styles/style.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Welcome To Chat Room</h1>
          <div id="chatBox">

            <div id="chatData">
              <?php
                $query = "SELECT * FROM chat_data ORDER BY id DESC;";

               $result = mysqli_query($link, $query);
                $row = mysqli_fetch_array($result);
                            // while($row = mysqli_fetch_assoc($result) ){
                //       echo "<span> $row['name']</span> :";
                //       echo "<span> $row['message']</span>";
                //       echo "<span> $row['date']</span>";
                // } //creates an array from the result variable which is from the query

              ?>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <form method="post" action="index.php">
          <div class="form-group">
            <label for="name">Name: </label>
            <input class="form-control" type="text" name="name" placeholder="Name"/>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Enter Message"></textarea>
          </div>

          <input class="btn btn-success" type="submit" name="submit" value="Send"/>
        </form>
      </div>
    </div>
    </div>
  </body>
</html>
