<?php ?>

<!DOCTYPE html>
<html lang="en" >

<!-- login function -->



<!-- login function -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Personal Website </title>

    <!-- material icon cdn -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    <!-- montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- SWIPER JS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- iconscout cdn -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.5/css/unicons.css">

    <!-- stylesheet -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <nav>

        <div class="container">
            <a href="#">
                <h3>MUSIC KICK</h3>
            </a>
            <ul>
                <li><a href="#" class="active">Services</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#videos">Video</a></li>
                <li><a href="#skills">Preference</a></li>
                <li><a href="#services">Artist</a></li>
                <li><a href="#portfolio">Live Streams</a></li>
                <li><a href="#ratings">Rating</a></li>
                <li><a href="#contact">Contact us</a></li>

            </ul>
            <button id="menu-btn"><span class="material-icons-sharp">menu</span></button>
            <button id="close-btn"><span class="material-icons-sharp">close</span></button>

        </div>
    </nav>
    <!--=================== end fo navbar =======================-->
   
    <!--=================== end fo navbar =======================-->

    <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        img:hover {
          animation: shake 0.5s;
          animation-iteration-count: infinite;
        }
        
        @keyframes shake {
          0% { transform: translate(1px, 1px) rotate(0deg); }
          10% { transform: translate(-1px, -2px) rotate(-1deg); }
          20% { transform: translate(-3px, 0px) rotate(1deg); }
          30% { transform: translate(3px, 2px) rotate(0deg); }
          40% { transform: translate(1px, -1px) rotate(1deg); }
          50% { transform: translate(-1px, 2px) rotate(-1deg); }
          60% { transform: translate(-3px, 1px) rotate(0deg); }
          70% { transform: translate(3px, 1px) rotate(-1deg); }
          80% { transform: translate(-1px, -1px) rotate(1deg); }
          90% { transform: translate(1px, 2px) rotate(0deg); }
          100% { transform: translate(1px, -2px) rotate(-1deg); }
        }
        </style>
        </head>
        <body>
        
        
        </body>
        </html>
        
    <!--=================== end fo login =======================-->


    <section class="landing">
        <div class="container">
            <div class="socials">
                <a href="https://www.facebook.com/encik.zahir.3" target="_blank"><i class="uil uil-facebook-f"></i></a>
                <a href="https://twitter.com/muhdzahir407" target="_blank"><i class="uil uil-twitter"></i></i></a>
                <a href="https://www.instagram.com/zahirsssss/" target="_blank"><i
                        class="uil uil-instagram"></i></i></a>

            </div>

            <div class="info">
                <h1>Find your perfect music wherever you are</h1>
                <h3>What’s streaming worldwide?</h3>
                <p>Live from their sofa to yours. Get closer to your favourite artist, and never miss out.</p>
                <a href="#contact" class="btn btn-primary">Find a live stream</a>

            </div>

            <div class="profile-area">
                <div class="outer-circle">
                    <span class="material-icons-sharp">design_services</span>
                    <span class="material-icons-sharp">dns</span>
                    <span class="material-icons-sharp">code</span>
                    <span class="material-icons-sharp">integration_instructions</span>
                </div>
                <div class="inner-circle">
                    <img src="./image/b.jpg">
                </div>

            </div>
        </div>
    </section>
    <!-- ================= end of landing =====================-->


    <section class="about" id="about">


<h1>About</h1>
<div class="container">
    <div class="image">
        <img src="./image/a.jpg">
    </div>
    <div class="info">
        <h3>I guess it’s a funny story when a hobby that’s not really a hobby becomes something viable!</h3>
        <p>I first started the music genres list site in 2009, registered the domain in 2010, and built the
            first list of what at the time was THE definitive list of music genres.</p>
        <div class="read-more-content">
            <p>Fast forward to 2012 and I hadn’t really updated the site, was attracting lots of Google search
                engine traffic, so decided to open up the information to the larger Internet public for
                contributions to help build and maintain a list of music genres that would be crowd-sourced,
                up-to-date and available free for teachers, scholars and “average Joes” to download. The hope is
                that this is useful for education, information and a bit of trivia fun.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime qui natus explicabo sequi quae,

            </p>
        </div>


        <a class="read-more">Show more</a>
        <a href="./image/projectinstruction.pdf" download class="btn btn-primary"><i
                class="uil uil-download-alt"></i>Download the genre list </a>
    </div>
</div>
</section>

<!-- ======================== end of about =============================== -->

    <section class="videos" id="videos">   
        <h1>Favourite Video</h1>
        <div class="container">
            
            <div class="video">
                
                <span class="material-icons-sharp">star</span>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/YykjpeuMNEk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>Coldplay</h3>
                <p>Coldplay are a British rock band formed in London in 1996. They consist of vocalist and pianist Chris
                    Martin, guitarist Jonny Buckland, bassist Guy Berryman, drummer Will Champion and creative director
                    Phil Harvey.</p>
            </div>

            <div class="video">
                <span class="material-icons-sharp">star</span>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/RzB6JlEVYcQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>Green Day</h3>
                <p>Green Day is an American rock band formed in the East Bay of California in 1987 by lead vocalist and
                    guitarist Billie Joe Armstrong and bassist and backing vocalist Mike Dirnt. </p>
            </div>

            <div class="video">
                <span class="material-icons-sharp">star</span>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6coRP9XoZpI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>Ed Sheeran</h3>
                <p>Ed Sheeran is an English singer-songwriter. Born in Halifax, West Yorkshire and raised in
                    Framlingham, Suffolk, he began writing songs around the age of eleven. </p>
            </div>


            <div class="video">
                <span class="material-icons-sharp">star</span>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3EMskGIxC0s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>Lisa Blackpink</h3>
                <p>Ed Sheeran is an English singer-songwriter. Born in Halifax, West Yorkshire and raised in
                    Framlingham, Suffolk, he began writing songs around the age of eleven. </p>
            </div>

            <div class="video">
                <span class="material-icons-sharp">star</span>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/57pNO_uFi0I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>Peterpen</h3>
                <p>Ed Sheeran is an English singer-songwriter. Born in Halifax, West Yorkshire and raised in
                    Framlingham, Suffolk, he began writing songs around the age of eleven. </p>
            </div>

            <div class="video">
                <span class="material-icons-sharp">star</span>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OYdQBiGrdfo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>Bulan Sutena</h3>
                <p>Ed Sheeran is an English singer-songwriter. Born in Halifax, West Yorkshire and raised in
                    Framlingham, Suffolk, he began writing songs around the age of eleven. </p>
            </div>
        </div>
    </section>





    <!-- ================= end of video =====================-->








    <section class="skills" id="skills">
        <h1>Audience preference</h1>
        <div class="container">
            <div class="skill">
                <div class="head">
                    <div class="left">
                        <span class="material-icons-sharp">design_services</span>
                        <h4>Jazz</h4>
                    </div>
                    <!-- <span class="material-icons-sharp">expand_more</span> -->
                    <span class="right">
                        <i class="uil uil-angle-down"></i>
                    </span>
                </div>

                <div class="items">

                    <div class="item">
                        <h5>Cool Jazz</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>92%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Early Jazz</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>88%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Funk Jazz</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>75%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Free Jazz</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>65%</h5>
                        </div>
                    </div>
                    <!-- end of item -->

                </div>
            </div>

            <div class="skill">
                <div class="head">
                    <div class="left">
                        <span class="material-icons-sharp">design_services</span>
                        <h4>Metal</h4>
                    </div>
                    <span class="right">
                        <i class="uil uil-angle-down"></i>
                    </span>
                </div>

                <div class="items">

                    <div class="item">
                        <h5>Heavy Metal</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>92%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Black Metal</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>88%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Hardcore</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>75%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Deathcore</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>65%</h5>
                        </div>
                    </div>
                    <!-- end of item -->

                </div>
            </div>


            <div class="skill">
                <div class="head">
                    <div class="left">
                        <span class="material-icons-sharp">design_services</span>
                        <h4>Rock</h4>
                    </div>
                    <span class="right">
                        <i class="uil uil-angle-down"></i>
                    </span>
                </div>

                <div class="items">

                    <div class="item">
                        <h5>Hard Rock</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>92%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Trip Hop</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>88%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Post Rock</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>75%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Root Rock</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>65%</h5>
                        </div>
                    </div>
                    <!-- end of item -->

                </div>
            </div>

            <div class="skill">
                <div class="head">
                    <div class="left">
                        <span class="material-icons-sharp">design_services</span>
                        <h4>Classical</h4>
                    </div>
                    <span class="right">
                        <i class="uil uil-angle-down"></i>
                    </span>
                </div>

                <div class="items">

                    <div class="item">
                        <h5>Ballet</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>92%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Medieval</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>88%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Opera</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>75%</h5>
                        </div>
                    </div>
                    <!-- end of item -->
                    <div class="item">
                        <h5>Sonata</h5>
                        <div class="progress-area">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                            <h5>65%</h5>
                        </div>
                    </div>
                    <!-- end of item -->

                </div>
            </div>

            <!-- end of skill-->
        </div>
    </section>
    <!-- ====================== end of skill =================================== -->



    <section class="services" id="services">
        <h1>Artist Leaderboards</h1>
        <div class="container">
            <div class="service">
                <span class="material-icons-sharp">star</span>
                <h3>Coldplay</h3>
                <p>Coldplay are a British rock band formed in London in 1996. They consist of vocalist and pianist Chris
                    Martin, guitarist Jonny Buckland, bassist Guy Berryman, drummer Will Champion and creative director
                    Phil Harvey.</p>
            </div>

            <div class="service">
                <span class="material-icons-sharp">star</span>
                <h3>Green Day</h3>
                <p>Green Day is an American rock band formed in the East Bay of California in 1987 by lead vocalist and
                    guitarist Billie Joe Armstrong and bassist and backing vocalist Mike Dirnt. </p>
            </div>

            <div class="service">
                <span class="material-icons-sharp">star</span>
                <h3>Ed Sheeran</h3>
                <p>Ed Sheeran is an English singer-songwriter. Born in Halifax, West Yorkshire and raised in
                    Framlingham, Suffolk, he began writing songs around the age of eleven. </p>
            </div>
        </div>
    </section>

    <!-- ================= END OF SERVICES ========================= -->

    <section class="recent-work" id="portfolio">
        <div class="container">
            <h4>Upcoming Live Stream </h4>
            <h1>Live  Streaming</h1>
            <div class="projects">
                <div class="project">
                    <div class="thumbnail">
                        <img src="./image/a.jpg">
                    </div>
                    <h2>ROCK MUSIC</h2>
                    <p>From the Filmore to Woodstock, from small clubs to stadiums, from classic rock to punk, heavy
                        metal and more, you'll get lost in our collection of rock concert recordings. Hear Rock Hall od
                        Fame legends, great bands that never made it big, and the best rock bands of today.</p>
                    <div class="action">
                        
                        <a href="https://www.twitch.tv/leekbeats" target="blank">Live Streaming </a>
                    </div>
                </div>

                <!-- END OF PROJECT -->
                <div class="projects">
                    <div class="project">
                        <div class="thumbnail">
                            <img src="./image/b.jpg">
                        </div>
                        <h2>JAZZ MUSIC</h2>
                        <p>From the Filmore to Woodstock, from small clubs to stadiums, from classic rock to punk, heavy
                            metal and more, you'll get lost in our collection of rock concert recordings. Hear Rock Hall
                            od Fame legends, great bands that never made it big, and the best rock bands of today.</p>
                        <div class="action">
                            
                            <a href="https://www.twitch.tv/kubomusic" target="blank">Live Streaming </a>
                        </div>
                    </div>
                </div>
                <!-- END OF PROJECT -->
                <div class="projects">
                    <div class="project">
                        <div class="thumbnail">
                            <img src="./image/c.jpg">
                        </div>
                        <h2>COUNTRY MUSIC </h2>
                        <p>From the Filmore to Woodstock, from small clubs to stadiums, from classic rock to punk, heavy
                            metal and more, you'll get lost in our collection of rock concert recordings. Hear Rock Hall od
                            Fame legends, great bands that never made it big, and the best rock bands of today.</p>
                        <div class="action">
                            
                            <a href="https://www.twitch.tv/relaxbeats" target="blank">Live Streaming </a>
                        </div>
                    </div>
                </div>

                <!-- END OF PROJECT -->
                <div class="projects">
                    <div class="project">
                        <div class="thumbnail">
                            <img src="./image/d.jpg">
                        </div>
                        <h2>FOLK MUSIC</h2>
                        <p>From the Filmore to Woodstock, from small clubs to stadiums, from classic rock to punk, heavy
                            metal and more, you'll get lost in our collection of rock concert recordings. Hear Rock Hall od
                            Fame legends, great bands that never made it big, and the best rock bands of today.</p>
                        <div class="action">
                            
                            <a href="https://egatortutorials.com" target="blank">Live Streaming </a>
                        </div>
                    </div>
                </div>
                <!-- END OF PROJECT -->
            </div>

            <!-- ========== END OF PROJECT ==========-->
        </div>
    </section>

    <!-- ======================== END OF RECENT WORK (PORTFOLIO) ============================-->


    <section class="testimonials" id="ratings">
        <h1>Music Ratings </h1>
        <div class="container swiper">
            <div class="carousel swiper-wrapper">
                <div class="testimonial swiper-slide">
                    <div class="head">
                        <div class="profile-area">
                            <div class="avatar">
                                <img src="./image/Studio-Headshots-LinkedIn.jpg">
                            </div>
                            <div class="info">
                                <h4>ZAHIR</h4>
                                <small>Civil Engineer (soviel.com)</small>
                            </div>
                        </div>
                        <div class="stars">
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quisquam odio molestias eum, sint
                        porro libero error adipisci quis temporibus facilis! At aspernatur architecto animi quasi
                        nostrum nesciunt repellat fuga.
                    </p>

                </div>
                
              

                <!-- END OF TESTIMONIAL -->

                <div class="testimonial swiper-slide">
                    <div class="head">
                        <div class="profile-area">
                            <div class="avatar">                                
                                <img src="./image/OIP (1).jpg">
                            </div>
                            <div class="info">
                                <h4>PUTERI</h4>
                                <small>CTO (sika.org</small>
                            </div>
                        </div>
                        <div class="stars">
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quisquam odio molestias eum, sint
                        porro libero error adipisci quis temporibus facilis! At aspernatur architecto animi quasi
                        nostrum nesciunt repellat fuga.
                    </p>
                    
                </div>

                <!-- END OF TESTIMONIAL -->
                <div class="testimonial swiper-slide">
                    <div class="head">
                        <div class="profile-area">
                            <div class="avatar">
                                <img src="./image/OIP.jpg">
                            </div>
                            <div class="info">
                                <h4>RAFIQ</h4>
                                <small>Student (KNUST)</small>
                            </div>
                        </div>
                        <div class="stars">
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quisquam odio molestias eum, sint
                        porro libero error adipisci quis temporibus facilis! At aspernatur architecto animi quasi
                        nostrum nesciunt repellat fuga.
                    </p>
                </div>

                <!-- END OF TESTIMONIAL -->
                <div class="testimonial swiper-slide">
                    <div class="head">
                        <div class="profile-area">
                            <div class="avatar">
                                <img src="./image/Studio-Headshots-LinkedIn.jpg">
                            </div>
                            <div class="info">
                                <h4>NABIL</h4>
                                <small>CTO (sika.org</small>
                            </div>
                        </div>
                        <div class="stars">
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quisquam odio molestias eum, sint
                        porro libero error adipisci quis temporibus facilis! At aspernatur architecto animi quasi
                        nostrum nesciunt repellat fuga.
                    </p>
                    
                </div>

                <!-- END OF TESTIMONIAL -->

                

            </div>

            
            <!-- <div class="swiper-pagination"></div -->
            <div class="swiper-scollbar">
            </i>Slide to see others ->  </a>
                <div class="swiper-scrollbar-drag">
                
                </div>
            </div>
        </div>
    </section>

    <!-- ================================ END OF TESTIMONIAL ================================ -->

    <section class="contact" id="contact">
        <div class="overlay">
            <div class="container">
                <h1>Contact us</h1>
                <p>Call 011-56643673 - MR. ZAHIR</p>
                <form action="https://formspree.io/f/xeqnzlaj" method="POST">
                    <input type="text" name="Name" placeholder="Name" required>
                    <input type="email" name="Email" placeholder="Email" required>
                    <input type="text" name="Subject" placeholder="Subject" required>
                    <textarea name="Message" placeholder="Message" required></textarea>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>

    <!-- ================================ END OF CONTACT ================================ -->





    <footer>
        <div class="container">
            <a href="#">
                <h3>Music Kick</h3>
            </a>
            <ul>
                <li><a href="#">Services</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#videos">video</a></li>              
                <li><a href="#skills">Preference</a></li>
                <li><a href="#services">Artist</a></li>
                <li><a href="#portfolio">Live Streams</a></li>
                <li><a href="#ratings">Rating</a></li>
                <li><a href="#contact">Contact us</a></li>

                
                
            </ul>
            <div class="socials">
                <a href="https://www.facebook.com/encik.zahir.3" target="_blank"><i class="uil uil-facebook-f"></i></a>
                <a href="https://twitter.com/muhdzahir407" target="_blank"><i class="uil uil-twitter"></i></i></a>
                <a href="https://www.instagram.com/zahirsssss/" target="_blank"><i
                        class="uil uil-instagram"></i></i></a>

            </div>
        </div>
        <div class="copyright">
          ~ CREATED BY ZAHIR ~
        </div>
    </footer>


    <!-- SWIPER JS -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="./main.js"></script>



</body>

</html>


