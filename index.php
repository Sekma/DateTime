<?php
$birthday=mktime(0,0,0,4,11,1986);
$date=date("w",$birthday);
$jour=["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];
echo "<h1>Find day</h1><br>";
echo "Je suis né un ".$jour[$date].".<br>";
?>

<?php
$date=strtotime("21-06-2017");
$date_10_days_ago=strtotime("10 days ago",$date);
echo "<h1>String to time</h1><br>";
echo date('d-m-Y', $date_10_days_ago)."<br>";
?>

<?php
$date1=new DateTime("24-04-2017");
$date2=new DateTime("07-07-2017");

$diff=$date1->diff($date2);
echo "<h1>Interval between days</h1><br>";
echo $diff->format("%m mois et %d jours")."<br>";
?>

<?php
$dateFinPromo=new DateTime("2023-11-25 00:00:00");
$dateActuelle=new DateTime();
$rebout=$dateActuelle->diff($dateFinPromo);
echo "<h1>Interval between days</h1><br>";
if($dateFinPromo>=$dateActuelle){
    echo "La promotion se termine dans ".$rebout->format("%D jours %H heures %I minutes %S secondes".".");
}else{
    echo "La promotion est terminée.";
};
?>