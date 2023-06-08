<html>
  <head>
    <title>PHP : les tableaux</title>
  </head>
  <body>
    <?php
// Tableau numéroté :
$prenoms = array('Pierre', 'Paul' , 'Jaques');// les prénoms sont séparées par des virgules .
//Pour parcourir le tableau et afficher les elements 
// on utilise la boucle 'for '.

for($x = 0;$x <= 2 ; $x++){
  echo $prenoms[$x].'<br/>';
}
?><br/><?php
// avce la boucle 'foreach' :
foreach($prenoms as $prenom){
  echo $prenom.'<br>';
}

// les tableaux associatifs :
$age = array (
  'Pierre' => 24,
  'Paul' => 22,
  'Jaques' => 'Non renseigné'
);

// pour parcourir les tableaux assocaitifs ,la boucle "foreach" est la seule alternative :
// => example :
foreach($age as age){
  echo $age."<br>";
}

?> 

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>