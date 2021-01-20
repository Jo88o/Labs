<!-- Page Preloder -->
<div id="preloder">
    <div class="loader">
        <img src="img/logo.png" alt="">
        <h2>Loading.....</h2>
    </div>
</div>


<!-- Header section -->
<header class="header-section d-flex align-items-center justify-content-center">
    @foreach ($datas as $elem)
        <div class="logo">
            <img class="" height="40px;" src="{{ asset('img/' . $elem->src) }}" alt="">
        </div>
    @endforeach

    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li><a href="/">Home</a></li>
            <li><a href="/services">{{ $datas[0]->lien1 }}</a></li>
            <li><a href="/blog">{{ $datas[0]->lien2 }}</a></li>
            <li><a href="/contact">{{ $datas[0]->lien3 }}</a></li>
            <li><a href="/elements">{{ $datas[0]->lien4 }}</a></li>

            <li><a class="bg-warning" href="/home">login</a></li>
            <li><a class="bg-warning" href="/register">register</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->
