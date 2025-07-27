<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Pets Travel International')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-red': '#E32726',
                        'dark-blue': '#0B3B60',
                    },
                    fontFamily: {
                        'pathway-gothic': ['"Pathway Gothic One"', 'sans-serif'],
                        'open-sans': ['"Open Sans"', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Pathway Gothic One', sans-serif;
        }
    </style>
</head>
<body>
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')
    
    @include('partials.chat-widget')
</body>
</html>
