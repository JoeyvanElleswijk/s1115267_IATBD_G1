<main>
<section class="productCard a-popup">
    <figure class="productCard__figure">
        <img class="productCard__image" src="../{{$product->image}}" alt="{{$product->name . ' ' . $product->kind}}"/>
    </figure>
    
    <section class="u-float">
        <article class="productCard__article">
            <h2 class="gridCard__title">{{$product->name}}</h2>
            <h3 class="gridCard__title gridCard__title--margin ">Beschrijving</h3>
            <a class="gridCard__breadcrumb" href="{{$product->kind}}"> {{$product->kind . '   >   ' . $product->name}}</a>
            
            <p class="gridCard__text">{{$product->description}} </p>
        </article>
        <a href="/alluserproducts/{{$product->userid}}"><button class="deadline-form__btn"type="submit">Bekijk user</button></a>
        <form class="deadline-form" action="/product" method="POST">
            @csrf
            <label for="dagen">Minimum uitleen dagen</label>
            <input class="deadline-form__input" name="dagen" placeholder="1" id="dagen" type="date"/>

            <div class="deadline-form__u-flex">
                <a href="/product"><button class="deadline-form__btn"type="submit">Uitlenen</button></a>
            </div>
        </form>
    </section>
</section>

    <section class="reviews">
        <h3 class="reviews__title reviews__title--groter reviews__title--color reviews__title--center">Recente leen recenties </h3>
            <ul class="reviews__list">
                <li class="reviews__item">
                    <h4 class="reviews_text">"Dit is mijn tweede lening bij Antonio - geweldige uitrusting, geweldige prijs en uitstekende service!"</h4>
                    <p class="reviews_name">Joey, van Elleswijk</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </li> 

            <li class="reviews__item">
                <h4 class="reviews_title">"Dit is mijn tweede lening bij Antonio - geweldige uitrusting, geweldige prijs en uitstekende service!"</h4>
                <p class="reviews_name">Joey, van Elleswijk</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </li> 
        </ul>
    </section>
</main>