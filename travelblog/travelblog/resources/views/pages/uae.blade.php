@extends('main')

@section('title', "The UAE")

@section('stylesheets')

        .background-img {
            background: url(images/dubai.jpg)
        }

        #social-media {
            left: -25px;
            top: 190px;
            display:flex;
            flex-direction: column;
        }

        .blockquote h3:after {
            left: 50px;
            top: 155px;
        }

@endsection
    @section('content')
        <div class="background-img">
            <div id="header-text">
                <h1>{{ $h1 }}</h1>
            </div>
        </div>
    </header>

    <section id="general">
        <div id="social-media">
            <a href="https://www.facebook.com/inna.soldier" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="http://instagram.com/inna_soldier" class="fa fa-instagram"></a>
        </div>
        <div id="info-heading"><h2>One of the richest countries in the world</h2></div>
        <div id="info">
            <div id="image1"><img src="images/barasti.jpg" alt="Barasti beach Dubai" width="403" height="504"/></div>
            <div id="info-text"><p>The United Arab Emirates (or UAE) has grown from an empty desert to one of the most
                    impressive and dramatic countries in the world. Thankfully to the big amount of oil found 50 years ago, the country
                    is expected to continue growing with enormous speed.
                    The UAE consist of seven independent emirates, which are Abu Dhabi (the capital), Dubai, Ajman, Fujairah,
                    Ras al Khaimah, Sharjah, and Umm al Quwain. </p>
                <p>The country is known for its luxury hotels, beaches, shopping malls and attracts more and more tourists every year. </p>
                <p>The technology and infrastructure are quite impressive. Dubai has the longest driverless metro system in the world. </p>
            </div>
        </div>
    </section>

    <section id="quote">
        <div class="blockquote-wrapper">
            <div class="blockquote">
                <h3>The world's tallest building is
                    <span style="color:#ffffff"> the Burj Khalifa</span>. The skyscraper is <span style="color:#ffffff">828 meters</span> high.
                </h3>
                <h4>&mdash; the Guinness Book of World Records<br></h4>
            </div>
        </div>
    </section>

    <section id="posts">
        <div id="posts-heading"><h2>Recent Posts</h2></div>
        <div id="posts-par">I've been leaving and working in the UAE for more than a year and I can say for sure that this is one of the
            most open-minded and friendly country for work experience. It is a home for over than 200 nationalities.
            Emiratis constitute only 20% of the total population, making UAE home to one of the world's highest percentage of immigrants.
            The safety and technology are on the highest level, which is making life in UAE extremely comfortable.
        </div>
        <div id="posts-container"> <!-- "wrapper" for 3 posts -->

            <div class="posts-item"> <!-- post 1 -->
                <img src="images/mosque.jpg" alt="Sheikh Zayed Mosque" width="250" height="168"/>
                <div class="item-description">
                    <div class="item-heading"><h3>Top 3 places to visit <br/>in Abu Dhabi</h3></div>
                    <p>If you have only one day to explore the capital of UAE (which isnot Dubai, by the way) it is more than enough to visit the most popular tourist attractions:
                        Sheikh Zayed Grand mosque, The Louvre and Emirates Palace. </p>
                </div>
            </div>

            <div class="posts-item"> <!-- post 2 -->
                <img src="images/lamer.jpg" alt="La Mer Beach Dubai" width="250" height="168"/>
                <div class="item-description">
                    <div class="item-heading"><h3>Best Beaches in Dubai: <br /> Updated</h3></div>
                    <p>The weather in Dubai is just fantastic for those who loves spending time at the beach.
                        Find out more about the best public and private beaches in Dubai, and the best time to visit the country.</p>
                </div>
            </div>

            <div class="posts-item"> <!-- post 3 -->
                <img src="images/fairmont.jpg" alt="Fairmont Dubai Hotel" width="250" height="168"/>
                <div class="item-description">
                    <div class="item-heading"><h3>How to find a job in UAE:<br/> Step by step Guide</h3></div>
                    <p>Staying in UAE without having a job may be pretty expensive due to the high price for an appartment rent.
                        However, most of the employers provide you with the accomodation. Find out more about job opportunities in UAE.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
