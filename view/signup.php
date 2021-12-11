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
    <div style="padding-left:38rem;">
            <a href="../index.php"><img class ="logo" src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/premium-hub/banner/Banner_Logo_Category_Hub_Page.png?auto=format%2Ccompress&amp;dpr=1" alt="logo" style="max-height:100%; height: 10rem; width: 15rem;"></a>
    </div>

    <div class="login_box" style="width:75vw;padding-left:25rem;">
        <h3 style="padding-left:8rem;" class="intro">Kindly Enter Credentials To SignUp!</h3>
        <form class="row g-3 needs-validation" action="../functions/staff_signup.php" method="post" novalidate>
      `    <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Full name</label>
            <input type="text" class="form-control" id="validationCustom01" name="fullName" required>
                  <div class="invalid-feedback">
                        Please enter your full name.
                  </div>
            </div>
            <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Staff ID</label>
            <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">#</span>
                  <input type="text" class="form-control" id="validationCustomUsername" name="staffID" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                  Please enter a staff ID.
                  </div>
            </div>
            </div>
            
            <div class="col-md-8">
            <label for="validationCustom04" class="form-label">Department</label>
            <select class="form-select" id="validationCustom04" name="department" required>
                  <option selected disabled value="">Choose</option>
                  <option>Frontend</option>
                  <option>Backend</option>
                  <option>Cloud</option>
                  <option>DevOps</option>

            </select>
            <div class="invalid-feedback">
                  Please select a valid department.
            </div>
            </div>

            <div class="col-md-12">
            <label for="validationCustom03" class="form-label">Email</label>
            <input type="text" class="form-control" id="validationCustom03" name="email" required>
            <div class="invalid-feedback">
                  Please provide a valid email.
            </div>
            </div>

            <div class="col-md-6">
            <label for="validationCustom05" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationCustom05" name="password1" required>
            <div class="invalid-feedback">
                  Please provide a valid password.
            </div>
            </div>
            <div class="col-md-6">
            <label for="validationCustom05" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="validationCustom05" name="password2" required>
            <div class="invalid-feedback">
                  Please provide a valid password.
            </div>
            </div>
            <div class="col-12">
            <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                  Agree to terms and conditions
                  </label>
                  <div class="invalid-feedback">
                  You must agree before submitting.
                  </div>
            </div>
            </div>
            <div class="col-12">
            <button class="btn btn-primary" type="submit">Sign Up!</button>
            </div>
            </form>`
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