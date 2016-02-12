<?php



        define(SERVER, "localhost");    
        define(LOGIN, "root");
        define(MDP, "luka2501!");
        define(BASE, "home"); //parametre de connection
         
        $connect=mysqli_connect(SERVER, LOGIN,MDP,BASE)/*connection BBD*/ OR die("probleme de connexion");//voir si la bbd est bien connectée
        $res = mysqli_query($connect,'SELECT * FROM clients WHERE Idclient='.$_POST["value"]);
        while($data=mysqli_fetch_assoc($res)){
            
         echo "Nom:".$data["nom"]."<br>";
         echo "Prenom:".$data["prenom"]."<br>"; 
         echo "Age:".$data["age"]."<br>";
         echo "Profession:".$data["profession"]."<br>";
         echo "E-mail:".$data["e-mail"]."<br>";
         echo "Téléphone:".$data["telephone"]."<br>";    
        }
       ?>