<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <title>Eyelyze Access</title>
</head>

<body class="bg-gray-800 text-gray-400">


    <div>
        <h3 class="text-3xl font-medium">Access Page</h3>

        <form action="" method="POST">
            @csrf
            <input type="email" name="email" placeholder="john@mail.com" class="border border-white"
                value="{{ old('email') }}" required>
            <input type="password" name="password" id="" class="border border-white" placeholder="*******"
                required>

            <button type="submit" class="border border-white p-2">Log in</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-center",
                "timeOut": "3000",

            };

            var type = "{{ Session::get('alert-type') }}";
            var message = "{{ Session::get('message') }}";

            if (type === 'danger') {
                toastr.error(message);
            } else if (type === 'success') {
                toastr.success(message);
            } else if (type === 'warning') {
                toastr.warning(message);
            } else {
                toastr.info(message);
            }
        @endif
    </script>
</body>

</html>
