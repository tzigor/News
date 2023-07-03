@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Добавить новость</h1>
</div>

@if ($errors->any())
@foreach($errors->all() as $error)
<x-alert type="danger" :message="$error"></x-alert>
@endforeach
@endif

<form method="get" action="{{ route('getData.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" />
    </div>
    <div class="form-group">
        <label for="phone">Номер телефона</label>
        <input type="" tel="phone" id="phone" class="form-control" value="{{ old('phone') }}" />
    </div>
    <div class="form-group">
        <label for="image">email</label>
        <input type="email" name="image" id="image" class="form-control" />
    </div>
    <div class="form-group">
        <label for="description">Описание данных для получения</label>
        <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
    </div>
    <br />
    <button class="btn-success" type="submit">Запросить</button>
</form>
@endsection