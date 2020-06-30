<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css" media="all">
    <title>{{ $title }}</title>
</head>
<body>
<nav class="menu">
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/support">Support</a>
    <a href="/services">Services</a>
    <a href="/contact">Contact</a>
</nav>

<div id="wrapper">
    <div id="left">
        <h1>{{ $title }}</h1>
        <p>{{ $content }}</p>

        <h3>This list never changes!</h3>
        <ul>
            <li>One thing</li>
            <li>Another thing</li>
            <li>One more thing</li>
            <li>And one more</li>
            <li>Last one, I promise</li>
        </ul>
    </div>
</div>
</body>
</html>
