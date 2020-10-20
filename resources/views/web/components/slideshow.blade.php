<section id="ty-slideshow">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push; autoplay: true; pause-on-hover: true">

        <ul class="uk-slideshow-items">
            <li>
                <img src="{{asset('images/IMG_1374.jpg')}}" alt="" uk-cover>
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Heading</h2>
                    <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Lorem ipsum dolor sit amet.</p>
                </div>
            </li>
            <li>
                <img src="{{asset('images/IMG_2222.jpeg')}}" alt="" uk-cover>
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Heading</h2>
                    <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Lorem ipsum dolor sit amet.</p>
                </div>
            </li>
            <li>
                <img src="{{asset('images/IMG_1273.jpg')}}" alt="" uk-cover>
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Heading</h2>
                    <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Lorem ipsum dolor sit amet.</p>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    </div>
</section>
