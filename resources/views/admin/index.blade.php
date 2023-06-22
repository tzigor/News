@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Личный кабинет</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('getData') }}" type="button" class="btn btn-sm btn-outline-secondary">Получить выгрузку данных</a>
        </div>
    </div>
</div>
<!-- <x-alert :type="request()->get('type', 'success')" message="Some message"></x-alert>
<x-alert type="success" message="Some message"></x-alert>
<x-alert type="warning" message="Some message"></x-alert>
<x-alert type="info" message="Some message"></x-alert>
<x-alert type="danger" message="Some message"></x-alert>
<x-alert type="alert" message="Some message"></x-alert> -->
@endsection