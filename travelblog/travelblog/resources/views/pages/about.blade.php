@extends('main')

@section('title', "Inna's Travels")

@section('stylesheets')
        .background-img {
            background: url(images/about-header.jpg);
        }

        #social-media {
            left: -25px;
            top: 180px;
            display: flex;
            flex-direction: column;
        }

        section#posts{
            background-color: #eee;
            margin-top: 1px;
            padding: 0 20px;
        }

        div.insta-container {
            display: flex;
            justify-content: space-around;
            padding: 30px;
            flex-wrap: wrap;
        }

        div.insta-container img {
            padding-bottom: 15px;
            transition: all 0.8s ease-in-out;
        }

        div.insta-container img:hover {
            transform: scale(1.1, 1.1);
        }

        #dest-par {
            font-size: 1.2em;
            padding: 0 20px;
        }

        section#posts h2 {
            font-size: 2.2em;
            padding: 15px 0;
        }

        #contact_form {
            max-width: 450px;
            margin: 30px auto;
        }

        #contact-form h2 {
            font-size: 50px;
            color: darkorange;
            padding-top: 35px;
            text-align: center;
        }
        #contact_form label {
            visibility: hidden; /* for IE 9 and less, because they don't support placeholders*/
        }
        .form-input::placeholder {
            color: black;
            opacity: 0.9;
        }

        .form-input {
            background-color: transparent;
            border: 2px solid darkorange;
            transition: all 0.3s;
            padding: 13px;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
            color: black;
            font-family: Tahoma, Arial, sans-serif;
            font-weight: 400;
            font-size: 18px;
            border-radius: 4px;
            line-height: 22px;
            text-align: left;
        }

        /*effect is visible when user clicks on a form field*/
        .form-input:focus {
            border:2px solid #3a3939;
        }

        textarea {
            height: 250px;
            line-height: 150%;
            resize: vertical; /* The user can resize the height of the element */
        }

        input[type="submit"] {
            max-width: 450px;
            width: 100%;
            background: darkorange;
            border-radius: 10px;
            border: 0;
            cursor: pointer;
            color: white;
            font-size: 24px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            transition: all 0.3s;
        }

        input[type="submit"]:hover {
            background: #5c5971;
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
        <div id="info-heading"><h2>&ldquo;Aspire to inspire before you expire&rdquo; <span style="font-size: 24px;">― Eugene Bell Jr.</span></h2></div>
        <div id="info">
            <div id="image1"><img src="images/inna-egypt.jpg" alt="Egyptian pyramid" width="400" height="515"/></div>
            <div id="info-text">
                <p>Travel is one of the experiences that will never leave you frustrated. It makes you happier and you become an
                    open-minded person. Unlike some people beleive, you don't have to quit your job or be reach to fulfill your travel
                    dreams.</p>
                <p>On the pages of my website, I am explaining how to travel on budget, while having a family and a full-time job
                    at the same time. The best tips on planning your vacation can be found here, together with beautiful pictures, real
                    life stories and more.</p>
                <p>You won't feel "not so great" when visiting this website. It will inspire you to do the most memorable things in our life,
                    and I will teach you how.</p>
            </div>
        </div>
    </section>

    <section id="quote">
        <div class="blockquote-wrapper">
            <div class="blockquote">
                <h3> Live with no
                    <span style="color:#ffffff"> excuses</span> and travel with no <span style="color:#ffffff">regrets</span>.
                </h3>
                <h4>&mdash; Oscar Wilde<br></h4>
            </div>
        </div>
    </section>

    <section id="posts">
        <div id="destinations-heading"><h2>Join me in Instagram</h2></div>
        <div id="dest-par">If you want to stay updated with my recent trips, follow me on Instagram.
            Beautiful content, intreseting stories, and fun </div>
        <div class="insta-container">
            <img src="images/insta1.jpg" alt="Rixos Land of Legends Hotel in Turkey" width="200" height="200"/>
            <img src="images/insta2.jpg" alt="Madinat Jumeirah in Dubai" width="200" height="200"/>
            <img src="images/insta3.jpg" alt="Miracle Garden in Dubai" width="200" height="200"/>
            <img src="images/insta4.jpg" alt="Antalya in Turkey" width="200" height="200"/>
        </div>
    </section>

    <section id="contact-form">
        <h2>Contact Me</h2>
        <!-- a contact form with 5 filds -->

        <form id="contact_form"
              name="contact_form"
              method="post"
              action="http://www.scott-media.com/test/form_display.php"
              autocomplete="on">

            <label for="name">First Name:</label>
            <input name="name"
                   id="name"
                   type="text"
                   class="form-input"
                   placeholder="What's your name?">

            <label for="last_name">Last Name:</label>
            <input name="last_name"
                   id="last_name"
                   type="text"
                   class="form-input"
                   placeholder="What's your last name?">

            <label for="email">Email:</label>
            <input name="email"
                   id="email"
                   type="email"
                   class="form-input"
                   placeholder="Email">

            <label for="phone">Last Name:</label>
            <input name="phone"
                   id="phone"
                   type="tel"
                   class="form-input"
                   placeholder="Phone">

            <textarea name="text"
                      id="text"
                      class="form-input"
                      placeholder="Type a comment">
					</textarea>

            <input type="submit" value="Send"/>
        </form>
    </section>
@endsection
