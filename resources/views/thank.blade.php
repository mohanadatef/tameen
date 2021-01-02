<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TS64FZ5');</script>
    <!-- End Google Tag Manager -->
    <title>thanks</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Including css file -->
    <link rel="stylesheet" href="{{asset('public/css/thanks.css')}}">
</head>
<body style="overflow-y: hidden;">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS64FZ5"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div style="text-align: center;">
    <img class="img-thanks" src="{{asset('public/Imgs/thanks1.jpg')}}" />
</div>
</body>
<!-- these files must included here (header won't work correctly if not!) -->
<script src="{{asset('public/Files/jquery.min.js')}}"></script>
<script src="{{asset('public/Files/popper.min.js')}}"></script>
<script src="{{asset('public/Files/bootstrap.min.js')}}"></script>


@if(strpos(Request::url(), 'thank'))
    <script>
        setTimeout(function(){
        window.open("{{url('thank/pdf')}}","_self");
        }, 30000);
    </script>

@endif

</html>
