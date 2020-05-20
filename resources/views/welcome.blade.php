<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
    
            <form action=" {{route('student.create')}} " method="POST">
                @csrf
                <input type="text" name="name">
                <input type="text" name="course">
                <button type="submit">valider</button>
            </form>


           
    </body>
</html>
