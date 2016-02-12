<?php
define(SERVER, "localhost");
define(LOGIN, "root");
define(MDP, "luka2501!");
define(BASE, "home"); //parametre de connection

$connect = mysqli_connect(SERVER, LOGIN, MDP, BASE)/* connection BBD */ OR die("probleme de connexion");
?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="newcss.css"/>
        <title></title>
    </head>
    <body>


        <div>

            <form action="#" method="POST"name="addClient">

                <label for ="nom">Nom: </label>
                <input name="nom" type="text" maxlength="50" required/><br>
                <label for ="prenom">Prenom: </label>
                <input name="prenom" type="text" maxlength="50" required/><br>
                <label for ="age">age </label>
                <input name="age" type="text" maxlength="3" required/><br>
                <label for ="profession">Profession </label>
                <input name="profession" type="text" maxlength="50" required/><br>
                <label for ="e-mail">E-Mail </label>
                <input name="e-mail" type="text" maxlength="50" required/><br>
                <label for ="Téléphone">Téléphone </label>
                <input name="Téléphone" type="text" maxlength="50" required/><br>
                <button type="submit">Ajouter</button><br>

                <select id="choice">
                    <option  selected value=""> Choisissez un client </option>

<?php
$res = mysqli_query($connect, 'SELECT * FROM clients');
while ($data = mysqli_fetch_assoc($res)) {
    echo '<option value=' . $data['Idclient']. '>' . $data['prenom']. ' '. $data['nom'] . '</option>'; 
}
?>


                </select>

            </form>


        </div>


        <div id="clients"> 




        </div>



        <script type="text/javascript" src="challenge.js"></script> 

    </body>
</html>



<!-- echo '<option value=' . BDD-ID . '>' . BDD-nom . ' ' . BDD-prenom . '</option>' -->