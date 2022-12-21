<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body style="height: 100vh; width:100vw" class="d-flex justify-content-center align-content-center">

<div class="col-8 d-flex p-4 justify-content-center align-content-center" >
    <div class="card " style="width: 100%; height:auto">
        {{-- <img class="card-img-top" src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-14-finish-select-202209-6-1inch-blue?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1661026582322" alt="Card image cap"> --}}
        <div class="card-body  d-flex  flex-column justify-content-center align-items-center">
          <h5 class="card-title text-success">Payment Success</h5>
          <p class="card-text">TXN Id: {{ $txm }} & Amount: {{ $amount }}</p>


        </div>
      </div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
