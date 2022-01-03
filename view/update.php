<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <title>Update Employee</title>

    
  </head>
  <body>
    <div class="container container-custom" style="width:85vw;padding-left:12rem;padding-top:5rem;">
        <h1>Update Staff Info</h1>
        <form class="row g-3" id="form" style="padding-bottom:10rem;" action= "../functions/staff_update.php?id=<?= $_GET['id'] ?>" method="POST" >
                <div class="col-12">
                    <label for="inputName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="updateName">
                </div>
                <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" name="updateEmail">
                </div>
                <div class="col-12">
                  <label class="form-label">Department</label>
                  <select class="form-select"  name="updateDepartment" required>
                        <option selected disabled value="">Choose</option>
                        <option>Frontend</option>
                        <option>Backend</option>
                        <option>Cloud</option>
                        <option>DevOps</option>
                  </select>
                </div>
                <br><br>
            <input type="submit" class="btn btn-primary" name="submitBtn" value="Update" />
        </form>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
