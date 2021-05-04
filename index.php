<!-- TODO TODAY
REPO: php-snacks-b1
GOAL:
## Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php</title>
  </head>
  <body>
    <p>
        <?php
        
        //SNACK 1!!!!!!! ## Snack 1
        // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        // Olimpia Milano - Cantù | 55-60
        


        // $partite = [
        //   [
        //     'casa' => 'Olimpia Milano',
        //     'ospite' => 'Cantù',
        //     'punteggio_casa' => 55,
        //     'punteggio_ospite' => 60,
        //   ],
        //   [
        //     'casa' => 'Olimpia Genova',
        //     'ospite' => 'Pantù',
        //     'punteggio_casa' => 58,
        //     'punteggio_ospite' => 90,
        //   ],
        //   [
        //     'casa' => 'Olimpia Torino',
        //     'ospite' => 'Mantù',
        //     'punteggio_casa' => 35,
        //     'punteggio_ospite' => 99,
        //   ],

        // ];

        // // var_dump($partite); die();
        // for ($i=0;$i<count($partite);$i++) {
        //   $partita = $partite[$i];
        //   echo '<p>' . $partita['casa'] . ' - ' . $partita['ospite'] . ' | ' . $partita['punteggio_casa'] . ' - ' . $partita['punteggio_ospite'] . '</p>';
        // }



        // ## Snack 2
        // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
          
          $name = $_GET['name'];

          $mail = $_GET['mail'];

          $age = $_GET['age'];

          

          $name_valido = strlen($name) > 3;

          $mail_valida = (strpos($mail, '.') != false) && (strpos($mail, '@') != false);

          $age_valida = is_numeric($age);

          if($name_valido==true && $mail_valida && $age_valida){
            echo "Accesso riuscito";
          }
          else{
            echo "Accesso negato";
          }



          

        ?>


    </p>
  </body>
</html>