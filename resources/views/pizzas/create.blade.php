@extends('layout')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="form2">
                <h3>اینجا سفارش دهید</h3>
                <form action="/pizzas" method="POST">
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
                                <label for="pizzas_name">نام پیتزا</label>
                            </td>
                            <td>
                                <input type="text" name="pizzas_name" id="pizzas_name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="address">آدرس</label>
                            </td>
                            <td>
                                <input type="text" name="address" id="address" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="quantity">تعداد سفارش</label>
                            </td>
                            <td>
                                <input type="text" name="quantity" id="quantity" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="type">نوع پیتزا</label>
                            </td>
                            <td>
                                <select name="type" id="type">
                                    <option value="margarita">Margarita</option>
                                    <option value="vegetable">Vegetable</option>
                                    <option value="special">Special</option>
                                    <option value="mix">Mix</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="steak">Steak</option>
                                    <option value="meat and mushroom">Meat and Mushroom</option>
                                    <option value="chicke">Chicke</option>
                                    <option value="neapolitan">Neapolitan</option>
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
