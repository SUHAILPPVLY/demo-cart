<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="Demo Web">
    <meta name="facebook-domain-verification" content="Demo Web" />
    <title>The E-Commerce Web Site</title>

    <?php include 'links/style.php';?>

</head>

<body class="text-gray-600 font-body  min-h-screen">
    <?php include 'links/header.php';?>
    <section>
        <div class="cart-home-img">
            <img src="assets/image/banner-image-arrival.jpg" width="100%" alt="">
        </div>
    </section>
    <div class="container mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-2 sm:py-5 md:py-5 gap-3 lg:py-14">
            <div class="about-our-dist">
                <div class="about-des">
                    <h2>About us</h2>
                    <span></span>
                    <h4>Start Your Fashion Journey </h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
            </div>
            <div class="about-our-img">
                <img src="assets/image/about-us-part.png" width="100%" alt="">
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="grid">
            <div class="col-span-12 py-6">
                <div class="pro-duc-head text-center">
                    <h3>Our Products</h3>
                    <span></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-1 sm:grid-cols-1 gap-3">
            <div class="owl-carousel owl-theme" id="owl-demo01">
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container mx-auto lg:pb-20 md:pb-10 sm:pb-10">
        <div class="grid grid-cols-1 md:grid-cols-1 sm:grid-cols-1 gap-3">
            <div class="owl-carousel owl-theme" id="owl-demo02">
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img01.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-product">
                    <div class="product-grid__product">
                        <a href="product_details.php">
                            <div class="product-grid__img-wrapper">
                                <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                            </div>
                            <div class="product_dist-bar">
                                <span class="product-grid__title">Product title 1</span>
                                <span class="product-grid__price">₹1.499</span>
                            </div>
                        </a>
                        <div class="product-grid__extend-wrapper">
                            <div class="product-grid__extend">
                                <div class="page-wrapper">
                                    <button class="addtocart" class="product-grid__btn">
                                        <i class="fa fa-cart-arrow-down"></i>
                                          <h6> Add to Cart </h6>
                                        </button>
                                </div>
                                <div class="wtas-app">
                                    <a target="_blank" href="https://wa.me/+91 99496123123" class="product-grid__btn product-grid__view">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <h6> Whatsapp </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- footer html -->


    <?php include 'links/footer.php';?>
    <?php include 'links/script.php';?>
    <script>
        $(document).ready(function() {
            var owl = $("#owl-demo01");

            owl.owlCarousel({
                autoPlay: true,
                responsive: true,
                items: 6, //10 items above 1000px browser width
                itemsDesktop: [1024, 4], //5 items between 1024px and 901px
                itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0;
                itemsMobile: [320, 1],
                navigation: true,
                slideSpeed: 500,
                pagination: true,
                navigation: false,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var owl = $("#owl-demo02");

            owl.owlCarousel({
                autoPlay: true,
                responsive: true,
                items: 6, //10 items above 1000px browser width
                itemsDesktop: [1024, 4], //5 items between 1024px and 901px
                itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0;
                itemsMobile: [320, 1],
                navigation: true,
                slideSpeed: 500,
                pagination: true,
                navigation: false,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.addtocart').on('click', function() {

                var button = $(this);
                var cart = $('#cart');
                var cartTotal = cart.attr('data-totalitems');
                var newCartTotal = parseInt(cartTotal) + 1;

                button.addClass('sendtocart');
                setTimeout(function() {
                    button.removeClass('sendtocart');
                    cart.addClass('shake').attr('data-totalitems', newCartTotal);
                    setTimeout(function() {
                        cart.removeClass('shake');
                    }, 500)
                }, 1000)
            })
        })
    </script>


</body>

</html>