<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @yield("head_tag")
        @yield("head_css")
    </head>
    <body>
        @yield("body")

        @yield("footer_js")
    </body>
</html>