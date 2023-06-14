@extends('layout')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <p id="second">لیست ریزرو میز ها</p>
            <p id="second2">{{ $name }}</p>
            <div id="list1">
                <table>
                    <tr>
                        <th>name</th>
                        <th>board_number</th>
                        <th>date</th>
                        <th>location</th>
                        <th>type</th>
                    </tr>
                </table>
                @foreach ($reserves as $reserve)
                <table>
                    <tr>
                        <td>
                            <a href="reserves/{{ $reserve->id }}">
                                {{ $reserve->name }}
                            </a>
                        </td>
                        <td>
                            {{ $reserve->board_number }}
                        </td>
                        <td>
                            {{ $reserve->date }}
                        </td>
                        <td>
                            {{ $reserve->location }}
                        </td>
                        <td>
                            {{ $reserve->type }}
                        </td>
                    </tr>
                </table>
                @endforeach
            </div>







        </div>
    </section>
    </div
@endsection

