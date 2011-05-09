<?php

$host = 'camelize';
if(isset($_SERVER['HTTP_HOST'])){
  $host = $_SERVER['HTTP_HOST'];
}

$year = date("Y");

echo<<<HTML
<!DOCTYPE html>
<html>
  <head> 
    <title>Camelize: The free camelcase text converter</title> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Camelize, CamelCase, NerdCase, HumpCase, FunctionCase, Free, Text, Converter"> 
    <meta name="description" content="A free tool for converting text string to camelcase."> 
    <meta name="author" content="William Youmans is a freelance web developer living, working, and loving Salt Lake City, Utah."> 
    <meta name="ROBOTS" content="ALL">

    <!-- Javascript --> 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
 
    <!-- Stylesheets --> 
    <link rel="stylesheet" type="text/css" href="assets/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/style.css" media="screen" />
    
    <!--Favicon --> 
    <link rel="shortcut icon" href="favicon.ico"> 
    
  </head> 
  <body>
    <div id="logo">
      <img src="assets/logo.png" alt="Camelize">
    </div>
    <div id="content">
      <form method="post" action="index.php">
        <input type="text" value="" id="camelize">
      </form>
      <div id="result"></div>
      <div id="footer">
        &copy; $year <a href="http://www.klanoma.com">Klanoma Web Services</a>
        <a id="question" href="http://en.wikipedia.org/wiki/CamelCase">What is This?</a>
      </div>
    </div>

HTML;


echo<<<SCRIPTS
    <script type="text/javascript">
      $(function(){
        var pretext = "begin typing...";
        $("#camelize").val(pretext);

        $("#camelize").focus(function(){
          if($(this).val() == pretext){
            $(this).val("");
          }
        }).blur(function(){
          if($(this).val().replace(/\s+/, "") == ""){
            $(this).val(pretext);
          }
        });

        $("#camelize").keyup(function(){
          $("#result").html(camelize($(this).val()));
        });
      });
  
      function camelize( s ) {
        return ( /\S[A-Z]/.test( s ) ) ?
        s.replace( /(.)([A-Z])/g, function(t,a,b) { return a + ' ' + b.toLowerCase(); } ) :
        s.replace( /( )([a-z])/g, function(t,a,b) { return b.toUpperCase(); } );
      }
    </script>

SCRIPTS;

if(!preg_match("/local/", $host)){
  echo<<<GA
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-11130262-12']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

GA;
}

echo<<<HTML
  </body>
</html>

HTML;

?>
