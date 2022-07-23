<?php
// part-1
// include 'partials/header.view.php'; // optional
// require 'library/UserManager.php'; // require

// with "once"
include_once 'partials/header.view.php';
require_once 'library/UserManager.php';
// require_once 'library/UserManager.php';
?>



<?php echo "Hola ! " . showUserName(); ?>

<?php
    $pageName = 'Homepage';
    $username = 'Tahsin Abrar'; // username
?>
<body>
    <?php include_once 'partials/nav.view.php'; ?> <!-- Load nav view page -->

    <?php $pageName = 'Test'; ?>
    <div id="main">
        <article>
            <div>
                <h4>
                    <?php // echo showUserName($username); ?>
                    <?php echo "Hola ! " . showUserName(); ?>
                </h4>
            </div>
        </article>
        <nav>Nav</nav>
        <aside>Aside</aside>
    </div>

    <?php include_once 'partials/footer.view.php'; ?>
    <?php include_once 'partials/footer.view.php'; ?>
    <?php include_once 'partials/footer.view.php'; ?>
</body>