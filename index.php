<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://newsapi.org/v2/top-headlines?country=in&category=sports&apiKey=335c0e75fcf04cf18fbb1507f9ed273f',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
 $response = json_decode($response);
 
 ?>
 
 
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>News</title>
</head>

<body>
    <h1 style="text-align: center;">Top News</h1>
    <div class="container mt-5">
    <?php
    if($response->status == 'ok'){
        foreach($response->articles as $res){ ?>
            <div class="col-sm-12 my-3">
                <div class="card">
                    <h5 class="card-header"><?php echo $res->title; ?></h5>
                    <div class="card-body">
                        <div class="conatiner">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="card-text"><?php echo $res->description; ?></p>
                                    <a href="<?php echo $res->url; ?>" class="btn btn-primary">Read More!</a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?php echo $res->urlToImage; ?>" class="img-thumbnail" alt="<?php echo $res->urlToImage; ?>">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        <?php }
    }?>
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>





