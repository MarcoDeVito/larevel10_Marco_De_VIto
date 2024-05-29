
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>{{$title ?? ''}}</title>
        
      </head>
      <body class="bg-dark text-white mx-4">
        <x-navbar></x-navbar>
        

        {{$slot}}
        
      </body>
    </html>
