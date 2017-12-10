@extends('partials.layout')
@section('content')
    <div class="col-lg-12">
        <h1 class="text-center">Countries List</h1>
        <div class="col-lg-3 col-lg-offset-9">
            <div class="form-group">
                <input id="search" placeholder="Type to search..." />
            </div>
        </div>
        <table id="data">
            <thead>
            <tr>
                <th>Pavadinimas</th>
                <th>Plotas (km²)</th>
                <th>Gyventojų skaičius (mln.)</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($countries as $country)
                <tr>
                    <td style="width: 40%"><a href="/country/{{$country->id}}">{{$country->name}}</a></td>
                    <td style="width: 30%">{{$country->area}}</td>
                    <td style="width: 20%">{{$country->population}}</td>
                    <td><a onclick="alert('Are you sure?')" href="/country/delete/{{$country->id}}"><span class="glyphicon glyphicon-remove btn btn-danger"></span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-lg-12">
        <h3 id="padding">Įvesti naują šalį</h3>
    </div>

    <form action="/country/create" method="post">
        {{ csrf_field() }}

        <div class="col-lg-3">
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Pavadinimas" required>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <input type="text" class="form-control" id="area" name="area" placeholder="Plotas (km²)" required>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <input type="text" class="form-control" id="population" name="population"
                       placeholder="Gyventojų skaičius (mln)" required>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="form-group text-center">
                <button class="btn btn-primary" name="create">Patvirtinti</button>
            </div>
        </div>
    </form>
@endsection