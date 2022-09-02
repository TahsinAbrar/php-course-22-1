<div class="row">
    <div class="col">

        <table class="table table-striped table-hover table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Date</th>
                    <th scope="col">Author</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $idx => $article) : ?>
                    <tr>
                        <th scope="row"><?php echo $idx + 1; ?></th>
                        <td>
                            <img class="w-25" src="<?php echo !empty($article['image_path']) ? '/assets/' . $article['image_path'] : 'https://via.placeholder.com/120'; ?>" alt="post image">
                        </td>
                        <td><?php echo $article['title']; ?></td>
                        <td><?php echo $article['category']; ?></td>
                        <td><?php echo $article['published_at'] ?></td>
                        <td><?php echo $article['author_name']; ?></td>
                        <td class="text-center text-success">
                            <a href="edit.php?id=<?php echo $article['id']; ?>"><i class="fas fa-edit"></i></a>
                        </td>
                        <td class="text-center text-danger">
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="nextpage.html">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="nextpage.html">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="nextpage.html">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="nextpage.html">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>