<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Suki - Sumber Rezeki</title>
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
        <img src="../assets/images/logo2.png" class="logo2" />
        <div>
            <a href="./index.view.php" class="login-btn">Home</a>
            <a href="./login.view.php" class="login-btn">Login</a>
            <a href="#" class="btn">Download App</a>
        </div>
    </nav>
    <section class="anjay">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="../assets/video/video2.mp4" type="video/mp4" />
        </video>
        <div class="content-atas anim">
            <h1 class="anim">Suki App</h1>
            <a href="#">Pelayanan Anda Adalah Prioritas Kami</a>
        </div>
    </section>

    <section class="hero">
        <div class="content">
            <h1 class="anim">Mabel<br />Sumber Rezeki</h1>
            <p class="anim">
                Suki merupakan aplikasi berbasis android yang kami kembangkan untuk
                membuat sebuah sistem informasi toko mabel. Sistem informasi ini dapat
                membantu pelanggan dan owner dalam mengelola toko yang mereka miliki.
                Dengan adanya sistem informasi ini, pembelian oleh pelanggan dapat
                dilakukan melalui aplikasi Suki yang dapat di akses dengan smartphone,
                sedangkan pengelolaan produk dapat di lakukan oleh admin dengan
                dashboard berbasis website.
            </p>
            <div class="sosial anim">
                <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                <a href=""><i class="fa-brands fa-square-twitter"></i></a>
                <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                <a href=""><i class="fa-brands fa-square-youtube"></i></a>
            </div>
            <br />
            <a href="#" class="btn anim">Download App</a>
        </div>
        <img src="../assets/images/iniaja.png" class="feature-img anim" />
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
                            <img src="../assets//images/quality.png" class="icon" alt="" />
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
                            <img src="../assets/images/custom.png" class="icon" alt="" />
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
                            <img src="../assets/images/delivery.png" class="icon" alt="" />
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

    <section class="gallery gallery-bg">
        <div class="content-gallery anim">
            <h2 class="title">Photo Gallery</h2>
        </div>
        <input class="input-anjay" type="radio" name="Photos" id="check1" checked />
        <input class="input-anjay" type="radio" name="Photos" id="check2" />
        <input class="input-anjay" type="radio" name="Photos" id="check3" />
        <input class="input-anjay" type="radio" name="Photos" id="check4" />
        <input class="input-anjay" type="radio" name="Photos" id="check5" />

        <div class="container-photo">
            <div class="menunya">
                <label for="check1">All Photo</label>
                <label for="check2">Kursi</label>
                <label for="check3">Kasur</label>
                <label for="check4">Lemari</label>
                <label for="check5">Meja</label>
            </div>

            <div class="photo-gallery">
                <div class="pic kasur">
                    <img src="../assets/images/kasur.jpeg" />
                </div>
                <div class="pic kasur">
                    <img src="../assets/images/kasur2.jpg" />
                </div>
                <div class="pic lemari">
                    <img src="../assets/images/lemari.png" />
                </div>
                <div class="pic lemari">
                    <img src="../assets/images/lemari2.jpg" />
                </div>
                <div class="pic kursi">
                    <img src="../assets/images/kursi.jpeg" />
                </div>
                <div class="pic kursi">
                    <img src="../assets/images/kursi2.jpg" />
                </div>
                <div class="pic meja">
                    <img src="../assets/images/meja.jpeg" />
                </div>
                <div class="pic meja">
                    <img src="../assets/images/meja2.jpg" />
                </div>
            </div>
        </div>
    </section>

    <section class="contact bg-contact">
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4235048790615!2d113.7209983146976!3d-8.160015494126558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sState%20Polytechnic%20of%20Jember!5e0!3m2!1sen!2sid!4v1666341633806!5m2!1sen!2sid" width="400" height="300" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="grid-4">
                <div class="grid-4-col footer-about">
                    <h3 class="title-sm">About</h3>
                    <p class="text">
                        Suki - Mebel Sumber Rezeki merupakan toko yang bergerak pada
                        bidang furniture. Produk kami berani bersaing dengan produk
                        furniture lainya.
                    </p>
                </div>

                <div class="grid-4-col footer-links">
                    <h3 class="title-sm">Links</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="contact-us.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="login.html">Admin Login</a>
                        </li>
                    </ul>
                </div>

                <div class="grid-4-col footer-links">
                    <h3 class="title-sm">Services</h3>
                    <ul>
                        <li>
                            <a href="#">Quiality Furnitre</a>
                        </li>
                        <li>
                            <a href="#">Custom Furniture</a>
                        </li>
                        <li>
                            <a href="#">Fast Delivery</a>
                        </li>
                    </ul>
                </div>

                <div class="grid-4-col footer-newstletter">
                    <h3 class="title-sm">Subscribe</h3>
                    <p class="text">
                        Anda ingin mendapatkan berita terbaru mengenai produk kami,
                        langgganan sekarang.
                    </p>
                    <div class="footer-input-wrap">
                        <input type="email" class="footer-input" placeholder="Email" />
                        <a href="#" class="input-arrow">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bottom-footer">
                <div class="copyright">
                    <p class="text">
                        Copyright&copy;2022 All rights reserved | Made by
                        <span>Suki App</span>
                    </p>
                </div>

                <div class="followme-wrap">
                    <div class="followme">
                        <h3>Follow me</h3>
                        <span class="footer-line"></span>
                        <div class="social-media">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                    <div class="back-btn-wrap">
                        <a href="#" class="back-btn">
                            <i class="fas fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>