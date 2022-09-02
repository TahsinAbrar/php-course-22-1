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

<div class="row mt-2 w-75 bg-light mx-auto">
    <div class="col">
        <?php include_once __DIR__ .'/form.view.php'; ?>
    </div>
</div>