<?php

require_once 'database.php';

try {
  // query data according to business logic
  $query = 'SELECT * FROM posts ORDER BY id DESC';
  $statement = $pdo->prepare($query);
  $statement->execute();

  $articles = $statement->fetchAll(PDO::FETCH_ASSOC);

  // echo '<pre>';
  // print_r($articles);
  // echo '</pre>';
  // exit;

} catch (\Throwable $exception) {
  // write error to log
  die('Couldn\'t query to DB');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blogs</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="post.css" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <nav id="mainNav" class="navbar bg-dark navbar-dark navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html">Blog</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarScroll"
            aria-controls="navbarScroll"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <div class="mx-auto"></div>
            <ul
              class="navbar-nav navbar-nav-scroll text-white"
              style="--bs-scroll-height: 100%"
            >
              <li class="nav-item">
                <a class="nav-link py-2" href="../index.html">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link py-2" href="./admin/addpost.html">Write Now</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDarkDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Category
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-dark"
                  aria-labelledby="navbarDarkDropdownMenuLink"
                >
                  <li>
                    <a class="dropdown-item" href="popularpost.html"
                      >Popular Post</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="recentpost.html"
                      >Recent Post</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="tagpost.html">Tags</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item py-2">
                <form class="d-flex d-lg-none" role="search">
                  <input
                    class="form-control me-2 input-group-sm"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <button class="btn btn-sm btn-outline-warning" type="submit">
                    Search
                  </button>
                </form>
              </li>
              <li class="nav-item py-1">
                <a class="btn btn-secondary" href="login.html" role="button"
                  >Login</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Header End -->
    <!-- Main -->
    <main>
      <div class="container table-container mt-5">
        <div class="row mb-2 justify-content-around ">
          <div class="col-6"><h2>All Posts</h2></div>
          <div class="col-6 text-end">
            <a class="btn btn-outline-primary" href="create.php">Add Post</a>
          </div>
        </div>
        <div class="row">
          <div class="col">
            
            <table
              class="table table-striped table-hover table-bordered text-center"
            >
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
                      <img
                        class="w-25"
                        src="<?php echo !empty($article['image_path']) ? $article['image_path'] : 'https://via.placeholder.com/120'; ?>"
                        alt="post image">
                    </td>
                    <td><?php echo $article['title']; ?></td>
                    <td><?php echo $article['category']; ?></td>
                    <td><?php echo $article['published_at'] ?></td>
                    <td><?php echo $article['author_name']; ?></td>
                    <td class="text-center text-success">
                      <i class="fas fa-edit"></i>
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
                  <a
                    class="page-link"
                    href="#"
                    tabindex="-1"
                    aria-disabled="true"
                    >Previous</a
                  >
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
      </div>
    </main>

    <!-- footer -->
    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p class="mt-2 mb-0">All Rights Reserved by Mahmud Hasan Rabbi</p>

            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a href="" class="nav-link"
                  ><i class="fa-brands fa-facebook"></i
                ></a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link"
                  ><i class="fa-brands fa-github"></i
                ></a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link"
                  ><i class="fa-brands fa-linkedin-in"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
