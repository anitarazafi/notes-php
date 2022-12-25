<?php require(__DIR__.'/../partials/head.php'); ?>
<?php require(__DIR__.'/../partials/header.php'); ?>
<main>
    <div class="row justify-content-center">
        <div class="col-6">
            <ul class="list-group">
                <?php foreach($notes as $note): ?>
                    
                        <li class="list-group-item d-flex justify-content-between">
                            <span>
                                <?= htmlspecialchars($note['title']) ?>
                            </span>
                            <span>
                                <span>
                                    <a href="/note?id=<?= $note['id'] ?>" class="text-decoration-none">
                                        <i class="fa-solid fa-eye px-2 text-primary"></i>
                                    </a>
                                </span>
                                <span>
                                    <a href="/note/edit?id=<?= $note['id'] ?>" class="text-decoration-none">
                                        <i class="fa-solid fa-pen px-2 text-warning"></i>
                                    </a>
                                </span>
                                <span>
                                    <a href="/note/delete?id=<?= $note['id'] ?>" class="text-decoration-none">
                                        <i class="fa-solid fa-trash px-2 text-danger"></i>
                                    </a>
                                </span>
                            </span>
                        </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</main>

<?php require(__DIR__.'/../partials/footer.php'); ?>