@extends('layout.master')
@section('judul')
<h1>Halaman biodata</h1>
@endsection
@section('content')
    <form action="/kirim" method="post">
        @csrf
        <h2>Buat Account Baru </h2>
        <h3>Sing Up Form </h3>
         <label>Full Name:<br></label><br>
        <input type="text" name="name"><br><br>
        <label>Last name:<br> </label><br>
        <input type="Last name" name="pass"><br><br> <label>Gender :</label><br> <input type="radio">Mele<br> <input type="radio">Famele<br><input type="radio">Other<br><br>
         <label>Nationality:</label> <br><br> <select name="cars">
        <option value="volvo">Negara</option> <option value="Indonesia">Indonesia</option> <option value="English">English</option> <option value="Other">Other</option> </select> <br>
        <p>Language Spoken: </p>
        <input type="checkbox" name="Language">Bahasa indonesia<br> <input type="checkbox" name="Language">English<br> <input type="checkbox" name="Language">Other<br><br>
        <p>Bio:</p>
        <textarea name="message" rows="10" cols="30"></textarea>
        <br><br>
        <input type="submit" value="kirim">
    </form>
@endsection
