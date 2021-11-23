<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <title> @yield('title') </title>
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    
<!-- Hotjar Tracking Code for http://127.0.0.1:8000/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2713711,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</head>

<body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
    @stack('prepend-style')
    @include('includes.script')
    @stack('addon-script')
    




</body>

</html>




