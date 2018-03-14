<?php

// Mettons le (futur) fichier dans une variable.
$commentaires="php/messages.txt";
 
if(isset($_POST['submitButton'])){ 
        // assignons nos 2 variables du formulaire, et on en profite pour les protéger des balises HTML
        $pseudo=htmlentities($_POST['pseudo']);
        $message=htmlentities($_POST['message']);
         
        //Pensons au retour à la ligne et aux stripslashes pour la variable $message
        $message=stripslashes(nl2br($message));
         
        // On met en place quelques conditions pour les cellules (nom et message)
        // On vérifie avant tout si le fichier existe : si ce n'est pas le cas, on le crée
        if(!is_file($commentaires))
        {
                $verif=@fopen($commentaires,"w+");
        }
         
        // On vérifie que le login ou le message ne sont pas vide
        elseif (trim($message)=="" || trim($pseudo)=="")
        {
                echo "Vous devez remplir tous les champs ! <a href='../index.php'>Retour sur le livre d'or</a>";
                
                // On sort du script !
                exit;
        }
         
        // Après ces quelques vérifications d'usage, on passe à l'exécution de ce formulaire
         
        
        // Si ok, on ouvre en écriture-enregistrement du fichier message.txt
        $verif=@fopen($commentaires,"r+");
                
        // On analyse les anciennes données et on les stocke
        $stock=@fread($verif,filesize($commentaires));
        
        // On met la date dans une variable
        $date=date ("d/m/Y à H:i");
        
        // On paramètre le tout dans la variable $opinion
        $opinion="<b style='color:red;'><font size='5'>".$pseudo."</font></b> a écrit le : ".$date."<br />\n <center><font size='3'><strong>".$message."</strong></font></center><br />\n<hr />";
        
        //On remet le curseur du fichier en début de ligne
        rewind($verif);
        
        //On insère le nouveau commentaire
        fputs($verif,$opinion." \n".$stock);
        
        //On clôt le fichier
        fclose($verif);
        
        // On affiche le tout
}
