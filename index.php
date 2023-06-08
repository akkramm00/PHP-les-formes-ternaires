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
foreach($age as $value){
  echo $value."<br>";
}

//pour recupéréer les clès et les valeurs ,on va procéder de la maniètre suivante :

foreach($age as $clef => $value) {
  echo 'l\'age de ' .$clef . ' est ' . $value.'.<br/>';
}


echo"<pre>";
print_r($age);
echo"</pre>";
//=====================les tableaux multidimentionnels==================================
$membres = array(
  array('Pierre', 24 ,'pierre.giraud@houss.com'),
  array('Paul', 22, 'paul.dubreuil@live.com'),
  array('Jacques', 30, 'jacquot@gmail;com')
);
// Pour récupérer les valeurs attribuées a chaque menbres dans le tableau:
 echo $membres[0][0]. ' a ' .$membres[0][1]. ' ans. Son mail est '.$membres[0][2]. '<br>';
 echo $membres[1][0]. ' a ' .$membres[1][1]. ' ans. Son mail est '.$membres[1][2]. '<br>';
 echo $membres[2][0]. ' a ' .$membres[2][1]. ' ans. Son mail est '.$membres[2][2]. '<br>';

for($ligne= 0; $ligne<3; $ligne++){
  $membre_no = $ligne+1;
  echo 'Membre numéro '. $membre_no.'<br>';
  echo '<ul>';
  for($col = 0; $col< 3; $col++){
    echo '<li>' . $membres[$ligne][$col]. '</li>';
  }
  echo '</ul>';
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