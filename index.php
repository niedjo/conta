<!-- # # la fonction moyenne simple
#
# def moyenne(tab):
#     som = 0
#     i = 0
#     while i < len(tab):
#         som = som + tab[i]
#         i+=1
#     moy = som/i
#     return moy
#
#
#
# # la moyenne de x2 barre
#
# def moyenne2(tab2):
#     som = 0
#     taille = int(len(tab2)/2)
#     i = taille
#
#     while i < len(tab2):
#         som = som + tab2[i]
#         i+=1
#     moy = som/taille
#     return moy
#
#
#
# # la moyenne de x1 barre
#
# def moyenne3(tab3):
#     som = 0
#     taille = int(len(tab3)/2)
#     i = 0
#
#     while i < taille:
#         som = som + tab3[i]
#         i+=1
#     moy = som/taille
#     return moy
#
#
# # la somme simple
#
# def somme(tab2, tab3):
#     somme = 0
#     i = 0
#     while i<len(tab2):
#         somme = somme + tab2[i]*tab3[i]
#         i+=1
#     return somme
#
#
#
# # la somme pour la varience
#
# def somme2(X,_x):
#     somme = 0
#     i = 0
#     while i<len(X):
#         somme = somme+pow((X[i]-_x),2)
#         print(somme)
#         i+=1
#     return somme
#
#
# # la covarience
# def covarience(X,Y,_x,_y):
#     cov = (somme(X,Y)/len(X))-_x*_y
#     return cov
#
#
# # la varience
#
# def varience(X,_x):
#     v = somme2(X,_x)/len(X)
#     return v
# 
# _x = moyenne(tabX)
# _y = moyenne(tabY)
# _x1 = moyenne3(tabX)
# _y1 = moyenne3(tabY)
# _x2 = moyenne2(tabX)
# _y2 = moyenne2(tabY)
#
# # on sait que y = a*x + b
#
# a = (_y2 - _y1)/(_x2 - _x1)
# b = _y1 - _x1*a
#
#
#
# calcul = str(input('que souhaitez vous savoir entre les DEPENSES et le CHIEF_AFFAIRE(pour chiffre d\'affaire) obtenue ?'))
# # while (calcul!='DEPENSES') and (calcul != 'CHIEF_AFFAIRE'):
# if calcul == 'DEPENSES':
#     c = float(input('entrer donc votre chiffre d\'affaire'))
#     u = covarience(tabX,tabY,_x,_y)/varience(tabY,_y)
#     depenses = u*c + _x-u*_y
#     print('votre depense sera donc de : ',depenses)
# elif calcul == 'CHIEF_AFFAIRE':
#     c = float(input( 'entrer donc vos depenses'))
#     u = covarience(tabX,tabY,_x ,_y)/varience(tabX,_x)
#     chief_affaire = u*c + _y-u*_x
#     print ('votre chiffre d\'affaire sera donc de ',chief_affaire)
#
# else:
#     print('vous avez mal saisie')
# # while calcul!='DEPENSES' && calcul != 'CHIEF_AFFAIRE'
-->


<?php

// if ($_POST['n'] !=NULL && $_POST['n'] == "depenses et chiffre d'affaire") {
//     // print 'coucou';
// }
@$value = "depenses et chiffre d'affaire";

@$a = $_POST['n'];
@$b = $_POST['dannee'];
@$c = $_POST['nannee'];

// echo $a;
if ($a && $b && $c) {
    // echo " $a $b $c existe";
}


?>












<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="index.js" defer></script>
    <link rel="stylesheet" href="index.css">
    <title>conta</title>
    
</head>
<body>
    <div class="contenu">
        <p> Bievenu sur conta . cette aplication vous permet d'envisager <br> vos depenses et vos chiffres d'affaires futures en fonction de vos <br> anciennes tendances. <br><br>Commencer par remplir ce formulaire</p>

        <!-- <button>depenses-chiffres d'affaire</button><button>chiffre d'affaire</button> -->
        <form action="index.php" method="post" name="f1">
            <div id="vi" onclick="d()">test
        
        
            <input type="text" name="n" value="<?php if(isset($_POST['n'])){echo($value);} ?>" id="in"><br><br><br><br>
        
        
            </div>
            <!-- <button id="v1" onclick="d()">test</button> -->
            <!-- <input type="submit" value="depenses et chiffre d'affaire" id="v1"> -->
            
            
            
           
            <table border="1">
                <tr>
                    <td>A partir de quelle annee voulez vous qu'on enregistre vos depenses et chifres d'affaires ?</td>
                    <td><input type="number" name="dannee" min='1800' max='2022' value="<?php echo(@$_POST['dannee']); ?>" required><br></td>
                </tr>
                <tr>
                    <td>Donnez le nombre d'annee a etudier <br></td>
                    <td><input type="number" name="nannee" min='2' max='200' value="<?php if(isset($_POST['nannee'])){echo($_POST['nannee']);} ?>" required></td>
                </tr>
            </table>
            <input type="submit" value="suivant" id="v2">
            <br><br><br>
             
            
            
            
            
            <?php
            
                $dep = [];
                $chief = [];

                echo "<table>
                <tr>
                    <th>depenses (FCFA)</th>
                    <th>chiffres d'affair (FCFA)</th>
                    <th>annee</th>
                </tr>";
                for ($i=0; $i <$c ; $i++) { 
                    echo "<tr><td><input type='number' name='' id='dep'></td> <td><input type='number' name='c $i' id='chief'></td><td><input type='number' name='a $i' id='years' value='$b' readonly></td></tr>";
                    $b++;
                    
                }

                echo" </table>";
            
            
            
            ?>
<!--             <input type="submit" value="ok">
            <div onclick="f()">t</div> -->
            <?php
            
            for ($i=0; $i <$c ; $i++) { 
                if (isset($_POST["d $i"]) && isset($_POST["c $i"])) {
                    $dep[$i] = $_POST["d $i"];
                    $chief[$i] = $_POST["c $i"];
                    echo " yo $chief[$i]";
                }
            }
            
            ?><br>
            <b id="b">
               Ensuite, que souhaitez vous savoir<br><br>
                <input type="button" name="" value="le chiffre d'affaire" onclick="g()"> 
                <input type="button" name="" value="les depenses" onclick="g2()">
            </b>
            <div id="depfinal">
                <br>
                entrer donc vos depenses <br>
                <input type="number" name="depfinal" value="">
                <input type="button" name="btn" value="generer" onclick="fd()">
            </div>
            <div id="chieffinal">
                 <br>
                entrer donc votre chiffre d'affaire <br>
                <input type="number" name="chieffinal" value=""> 
                <input type="button" name="btn" value="generer" onclick="fc()"> 
            </div> 
            <div id="fi"> 
                votre chifre d'affaire sera de <input type="text" name="final" value="" readonly> en l'an <input type="number" name="finale" id="" value="" readonly>
            </div>
            <div id="fii">
             votre depense sera de<input type="text" name="cfinale" value="">  en l'an <input type="number" name="cfinal" id="" value="">
            </div>
                

            

        </form>
    </div>
</body>
</html>