<?php 
$testo = 'La solitudine ! La conosci tu, la
            solitudine ? Quella dei poeti e degli impotenti. La solitudine ! Ma quale ? Lo sai tu, che soli
            non si è mai ? E che ci accompagna sempre e dappertutto lo stesso peso di avvenire e di
            passato ? Quelli che abbiamo ucciso sono con noi. E se fosse ancora per loro sarebbe
            ancora facile. Ma quelli che uno ha amato ; quelli che non ha amato e non l’hanno amato,
            i rimpianti, il desiderio, l’amarezza e la dolcezza, le puttane e la cricca degli Dei ! (Si
            stacca da lui ed indietreggia verso il suo posto di prima). Solo ! Ah, se almeno invece di
            questa solitudine avvelenata di presenze, che è la mia, potessi godere quella vera, il
            silenzio ed il tremolare di un albero. (Vinto da una improvvisa stanchezza, siede). La
            solitudine ! Ma no, Scipione. E’ popolata di stridor di denti e tutta ripercossa d’echi, rumori,
            strepiti perduti. E vicino alle femmine che accarezzo, quando la notte si richiude su di noi
            e io credo, staccato dalla mia carne ormai satura, di cogliere un poco di me stesso tra la
            vita e la morte, la mia solitudine totale si sazia dell’acre fortore del piacere alle ascelle
            della femmina che ancora sprofonda al mio fianco.'


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>
    <main>
        <p>
            <?php echo $testo ?>

            <form action="./index.php" method="get">
                <label for="badword">Scrivi la parola da censurare: </label>
                <input type="text" name="badword" id="badword">
            </form>
        </p>
    </main>
</body>
</html>




<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->