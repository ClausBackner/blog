<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/sliderautomatic.css')}}">
</head>
<body>
    <div class="slidercontainer">
        <div class="showSlide slide" style="background-image:url(https://unsplash.it/1600/800/?portugal)">

                    <div class="content"><h2 class="slide">Portugal</h2>
                    <p class="slide">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt nemo officiis libero aperiam asperiores in architecto totam, dolore voluptatem, minima alias adipisci. Ab natus excepturi soluta animi vel adipisci, rerum impedit ratione dignissimos velit magni, facilis quae culpa expedita minima delectus voluptatum dolorum assumenda dicta ut commodi rem, quis ipsa similique? Ut.</p>

                    <button class="cta slide">read more...</button>


                    </div>
                </div>
             <div class="showSlide slide" style="background-image:url(https://unsplash.it/1600/800/?tibet)">

                    <div class="content"><h2 class="slide">Tibet</h2>
                    <p class="slide">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde similique nemo aliquid a animi! Repudiandae quam commodi, dolorem incidunt quia exercitationem tempora corporis, quisquam nihil, quo nostrum! Repellat quidem, dolorum provident odit unde distinctio nisi eaque magni. Architecto tempore aut soluta alias aliquid sequi culpa officiis quo iste adipisci dolor ipsam ipsa dolorem debitis sit consequatur maiores minima sed nam, voluptas.</p>

                    <button class="cta slide">read more...</button>
                    </div>
                </div>

         <div class="showSlide slide" style="background-image:url(https://unsplash.it/1600/800/?africa)">

                    <div class="content"><h2 class="slide">South Africa</h2>
                    <p class="slide">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ipsum, tempora sit nesciunt dignissimos. Tempore nisi porro voluptas rem distinctio expedita nulla consequatur aliquam, soluta facilis atque sapiente laboriosam minus ullam, harum animi magnam! Error neque culpa doloremque qui magni, optio tempora nisi suscipit facere excepturi quae nam iure unde voluptatum maiores voluptatibus, ea aliquam debitis voluptate ex a facilis numquam animi! Maxime.</p>

                    <button class="cta slide">read more...</button>


                    </div>
                </div>
            <div class="showSlide slide" style="background-image:url(https://unsplash.it/1600/800/?indonesia)">
        <!--            <img src="images/img4.jpg" />  -->
                    <div class="content"><h2 class="slide">Indonesia</h2>
                    <p class="slide">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora eveniet ex sed, natus accusantium reiciendis, nesciunt doloremque atque soluta officia quis sapiente reprehenderit aliquam expedita veniam tenetur ducimus cumque, nihil enim. Eveniet dolores consequuntur labore omnis in eius!</p>

                    <button class="cta slide">read more...</button>


                    </div>
                </div>
                <!-- Navigation arrows -->
                <a class="left" onclick="nextSlide(-1)"></a>
                <a class="right" onclick="nextSlide(1)"></a>
            </div>

    <script src="{{ asset('js/sliderautomatic.js') }}"></script>
  </body>
</html>
