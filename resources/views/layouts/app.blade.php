<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlameSpace</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Include FullCalendar CSS here if not already included in your project -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
</head>
<body>
    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Include FullCalendar JavaScript here if not already included in your project -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
</body>
</html>
