<?php require_once('partials/head.php'); ?>

<h1>Asukohad</h1>

<ul>
    <?php foreach ( $locations as $l ) : ?>
        
    <li><?= $l->location; ?></li>

    <?php endforeach; ?>
</ul>

<h1>Sisesta asukoht</h1>

<form action="/locations" method="POST">
    <input type="text" name="location">
    <button type="submit">Sisesta</button>
</form>    

<?php require_once('partials/footer.php'); ?>
