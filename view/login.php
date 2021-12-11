<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS Elements -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
    <div style="margin-left:40%;">
            <a href="../index.php"><img class ="logo" src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/premium-hub/banner/Banner_Logo_Category_Hub_Page.png?auto=format%2Ccompress&amp;dpr=1" alt="logo" style="max-height:100%; height: 10rem; width: 15rem;"></a>
    </div>

    <div class="login_box" style="width:70vw;padding-left:30rem;">
        <h3 class="intro">Kindly Enter Credentials To Login</h3>
        <form class="row g-3 needs-validation" action="../functions/staff_login.php" method="post" novalidate>

            <div class="col-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="inputEmail" required>
                <div class="invalid-feedback">
                        Please enter your full name.
                  </div>
            </div>
            <div class="col-12">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="inputPassword" required>
                <div class="invalid-feedback">
                        Please enter your password.
                  </div>
            </div>
           
            <div class="col-12 account">
                <button type="submit" class="btn create_account btn-lg btn-primary">Log In</button>
            </div>
            
        </form>
    </div>

    <script> 
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
      .forEach(function (form) {
            form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
      })
      })()
      </script>
    
</body>
</html>