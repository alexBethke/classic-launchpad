<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

if(@$_GET["query"]) {
  $query = urlencode($_GET["query"]);
  $redirect = "http://macintoshgarden.org/search/node/$query";
  header("Location: $redirect");
  exit();
}
?>


<html>
  <head>
    <title>Classic Macintosh Launchpad</title>
    <meta charset="ISO-8859-1">   
  </head>
  <body bgcolor="#cccccc" width="100%">
    <center>
      
      <h1>Classic Macintosh Launchpad</h1>

      <table width="100%" border="0">
        <tr>
          <td>
            <center>
            <h4>Search Macintosh Garden (fast)</h4>
              <p>
                <form method="GET" action="index.php">
                  <input type="text" name="query" size="30">
                  <input type="submit" value="Search">
                </form>
              </p>
            </center>
          </td>
        </tr>
      </table>

      <hr>

      <table width="100%" border="0">
        <tr>
          <td width="33%"></td>
          <td width="33%">
            <center><h4>Links</h4></center>
            <ul>
              <li><a href="categories.php">Macintosh Garden Categories</a>
              <li><a href="http://macintoshgarden.org">Macintosh Garden</a>
              <li><a href="http://frogfind.com">Frogfind</a>
              <li><a href="http://68k.news">68k News</a>
              <li><a href="http://retro.mac84.net">Mac84 Retro</a>
              <li><a href="http://www.applefool.com/se30/">Classic Mac Networking</a>
              <li><a href="http://altexxanet.org">Altexxanet</a>
            </ul>
          </td>
          <td width="33%"></td>
        </tr>
      </table>


      <hr>

      <?php
        echo "<font size=\"2\">Your IP address ".$_SERVER['REMOTE_ADDR']."</font>";
      ?>


    </center>
  </body>
</html>

<?php

ob_flush();
flush();

?>
