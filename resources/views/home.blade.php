<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.landing')

@section('title')
{{$settings["general"]->site_title}}
@endsection


@section('content')
       <section id="information">
        <div class="restaurant-image">
            <img src="img/fire.jpg">
            <img src="img/basketball.jpg">
        </div>
        <div class="info">
            <h2>We Started From The Bottom In 1987 </h2>
            <div class="paragraphs">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias odit inventore atque qui debitis ducimus repellat deserunt laboriosam iure. Placeat natus voluptates sapiente molestias earum dolores maxime, nihil cumque dolore? </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias odit inventore atque qui debitis ducimus repellat deserunt laboriosam iure. Placeat natus voluptates sapiente molestias earum dolores maxime, nihil cumque dolore?</p>
            </div>
            <a href="/about" class="about-link">
                <span> More About Our Restaurant</span>
                <div class="circle-right"><i class="fas fa-chevron-right"></i></div>
            </a>
        </div>

    </section>
    <section id="food-preview">
        <h2>We Have Everything You Need For Your Space Journey</h2>
        <div class="button-rounded">View Our Menu</div>
        <div class="container">
            <!-- <div class="left-btn"><i class="fas fa-chevron-right" aria-hidden="true"></i></div>
            <div class="right-btn"><i class="fas fa-chevron-right" aria-hidden="true"></i></div> -->
             @include('includes.food-categories-slider')
        </div>
    </section>
@endsection