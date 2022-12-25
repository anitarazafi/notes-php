<?php require(__DIR__.'/../partials/head.php'); ?>
<?php require(__DIR__.'/../partials/header.php'); ?>
<main>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card p-3">
                <div class="card-title">
                    <?= htmlspecialchars($note['title']) ?>
                </div>
                <p class="card-body">
                    <?= htmlspecialchars($note['body']) ?>
                </p>
            </div>
        </div>
    </div>
</main>

<?php require(__DIR__.'/../partials/footer.php'); ?>