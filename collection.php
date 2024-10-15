<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pinegrow Web Editor - Shop Bootstrap v5 Template">
    <meta name="author" content="">
    <title>Макс Дев</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/blocks.css">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/trash.css" rel="stylesheet">
</head>
<body>
    <?php
        include("header.php");
    ?>
    <div class="container pb-4 pt-4">
        <div class="align-items-center row">
                <div class="col">
                    <hr class="mb-0 mt-0"> 
                </div>
                <div class="col-auto">
                    <h2 class="fw-normal lead mb-0 text-dark">Коллекция</h2> 
                </div>
                <div class="col">
                    <hr class="mb-0 mt-0"> 
                </div>
        </div>
    </div>

    <section>
                <div class="container"> 
                    <div class="justify-content-center row"> 
                        <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                            <div> <a href="#" class="d-block mb-3"><img src="catalog/m1.jpeg" class="img-fluid w-100" alt="Product image" width="500" height="700"></a><a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none">Lego Ninjago</a><a href="#" class="link-dark text-decoration-none"><h3 class="h6">"Тренировочный центр ниндзя"</h3></a>
                                
                            <div><s class="me-2">₽ 25000</s><span class="h6 text-danger">₽ 17500</span><button class="add-to-cart-btn" data-id="1">
                                    <p class="text">В корзину</p>
                                </button>
                                </div>
                            </div>                             
                        </div>                         
                        <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                            <div><a href="#" class="d-block mb-3"><img src="catalog/m2.jpg" class="img-fluid w-100" alt="Product image" width="500" height="700"></a><a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none">Lego Ninjago</a><a href="#" class="link-dark text-decoration-none"><h3 class="h6">"Золотой ультрадракон Ллойда"</h3></a>
                                <div><s class="me-2">₽ 20000</s><span class="h6 text-danger">₽ 17500</span><button class="add-to-cart-btn" data-id="2">
                                    <p class="text">В корзину</p>
                                </button>
                                </div>                                 
                            </div>                             
                        </div>                         
                        <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                            <div> <a href="#" class="d-block mb-3"><img src="catalog/m4.jpg" class="img-fluid w-100" alt="Product image" width="500" height="700"></a><a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none">Lego City</a><a href="#" class="link-dark text-decoration-none"><h3 class="h6">"Побег из полицейского участка"</h3></a>
                                <div><s class="me-2">₽ 16500</s><span class="h6 text-danger">₽ 12500</span><button class="add-to-cart-btn" data-id="3">
                                    <p class="text">В корзину</p>
                                </button>
                                </div>                                 
                            </div>                             
                        </div>
                        <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                            <div> <a href="#" class="d-block mb-3"><img src="catalog/m5.jpg" class="img-fluid w-100" alt="Product image" width="500" height="700"></a><a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none">Lego City</a><a href="#" class="link-dark text-decoration-none"><h3 class="h6">"Железная дорога"</h3></a>
                                <div><span class="me-2">₽ 37600</span><button class="add-to-cart-btn" data-id="4">
                                    <p class="text">В корзину</p>
                                </button>
                                </div>                                 
                            </div>                             
                        </div>
                        <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                            <div> <a href="#" class="d-block mb-3"><img src="catalog/m3.jpg" class="img-fluid w-100" alt="Product image" width="500" height="700"></a><a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none">Lego Ninjago</a><a href="#" class="link-dark text-decoration-none"><h3 class="h6">"Каменный робот огня"</h3></a>
                                <div><span class="me-2">₽ 14500</span><button class="add-to-cart-btn" data-id="5">
                                    <p class="text">В корзину</p>
                                </button>
                                </div>                                 
                            </div>                             
                        </div>
                    </div>                     
                </div>                 
            </section>

        <div id="cart-header" class="container mt-5 pb-4 pt-4"><hr class="mb-0 mt-0"></div>

        <div id="cart" class="cart" style="display: none;">
              
        </div>

    <?php
        include("footer.php");
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $(".add-to-cart-btn").click(function(){
            var id = $(this).data("id");
            $.ajax({
                url: 'add_to_cart.php',
                type: 'post',
                data: {product_id: id},
                success: function(response){
                    alert(response);
                }
            });
        });
    });
    </script>


        <!--<script src="script/trash.js"></script>-->  
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>