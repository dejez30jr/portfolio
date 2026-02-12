<!DOCTYPE html>
<html lang="en">

<head>
    <!-- SEO -->
    <meta charset="UTF-8">
    <link href="aset/logodz" rel="icon" type="image/png">
    <meta name="google-site-verification" content="ZPK7r7EAXAWqKyQV1mwk7baoOwL-xh9skyA716kZn5g" />
    <meta property="og:title" content="personal portfolio">
    <meta property="og:description" content="personal portfolio">
    <meta property="og:image" content="aset/logodz">
    <meta property="og:url" content="https://derish.hanzmanagement.com">
    <meta name="description" content="hallo saya deris, web devolopment dari jurusan rpl di smk nurul iman" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deris hanggoro | Web Devolopment</title>

    <!-- link libary, framework dll -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <?php
    include "components/nav.html";
    ?>
    <!-- content utama hero section -->

    <!-- Quote icon rocket -->
    <div class="rocket">
        <i class="fa-solid fa-code"></i>
    </div>

    <main>
        <!-- herosection -->
        <section class="hero-section" id="home">
            <div class="text-hero">
                <h1>Hallo, i am derish</h1>
                <h1>Web developer</h1>
            </div>
            <img src="aset/deris.webp" alt="derisdev" loading="lazy">
            <!--<div class="img-shadow"></div>-->
        </section>

        <!-- pemog langgue -->
        <div class="pemrograman-container">
            <div class="pemrograman-track">
                <!-- Baris pertama -->
                <div class="pemrograman-card">HTML</div>
                <div class="pemrograman-card">CSS</div>
                <div class="pemrograman-card">JavaScript</div>
                <div class="pemrograman-card">Node.js</div>
                <div class="pemrograman-card">Bootstrap</div>
                <div class="pemrograman-card">Tailwind</div>
                <div class="pemrograman-card">PHP</div>
                <div class="pemrograman-card">Laravel</div>
                <div class="pemrograman-card">Filament</div>
                <div class="pemrograman-card">MySQL</div>

                <!-- Ulangan konten untuk loop -->
                <div class="pemrograman-card">HTML</div>
                <div class="pemrograman-card">CSS</div>
                <div class="pemrograman-card">JavaScript</div>
                <div class="pemrograman-card">Node.js</div>
                <div class="pemrograman-card">Bootstrap</div>
                <div class="pemrograman-card">Tailwind</div>
                <div class="pemrograman-card">PHP</div>
                <div class="pemrograman-card">Laravel</div>
                <div class="pemrograman-card">Filament</div>
                <div class="pemrograman-card">MySQL</div>
            </div>
        </div>

        <!-- about section -->
        <section class="about-section" id="about" data-aos="fade-up" data-aos-duration="1000">
            <div class="about-judul">
                <h1>About Me</h1>
            </div>
            <div class="about-text">
                <p>As a web developer, I have experience and expertise in front-end, back-end development, and interface
                    design (UI/UX).
                    I focus on creating effective, neat, responsive, and user-friendly digital solutions.</p>
                <div class="quote-about">
                    <i class="fa-solid fa-quote-right"></i>
                </div>
            </div>
        </section>

        <!-- our sertifikat -->
        <section class="sertifikat-section" data-aos="fade-up" data-aos-duration="1000" id="sertifikat">
            <div class="judul-sertifikat">
                <h1>Awards</h1>
            </div>
            <div class="accordion-wrapper">
                <div class="accordion-container">
                    <div class="accordion-item" data-img="img1">
                        <div class="accordion-header">
                            Sertifikat ke 1
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="accordion-content">
                            Sertifikat Olimpiade TIK-informatika nasional VI yang di selenggarakan oleh IGTIK PGRI
                            berlokasi di ICE BSD TANGGERANG 2024
                        </div>
                    </div>

                    <div class="accordion-item" data-img="img2">
                        <div class="accordion-header">
                            Sertifikat ke 2
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="accordion-content">
                            Sertifikat Mini course RevoU.id "INTRO TO SOFTWERE ENGGINER" 2024
                        </div>
                    </div>

                    <div class="accordion-item" data-img="img3">
                        <div class="accordion-header">
                            Sertifikat ke 3
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="accordion-content">
                            Sertifikat Mini course Edspert.id "Jadi web developer dari nol banget" 2024
                        </div>
                    </div>
                </div>
                <!-- Gambar -->
                <img src="aset/serti1.jpg" id="img1" class="hover-image" loading="lazy">
                <img src="aset/serti2.jpg" id="img2" class="hover-image" loading="lazy">
                <img src="aset/serti3.jpg" id="img3" class="hover-image" loading="lazy">
            </div>
        </section>

        <!-- Experience -->
        <div class="wrap">
            <section class="pengalaman-section" data-aos="fade-up" data-aos-duration="1000" id="Experience">
                <div class="judul-Experience">
                    <h1>Experience</h1>
                </div>

                <div class="grid">
                    <!-- PKL -->
                    <article class="exp-card">
                        <div class="exp-left">
                            <div class="icon-wrap">🏢</div>
                            <time style="color:white;">2025</time>
                        </div>
                        <div class="exp-body">
                            <h3 style="color:white;">Web Developer (PT Karamel Kreativindo)</h3>
                            <div class="role" style="color:white;">Praktik Kerja Lapangan</div>
                            <p style="color:white;">
                            <ul id="exp-list">
                                <li>Participated in developing websites including news portals, company profiles, and
                                    e-commerce platforms.</li>
                                <li class="hidden-li">Designed and implemented responsive user interfaces (UI) to
                                    improve user experience.
                                </li>
                                <li class="hidden-li">Collaborated with the IT team to understand real company workflow
                                    and project
                                    development processes.</li>
                            </ul>
                            <button id="read-more-btn"
                                style="background-color: transparent; border: none; color: white; margin-top:8px;">👉Read
                                More</button>
                            </p>
                            <div class="tags">
                                <span class="tag">Php</span>
                                <span class="tag">Html</span>
                                <span class="tag">css</span>
                                <span class="tag">Mysql</span>
                            </div>
                        </div>
                    </article>

                    <!-- Freelance -->
                    <article class="exp-card">
                        <div class="exp-left">
                            <div class="icon-wrap">💻</div>
                            <time style="color:white;">2024</time>
                        </div>
                        <div class="exp-body">
                            <h3 style="color:white;">Freelance Web Developer</h3>
                            <div class="role" style="color:white;">Freelance</div>
                            <div class="role" style="color:white;"></div>
                            <ul id="exp-list2">
                                <li>Developed multiple websites, including company profiles and various other types of
                                    projects.</li>
                                <li class="hidden-li">Structured website content, designed visual layouts, and handled
                                    hosting deployment.</li>
                                <li class="hidden-li">Delivered client projects independently with professional
                                    standards and attention to detail.</li>
                            </ul>
                            <button id="read-more-btn2"
                                style="background-color: transparent; border: none; color: white; margin-top:8px;">👉Read
                                More</button>
                            </p>
                            <div class="tags">
                                <span class="tag">Node.js</span>
                                <span class="tag">tailwind</span>
                                <span class="tag">Filament</span>
                                <span class="tag">Laravel</span>
                                <span class="tag">Hosting</span>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Vendor -->
                    <article class="exp-card">
                        <div class="exp-left">
                            <div class="icon-wrap">💻</div>
                            <time style="color:white;">2025</time>
                        </div>
                        <div class="exp-body">
                            <h3 style="color:white;">Web Developer (Neuron Production)</h3>
                            <div class="role" style="color:white;">Vendor Team</div>
                            <div class="role" style="color:white;"></div>
                            <ul id="exp-list2">
                                <li>Collaborated with a professional vendor team to develop and maintain client websites and digital products.</li>
      <!--<li>Handled front-end and back-end development, ensuring responsive and high-performance results.</li>-->
      <!--<li>Managed project timelines and client communication for successful delivery.</li>-->
                            </ul>
                            <!--<button id="read-more-btn2"-->
                            <!--    style="background-color: transparent; border: none; color: white; margin-top:8px;">👉Read-->
                            <!--    More</button>-->
                            <!--</p>-->
                            <div class="tags">
                                <span class="tag">Node.js</span>
                                <span class="tag">tailwind</span>
                                <span class="tag">Filament</span>
                                <span class="tag">Laravel</span>
                                <span class="tag">Hosting</span>
                            </div>
                        </div>
                    </article>
                    
                    
                </div>
            </section>
        </div>

        <!-- portfolio sectioin -->
        <section class="portfolio-section" id="portfolio" data-aos="fade-up" data-aos-duration="1000">
            <div class="judul-portfolio">
                <h1>Our Works</h1>
                <!-- <a href="DZ_portfolio.php">View more</a> -->
            </div>
            <!--<div class="card-portfolio card-popup">-->
            <!--    <a href="https://kurbanpedalaman.shop">-->
            <!--        <img src="aset/porto1.avif" alt="">-->
            <!--        <div class="overlay-portfolio">-->
            <!--            <h3>Kurban Pedalaman</h3>-->
            <!--            <p>Online platform for purchasing and managing sacrificial livestock</p>-->
            <!--            <span>-->
            <!--                <p>Html5</p>-->
            <!--                <p>Css</p>-->
            <!--                <p>js</p>-->
            <!--            </span>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->
            <div class="card-portfolio card-popup">
                <a href="https://bantuinonline.com/">
                    <img src="aset/bo.webp" alt="">
                    <div class="overlay-portfolio">
                        <h3>BantuinOnline</h3>
                        <p>BantuInOnline adalah layanan konsultasi digital yang membantu bisnis berkembang melalui strategi pemasaran, solusi teknologi, dan perencanaan bisnis. Kami mendukung optimasi pemasaran, pemilihan dan implementasi sistem TI, serta analisis pasar untuk keputusan bisnis yang lebih tepat.</p>
                        <span>
                            <p>laravel</p>
                            <p>Tailwind</p>
                            <p>Filament</p>
                            <p>Web-devoloper</p>
                        </span>
                    </div>
                </a>
            </div>
            <div class="card-portfolio card-popup">
                <a href="https://sustainarra.com">
                    <img src="aset/porto8.avif" alt="">
                    <div class="overlay-portfolio">
                        <h3>Sustainarra</h3>
                        <p>(sustainarra.com) adalah inisiatif ekonomi sirkular otomotif milik Stellantis yang berfokus pada keberlanjutan melalui remanufaktur, reuse, repair, dan recycling, namun perlu peningkatan transparansi data dan konsistensi branding.</p>
                        <span>
                            <p>laravel</p>
                            <p>Tailwind</p>
                            <p>Filament</p>
                            <p>Web-devoloper</p>
                        </span>
                    </div>
                </a>
            </div>
            <div class="card-portfolio card-popup">
                <a href="https://smknuruliman.sch.id">
                    <img src="aset/nuri.avif" alt="">
                    <div class="overlay-portfolio">
                        <h3>SMK NURUL IMAN</h3>
                        <p>This school website is designed with a modern and responsive interface, equipped with admin access to manage teacher and staff data, as well as website content through an easy-to-use CMS system. Administrators can easily add or update information such as news, announcements, and school profiles. In addition, the system includes a visitor statistics feature to monitor the number of people accessing the website, allowing the school to efficiently manage and optimize its digital presence.</p>
                        <span>
                            <p>laravel</p>
                            <p>Tailwind</p>
                            <p>Filament</p>
                            <p>Web-devoloper</p>
                        </span>
                    </div>
                </a>
            </div>
            <div class="card-portfolio card-popup">
                <a href="https://hanzmanagement.com">
                    <img src="aset/porto2.webp" alt="" loading="lazy">
                    <div class="overlay-portfolio">
                        <h3>HM Company Profil</h3>
                        <p>modern company profile website to showcase services and portfolio with responsive design.</p>
                        <span>
                            <p>Tailwind</p>
                            <p>Laravel</p>
                            <p>front-end</p>
                        </span>
                    </div>
                </a>
            </div>
            <div class="card-portfolio card-popup">
                <a href="https://halojakarta.info">
                    <img src="aset/porto3.png" alt="" loading="lazy">
                    <div class="overlay-portfolio">
                        <h3>halojakarta</h3>
                        <p>A news portal website that provides the latest news and information about Jakarta and its
                            surroundings.</p>
                        <span>
                            <p>Php</p>
                            <p>Html</p>
                            <p>css</p>
                            <p>Mysql</p>
                            <p>Fullstack</p>
                        </span>
                    </div>
                </a>
            </div>
            <div class="card-portfolio card-popup">
                <a href="https://sertifikathalal.fun">
                    <img src="aset/porto7.avif" alt="" loading="lazy">
                    <div class="overlay-portfolio">
                        <h3>Sertifikat Halal</h3>
                        <p>Website for checking halal certification status online</p>
                        <span>
                            <p>Html5</p>
                            <p>Php</p>
                            <p>Mysql</p>
                            <p>Css</p>
                            <p>js</p>
                            <p>front-end</p>
                        </span>
                    </div>
                </a>
            </div>
            </div>
        </section>

        <!-- footer -->
        <?php
        include "components/footer.html";
        ?>
    </main>

    <script>
        //  hero quote icon
        const rocket = document.querySelector(".rocket");

        window.addEventListener("scroll", () => {
            const y = window.scrollY;

            // Gerak vertikal + horizontal nyerong (geser kanan makin tinggi)
            const offsetY = y * 0.5; // naik
            const offsetX = y * 1; // nyerong kanan
            const rotate = y * 0.2;  // muter

            // Fade
            const opacity = 1 - y / 1000;

            rocket.style.transform = `translate(calc(-50% + ${offsetX}px), ${offsetY}px) rotate(${rotate}deg)`;
            rocket.style.opacity = opacity > 0 ? opacity : 0;
        });

        // read more pengalaman
        document.getElementById('read-more-btn').addEventListener('click', function () {
            document.querySelectorAll('#exp-list .hidden-li').forEach(function (li) {
                li.style.display = 'list-item';
            });
            this.style.display = 'none';
        });
        document.getElementById('read-more-btn2').addEventListener('click', function () {
            document.querySelectorAll('#exp-list2 .hidden-li').forEach(function (li) {
                li.style.display = 'list-item';
            });
            this.style.display = 'none';
        });

        // sertifikat
        const items = document.querySelectorAll('.accordion-item');
        const images = document.querySelectorAll('.hover-image');

        items.forEach(item => {
            item.addEventListener('mouseenter', () => {
                const imgId = item.getAttribute('data-img');
                const img = document.getElementById(imgId);
                const rect = item.getBoundingClientRect();
                const wrapperRect = document.querySelector('.accordion-wrapper').getBoundingClientRect();

                // Set posisi gambar berdasarkan posisi card
                img.style.top = (rect.top - wrapperRect.top - img.offsetHeight - 10) + 'px';
                img.style.left = (rect.right - wrapperRect.left - img.offsetWidth) + 'px';

                // Tampilkan gambar yang sesuai
                images.forEach(i => {
                    if (i === img) {
                        i.style.opacity = '1';
                        i.style.transform = 'translateY(0) scale(1)';
                    } else {
                        i.style.opacity = '0';
                        i.style.transform = 'translateY(-20px) scale(0.9)';
                    }
                });
            });

            item.addEventListener('mouseleave', () => {
                images.forEach(img => {
                    img.style.opacity = '0';
                    img.style.transform = 'translateY(-20px) scale(0.9)';
                });
            });

            item.addEventListener('click', () => {
                items.forEach(i => {
                    if (i !== item) {
                        i.classList.remove('active');
                    }
                });
                item.classList.toggle('active');
            });
        });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>