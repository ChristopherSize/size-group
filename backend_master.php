<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="master.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <!--<div class="nav1">-->
            <img 
                src="logo.jpg" 
                alt="Le logo de l'entreprise"
                id="logo">
            <span id="admin">
                Welcome 
                <?php
                //echo $_POST["id"];
                ?>
            </span>
        <!--</div>-->
       <!--  <div class="nav2"> --> 
            <img 
                src="logout.png" 
                alt="Déconnection"
                id="logout"
                title="Déconnection">
    <!--    </div> -->
    </nav>
    <?php
         $serveur='localhost';
         $login='root';
         $pass="";
         $ticket=true;
        try{
            $connection = new PDO("mysql:host=$serveur;dbname=sizegroup;charset=utf8",$login,$pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'Connexion à la base de données réussie';
            }
            catch(PDOException $e){
                echo 'Connection to the database has failed : '.$e->getMessage();
            }         
    ?>
    
    <?php
        try{
            $codeSql=$connection->prepare("SELECT * FROM members");
        $codeSql->execute();
        $resultat=$codeSql->fetchAll();            
        }catch(PDOException $e){
            echo"Echec de l'affichage des éléments de la table".$e->getMessage();
        }
    ?>
    <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>SURNAME</th>
                        <th>E-MAIL</th>
                        <th>SALARY</th>
                        <th>OPTION</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($resultat as $item){
                            echo "<tr>";
                                echo "<td>".$item["id_members"]."</td>";
                                echo "<td>".$item["nom"]."</td>";
                                echo "<td>".$item["prenom"]."</td>";
                                echo "<td>".$item["mail"]."</td>";
                                echo "<td>".$item["salaire"]."</td>";
                                echo '<td>
                                        <form method="POST">
                                        <input
                                            title="Supprimer ce membre de la guilde"
                                            class="option" 
                                            type="submit" 
                                            value="Supprimer" 
                                            name='.$item["id_members"].'> 
                                        </form>
                                </td>';
                            echo "</tr>";
                        }
                    ?>
                </tbody>
                
            </table>

    </div>
    <!--<div id="modifiers"> -->           
        <input type="checkbox" id="click">
        <label for="click" 
            class="result" 
            id="label1"
            title="Ajouter un membre à la guilde">
            Ajouter
        </label>

        <input type="checkbox" id="click1">
        <label for="click1" 
            id="label2"
            class="result" 
            title="Modifier les informations d'un memebres">
            Modifier
        </label>
  <!-- </div>  -->              
    <div class="ajouter">
            <form id="form" method="post">
                <span>
                        <label for="name">Name :</label><br>
                        <input type="text"
                        required
                        name="nom"
                        id="name"
                        autocomplete="on"><br>
                        <label for="surname">Surname :</label><br>
                        <input type="text"
                        name="surname"
                        required
                        id="surname"
                        autocomplete="on"><br>
                        <label for="mail">E-mail :</label><br>
                        <input type="text"
                        name="mail"
                        required
                        id="mail"
                        autocomplete="on"><br>
                        <label for="mdp">Password :</label><br>
                        <input type="password"
                        name="mdp"
                        required
                        id="mdp"><br>
                        <label for="sal">Salaire :</label><br>
                        <input type="number"
                        name="sal"
                        required
                        id="sal"><br>
                        <label for="rank">Rank :</label><br>
                        <input type="text"
                        name="rank"
                        required
                        id="rank">
                            <input type="submit" 
                            value="Ajouter"
                            name="ajouter">
                </span>
            </form>

        <?php
            if(isset($_POST['ajouter'])){
                $name=$_POST["nom"];
                $surname=$_POST["surname"];
                $mail=$_POST["mail"];
                $mdp=$_POST["mdp"];
                $sal=$_POST["sal"];
                $rank=$_POST["rank"];
                $insertion=$connection->prepare("INSERT INTO members(nom,prenom,mail,mdp,salaire,rang) VALUES(:nom,:prenom,:email,:mdp,:sal,:rank)");
                $insertion->bindParam(':nom',$name);//Pour lier nos marquer à nos variables
                $insertion->bindParam(':prenom',$surname);
                $insertion->bindParam(':email',$mail);
                $insertion->bindParam(':mdp',$mdp);//Pour lier nos marquer à nos variables
                $insertion->bindParam(':sal',$sal);
                $insertion->bindParam(':rank',$rank);
                $insertion->execute();
            }
        ?>
    </div>

    <div class="modifier">
            <form id="form1" method="post">
                <span>
                        <label for="id">Id :</label><br>
                        <input type="number"
                        required
                        name="id"
                        id="id"><br>
                        <label for="name1">Name :</label><br>
                        <input type="text"
                        required
                        name="nom"
                        id="name1"
                        autocomplete="on"><br>
                        <label for="surname1">Surname :</label><br>
                        <input type="text"
                        name="surname"
                        required
                        id="surname1"
                        autocomplete="on"><br>
                        <label for="mail1">E-mail :</label><br>
                        <input type="text"
                        name="mail"
                        required
                        id="mail1"><br>
                        <label for="mdp1">Password :</label><br>
                        <input type="password"
                        name="mdp"
                        required
                        id="mdp1"
                        ><br>
                        <label for="sal1">Salaire :</label><br>
                        <input type="number"
                        name="sal"
                        required
                        id="sal1"><br>
                        <label for="rank1">Rank :</label><br>
                        <input type="text"
                        name="rank"
                        required
                        id="rank1"><br>
                            <input type="submit" 
                            value="modifier"
                            name="modifier">
                </span>
            </form>

        <?php
            if(isset($_POST['modifier'])){
                $id=$_POST["id"];
                $name=$_POST["nom"];
                $surname=$_POST["surname"];
                $mail=$_POST["mail"];
                $mdp=$_POST["mdp"];
                $sal=$_POST["sal"];
                $rank=$_POST["rank"];
                $modif="UPDATE members SET nom=$name,prenom=$surname,mail=$mail,mdp=$mdp,salaire=$sal,rang=$rank WHERE id_members=$id";
                $insertion=$connection->prepare($modif);
                $insertion->execute();
            }
        ?>            
    </div>
    <?php
            foreach($resultat as $del){
                $number=$del["id_members"];
                $name=strval($number);
                if(isset($_POST[$name])){
                    $suppr="DELETE FROM members WHERE id_members=$number";// Ceci supprime toute la ligne
                    $requete=$connection->prepare($suppr);
                    $requete->execute();
                }
            }
        ?>
    </body>
</html>
