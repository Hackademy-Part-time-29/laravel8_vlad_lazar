<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{env('APP_NAME')}}</title>
        @vite(['resources/css/app.css','resources/jss/app.js'])
    </head>
    <body>
        <x-navbar/>
        {{$slot}}
    </body>
    </html>
</div>