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

<body class="text-gray-600 font-body">
    <?php include 'links/header.php';?>
    <section>
        <div class="cart-home-img">
            <img src="assets/image/banner-slide-product.jpg" width="100%" alt="">
        </div>
    </section>
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
        <div class="py-6  flex-col justify-center">
            <div class=" product-flat-cat  flex-row items-stretch justify-center w-full " x-data="{tab: 1}">
                <div class="col-span-12 mb-4 product-list-side menu ">
                    <ul class="flex menu--wrapper">
                        <li class="menu--item">
                            <a class="px-4 py-2 text-white uppercase  " :class="{'z-20 border-l-2 transform translate-x-2 border-white-500 font-bold': tab === 1, ' transform -translate-x-2': tab !== 1}" href="#" @click.prevent="tab = 1">
                                Item Product List I
                            </a>
                        </li>
                        <li class="menu--item">
                            <a class="px-4 py-2 text-white uppercase " :class="{'z-20 border-l-2 transform translate-x-2 border-white-500 font-bold': tab === 2, ' transform -translate-x-2': tab !== 2}" href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                                Item Product List II
                            </a>
                        </li>
                        <li class="menu--item">
                            <a class="px-4 py-2 text-white uppercase " :class="{'z-20 border-l-2 transform translate-x-2 border-white-500 font-bold': tab === 3, ' transform -translate-x-2': tab !== 3}" href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                                Item Product List III
                            </a>
                        </li>
                        <li class="menu--item">
                            <a class="px-4 py-2 text-white uppercase " :class="{'z-20 border-l-2 transform translate-x-2 border-white-500 font-bold': tab === 4, ' transform -translate-x-2': tab !== 4}" href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                                Item Product List IV
                            </a>
                        </li>
                        <li class="menu--item">
                            <a class="px-4 py-2 text-white uppercase " :class="{'z-20 border-l-2 transform translate-x-2 border-white-500 font-bold': tab === 5, ' transform -translate-x-2': tab !== 5}" href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                                Item Product List V
                            </a>
                        </li>
                        <li class="menu--item">
                            <a class="px-4 py-2 text-white uppercase " :class="{'z-20 border-l-2 transform translate-x-2 border-white-500 font-bold': tab === 6, ' transform -translate-x-2': tab !== 6}" href="#" @click.prevent="tab = 6" @click.prevent="tab = 6">
                                Item Product List VI
                            </a>
                        </li>
                        <li class="menu--item">
                            <a class="px-4 py-2 text-white uppercase " :class="{'z-20 border-l-2 transform translate-x-2 border-white-500 font-bold': tab === 7, ' transform -translate-x-2': tab !== 7}" href="#" @click.prevent="tab = 7" @click.prevent="tab = 7">
                                Item Product List VII
                            </a>
                        </li>
                        <li class="menu--item">
                            <a class="px-4 py-2 text-white uppercase " :class="{'z-20 border-l-2 transform translate-x-2 border-white-500 font-bold': tab === 8, ' transform -translate-x-2': tab !== 8}" href="#" @click.prevent="tab = 8" @click.prevent="tab = 8">
                                Item Product List VIII
                            </a>
                        </li>
                    </ul>

                </div>



                <div class="space-y-6" x-show="tab === 1">
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 lg:grid-col-4 gap-3 ">
                        <div class="item-product">
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

                        <div class="item-product">
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
                        <div class="item-product">
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
                        <div class="item-product">
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
                        <div class="item-product">
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
                        <div class="item-product">
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                                    </div>
                                    <div class="product_dist-bar">
                                        <span class="product-grid__title">Product title 1</span>
                                        <span class="product-grid__price">₹3.499</span>
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img.jpg" width="100%" alt="Img" class="product-grid__img" />
                                    </div>
                                    <div class="product_dist-bar">
                                        <span class="product-grid__title">Product title 1</span>
                                        <span class="product-grid__price">₹1.399</span>
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



                <div class="space-y-6" x-show="tab === 2">
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 lg:grid-col-4 gap-3 ">
                        <div class="item-product">
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
                        <div class="item-product">
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
                        <div class="item-product">
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
                        <div class="item-product">
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

                    </div>

                </div>

                <div class="space-y-6" x-show="tab === 3">
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 lg:grid-col-4 gap-3 ">
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img02.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img02.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img02.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img02.jpg" width="100%" alt="Img" class="product-grid__img" />
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

                <div class="space-y-6" x-show="tab === 4">
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 lg:grid-col-4 gap-3 ">
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img03.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img03.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img03.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img03.jpg" width="100%" alt="Img" class="product-grid__img" />
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

                <div class="space-y-6" x-show="tab === 5">
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 lg:grid-col-4 gap-3 ">
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img04.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img04.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img04.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img04.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                <div class="space-y-6" x-show="tab === 6">
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 lg:grid-col-4 gap-3 ">
                        <div class="item-product">
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
                        <div class="item-product">
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
                        <div class="item-product">
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
                        <div class="item-product">
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

                    </div>
                </div>
                <div class="space-y-6" x-show="tab === 7">
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 lg:grid-col-4 gap-3 ">
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img02.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img02.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img02.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img02.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                <div class="space-y-6" x-show="tab === 8">
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 lg:grid-col-4 gap-3 ">
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img03.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img03.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img03.jpg" width="100%" alt="Img" class="product-grid__img" />
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
                        <div class="item-product">
                            <div class="product-grid__product">
                                <a href="product_details.php">
                                    <div class="product-grid__img-wrapper">
                                        <img src="assets/image/product/product-list-img03.jpg" width="100%" alt="Img" class="product-grid__img" />
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
        </div>
    </div>


    <!-- footer html -->


    <?php include 'links/footer.php';?>
    <?php include 'links/script.php';?>
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