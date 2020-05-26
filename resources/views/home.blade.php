<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.landing')

@section('title')
{{$settings["general"]->site_title}}
@endsection


@section('content')
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
            <a href="/about" class="about-link">
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
                        <p class="food-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias odit inventore atque qui debitis ducimus repellat deserunt laboriosam iure. Placeat natus voluptates sapiente molestias earum dolores maxime, nihil cumque dolore?</p>
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
                        <p class="food-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias odit inventore atque qui debitis ducimus repellat deserunt laboriosam iure. Placeat natus voluptates sapiente molestias earum dolores maxime, nihil cumque dolore?</p><br>
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
                        <p class="food-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias odit inventore atque qui debitis ducimus repellat deserunt laboriosam iure. Placeat natus voluptates sapiente molestias earum dolores maxime, nihil cumque dolore?</p>
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
                        <p class="food-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias odit inventore atque qui debitis ducimus repellat deserunt laboriosam iure. Placeat natus voluptates sapiente molestias earum dolores maxime, nihil cumque dolore?</p>
                        <div class="food-image">
                            <img src="img/pasta.png">
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                        <div class="food-title">
                            Sweets
                        </div>
                        <p class="food-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias odit inventore atque qui debitis ducimus repellat deserunt laboriosam iure. Placeat natus voluptates sapiente molestias earum dolores maxime, nihil cumque dolore?</p>
                        <div class="food-image">
                            <img src="img/cheesecake.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection