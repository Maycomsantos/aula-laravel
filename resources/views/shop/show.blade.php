@extends('adminlte::page')


@section('content')

<tr>
                            <td>{{ $shop->id }}</td>
                            <td class="white-space">{{ $shop->name }}</td>
                            <td>{{ $shop->description }}</td>
                            <td>{{ $shop->price }}</td>
                            <td>{{ $shop->created_at }}</td>
                            </td>
                        </tr>

@endsection
