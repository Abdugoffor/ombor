@extends('main')
@section('con')
<div class="support-wrapper py-3">
    <a href="{{ route('product.index') }}" class="btn btn-info">Продукт Списка</a>
    @if (session('text'))
    <div class="alert alert-infomt-2">
        <span class="font-weight-semibold">{{ session('text') }}</span>
    </div>
    @endif
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="form-group mt-4">
            <label for="exampleInputEmail1">Имя продукт</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Имя продукт">
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputPassword1">Количество</label>
            <input type="number" name="count" class="form-control" id="exampleInputPassword1" placeholder="Количество">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Сохранять</button>
    </form>

</div>
@endsection
