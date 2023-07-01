<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MieJoko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    {{-- <link rel="stylesheet" href = "css/main.css"> --}}
</head>

<body>
    <div>
        <section>
            @include('navbar')
        </section>
        <section>
            @include('carousel')
        </section>
        <section>@include('daftarMenu')</section>

        <section>
            @include('tokoOnline')
        </section>
        <section>
            @include('artikel')
        </section>
        <section>
            @include('about')
        </section>
        <section>
            @include('ulasan')
        </section>
    </div>

    {{-- @include('collection') --}}



    {{-- >
    <!-- custom js -->
    <script src = "js/script.js"></script> --}}

    <!-- jquery -->
    <script src="js/jquery-3.6.0.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
