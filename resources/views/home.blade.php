@extends('layout.layout')

@section('page_title', '9 maya')

@section('content')

    <!-- Menu -->
    <section class="hits">
        <div class="banner">
            <div class="arrow_left">
                ‹
            </div>
            <div class="banner_img"><img src="images/9maya.jpg" style="height: 450px; width: 700px; margin-bottom: 100px;" alt=""/></div>
            <div class="arrow_right">
                ›</div>
        </div>
        <div class="container">
            <h1 class="section__title">Хиты продаж</h1>
            <div class="hits__wrapper">
                @if(count($articles))
                @foreach($articles as $article)
                <div class="card">
                    <img src="{{ $article->image_url }}" alt="IPhone" class="card__image">
                    <div class="card__info">
                        <p class="card__title">{{ $article->name }}</p>
                        <p class="card__price">{{ $article->price }} </p>
                    </div>
                    <button class="btn">Купить</button>
                </div>

                @endforeach
                @else
                    <h3>Ниче нет</h3>
                @endif
            </div>
            <h1>О нас</h1>

            <div class='about__info'>
                <span>Сайт, торгующий товарами в Интернете. Позволяет пользователям сформировать заказ на покупку, выбрать способ оплаты и доставки заказа в сети Интернет. Выбрав необходимые товары или услуги, пользователь обычно имеет возможность тут же на сайте выбрать метод оплаты и доставки.</span>
                <br>
                <br>
                <span>Основное отличие Интернет-магазина от традиционного — в типе торговой площадки.           Обычному магазину нужен торговый зал, витрины, ценники, а также продавцы, кассиры и           опытные консультанты, у онлайн-магазина же вся инфраструктура реализована           программно.</span>


            </div>
            <h1 class="section__title">Оставьте отзыв о нашем магазине</h1>
            <form class="form review__form">
                <input type="text" class="input" placeholder="Ваше имя">
                <input type="email" class="input" placeholder="Ваша почта">
                <input type="text" class="input" placeholder="Ваш отзыв">
                <button class="btn">Отправить</button>
            </form>

        </div>
        <div class="container">
            <div class="footer__wrapper" style="margin-top: 250px">
                <div class="footer__info">© 2022 - 2022 ILUXE.</div>
                <div class="footer__captcha" style="">Этот сайт защищен Google reCAPTCHA, <br> применяются Политика конфиденциальности и Условия использования.</div>
                <div class="social">

                    <div> <img src="images/vk.svg" style="height: 25px; width: 25px;" alt=""/> </div>
                    <img src="images/tg.svg" alt="" style="height: 25px; width: 25px; ;"/>
                </div>
            </div>
        </div>
        </div>

    </section>





@endsection
