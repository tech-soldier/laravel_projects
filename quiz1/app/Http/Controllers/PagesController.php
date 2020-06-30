<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //home page
    public function getHome() {
        $title = "Welcome to the Home page";
        $content ="Morbi dignissim consequat eros in lobortis. Integer gravida, urna ac fermentum aliquam, nisl diam finibus elit,
        lacinia finibus tellus ex ut urna. Duis ornare nisl non felis tempor egestas. Duis id urna at sem vehicula elementum non eget mi.
        Donec imperdiet, elit sed ornare malesuada, justo nisl interdum lectus, in consectetur odio lacus non felis. Nunc molestie,
        tortor quis venenatis rhoncus, nisi mauris blandit justo,
        vitae facilisis eros libero sit amet metus. Vestibulum sit amet venenatis quam.";

        return view('main')->withTitle($title)->withContent($content);
    }

    //about page
    public function getAbout() {
        $title = "About Us";
        $content ="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id ipsum suscipit ligula euismod ullamcorper.
        Suspendisse potenti. Vivamus consectetur mi id dignissim convallis. Proin in gravida felis. Pellentesque maximus feugiat velit,
        eget ornare ligula. Nullam purus tellus, rutrum sed sem in, condimentum cursus eros. Maecenas ultricies molestie iaculis.
        Nam id vestibulum nulla, id ornare urna. Quisque eget tincidunt enim. Suspendisse ultrices lorem eget pharetra suscipit.
        Cras elit mauris, lobortis a finibus vel, suscipit non sem. Nam ullamcorper sagittis odio sed vestibulum.
        Vivamus condimentum eget metus vitae vulputate.";

        return view('main')->withTitle($title)->withContent($content);
    }

    //support page
    public function getSupport() {
        $title = "Support our community";
        $content ="Nulla id tincidunt enim. In eu sem in sem rutrum commodo. Nam consectetur laoreet orci, sed vestibulum dolor auctor eleifend.
        Suspendisse sed tincidunt quam. Ut lobortis velit sed lorem sollicitudin accumsan.
        Vestibulum tincidunt mollis rhoncus. Maecenas ullamcorper neque purus. Etiam sed urna felis. Etiam facilisis lacus non mollis bibendum.";

        return view('main')->withTitle($title)->withContent($content);
    }

    //services page
    public function getServices() {
        $title = "Our Services";
        $content ="Aliquam urna neque, sagittis ut magna nec, lacinia finibus tortor. Aenean ultricies sollicitudin dolor, nec suscipit metus mollis nec.
        Mauris sagittis risus leo, vel vestibulum quam molestie at. Donec faucibus pharetra ultricies.";

        return view('main')->withTitle($title)->withContent($content);
    }

    //contact page
    public function getContact() {
        $title = "Support our community";
        $content ="Donec posuere massa ut nulla ullamcorper cursus. Donec magna arcu, laoreet nec sapien imperdiet, commodo tempor neque.
        Vivamus ac sodales nibh. Integer condimentum cursus tortor non commodo. Aliquam nunc orci, molestie elementum lorem sit amet,
        lobortis sollicitudin lectus. Fusce luctus, neque id maximus sodales, arcu magna sollicitudin enim, convallis auctor ante nunc quis elit. ";

        return view('main')->withTitle($title)->withContent($content);
    }
}
