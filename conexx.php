<?php
if (isset($_GET['login'])) {
    $user=$_GET['user'];
    $pass=$_GET['passwd'];
    if(($file= @fopen('./user.csv','r+')))
    $login=0;
    echo "les valeurs ds inputs sont :user=$user et password=$pass";
    while (!feof($file)) {
        $ligne = fgets($file,255);
        echo "<br/>=== $ligne ===<hr/>";
        $tab = explode(';',$ligne);
        print_r($tab);
            if($tab[0]==$user && $tab[1]==$pass) 
            {
                header('location:vueAccueil.php?erreur=incorrecte');
                echo "Bienvenu $user";
               $login=1;

               break;
            }
        }
       
        if($login!=1){
        header('location:home.php?erreur=incorrecte');
         
        }
        fclose($file);
    //   echo "Nom utilisateur ou mot de passe incorrect<a href='index.html'> Réessayez</a>";
    //     }else {echo "Fichier des users non existant <a href='index.html'> Réessayez</a>";}
    }
?>