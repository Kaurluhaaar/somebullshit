<?php require_once('partials/head.php'); ?>

<h1>Users</h1>

<ul>
    <?php foreach ( $users as $l ) : ?>
        
    <li><?= $l->user; ?></li>

    <?php endforeach; ?>
</ul>

<h1>Sisesta user</h1>

<form action="/users" method="POST">
    <input type="text" name="user">
    <button type="submit">Sisesta</button>
</form>    

<?php require_once('partials/footer.php'); ?>
