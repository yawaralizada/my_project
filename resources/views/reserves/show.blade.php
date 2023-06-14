@extends('layout')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
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
                <table>
                    <tr>
                        <td>
                            {{ $reserve->name }}
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
            </div>
            <div id="click">
                <div id="button1">
                    <form action="/reserves/{{ $reserve->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
                <div id="link">
                    <a href="/reserves">Back</a>
                </div>
            </div>
        </div>


    </section>
    </div

@endsection

