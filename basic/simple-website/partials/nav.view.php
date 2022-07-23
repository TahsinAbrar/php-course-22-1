<header>
    <div class="h2">
        <?php // echo $pageName ?? 'Default'; ?>
        <?php //echo $GLOBALS['pageName'] ?? 'Default'; ?>
        <?php echo showPageName(); ?>
    </div>
    <?php include 'partials/menu.view.php'; ?>
</header>

<?php

function showPageName()
{
    global $pageName;

    return $pageName;
}