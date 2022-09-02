<?php require_once __DIR__ . '/partials/header.php'; ?>

<!-- Nav -->
<?php require_once __DIR__ . '/partials/nav.php'; ?>
<!-- Main -->
<main>
    <div class="container table-container mt-5">
        <div class="row mt-2 justify-content-around">
            <div class="col-6">
                <h1><?php echo $sectionTitle; ?></h1>
            </div>
            <div class="col-6 text-end">
                <?php if ($action === 'index'): ?>
                    <a class="btn btn-outline-primary" href="create.php">Add Post</a>
                <?php else: ?>
                    <a class="btn btn-outline-primary" href="index.php">Back to All Posts</a>
                <?php endif; ?>
            </div>
        </div>

        <?php echo $content; ?>

    </div>
</main>

<!-- footer -->
<?php require_once __DIR__ . '/partials/footer.php'; ?>