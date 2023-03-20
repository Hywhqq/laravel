@extends('layout.layout')

@section('page_title', 'SignIn Page')

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

            <form action="{{ route('auth.signin') }}" method="post" enctype="multipart/form-data">
                @csrf
{{--                <div class="form-group">--}}
{{--                    <label for="email">Email:</label>--}}
{{--                    <input type="email" name="email" id="email">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="password">Password:</label>--}}
{{--                    <input type="password" name="password" id="password">--}}
{{--                </div>--}}

{{--                <br/>--}}

{{--                <button class="button">Sign In</button>--}}
{{--            </form>--}}
                <input name="email" type="email" class="input" placeholder="Введите почту">
                <input name="password" type="text" class="input" placeholder="Введите пароль">
                <button name="auth" class="btn">Войти</button>
                </form>
        </div>
    </section>
@endsection
