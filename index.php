<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="gamogedot.png" type="image/icon type">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Cyber Agenda</title>
</head>

<body>
    <?php 
        if(!empty($_POST["send"])){
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $toEmail = "nicklaki2003@gmai.com";

            $mailHeaders = "Name: " . $fname .
            "\r\nSurname: " .$lname .;

            if(mail($toEmail, $fname, $mailHeaders)){
                $message = "Welcome"
            }

        }
    ?>
  <div class="main">
    <p class="sign" align="center">Daily Agenda</p>
    <form class="form1" method="POST">
      <input required minlength="2" id='fname' class="un " type="text" align="center" placeholder="Name">
      <input required class="pass" id="lname" type="text" align="center" placeholder="Surname">
      <a href="https://www.kiu.edu.ge/uploads/CyberSecurityTrainingProgramAgenda.pdf"><input type="submit"
          class="submit" align="center" /></a>
  </div>

</body>

</html>