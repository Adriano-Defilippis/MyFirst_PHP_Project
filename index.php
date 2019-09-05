<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">
    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <!-- IMG: ICON -->
    <link rel="shortcut icon" href="img/me_icon.gif">
    <title>MyFirst PHP Project</title>

    <?php 
        $name = $_GET["name"];
        $surname = $_GET["surname"];

        $str_paragrhap = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tempora vitae quaerat provident. 
                        Praesentium repellat autem libero asperiores quae nemo dicta debitis quibusdam, 
                        reiciendis facilis nisi aliquid nulla quis cum!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tempora vitae quaerat provident. 
                        Praesentium repellat autem libero asperiores quae nemo dicta debitis quibusdam, 
                        reiciendis facilis nisi aliquid nulla quis cum!";
        $bad_word = $_GET["badword"];

        $replace_whith = "XXX";

        $str_len = strlen($str_paragrhap);

        $str_rep = str_replace($bad_word, $replace_whith, $str_paragrhap)
    ?>
    
  </head>
  <body>


  <h1>Ciao <?php echo $name; echo " "; echo $surname;  ?>!!</h1><br>

  <h2>PARAGRAFO ORIGINALE</h2>

  <h3>Stringa ed operazioni importate da variabile php</h3>

  <p> <?php echo $str_paragrhap?> (<?php echo $str_len ?>) </p>
  

<h2>PARAGRAFO MODIFICATO</h2>
<h3>Stringa ed operazioni importate da variabile php</h3>

<p> <?php echo $str_rep?> (<?php echo strlen($str_rep); ?>) </p>
  </body>
</html>