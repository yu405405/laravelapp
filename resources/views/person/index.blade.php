@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Person</th>
            <th>Board</th>
        </tr>
        @foreach($hasItems as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>
                <table>
                    @foreach($item->boards as $obj)
                    <tr>
                        <td>{{$obj->getData()}}</td>
                    </tr>
                    @endforeach
                </table>
            </td>
        </tr>
        @endforeach
    </table>
    <div style="margin: 10px"></div>
    <table>
        <tr>
            <th>Person</th>
            @foreach($noItems as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
            @endforeach
        </tr>
    </table>
@endsection

@section('footer')
    copuright 2020 tuyano.
@endsection