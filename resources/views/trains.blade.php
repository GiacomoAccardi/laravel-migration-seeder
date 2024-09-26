@extends('layouts.app')

@section('content')
    <h1>Lista dei Treni</h1>
    <table>
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di Partenza</th>
                <th>Stazione di Arrivo</th>
                <th>Orario di Partenza</th>
                <th>Orario di Arrivo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_partenza }}</td>
                    <td>{{ $train->stazione_arrivo }}</td>
                    <td>{{ $train->oraio_partenza }}</td>
                    <td>{{ $train->oraio_arrivo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
