@extends('main')
@section('con')
<div class="support-wrapper py-3">
    <a href="{{ route('product.create') }}" class="btn btn-info">Дабавит</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Имя продукт</th>
                <th>Количество</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($models as $model)
            <tr>
                <td>{{ $model->id }}</td>
                <td>{{ $model->name }}</td>
                <td>{{ $model->count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
