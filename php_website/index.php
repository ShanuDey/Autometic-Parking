<?php 
  $file = 'temp_file';
  $content = unserialize(file_get_contents($file));
  //print_r($content);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="5">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Automatic Parking</title>
  </head>
  <body style="background-image: url('assets/parking.jpg')">
    <div class="container" style="margin-top: 120px">
      <div class="jumbotron jumbotron">
        <div class="container">
          <h1 class="display-4">Parking Status</h1>
          <div class="container" style="object-fit: contain;">
             <ul class="list-group">
                <li class="list-group-item">Slot 1: <?php print(isset($content["slot1"]) && $content['slot1']=='1'?"Occupied":"Vacant"); ?></li>
                <li class="list-group-item">Slot 2: <?php print(isset($content["slot2"]) && $content['slot2']=='1'?"Occupied":"Vacant"); ?></li>
                <li class="list-group-item">Slot 3: <?php print(isset($content["slot3"]) && $content['slot3']=='1'?"Occupied":"Vacant"); ?></li>
                <li class="list-group-item">Slot 4: <?php print(isset($content["slot4"]) && $content['slot4']=='1'?"Occupied":"Vacant"); ?></li>
                <li class="list-group-item">Slot 5: <?php print(isset($content["slot5"]) && $content['slot5']=='1'?"Occupied":"Vacant"); ?></li>
                <li class="list-group-item">Slot 6: <?php print(isset($content["slot6"]) && $content['slot6']=='1'?"Occupied":"Vacant"); ?></li>
              </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>