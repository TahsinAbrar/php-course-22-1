<?php

$user = $_SESSION['logged_in_user_name'] ?? 'dummy';

echo "hello $user";
?>

<?php if ($user != 'dummy'): ?>

<div>
    <a href="/logout">Logout</a>
</div>

<?php endif; ?>