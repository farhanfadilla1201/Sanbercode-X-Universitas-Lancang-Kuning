@extends('layouts.master')
@section('title')
Sign up Form
@endsection
@section('content')

    <form action="/home"method="post">
    @csrf
        <label>First name</label><br>
        <input type="text" name="fullname" > <br> <br>
        <label>Last name</label><br>
        <input type="text" name="lastname"> <br> <br>
        <label>Gender</label><br>
        <input type="radio" name="Gender">male<br>
        <input type="radio" name="Gender">Famale<br> 
        <input type="radio"name="Gender">Other <br> <br>
        <label>Bahasa</label><br>
        <select name="Bahasa">
            <option value="">Bahasa inadonesia</option>
            <option value="">Bahasa Inggris</option>
            <option value="">Bahasa Belanda</option>
            <option value="">Bahasa Melayu</option>
            <option value="">other</option>
        </select> <br> <br>
        <label>language Spoken</label> <br>
        <input type="checkbox"name="language Spoken">Bahasa inadonesia <br>
        <input type="checkbox"name="language Spoken">Bahasa Inggris <br>
        <input type="checkbox"name="language Spoken">Bahasa Belanda <br>
        <input type="checkbox"name="language Spoken">Bahasa Melayu <br>
        <label>Bio</label> <br>
       <textarea cols="30" rows="10"></textarea> <br> <br>
        
       <input type="submit"value="Sign Up">
        
    </form>
    @endsection