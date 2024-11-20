@include('partials/html_scripts')

<body>
    
    @include('layout/shared_nav')
    
    <div class="slider">
        <div class="slides">
            <img class="slide umm" src="https://m.media-amazon.com/images/I/81KkrQWEHIL._SX3000_.jpg" alt="image #1">
            <img class="slide umm" src="https://m.media-amazon.com/images/I/61zAjw4bqPL._SX3000_.jpg" alt="image #2">
            <img class="slide umm" src="https://m.media-amazon.com/images/I/71qcoYgEhzL._SX3000_.jpg" alt="image #3">
        </div>
        <button class="prev" onclick="prevSlide()">&#10094</button>
        <button class="next" onclick="nextSlide()">&#10095</button>
    </div>
    <div>
        <p class="text-welcom">
        Discover the best products just for you. Whether you're shopping for the latest trends, essentials, or 
        unique finds, we’ve got everything you need and more. Enjoy seamless shopping, fast delivery, and unbeatable customer 
        service. Dive into a world of quality and convenience – your perfect shopping experience begins here.

        Start browsing now and find something you’ll love!


        </p>
    </div>
    <div class="under-nav2">
        <h4 class="font-sizee">Categories</h4>
        <div class="categories">
            @foreach ($categories as $category)
                <a href="">
                    <div class="category-solo">
                        <p>{{ $category['name'] }}</p>
                        <img class="category-img" src="{{ $category['image'] }}" alt="{{ $category['name'] }}">
                    </div>
                </a>
            @endforeach
        </div>
    </div>
   <div class="about-us-div">
        <div class="div1-about-us">
            <h2 class="color-white">About Us</h2>
            <h4 class="color-white font-sizee">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo excepturi tempore magnam tenetur ea laudantium,
                 maiores possimus amet? Iste, accusamus?
                 Minus voluptates soluta iusto dolores illo corrupti commodi quis quisquam.
            </h4>
        </div>
        <div class="div2-about-us">
            <h4 class="color-white">Let's Connect</h4>
            <div class="list-lets-connect">
                <a href=""><li class="color-white"><i class="fa-brands fa-facebook color-white"></i></li></a>
                <a href=""><li class="color-white"><i class="fa-brands fa-linkedin color-white"></i></li></a>
                <a href=""><li class="color-white"><i class="fa-brands fa-twitter color-white"></i></li></a>
                <a href=""><li class="color-white"><i class="fa-brands fa-instagram color-white"></i></li></a>
            </div>
        </div>
   </div>

   <div class="stay-updated">
        <h3 class="stay-updated-h3">This monthly newsletter compiles information on the upcoming and last activities carried out by the EUIPO in the context 
            of the EU-Funded IP projects implemented on behalf of the European Commission.</h3>
            <div class="stay-updated-div">
                <h5>Stay updated, stay informed with our latest and upcoming activities</h5>
                <form action="">
                    <input type="text" placeholder="Enter your email...">
                    <button>Done</button>
                </form>
            </div>
   </div>

   @include('layout/shared_footer')
   <script src="/slider.js"></script>
</body>

@include('partials/footer_scripts')