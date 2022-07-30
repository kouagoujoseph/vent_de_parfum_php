<!DOCTYPE html>
<html>
       <head>
               <meta charset="utf-8">
               <title>Vente de parfum</title>
               <link rel="stylesheet" href="sit.css">
       </head>
       <link rel="stylesheet" href="boot/css/bootstrap.min.css">
     <body>
<!--*********************************************************************************** -->
         <?php
             $parfum=
             [
               'Vanille'=>2000,
               'Fenielle'=>1500,
               'ossana'=>800,
               'parfainte'=>3000,
               'lunell'=>1000,
               'panille'=>5000,
               'hanille'=>2500,
               'manille'=>2800,
               'danille'=>9000,
               'panille'=>20000,
               'menulle'=>35000,
               'penille'=>8300,
               'xanille'=>4500,
               'zanille'=>6380,

             ];
             $divers=
             [
                 'buscuits'=>8700,
                 'lait en poudre'=>10700,
                 'lait jago'=>907000,
                 'Huile'=>100000,
                 'banane'=>5000,
                 'poison frais'=>150000,
                 'oeuf'=>30700,
                 'spaguetti'=>8700,
             ];
         ?>
        <div class="inclu col-sm-4 col-md-4 "> <?php include('accueil.php') ?>;</div><br><br>
           <h1 class="alert text-success">Bienvenu sur le site de vente de parfum de qualité</h1>
            <br><br>
<!--realisation du formulaire pour recueillir les informations venant du client--> 
<!--*********************************************************************************** -->  
           <form action="site_parfum.php" method="POST">
            <fieldset>
                  
                  <h4>les parfums disponibles</h2>
                  <main class="container">
                    <div class="row">
                  <div class="col-2 ">
                    
                  <?php foreach($parfum as $nom=>$prix):?>
                    <label>
                        <input type="checkbox" name="nom[]" value="<?=$nom?>">
                         <?= $nom ?> coûte <?=$prix?>£  <?php echo "\t"; ?>
                    </label>
                    <?php endforeach ?>
                  </div>


            <div class="col-4  offset-6">
            <h4>les divers disponibles</h2>
              <?php foreach($divers as $nomdiv=>$prixdiv):?>
                 <label>
                     <input type="checkbox" name="nomdiv[]" value="<?=$nomdiv ?>">
                      <?= $nomdiv ?> coûte <?=$prixdiv ?> £ <br><br>
                 </label>
                 <?php endforeach ?>
            </div>
              </div>
                  </main>
                
                 <!--   <button type="submit">VALIDER VOTRE COMMANDE</button> ligne67-->
                 
      
        <button type="submit" class="alert text-success">VALIDER VOTRE COMMANDE</button>
        </fieldset>
           
        </form>

        <br><br>

        <?php 
        $incredient= [];
         $sommetoal=0;
         if(isset($_POST['nom']))
         {
          foreach($_POST['nom'] as $name)
          {
            $incredient[]=$name;
            $sommetoal+=$parfum[$name];
          }
         }
         ?>
         La liste de parfums selectionnés:
         <?php foreach($incredient as $me):?>
          {
            <strong><?= $me ?></strong>
          }
          <?php endforeach ?>
        <br><br>
            La somme totale  <strong><?=$sommetoal?></strong>




       

       <?php 
        $incredients= [];
         $sommetoal1=0;
         if(isset($_POST['nomdiv']))
         {
          foreach($_POST['nomdiv'] as $namediv)
          {
            $incredients[]=$namediv;
            $sommetoal1+=$divers[$namediv];
          }
         }
         ?>
         <br><br>
         La liste des divers selectionnés:
         <?php foreach($incredients as $mediv):?>
          {
            <strong><?= $mediv ?></strong>
          }
          <?php endforeach ?>
        <br><br>
            La somme totale  <strong><?=$sommetoal1?></strong>
           
                        
 </body>
</html>