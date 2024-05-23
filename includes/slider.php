<div class="slideshow-container">

            <div class="mySlides">
                <!--<div class="numbertext">1 / 3</div>-->
                <img src="images/slider/slide1.jpg" style="width:100%" class="fade">
                <div class="text"><a href="#">Entre el cielo y mi <strong>Tarot</strong> nada esta oculto</a></div>
            </div>

            <!--<div class="mySlides">
                
                <img src="images/slider/slide2.jpg" style="width:100%" class="fade">
                <div class="text"><a href="#">El Tarot resuelve todas tus dudas</a></div>
            </div>

            <div class="mySlides">
                
                <img src="images/slider/slide3.jpg" style="width:100%" class="fade">
                <div class="text"><a href="#">Tarot oraculo sagrado</a></div>
            </div>-->

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>

        <div class="slidercontrols" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <!--<span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>-->
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000);
            }
            var slideIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > x.length) {
                    slideIndex = 1
                }
                x[slideIndex - 1].style.display = "block";
                setTimeout(carousel, 5000); // Change image every 2 seconds
            }

        </script>
        <br>
        <!--End of Slider-->