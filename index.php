<!DOCTYPE html>
<html lang="en" data-bs-theme="light">  
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/php_htmx_example//css/bootstrap.css" rel="stylesheet" type="text/css" />
  <script src="https://unpkg.com/htmx.org@2.0.3" integrity="sha384-0895/pl2MU10Hqc6jd4RvrthNlDiE9U1tWmX7WRESftEDRosgxNsQG/Ze9YMRzHq" crossorigin="anonymous"></script>  
  <title>PHP HTMX</title>
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PHP HTMX</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-3">
        <button
        class="btn btn-sm btn-primary mt-2"
        hx-post="test1.php"
        hx-trigger="click"
        hx-target="#test1"
        hx-swap="innerHTML"
        hx-vals='{"myVal": "My Value"}'
        > Form Example </button>
        <div id="test1" class=""></div>
      </div>
      <div class="col-3">
        <button
        class="btn btn-sm btn-primary mt-2"
        hx-get="test2.php"
        hx-trigger="click"
        hx-target="#test2"
        hx-swap="innerHTML"
        hx-vals='{"myVal": "My Value"}'
        > URL Example </button>
        <div id="test2" class=""></div>
      </div>

      <div id="clear" class="col-3">
        <button
        class="btn btn-sm btn-primary mt-2"
        hx-get="clear.php"
        hx-trigger="click"
        hx-swap="innerHTML"
        hx-vals='{"myVal": "My Value"}'
        > Clear </button>
      </div>
      <div id="example1" class="col-3 "></div>
    </div>
  </div>
</body>
</html>

