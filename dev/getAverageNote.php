<?php
function getAverageNote(){
$bdd = new PDO('mysql:host=localhost;dbname=tacosinlyon;charset=utf8', 'root', '');
$qry = $bdd->prepare("SELECT AVG(note) AS noteMoyenne FROM notation");
$qry->execute(); 
$avg = $qry->fetch();
echo 'Note moyenne : ' . round($avg[0],0);
}
?>