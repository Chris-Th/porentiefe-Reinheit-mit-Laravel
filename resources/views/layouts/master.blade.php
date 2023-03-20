<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- this title-element is filled by the value of the section 'title' of a blade template, which extends this layout: -->
    <title>@yield('title')</title>
</head>
<body>
    <!-- the value of the section 'title' of a blade template extends this layout (same as above in the <head>-secion) -->
    <h1>
        <a href="/laravelPowerPearls">
            @yield('title')
        </a>
    </h1>
   <!-- the following 'yield' is filled by the value of the section 'content' of a blade template, which extends this layout: -->
   @yield('content')

   <!-- and here, we will call the function date() with the format-pattern 'd.m.Y'. It will be returned inside the html. -->
   <div><b>Dummy Footer: {{date('d.m.Y')}}</b></div>

</body>
</html>