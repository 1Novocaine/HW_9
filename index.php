<?php   
include ('php/array.php');
include ('php/function.php');

$arrCurrency = [
  'UAH' => [
    'name' => 'Гривна',
    'course' => 1,
  ],
  'USD' => [
    'name' => 'Доллар',
    'course' => 27.1,
  ],
  'EUR' => [
    'name' => 'Евро',
    'course' => 30.2,
  ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="
         sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/background.css" rel="stylesheet">
    <title>Shop</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> Список товаров
        </a>
    </nav>
    <div class="background">
        <div class="container">
            <div class="card-deck">
                <div class="row">
                    <?php  foreach ($arrProducts as $key => $product):?>
                        <div class="col">
                            <div class="card text-white bg-dark border-danger ">
                                <img src="images/<?= $product ['image']?>.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="card-title"><b><?= $product['title'] ?></b></h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-white bg-dark border-danger">Цена:
                                        <?= $product['price'].' '. $product['currency'] ?>
                                    </li>
                                    <li class="list-group-item text-white bg-dark">Цена в UAH:
                                    <?= convertToUah($product['price'], $product['currency'], $arrCurrency)?>
                                    </li>
                                    <li class="list-group-item text-white bg-dark">Цена со скидкой:
                                    <?= caltulateDiscount($product['price'], $product['discountType'], $product['discountValue']).' '. $product['currency']?> 
                                    </li>
                                    <li class="list-group-item text-white bg-dark">
                                        <a href="<?= $product ['storeAddress']?>" class="card-link">
                                        <img src="images/<?= $product ['link']?>.jpg" width="85" height="40" alt="link"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    
<footer class="page-footer font-small teal pt-4">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <h5 class="text-uppercase font-weight-bold">Footer text 1</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil
          repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae
          harum esse fugiat. Itaque, culpa?</p>
      </div>
          <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-3">
        <h5 class="text-uppercase font-weight-bold">Footer text 2</h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum
          commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id
          excepturi hic.</p>
      </div>
    </div>
  </div>
 <div class="footer-copyright text-center py-3">
    <p>© 2019 Copyright:</p>
 </div>
</footer>

    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>



