@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">
        {{ $title }}
    </h1>
    <p>{{ $users->total() }} Registros - página {{ $users->currentPage() }} de {{ $users->lastPage() }} páginas.</p>
    <table class="table table-hover table-striped">
        @include('partials.head-users')
        <tbody>
            @include('partials.list-users')
        </tbody>
    </table>
    {!! $users->render() !!}
</div>
@stop