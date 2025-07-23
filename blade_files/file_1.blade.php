<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File 1</title>
    <style>
        body{
            background-color: black;
            color: white; 
        }
    </style>
</head>
<body>
    <h1>File 1</h1>
    <br><br>

    {{ "the sum of 2 + 7  number is " .  2 + 7 }}

    <br><br><br>

    {!! "<h1> Heading </h1>" !!}

    {{-- {!! "<script> alert('Hacked') </script>" !!} --}}

    <br><br>

    @php

    $Name = "Hamza";
            
    print_r($Name)
    
    @endphp

    {!! $Name !!}


    <br><br>

    <a href="{{route('file_2')}}">File 2</a><br>
    <a href="{{route('file_3')}}">File 3</a>

</body>
</html>