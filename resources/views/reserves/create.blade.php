@extends('layout')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
                <img src="dist/img/back.jpg" alt="">
            <div class="form1">
                <h3>از ایجا میز ریزرو کنید</h3>
                <form action="/reserves" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td>
                                <label for="name">نام</label>
                            </td>
                            <td>
                                <input type="text" name="name" id="name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="board_number">شماره میز</label>
                            </td>
                            <td>
                                <input type="text" name="board_number" id="board_number" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="date">تاریخ</label>
                            </td>
                            <td>
                                <input type="datetime-local" name="date" id="date" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="location">موقعیت</label>
                            </td>
                            <td>
                                <select name="location" id="location">
                                    <option value="inside">Inside</option>
                                    <option value="outside">Outside</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="type">نوع میز</label>
                            </td>
                            <td>
                                <select name="type" id="type">
                                    <option value="vip">VIP</option>
                                    <option value="average">Average</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="submit">فرستادن</label></td>
                            <td><input type="submit" value="ارسال"></td>
                        </tr>
                    </table>


                </form>
            </div>
        </div>
    </section>
    </div
@endsection
