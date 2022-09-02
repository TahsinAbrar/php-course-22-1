<?php

$title = $postData['title'] ?? '';
$description = $postData['description'] ?? '';
$category = $postData['category'] ?? '';
// $title = $postData['title'] ?? '';
$author_name = $postData['author_name'] ?? '';

?>

<form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="title" value="<?php echo $title; ?>" placeholder="Enter Title">
    </div>
    <div class="form-floating mb-3">
        <textarea name="description" class="form-control" value="<?php echo $description; ?>" placeholder="Write Here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Description</label>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input name="category" value="<?php echo $category; ?>" type="text" class="form-control" id="category" placeholder="Enter Category Name">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input name="image" class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
        <label for="author_name" class="form-label">Author name</label>
        <input name="author_name" value="<?php echo $author_name; ?>" type="text" class="form-control" id="author_name" placeholder="Enter Author Name">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">
            <?php
                if ($action === 'edit') {
                    echo 'Update';
                } else {
                    echo 'Add Post';
                }
            ?>
        </button>
    </div>

</form>