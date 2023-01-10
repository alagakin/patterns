<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <div class="wrapper ">
        {!! $blocks !!}
    </div>
    </body>
    <style>
        .block {
            width: 100%;
            height: 100%;
        }
        .group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            width: 100%;
            height: 100%;
        }
        .wrapper {
            height: 100vh;
        }
    </style>
</html>
