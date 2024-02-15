@extends('layouts.trains')

@section('trains-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Compagnia</th>
                            <th scope="col">Stazione di partenza</th>
                            <th scope="col">Stazione di arrivo</th>
                            <th scope="col">Partenza</th>
                            <th scope="col">Arrivo</th>
                            <th scope="col">Codice Treno</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train->id }}</td>
                                <td>{{ $train->company }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td>{{ $train->departure_time }}</td>
                                <td>{{ $train->arrival_time }}</td>
                                <td>{{ $train->code_train }}</td>
                                <td>{{ $train->on_time == 1 ? 'SI' : 'NO' }}</td>
                                <td>{{ $train->delete == 1 ? 'NO' : 'SI' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
