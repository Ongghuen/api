<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Suki | Sumber Rezeki</title>
    <link rel="icon" href="images/icon.png" sizes="32x32" />
    <link rel="icon" href="images/icon.png" sizes="192x192" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" />
    <link rel="apple-touch-icon" href="images/icon.png" />
    <meta name="msapplication-TileImage" content="images/icon.png" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
</head>

<body>
    <nav>
        <img src="{{asset('/images/logo2.png')}}" class="logo2" />
        <div class="header-right">
            <a href="#beranda" class="login-btn">Home</a>
            <a href="#services" class="login-btn">Services</a>
            <a href="#contact" class="login-btn">Contact Us</a>
            <a href="/login" class="login-btn">Login</a>
        </div>
    </nav>
    <section class="hero" id="beranda">
        <div class="content">
            <h1 class="anim">Mabel Sumber Rezeki</h1>
            <p>
                Suki merupakan aplikasi berbasis android yang kami kembangkan untuk
                membuat sebuah sistem informasi toko mabel.<br>
            </p>
            <p>
                Sistem informasi ini dapat
                membantu pelanggan dan owner dalam mengelola toko yang mereka miliki.<br>
            </p>
            <p>
                Dengan adanya sistem informasi ini, pembelian oleh pelanggan dapat
                dilakukan melalui aplikasi Suki yang dapat di akses dengan smartphone,<br>
            </p>
            <p>
                sedangkan pengelolaan produk dapat di lakukan oleh admin dengan
                dashboard berbasis website.
            </p>
            <br />
            <br>
            <a href="#" class="btn">
                Download Apk&nbsp;
                <i class="fa fa-mobile" aria-hidden="true"></i>
            </a>
        </div>
    </section>

    <section class="cobaaja services section" id="services">
        <div class="container">
            <div class="section-header">
                <h3 class="title">Our Services</h3>
                <p class="text">Berikut layanan yang bisa anda dapatkan di Suki</p>
            </div>

            <div class="cards">
                <div class="card-wrap">
                    <div class="card" data-card="">
                        <div class="card-content z-index">
                            <img src="{{asset('/images/quality.png')}}" class="icon" alt="" />
                            <h3 class="title-sm">Quality Furniture</h3>
                            <p class="text">
                                Kami menyediakan berbagai macam furniture kebutuhan anda
                                dengan kualitas terbaik dan berani bersaing dengan merek
                                produk furniture lainya.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-wrap">
                    <div class="card" data-card="">
                        <div class="card-content z-index">
                            <img src="{{asset('/images/custom.png')}}" class="icon" alt="" />
                            <h3 class="title-sm">Custom Furniture</h3>
                            <p class="text">
                                Kami selalu siap dan bersedia untuk membuatkan model furniture
                                yang anda inginkan. Tim kami siap memberikan kebutuhan yang
                                anda inginkan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-wrap">
                    <div class="card" data-card="">
                        <div class="card-content z-index">
                            <img src="{{asset('/images/delivery.png')}}" class="icon" alt="" />
                            <h3 class="title-sm">Fast delivery</h3>
                            <p class="text">
                                Para customer tidak perlu bingung dalam mengirim barang mereka
                                yang telah dibeli. Suki siap melayani pengiriman barang anda
                                hingga sampai tepat didepan rumah anda dengan secepat kilat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact bg-contact" id="contact">
        <div class="content-contact anim">
            <h2 class="title">Contact Us</h2>
        </div>
        <div class="container-contact anim">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon-contact">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <div class="text-contact">
                        <h3>Address</h3>
                        <p>Jl. Pahlawan 1 No.228 Jember - Sumberasih</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon-contact"><i class="fa-solid fa-phone"></i></div>
                    <div class="text-contact">
                        <h3>Phone</h3>
                        <p>081 231 897 839</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon-contact"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text-contact">
                        <h3>Email</h3>
                        <p>suki@com.id</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon-contact"><i class="fa-solid fa-link"></i></div>
                    <div class="text-contact">
                        <h3>Web</h3>
                        <p>sukuapp.co.id</p>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4235048790615!2d113.7209983146976!3d-8.160015494126558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sState%20Polytechnic%20of%20Jember!5e0!3m2!1sen!2sid!4v1666341633806!5m2!1sen!2sid" width="500" height="375" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer>
        <div class="container">
            <img src="{{asset('/images/logo2.png')}}" class="logo2" /><br><br>
            <p>
                Copyright©
                <script>
                    document.write(new Date().getFullYear());
                </script>
                Sumber Rezeki II, All rights reserved.
            </p>
        </div>
    </footer>
</body>

</html>