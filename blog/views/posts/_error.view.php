<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];

unset($_SESSION['errors']);
session_destroy();
?>
<?php if (!empty($errors)) : ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php foreach ($errors as $key => $error) : ?>
                <li>
                    <b><?php echo $key; ?>: </b><?php echo $error; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>