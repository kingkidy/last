<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My Dashboard</title>
  <link rel="stylesheet" href="styles/dash.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />



</head>

<body>




  <div class="dashboard ">
    <!-- Sidebar -->
    <div class="sidebar d-sd-block ">
      <ul class="nav flex-column">

        <li class="nav-item">
          <a class="nav-link" href="index.php/home">Log Out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posting">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Explore</a>
        </li>
      </ul>
    </div>

    <!-- Content -->
    <div class="content">
      <div class="row justify-content-between">
        <div class="card col-md-3 col-sm-6 mx-2">
          <h2 class="display-3 fw-bolder">
            {{ count($data) }}

          </h2>
          <p class="lead text-muted fs-2">Bookings</p>
        </div>
        <div class="card col-md-3 col-sm-6 mx-2">
          <h2 class="display-3 fw-bolder">0</h2>
          <p class="lead text-muted fs-2">Pending Bookings</p>
        </div>
        <div class="card col-md-3 col-sm-6 mx-2">
          <h2 class="display-3 fw-bolder">10+</h2>
          <p class="lead text-muted fs-2">Finished Bookings </p>
        </div>

      </div>

      <div>
        <h1>Bookings Table </h1>
      </div>

      <section class="table-responsive">
        <table class="table table-success table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Phone</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->firstname }}</td>


              <td>{{ $item->lastname }}</td>


              <td>{{ $item->phone }}</td>


              <td>{{ $item->email }}</td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </section>
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="app.js"></script>

</body>

</html>