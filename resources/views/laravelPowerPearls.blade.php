<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Power Pearls edition</title>
</head>
<body>
    <h1>Laravel Power Pearls edition</h1>
   
    <!-- extend layout master.php -->
    @extends('layouts.master')

    <!-- sets value for section title to "Laravel Power Pearls" (section title is used as yield in messages.blade.php) -->
    @section('title', 'Laravel Power Pearls' )

    <h3>The next generation of Laravel's powerful detergents and fluffy laundry softeners has finally arrived!</h3>
    <p>say goodbye to fiber loss with Laravels next generation Fiber-Retainer - your lingerie will last a lifetime</p>

    @endsectiom
</body>
</html>