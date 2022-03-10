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
            <img src="assets/image/banner-slide-contact.jpg" width="100%" alt="">
        </div>
    </section>
    <div class="container mx-auto">
        <div class="grid">
            <div class="col-span-12 py-6">
                <div class="pro-duc-head text-center">
                    <h3>Contact us</h3>
                    <span></span>
                </div>
            </div>
        </div>
    </div>



    <div class="container mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-2 gap-3 py-16">
            <div class="alow-contact">
                <form action="/action_page.php">
                    <div class="grid grid-cols-2 gap-3">
                        <input type="text" class="form-sum" placeholder="Name*" required>
                        <input type="text" class="form-sum" placeholder="Email*" required>
                        <input type="text" class="form-sum" placeholder="Mobile Number" required>
                        <input type="text" class="form-sum" placeholder="Place" required>
                    </div>
                    <div class="grid grid-cols-1 gap-3">
                        <textarea class="text-area" placeholder="Message Here...." required></textarea>
                    </div>
                    <div class="grid grid-cols-1 gap-3 text-center">
                        <div class="submit-now">
                            <button>Submit Now</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="located-pin">
                <div class="px-24 md:px-15 sm:px-24 lg:10 md:text-center">
                    <ul class="contact-center">
                        <li>
                            <div class="md:flex my-4 sm:block lg:flex">
                                <div class="cal-back">
                                    <img src="assets/icon/call-us.png" alt="">
                                </div>
                                <div class="te-asa_wewe">
                                    <a href="tel:+91 9846010101">+91 9846010101</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="md:flex my-4 sm:block lg:flex">
                                <div class="cal-back">
                                    <img src="assets/icon/mail-info.png" alt="">
                                </div>
                                <div class="te-asa_wewe">
                                    <a href="mailto:info@gmail.com">info@gmail.com</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="md:flex my-4 sm:block lg:flex">
                                <div class="cal-back">
                                    <img src="assets/icon/location.png" alt="">
                                </div>
                                <div class="te-asa_wewe">
                                    <span>In publishing and graphic design</span>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mx-auto mb-5">
        <div class="grid grid-cols-1">
            <div class="i-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125417.66681769583!2d76.58386673647038!3d10.788159228490278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba86dfa087d31ad%3A0xf542d6eb7a870a56!2sPalakkad%2C%20Kerala!5e0!3m2!1sen!2sin!4v1646477090478!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!-- footer html -->


    <?php include 'links/footer.php';?>
    <?php include 'links/script.php';?>



</body>

</html>