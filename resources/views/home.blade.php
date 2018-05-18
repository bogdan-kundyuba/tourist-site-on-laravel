@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group">
        <div class="form-group">
            <div class="card">
                <div class="card-header">Админ панель</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы авторизованны!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
