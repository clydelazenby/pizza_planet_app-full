<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/app.css">
        <script src="https://kit.fontawesome.com/b13a54d819.js" crossorigin="anonymous"></script>
        
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <section id="welcome">
        <div class="welcome-menu">
            <div class="logo">
                <img src="https://cdn.clipart.email/e07e234760ce1954118f8fc00f0239a8_toy-story-pizza-planet-logos_900-900.jpeg">
            </div>
            <div class="menu">
                <div class="menu-title">
                    Menu
                </div>
                <ul class="links">
                    <li><a href="#">Menu</a></li>
                    <li>
                        <a href="#">Waitlist</a>
                    </li>
                    <li>
                        <a href="#">Giftcards</a>
                    </li>
                    <li>
                        <a href="#">Offers</a>
                    </li>
                </ul>
            </div>
            <div class="social-icons">

                <a href="www.facebook.com"><i class="fab fa-facebook-square"></i></a>
                <a href="www.twitter.com"><i class="fab fa-twitter-square"></i></a>
                <a href="www.instagram.com"><i class="fab fa-instagram-square"></i></a>
            </div>
            <div class="location">
                <div class="address">
                    1234 Main St <br> New York, New York 11747
                </div>
                <div class="phone-number">
                    <a href="tel:7048675309">704-867-5309</a>
                </div>
            </div>
        </div>
        <div class="welcome-jumbo">
            <div class="status">New</div>
            <h1>Galaxy Pizza</h1>
            <img src="https://www.freepnglogos.com/uploads/pizza-png/derwent-park-pizza-5.png" class="pizza">
        </div>
    </section>
    <section id="information">
        <div class="restaurant-image">
            <img src="img/inside.jpg">
        </div>
        <div class="info">
            <h2>We Started From The Bottom In 1987 </h2>
            <div class="paragraphs">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias odit inventore atque qui debitis ducimus repellat deserunt laboriosam iure. Placeat natus voluptates sapiente molestias earum dolores maxime, nihil cumque dolore? </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias odit inventore atque qui debitis ducimus repellat deserunt laboriosam iure. Placeat natus voluptates sapiente molestias earum dolores maxime, nihil cumque dolore?</p>
            </div>
            <a href="#" class="about-link">
                <span> More about our restaurants</span>
                <div class="circle-right"><i class="fas fa-chevron-right"></i></div>
            </a>
        </div>

    </section>
    <section id="food-preview">
        <h2>We Have everything you need for your space journey</h2>
        <div class="button-rounded">View Our Menu</div>
        <div class="container">
            <!-- <div class="left-btn"><i class="fas fa-chevron-right" aria-hidden="true"></i></div>
            <div class="right-btn"><i class="fas fa-chevron-right" aria-hidden="true"></i></div> -->
            <div class="food-slider">

                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                        <div class="food-title">
                            Wings
                        </div>
                        <p class="food-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus qui earum ducimus explicabo exercitationem dicta, obcaecati libero iste veritatis quas illum dignissimos vel blanditiis, excepturi fugiat unde enim odit ipsum.</p>
                        <div class="food-image">
                            <img src="img/wings.png">
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                        <div class="food-title">
                            Pizza
                        </div>
                        <p class="food-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus qui earum ducimus explicabo exercitationem dicta, obcaecati libero iste veritatis quas illum dignissimos vel blanditiis, excepturi fugiat unde enim odit ipsum.</p>
                        <div class="food-image">
                            <img src="img/pizzamay.png">
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                        <div class="food-title">
                            Salad
                        </div>
                        <p class="food-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus qui earum ducimus explicabo exercitationem dicta, obcaecati libero iste veritatis quas illum dignissimos vel blanditiis, excepturi fugiat unde enim odit ipsum.</p>
                        <div class="food-image">
                            <img src="img/salad.png">
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                        <div class="food-title">
                            Pasta
                        </div>
                        <p class="food-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus qui earum ducimus explicabo exercitationem dicta, obcaecati libero iste veritatis quas illum dignissimos vel blanditiis, excepturi fugiat unde enim odit ipsum.</p>
                        <div class="food-image">
                            <img src="img/pasta.png">
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                        <div class="food-title">
                            Cheesecake
                        </div>
                        <p class="food-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus qui earum ducimus explicabo exercitationem dicta, obcaecati libero iste veritatis quas illum dignissimos vel blanditiis, excepturi fugiat unde enim odit ipsum.</p>
                        <div class="food-image">
                            <img src="img/cheesecake.png">
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                        <div class="food-title">
                            Pasta
                        </div>
                        <p class="food-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus qui earum ducimus explicabo exercitationem dicta, obcaecati libero iste veritatis quas illum dignissimos vel blanditiis, excepturi fugiat unde enim odit ipsum.</p>
                        <div class="food-image">
                            <img src="img/pasta.png">
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                        <div class="food-title">
                            Pasta
                        </div>
                        <p class="food-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus qui earum ducimus explicabo exercitationem dicta, obcaecati libero iste veritatis quas illum dignissimos vel blanditiis, excepturi fugiat unde enim odit ipsum.</p>
                        <div class="food-image">
                            <img src="img/pasta.png">
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                        <div class="food-title">
                            Pasta
                        </div>
                        <p class="food-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus qui earum ducimus explicabo exercitationem dicta, obcaecati libero iste veritatis quas illum dignissimos vel blanditiis, excepturi fugiat unde enim odit ipsum.</p>
                        <div class="food-image">
                            <img src="img/pasta.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/dist/vendors~FirstComp.js"></script>
    <script src="/js/dist/FirstComp.js"></script>
    <script src="/js/dist/main.js"></script>
</body>

</html>
