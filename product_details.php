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
            <img src="assets/image/banner-slide-product_more.jpg" width="100%" alt="">
        </div>
    </section>
    <div class="container mx-auto">
        <div class="grid">
            <div class="col-span-12 py-6">
                <div class="pro-duc-head text-center">
                    <h3> Products Details </h3>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-2 gap-3 md:py-16 sm:py-5 ">
            <div class="product-dem">
                <div class="our-view_pdt">
                    <div id="my-carousel" class="owl-carousel">
                        <div class="item owl-list">
                            <img src="assets/image/product-view/product-view-img_01.jpg" width="100%" alt="">
                        </div>
                        <div class="item owl-list">
                            <img src="assets/image/product-view/product-view-img_02.jpg" width="100%" alt="">
                        </div>
                        <div class="item owl-list">
                            <img src="assets/image/product-view/product-view-img_03.jpg" width="100%" alt="">
                        </div>
                        <div class="item owl-list">
                            <img src="assets/image/product-view/product-view-img_04.jpg" width="100%" alt="">
                        </div>
                        <div class="item owl-list">
                            <img src="assets/image/product-view/product-view-img_05.jpg" width="100%" alt="">
                        </div>
                    </div>

                    <div class="navigation-img-wrapper">
                        <div class="navigator" data-item="0"><img src="assets/image/product-view/fashion-img_01.jpg" alt=""> </div>
                        <div class="navigator" data-item="1"><img src="assets/image/product-view/fashion-img_02.jpg" alt=""></div>
                        <div class="navigator" data-item="2"><img src="assets/image/product-view/fashion-img_03.jpg" alt=""></div>
                        <div class="navigator" data-item="3"><img src="assets/image/product-view/fashion-img_04.jpg" alt=""></div>
                        <div class="navigator" data-item="4"><img src="assets/image/product-view/fashion-img_05.jpg" alt=""></div>
                    </div>

                </div>
            </div>

            <div class="product-varriable px-5">
                <h3 class="font-bold text-2xl mb-4 uppercase">Product Name</h3>

                <div class="product_discription pt-3">
                    <h5 class="text-gray-700 font-bold">Description</h5>
                    <p class="py-2 text-justify text-zinc-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-2 gap-3">
                    <div class="">
                        <p class="qty">
                            <label for="qty">Quantity:</label>
                            <button class="qtyminus" aria-hidden="true">&minus;</button>
                            <input type="number" name="qty" id="qty" min="1" max="10" step="1" value="1">
                            <button class="qtyplus" aria-hidden="true">&plus;</button>
                        </p>
                    </div>
                    <div class="">
                        <div class="product-rate inline-flex">
                            <span class="mr-2 text-gray-900 font-bold">Price: $139.00</span>
                            <span class="product-line line-through text-zinc-300 ">$10.00</span>
                        </div>
                    </div>


                </div>
                <form action="/index.php">
                    <div class="grid md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-2 gap-3">
                        <div class="from-ded  my-1">
                            <label for="text">Name :</label>
                            <input type="text" placeholder="Name" class="input-textfield">
                        </div>
                        <div class="from-ded  my-1">
                            <label for="text">Place :</label>
                            <input type="text" placeholder="Enter Place" class="input-textfield">
                        </div>
                        <div class="from-ded  my-1">
                            <label for="text">Mobile Number :</label>
                            <input type="number" placeholder="Mobile Number" class="input-textfield">
                        </div>
                        <div class="from-ded  my-1">
                            <label for="text">Discription :</label>
                            <input type="text" placeholder="Message" class="input-textfield">
                        </div>
                    </div>
                </form>
                <div class="w-full">
                    <div class="flex my-5">
                        <div class="product_link-wt text-center mx-4 md:w-6/12 sm:w-full lg:w-full">
                            <a target="_blank" href="https://wa.me/+919846145123">
                                <i class="fa fa-whatsapp"></i>Whatsapp</a>
                        </div>
                        <div class="product_link-call text-center mx-4 md:w-6/12 sm:w-full lg:w-full">
                            <a href="tel:+91 9846145123"><i class="fa fa-phone" aria-hidden="true"></i>
                                    +91 9846145123 </a>
                        </div>
                    </div>
                </div>


            </div>



        </div>


    </div>


    <!-- footer html -->

    <?php include 'links/footer.php';?>
    <?php include 'links/script.php';?>
    <script src="assets/js/product-qty.js"></script>
    <script>
        $(document).ready(function() {
            $("#my-carousel").on("initialized.owl.carousel", function() {
                $(".navigator").eq(0).addClass("active");
                console.log("initialized");
            });

            $("#my-carousel").owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                nav: true,
                navText: [
                    '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
                    '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'
                ],
                singleItem: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }

                }
            });

            $("#my-carousel").on("changed.owl.carousel", function(ev) {
                var item_index = ev.page.index;
                $(".navigator").removeClass("active").eq(item_index).addClass("active");
            });

            $(".navigator").on("click", function() {
                var item_no = $(this).data("item");
                $("#my-carousel").trigger("to.owl.carousel", [item_no, 1000, true]);
            });
        });
    </script>


</body>

</html>