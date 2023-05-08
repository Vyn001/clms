<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
      integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-warning">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#"
            ><img src="img/logo.png" height="50" width="50"
          /></a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <h5 class="text-light justify-content-end">
              Computer Laboratory Management System
            </h5>
          </div>
        </div>
      </nav>
    </header>
    <div class="container position-absolute top-50 start-50 translate-middle">
      <div class="row">
        <div class="col-sm-6 mb-3">
          <div class="card shadow" onclick="location.href='dean.html'">
            <div class="card-body">
              <h5 class="card-title text-center">Dean</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-3">
          <div class="card shadow" onclick="location.href='admin.php'">
            <div class="card-body">
              <h5 class="card-title text-center">Admin</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-3">
          <div class="card shadow" onclick="location.href=''">
            <div class="card-body">
              <h5 class="card-title text-center">Assistant</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card shadow" onclick="location.href=''">
            <div class="card-body">
              <h5 class="card-title text-center">Faculty</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
