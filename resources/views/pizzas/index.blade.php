@extends('layout')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <p id="second">لیست سفارش پیتزا</p>
            <p id="second2">{{ $name }}</p>
            <div id="list1">
                <table>
                    <tr>
                        <th>name</th>
                        <th>pizzas_name</th>
                        <th>address</th>
                        <th>quantity</th>
                        <th>type</th>
                    </tr>
                </table>
                @foreach ($pizzas as $pizza)
                <table>
                    <tr>
                        <td>
                            <a href="pizzas/{{$pizza->id}}">
                                {{ $pizza->name }}
                            </a>
                        </td>
                        <td>
                            {{ $pizza->pizzas_name }}
                        </td>
                        <td>
                            {{ $pizza->address }}
                        </td>
                        <td>
                            {{ $pizza->quantity }}
                        </td>
                        <td>
                            {{ $pizza->type }}
                        </td>
                    </tr>
                </table>
                @endforeach
        </div>







    </div>
    </section>
    </div
@endsection
