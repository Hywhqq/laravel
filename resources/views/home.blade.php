@extends('layout.layout')

@section('page_title', '9 maya')

@section('content')

    <!-- Menu -->
    <section class="hits">
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
        </div>

    </section>


    <section class="about" id="about">
        <div class="container">




    </section>

    <div>
        Roma privet
        Roma privet
    </div>


@endsection
