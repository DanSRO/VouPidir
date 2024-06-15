@extends('layout.app')

@section('title', 'Criar Conta')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="font-weight-bolder">Cadastro</h4>
            <p class="mb-0">Digite seu email para registrar sua conta</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                </div>

                <div class="form-group">
                    <label for="password-confirm">Confirmar Senha</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar Conta</button>
            </form>
        </div>
    </div>
@endsection
