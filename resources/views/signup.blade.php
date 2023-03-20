@extends('layout.layout')

@section('page_title', 'SignUp Page')

@section('content')
    <section id="main">
        <div class="container">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form action="{{ route('auth.signup') }}" method="post" enctype="multipart/form-data">
                @csrf
{{--                <div class="form-group">--}}
{{--                    <label for="email">Email:</label>--}}
{{--                    <input type="email" name="email" id="email" value="{{ old('email') }}">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="username">Username:</label>--}}
{{--                    <input type="text" name="username" id="username" value="{{ old('username') }}">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="password">Password:</label>--}}
{{--                    <input type="password" name="password" id="password">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="password">Re Password:</label>--}}
{{--                    <input type="password" name="re_password" id="password">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}

{{--                </div>--}}

{{--                <br/>--}}

{{--                <button class="button">Sign Up</button>--}}
{{--            </form>--}}

                <input name="username" type="text" class="input" placeholder="Введите имя">
                <input name="email" type="email" class="input" placeholder="Введите почту">
                <input name="password" type="text" class="input" placeholder="Введите пароль">
                <input name="re_password" type="text" class="input" placeholder="Повторите пароль">
                <label for="photo">Choose photo:</label>
                <input type="file" name="photo" id="photo">
                <button name="register" class="btn">Регистрация</button>
                </form>        </div>
    </section>

@endsection
