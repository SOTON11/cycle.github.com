<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=devic­e-width, initial-scale=1.0">
<meta name="description" content="Calcule des Cycles Menstruels ">
<meta name="robots" content="index, follow">
    <title>Calcul des Cycles Menstruels</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body{
            text-align: center;
            margin: 20px;
        }
        table{
            margin: 0 auto;
            border-collapse: collapse;
            width : 50%;
        }
        th, td{
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        th{
            background-color: #f2f2f2;
        }
        .ctn form{
              color: #999;
	          border-radius: 3px;
	          margin-bottom: 15px;
	          background: #f2f3f7;
	          border: 2px solid white;
              border-radius: 1px;
              transition: 2s;
	          padding: 30px;
        }
        .containe{
              margin-top: 20px;
              color: #999;
	          margin-bottom: 15px;
	          background: #f2f3f7;
	          border: 10px solid white;
              border-radius: 3px;
              transition: 2s;
	          padding: 30px;
        }
        .ft2{
              margin-top: 20px;
       
        }
    </style>
</head>
<body>
<div class = "home"> 
    <div class = "ctn" >
      <h2>Calcul des Cycles Menstruels</h2>
     <form method="post" action="">
        <label for="start_date">Entrez la date du premier jour du cycle (AAAA-MM-JJ) :</label>
        <input type="date" id="start_date" name="start_date" required>
        <input type="submit" value="Calculer">
     </form>
    </div> 
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start_date = $_POST['start_date'];

       function addDays($date, $days) {
           return date('Y-m-d', strtotime($date . " + $days days"));
       }

    echo "<h3>Les prochains jours de l'apparition des règles et le 14e jour du cycle pour l'année suivante sont :</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Cycle</th><th>Date de début</th><th>14e jour</th></tr>";
    for ($i = 0; $i < 365 / 28; $i++) {
        // Calculer les dates
        $cycle_start_date = $start_date;
        $day_14 = addDays($start_date, 13);

        // Afficher les dates dans le tableau
        echo "<tr>";
        echo "<td>Cycle " . ($i + 1) . "</td>";
        echo "<td>" . $cycle_start_date . "</td>";
        echo "<td>" . $day_14 . "</td>";
        echo "</tr>";

        // Passer au cycle suivant
        $start_date = addDays($start_date, 28);
    }

    echo "</table>";
}
?>
</div>
<section class= "container">
<footer class="container">
    <div id="ft2">
      <section class="ft-cpr">Copyright © Benin notre pays, 2024-Tous droits réservés</section>
      <section class="ft-icons"><i class="bi bi-facebook"></i><i class="bi bi-messenger"></i><i class="bi bi-whatsapp"></i></section>
      <section class="ft-dir">La plateforme realisée par Kazafi</section>
    </div>
</footer>
</section>
</body>
</html>