<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Practice Run</title>
</head>
<body>
<div class="container">
    <div class="card">
  <form action="formhandler.php" method="post" >
    <label class="col-sm-2 col-form-label col-form-label-lg" for="firstname">Firstname:</label><br>
    <input class="form-control form-control-lg" id="firstname" type="text" name="firstname"  placeholder="Firstname..." required> <br>

    <label class="col-sm-2 col-form-label col-form-label-lg" for="lastname">Lastname:</label><br>
    <input class="form-control form-control-lg" id="lastname" type="text" name="lastname"  placeholder="Lastname..." required> <br>

    
    
    <Label class="col-sm-2 col-form-label col-form-label-lg" for="height"> Height:</Label><br>
    <input class="form-control form-control-lg" id="height" type="text" name="height" placeholder="In Meters" required><br>
    
    <Label class="col-sm-2 col-form-label col-form-label-lg" for="height"> Weight:</Label><br>
    <input class="form-control form-control-lg" id="weight" type="text" name="weight" placeholder="In Kilogram" required><br>
    
    
    <div class="d-grid gap-2 col-6 mx-auto">
    <button type="submit" class="btn btn-outline-success btn-lg">Submit</button>
    </div>

    </div>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>