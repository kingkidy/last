
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, target-densitydpi=device-dpi">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
    <link rel="stylesheet" href="booking.css">
    <title>PHOTOBOOK</title>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="/index" class="navbar-brand">PhotoBook</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/index" >Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="/services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="/bookings" class="nav-link">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>  

 <section class="bg-dark text-light p-5 text-center text-sm-start mt-2" >
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between" >
            <div>
                <h1>Feel free to make <span class=" text-warning">Bookings</span></h1>
                <p class="lead my-4 " >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam eos modi eveniet error veniam obcaecati, culpa totam, 
                    perferendis deserunt dolor fuga laudantium ratione animi! Quis vero eveniet aliquam quasi consequuntur!</p>
                    <button class="btn btn-primary btn-lg " data-bs-toggle="modal" data-bs-target="#fillform"  >
                        fill Booking form
                    </button>
            </div>
            <img class= " img-fluid w-50 d-none d-sm-block" src="images\kindpng_1390339.png" alt="">
        </div>
    </div>
 </section>
    
    
    
<div class="modal fade" id="fillform" tabindex="-1" aria-labelledby="fillformLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="fillformLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
        </div>
        <div class="modal-body">
          <p class="lead">fill out the booking form</p>
          <form action="/drop.php" method="POST" >

            <div class="mb-3">
                <label for="firstname" class="form-col-label" id="myform">
                    First Name
                </label>
                <input type="text" class="form-control" id="firstname" name="firstname">
          </div>
          <div class="mb-3">
            <label for="lastname" class="form-col-label">
               Last Name
            </label>
            <input type="text" class="form-control" id="lastname" name="lastname">
      </div>
      <div class="mb-3">
        <label for="phone" class="form-col-label">
            Email
        </label>
        <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="mb-3">
    <label for="email" class="form-col-label">
        Phone
    </label>
    <input type="text" class="form-control" id="email" name="email">
</div>
<button id="submit" type="submit" class="btn btn-primary">Submit</button>

</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </div>
      </div>
    </div>
  </div>


<!-- <div class="form">
  <form method="POST" action="/form.php">
    <p>
    <label for="firstname">First Name </label>
    <input type="text" name="firstname" id="firstname">
    </p>
    <p>
    <label for="lastname">Last Name </label>
    <input type="text" name="lastname" id="lastname">
    </p>
    <p>
      <label for="phone">phone</label>
      <input type="text" name="phone" id="phone">
      </p>
    <p>
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    </p>
    <p>
    <input type="submit" name="submit" id="submit" value="Submit">
    </p>
  </form>
</div> --> 


<a class="btn btn-success" href="posting"> Posting </a>

<script>
$(document).ready(function() {
  $("#myForm").submit(function(event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "submit-form.php",
      data: $("#myForm").serialize(),
      success: function(response) {
        alert(response);
        $("#exampleModal").modal("hide");
      },
      error: function() {
        alert("Error submitting form!");
      }
    });
  });
});
</script>













 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>