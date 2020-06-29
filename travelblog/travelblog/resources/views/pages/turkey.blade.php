@extends('main')

@section('title', "Turkey")

@section('stylesheets')

        .background-img {
            background: url(images/turkey-header.jpg);
            background-repeat: no-repeat;
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
            <a href="https://www.facebook.com/inna.soldier" class="fa fa-facebook" title="Link to Inna's Facebook profile"></a>
            <a href="#" class="fa fa-twitter" title="Link to Inna's Twitter profile"></a>
            <a href="#" class="fa fa-google" title="Link to Inna's Google profile"></a>
            <a href="http://instagram.com/inna_soldier" class="fa fa-instagram" title="Link to Inna's Instagram profile"></a>
        </div>
        <div id="info-heading"><h2>Enjoy life in Turkey to the fullest</h2></div>
        <div id="info">
            <div id="image1"><img src="images/kaleichi.jpg" alt="Antalya old city" width="400" height="515"/></div>
            <div id="info-text">
                <p>The country comprises the beautiful beaches, mountains, lakes, which are making it attractive for tourists.
                    It is also packed with cultural heritage. In fact, there are 13 spots in Turkey inscribed on UNESCO’s list of
                    <a href="http://whc.unesco.org/en/statesparties/tr">World Heritage Sites</a>.
                </p>
                <p>Despite the warm climate wintertime visitors can hit the slopes at nearly a dozen resorts. There are more than 130 mountain peaks
                    in Turkey that reach over 9,800 feet (3,000 meters).</p>
                <p>Turkey is indeed the center of the world. You can fly to just about everywhere from new Istanbul Airport,
                    which is soon expected to be the busiest in the world.</p>
            </div>
        </div>
    </section>

    <section id="quote">
        <div class="blockquote-wrapper">
            <div class="blockquote">
                <h3>It may seem confusing, but the
                    <span style="color:#ffffff"> capital</span> of Turkey is not Istanbul - it is <span style="color:#ffffff">
						Ankara</span>.
                </h3>
                <h4>&mdash; Inna</h4>
            </div>
        </div>
    </section>

    <section id="posts">
        <div id="posts-heading"><h2>Recent Posts</h2></div>
        <div id="posts-par">I've been leaving and working in Turkey for more than a year and I can tell you a lot about this wonderful country, its traditions,
            differences, and the most spectacular destinations. The best advice if you are planning to visit this country, make sure you find time to rent a car
            and drive through Tourkey. Unforgetable memories are guarenteed.
        </div>
        <div id="posts-container"> <!-- "wrapper" for 3 posts -->

            <div class="posts-item"> <!-- post 1 -->
                <img src="images/kemer.jpg" alt="Kemer beach" width="250" height="168">
                <div class="item-description">
                    <div class="item-heading"><h3>Must Visit Cities</h3></div>
                    <p>An ultimate guide to the most beautiful cities of Turkey: Istanbul, Bursa, Denizli, Izmir, Kemer, Antalya and Goreme. Description of the
                        places mostly loved by tourist from all over the world. </p>
                </div>
            </div>

            <div class="posts-item"> <!-- post 2 -->
                <img src="images/turkey-rooftop.jpg" alt="Istambul metro bridge" width="250" height="168"/>
                <div class="item-description">
                    <div class="item-heading"><h3>Istambul from A to Z</h3></div>
                    <p>If you’re visiting Istanbul for the first time, then I this ultimate guide may be helpful while planning your trip.
                        It will tell you everything you need to know from where to stay, which places to see, and for sure, what food to eat.
                    </p>
                </div>
            </div>

            <div class="posts-item"><!-- post 3 -->
                <img src="images/turkey-alanya.jpg" alt="Alanya beach" width="250" height="168"/>
                <div class="item-description">
                    <div class="item-heading"><h3>Off the Beaten Track</h3></div>
                    <p>People in Turkey are genuinely hospitable and friendly. They showed me many incredible places I am going to share
                        with you in this article. Tips and suggestions from the locals are waiting for you.
                    </p>
                </div>
            </div>

        </div>
    </section>
@endsection
