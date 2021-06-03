<!-- Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.  -->

<?php 

$info = include("./db/googledata.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Google FAQ</title>
</head>

<body>
    <section>
        <div class="container term">
            <?php foreach ($info as $dato) { ?>
                <h2><?php echo $dato['question'] ?></h2>
                <p><?php echo nl2br($dato['answer']); ?></p>
            <?php } ?>
        </div>
    </section>
    <footer>

    </footer>
</body>

</html>