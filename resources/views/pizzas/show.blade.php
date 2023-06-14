@extends('layout')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div id="list1">
                <div id="sf">{{ $pizza->name }}سفارش </div>
                <table>
                    <tr>
                        <th>name</th>
                        <th>board_number</th>
                        <th>date</th>
                        <th>location</th>
                        <th>type</th>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            {{ $pizza->name }}
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
            </div>
            <div id="click">
                <div id="button1">
                    <form action="/pizzas/{{ $pizza->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
                <div id="link">
                    <a href="/pizzas">Back</a>
                </div>
            </div>
        </div>
    </section>
</div

@endsection
