<?php require(__DIR__.'/../partials/head.php'); ?>
<?php require(__DIR__.'/../partials/header.php'); ?>
<main>
    <div class="row justify-content-center">
        <div class="col-6">
            <ul class="list-group">
                <?php foreach($notes as $note): ?>
                    <li class="list-group-item">
                        <?= htmlspecialchars($note['title']) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</main>

<?php require(__DIR__.'/../partials/footer.php'); ?>