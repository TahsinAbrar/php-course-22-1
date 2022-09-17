<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Login / Register</title>
  </head>

  <body>
    <div class="main">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="login-card">
              <h2 class="text-center mb-4">Sign In</h2>
              <form action="/login" method="post">
                <p>
                  <label for="email">Email</label>
                  <input
                    type="text"
                    class="form-input"
                    name="email"
                    placeholder="Enter your email address"
                  />
                </p>
                <p>
                  <label for="password">Password</label>
                  <input
                    type="password"
                    class="form-input"
                    name="password"
                    placeholder="Enter your password"
                  />
                </p>
                <input type="submit" class="btn btn-primary" value="Login" />
              </form>
              <p class="pt-3">
                Don't have an account? <a href="/register">Register Here</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
