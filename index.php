<h1>Partie 9 : Les dates</h1>



<h2>Exercice 1</h2>
<p>Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016).</p>
<?php
    echo date('d/m/Y');
?>


<h2>Exercice 2</h2>
<p>Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16).</p>

<?php
    echo date('d-m-y');
?>

<h2>Exercice 3</h2>
<p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)</p>

<?php
    echo date('l j F Y');
?>


<p>Bonus : Le faire en français.</p>
<?php
    // pour changer la langue, on utilise setlocale, LC_TIME ne changera que la langue des dates et ensuite on lui met la langue choisi
    setlocale(LC_TIME, 'fra.UTF-8');
    echo strftime('%A %e %B %Y');
?>

<h2>Exercice 4</h2>
<p>Afficher le timestamp du jour.  </p>
<?= time()?>

<p>Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
<?php 
    // ces lignes ne permettent que de retourner  
    // date_default_timezone_set('Europe/Paris');
    // echo date_default_timezone_get();
    // echo date('e');

    // $timezone_offset= get_timezone_offset('Europe/Berlin','UTC');

    // $ref_timezone = time();
    // echo '$ref_timezone ' . $ref_timezone . '<br>';
    // date_default_timezone_set('Europe/Paris');
    // $Paris_timezone = date('now');
    // echo '$Paris_timezone ' . $Paris_timezone;

    // strtotime part du 1er janvier 1970 utc +00:00
    // je rajoute donc 2h à la date demandé
    echo strtotime('2 august 2016 17:00');
?>


<h2>Exercice 5</h2>
<p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>

<?php

    // on met tou en timestamp
    $date_ref = strtotime(' 16 may 2016');
    $now = time();

    echo '$date_ref :' . $date_ref . '<br>';
    echo '$now :' . $now . '<br>';

    // on soustrait les 2 dates et on ramène en nombre de jours
    echo 'différence de jours : ' . ($now - $date_ref)/(24*3600);
?>


<h2>Exercice 6</h2>
<p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p>
    <!-- on choisi le calendrier et le mois puis l'année-->
<?= cal_days_in_month(CAL_GREGORIAN, 2, 2016);?>


<h2>Exercice 7</h2>
<p>Afficher la date du jour + 20 jours.</p>
<!-- date du jour et on ajoute le timestamp demandé -->
<?= date('d/m/Y', strtotime(' + 20 days'));?>


<h2>Exercice 8</h2>
<p>Afficher la date du jour - 22 jours</p>
<?= date('d/m/Y', strtotime(' - 22 days'));?>