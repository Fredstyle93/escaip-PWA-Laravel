<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue SPA Demo</title>
</head>
<body>


        @if((new \Jenssegers\Agent\Agent())->isMobile())

           {{'is mobile'}}
               
        @else
            {{'is not mobile'}}   
        @endif
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>