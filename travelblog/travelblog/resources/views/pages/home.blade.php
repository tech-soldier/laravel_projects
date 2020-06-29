@extends('main')

@section('title', "Inna's Travels")

@section('stylesheets')
        .background-img {
            background: url(images/header-smoke.jpg);
        }

        #about-me {
            background-color: #fefefe;
            position: relative;
            min-height: 500px;
            width: 960px;
        }

        #picture-me {
            padding-top: 40px;
            float: left; /*for the text to wrap the image */
            margin: 0 50px;
            height: auto;
        }

        #about-me p {
            font-size: 1.3em;
            color: #5b546a;
        }

        #about-me ul {
            margin-left: 300px;
        }

        #about-me h2 {
            padding-top: 80px;
            padding-left: 20px;
        }

        @media screen and (max-width: 767px) {

            #picture-me {
                width: 90%;
                height: auto;
                margin: 0;
            }

            div#about-box h2 {
                padding-left: 45px;
            }

            #about-me ul {
                margin-left: 0;
            }

            #about-me {
                width: 100%;
                height: auto;
            }
        }
@endsection

@section('content')

        <div class="background-img">
            <div id="header-text">
                <h1>Explore the World</h1>
                <div class="button">
                    <span><a href="/about" title="about me page">Start</a></span>
                </div>
            </div>
        </div>
    </header> <!-- end of header content -->

    <section id="about-me">
        <div id="social-media">
            <a href="https://www.facebook.com/inna.soldier" class="fa fa-facebook" title="Link to Inna's Facebook profile"></a>
            <a href="#" class="fa fa-twitter" title="Link to Inna's Twitter profile"></a>
            <a href="#" class="fa fa-google" title="Link to Inna's Google profile"></a>
            <a href="http://instagram.com/inna_soldier" class="fa fa-instagram" title="Link to Inna's Instagram profile"></a>
        </div>
        <img id="picture-me" src="{{ asset('images/about-me.jpg') }}" alt="Inna's picture in Lviv" width="406" height="422">
        <div id="about-box">
            <h2>Why this blog is special</h2>
            <ul>
                <li><p>You don’t have to be rich to travel</p></li>
                <li><p>Unique stories, travel tips and pictures</p></li>
                <li><p>You don't have to quit your job to travel</p></li>
                <li><p>Inspiration for everyone</p></li>
                <li><p>Only the most beautiful destinations</p></li>
                <li><p>Travel while studying or working abroad</p></li>
            </ul>
        </div>
    </section>

    <div class="blockquote-wrapper">
        <div class="blockquote">
            <h3>If you think <span style="color:#ffffff">adventure</span>
                is dangerous, try <span style="color:#ffffff">routine</span>, it's lethal.
            </h3>
            <h4>&mdash; Paulo Coelho<br><em>Brazilian lyricist</em></h4>
        </div>
    </div>

    <section id="favourites">
        <div id="destinations-heading"><h2>Recent Places</h2></div>
        <div id="dest-par">I've been living in Turkey for more than a year and I can share with you all the interesting information about this beautiful country and give
            you advice on what places you must visit. In the <b><a href="destinations.html" title="Destinations Page">destinations</a></b> menu, you will find useful information and pictures of other
            beautiful countries I had a chance to visit. Currently, I am in Canada. Stay with me and you will learn more about this amazing country.
            Take your time and explore! </div>
        <div id="destinations"> <!-- a wrapper for 3 destination containers -->
            <div class="destination-container">
                <a href="alanya.html" title="Alanya, Cleopatra Beach"><img src="images/dest1.jpg" alt="Alanya beach, Turkey" width="259" height="407"/></a>
                <div class="destination-description">
                    <div class="dest-heading"><h3>Alanya</h3></div>
                    <p>Explore one of the most beautiful coastlines of Turkey</p>
                </div>
            </div>

            <div class="destination-container">
                <a href="#" title="Bursa, Istambul"><img src="images/dest3.jpg" alt="Bursa Cable Car, Turkey" width="259" height="407"/></a>
                <div class="destination-description">
                    <div class="dest-heading"><h3>Istambul</h3></div>
                    <p>Discover mountain peaks and try snowboarding in Turkey</p>
                </div>
            </div>

            <div class="destination-container">
                <a href="#" title="Pamukkale, Denizli"><img src="images/dest2.jpg" alt="Pamukkale, Turkey" width="259" height="407"/></a>
                <div class="destination-description">
                    <div class="dest-heading"><h3>Pamukkale</h3></div>
                    <p>Find out more about a nature miracle in the heart of Turkey</p>
                </div>
            </div>
        </div>
    </section>

@endsection

