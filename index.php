<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Basic Calculetor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <?php 
        include('main.php');
    ?> 

    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-header">Basic Calculator With PHP</div>
                    <div class="card-body">
                        <form action="" method="POST">
                        <div class="form-group mb-3">
                        <div class="bg-light bordered py-3 text-center fw-bold"><?php echo myClaculetor(); ?></div>
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" name="fristNumber" placeholder="Enter Your Number" class="form-control" require>
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" name="secondNumber" placeholder="Enter Your Number" class="form-control" require>
                        </div>
                        <select name="options"  class="form-control mb-3" require>
                            <option value="">Select Options</option>
                            <option value="Addition">(+) Addition</option>
                            <option value="Mainaus">(-) Mainaus</option>
                            <option value="stou">(*) Stou</option>
                            <option value="Divide">(/) Divide</option>
                            <option value="Modulas">(%) Modulas</option>
                        </select>
                        <button type="submit" class="btn btn-primary btn-block">Enter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
