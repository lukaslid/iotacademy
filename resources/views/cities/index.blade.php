@extends('partials.layout')
    @section('content')
<div class="col-lg-12">
        <h1 class="text-center">{{$country->name}} Cities List</h1>
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
                <th></th>
            </tr>
            </thead>
            <tbody>

            @foreach ($cities as $city)
                <tr>
                    <td style="width: 40%">{{$city->name}}</td>
                    <td style="width: 30%">{{$city->area}}</td>
                    <td style="width: 20%">{{$city->population}}</td>
                    <td><a onclick="alert('Are you sure?')" href="/city/delete/{{$city->id}}"><span class="glyphicon glyphicon-remove btn btn-danger"></span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>
<div class="col-lg-12">
    <h3 id="padding">Įvesti naują miestą</h3>
</div>

<form action="/city/create/{{$country->id}}" method="post">
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