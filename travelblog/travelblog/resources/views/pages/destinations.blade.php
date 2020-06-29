@extends('main')

@section('title', "Destinations")

@section('stylesheets')

        .background-img {
            background: url(images/destinations-header.jpg);
        }

        section {
            text-align: center;
            background-color: #fff;
        }

        #map-section h2{
            margin-bottom: 30px;
        }

        table {
            width: 750px;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* odd rows will have a different color. Zebra effect */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: darkorange;
            color: white;
        }

        td, th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 18px;
        }

        @media screen and (max-width: 760px) {

            #header-text {
                display: none;
            }

            table {
                width: 100%;
            }

            /* Changes the behavour of the table rows */
            table, thead, tbody, th, td, tr {
                display: block;
            }

            /* Hides table headers (but not display: none, for betteer accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behaves like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                position: absolute;
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                content: attr(data-column);
                color: #000;
                font-weight: bold;
            }
        }

        @endsection
@section('content')
        <div class="background-img">
            <div id="header-text">
                <h1>Destinations</h1>
            </div>
        </div>
    </header>

    <section id="map-section">
        <h2>List of Countries Visited</h2>
        <div id="map">
            <img src="images/map.jpg" alt="world map" width="700" height="358"/>
        </div>

        <table>
            <thead>
            <tr>
                <th>Country</th>
                <th>Language</th>
                <th>Population</th>
                <th>Currency</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-column="Name">1. Ukraine</td>
                <td data-column="Language">Ukrainian</td>
                <td data-column="Population">42.2 million</td>
                <td data-column="Currency">Hryvna</td>
            </tr>
            <tr>
                <td data-column="Name">2. Turkey</td>
                <td data-column="Language">Turkish</td>
                <td data-column="Population">80.8 million</td>
                <td data-column="Currency">Turkish Lira</td>
            </tr>
            <tr>
                <td data-column="Name">3. The UAE</td>
                <td data-column="Language">Arabic</td>
                <td data-column="Population">9.4 million</td>
                <td data-column="Currency">Dirham</td>
            </tr>
            <tr>
                <td data-column="Name">4. Egypt</td>
                <td data-column="Language">Arabic</td>
                <td data-column="Population">97.5 million</td>
                <td data-column="Currency">Egyptian Pound</td>
            </tr>
            <tr>
                <td data-column="Name">5. Canada</td>
                <td data-column="Language">English / French</td>
                <td data-column="Population">37.5 million</td>
                <td data-column="Currency">Cannadian Dollar</td>
            </tr>
            <tr>
                <td data-column="Name">6. The USA</td>
                <td data-column="Language">English</td>
                <td data-column="Population">327.2 million</td>
                <td data-column="Currency">US Dollar</td>
            </tr>
            </tbody>
        </table>
    </section>

    <section id="favourites">
        <div id="destinations-heading"><h2>Recent Places</h2></div>
        <div id="dest-par"> These are the most recent places I had a chance to visit.
            Check out some useful information and beautiful pictures. You can find more posts on my Blog page. </div>
        <div id="destinations"> <!-- "wrapper" for 3 posts -->

            <div class="destination-container"> <!-- post 1 -->
                <img src="images/side-dest.jpg" alt=""/>
                <div class="destination-description">
                    <div class="dest-heading"><h3>Manavgat</h3></div>
                    <p>Explore one of the famous historic sites of Turkey</p>
                </div>
            </div>

            <div class="destination-container"> <!-- post 2 -->
                <img src="images/dubai-dest.jpg" alt="dest2"/>
                <div class="destination-description">
                    <div class="dest-heading"><h3>Dubai - UAE</h3></div>
                    <p>How to make your vacation in Dubai memorable</p>
                </div>
            </div>

            <div class="destination-container"> <!-- post 2 -->
                <img src="images/istanbul-dest.jpg" alt="dest2"/>
                <div class="destination-description">
                    <div class="dest-heading"><h3>Istambul</h3></div>
                    <p>The city that will turn moments into memories</p>
                </div>
            </div>

        </div>
    </section>
@endsection
