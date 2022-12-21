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
<body>
    <div class="container">
<div class="row my-4 justify-content-center align-content-center" >
<div class="col-4 d-flex p-4 justify-content-center align-content-center" >
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-14-finish-select-202209-6-1inch-blue?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1661026582322" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Iphone</h5>
          <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero officiis beatae ducimus minus quae. Ex id sed cupiditate beatae rerum magni incidunt nulla et fuga? Illo maiores praesentium in aliquam.</p>
          <form action='https://test.payu.in/_payment' method='post'>
            <input type="hidden" name="key" value="gtKFFx" />
            <input type="hidden" name="txnid" value="{{ $txn }}" />
            <input type="hidden" name="productinfo" value="iPhone" />
            <input type="hidden" name="amount" value="10" />
            <input type="hidden" name="email" value="test@gmail.com" />
            <input type="hidden" name="firstname" value="Ashish" />
            <input type="hidden" name="lastname" value="Kumar" />
            <input type="hidden" name="surl" value="{{ route('success') }}" />
            <input type="hidden" name="furl" value="{{ route('fail') }}" />
            <input type="hidden" name="hash" value="{{ $hash }}" />
    <input type="hidden" name="phone" value="1234567890">
            {{-- <input > --}}
          <button type="submit" value="submit" class="btn btn-primary">Buy Now</button>
        </form>

        </div>
      </div>

</div>
</div>

        <!-- JavaScript Bundle with Popper -->


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
