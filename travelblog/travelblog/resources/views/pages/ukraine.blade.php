@extends('main')

@section('title', "Ukraine")

@section('stylesheets')

        .background-img {
            background: url(images/ukraine-header.jpg);
            background-repeat: no-repeat;
        }

        .blockquote {
            max-width: 720px;
        }

        .blockquote h3:after {
            left: 50px;
            top: 190px;
        }

        #social-media {
            left: -25px;
            top: 200px;
            display: flex;
            flex-direction: column;
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
        <div id="info-heading"><h2>Explore the beauty of my Homeland</h2></div>
        <div id="info">
            <div id="image1"><img src="images/ukraine.jpg" alt="Vovchansk in Ukraine" width="400" height="515"/></div>
            <div id="info-text">
                <p>The biggest country in the Europe and its geographical centre is Ukraine, while France is number two in the land size.</p>
                <p>Wheat, sunflower seeds and oil play a large part in Ukrainian history. The country was once known as the breadbasket of Europe,
                    owing to its large agricultural industry. About 71 percent of the country's surface is used for agricultural activities.
                </p>
                <p>Natural scenery of Ukraine is breathtaking. The country is surrounded by the waters of the Black Sea and the Sea of Azov.
                    It is also quite rich for rivers, forests. Numerous waterfalls and lakes are located in both inthe Carpathian and Crimean Mountains.
                </p>
            </div>
        </div>
    </section>

    <section id="quote">
        <div class="blockquote-wrapper">
            <div class="blockquote">
                <h3>From the 18th to 20th centuries, <span style="color:#ffffff"> Russia and the Soviet Union</span>
                    carried out a program of Russification to discourage <span style="color:#ffffff">Ukrainian national identity</span>.
                </h3>
                <h4>&mdash; a fact from history<br></h4>
            </div>
        </div>
    </section>

    <section id="posts">
        <div id="posts-heading"><h2>Recent Posts</h2></div>
        <div id="posts-par">Ukraine is a home to seven <strong>World Heritage Sites</strong>, including the 11th century
            Saint-Sophia Cathedral in Kiev, the ancient city of Chersonesus, and the forests and mountains of the Carpathians.
            Find out more interesting information from my recent blog posts.
        </div>
        <div id="posts-container">

            <div class="posts-item">
                <img src="images/ukr-post1.jpg" alt="Lviv street" width="250" height="168"/>
                <div class="item-description">
                    <div class="item-heading"><h3>Best of the Cities</h3></div>
                    <p>Kyiv - modern and diverse capital of Ukraine, Kharkiv city - home of vagabonds and poets, Odesa - a major tourism center
                        and seaport. Lviv - the heart and sole of the country where people will treat you with varenyky, coffee and chocolate. </p>
                </div>
            </div>

            <div class="posts-item">
                <img src="images/ukr-post2.jpg" alt="Cathedral in Lviv" width="250" height="168"/>
                <div class="item-description">
                    <div class="item-heading"><h3>Top 10 Cathedrals</h3></div>
                    <p>The cathedrals of Ukraine are not only places of worship, but also adorable ancient architectural monuments,
                        which attract visitors with their beauty and mystery. Check out our list of the ten most beautiful temples in the country.</p>
                </div>
            </div>

            <div class="posts-item">
                <img src="images/ukr-post3.jpg" alt="Lviv rooftop" width="250" height="168"/>
                <div class="item-description">
                    <div class="item-heading"><h3>Rooftop Guide</h3></div>
                    <p>The best way to capture the whole city is from above. Have a look at the best rooftop locations in Ukraine that will open an
                        incredible views for you and turn moments into memories. This article will make you love the city roofs same as I do.</p>
                </div>
            </div>

        </div>
    </section>
@endsection
