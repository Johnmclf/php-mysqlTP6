<?php
$post = [
    'title' => 'Un faux titre.',
    'french_creation_date' => '03/03/2022 à 12h14min42s',
    'content' => "Le faux contenu de mon billet.\nC'est fantastique !",
    ];
    $comments = [
    [
    'author' => 'Un premier faux auteur',
    'french_creation_date' => '03/03/2022 à 12h15min42s',
    'comment' => 'Un faux commentaire.\n Le premier.',
    ],
    [
    'author' => 'Un second faux auteur',
    'french_creation_date' => '03/03/2022 à 12h16min42s',
    'comment' => 'Un faux commentaire.\n Le second.',
    ],
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Le blog de l'AVBN</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <h1>Le super blog de l'AVBN !</h1>
    <p><a href="../index.php">Retour à la liste des billets</a></p>
    <div class="news">
        <h3>
            <?= htmlspecialchars($post['title']) ?>
            <em>le <?php echo $post['french_creation_date'] ?> </em>
        </h3>
        <p>
            <?php echo nl2br(htmlspecialchars($post['content'])) ?>
        </p>
    </div>
    <h2>Commentaires</h2>
    <?php
        foreach ($comments as $comment) {
    ?>
    <p><strong><?php echo htmlspecialchars($comment['author']) ?> </strong>
        le <?php echo $comment['french_creation_date'] ?> </p>
    <p><?php echo  nl2br(htmlspecialchars($comment['comment'])) ?> </p>
    <?php
        }
    ?>
</body>
</html>
