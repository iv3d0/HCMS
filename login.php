<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>crud</title>
  <link rel="stylesheet" href="src/css/style.css">
  <link rel="stylesheet" href="src/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>



  <main>
    <div class="container p-5 ">

      <div class="text-center" style="border-radius: 11px;margin: 0 auto;width: 40%;padding: 30px;box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;">
        <div class="d-flex justify-content-center  align-items-center flex-column">
          <img class="img-fluid" src="./images/1597256885097.jfif" alt="">
        </div>
        <h1 class="">Login</h1>
        <div class="form-floating mb-3">
          <input id="empUserName" type="text" class="form-control" id="floatingInput" placeholder="Emp-id">
          <label for="floatingInput">Employee Name</label>
        </div>
        <div class="form-floating">
          <input id="empPassword" type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class=" py-4 d-flex justify-content-center  align-items-center flex-column">
          <button id="loginBtn" type="button" class="btn btn-outline-dark">Login</button>
        </div>
      </div>
    </div>
  </main>



</body>
<!-- <script  src="src/js/chart.js"></script> -->
<script src="src/js/jquery-3.6.0.min.js"></script>
<script src="src/js/bootstrap.min.js"></script>
<script src="src/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  $("#loginBtn").on("click", function() {
    $.ajax({
      url: "ajax.php",
      method: "GET",
      cache: false,
      data: {
        login: true,
        username: $("#empUserName").val(),
        password: $("#empPassword").val()
      },
      success: function(data) {
        json = JSON.parse(data);
        if (json != "Success!") {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: json,
            footer: '<a href="">Why do I have this issue?</a>'
          })
        } else {
          Swal.fire({
            icon: 'success',
            title: 'Logged In...',
            text: json,
          })
        }

      }
    });
  });
</script>

</html>