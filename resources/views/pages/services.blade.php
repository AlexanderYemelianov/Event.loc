@extends('layout')

@section('content')

    <h3>Услуги/Цены</h3>
    <div class="service-description">Описание раздела</div>

    <div class="table-responsive">
        <table class="table table-hover" style="width: 100%">
            <tr>
                <td style="width: 25%"><b>Услуга</b></td>
                <td style="width: 45%"><b>Описание</b></td>
                <td style="width: 20%"><b>ФОТО</b></td>
                <td style="width: 10%"><b>ЦЕНА</b></td>
            </tr>

            @foreach($services as $item)

            <tr>
                <td>{{ $item->service }}</td>
                <td>{{ $item->service_description }}</td>
                <td>
                    <a href="/picUploadTestDir/services/{{ $item->service_photo }}" class="popup"><img src="/picUploadTestDir/services/{{ $item->service_photo }}" alt="{{ $item->service }}" class="img-responsive"></a>
                </td>
                <td>{{ $item->price }}</td>
            </tr>

            @endforeach
        </table>
    </div>


@endsection
