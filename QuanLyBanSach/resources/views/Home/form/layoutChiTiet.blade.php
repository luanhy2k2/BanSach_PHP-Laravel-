<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/front/DoAn2/css/cs.css">
        <link rel="stylesheet" href="/front/DoAn2/css/core.css">
        <link rel="stylesheet" href="/front/DoAn2/css/book.css">
        <script src="../angular/angular.min.js"></script>
        <script src="../angular/global.js"></script>
	    <script src="../angular/home.js"></script>
      <link rel="stylesheet" href="/front/DoAn2/css/css_login.css">
    </head>
    <body >



        @include('Home.form.dau')
        
        {{-- div class <header> --}}
        @include('Home.form.header')
        {{-- div class mainnav --}}
        @include('Home.form.mainnav')
        {{-- div class bodi --}}
        {{-- @yield('layoutChiTiet') --}}
       
        {{-- div class footer --}}
        @yield('layoutChiTiet')
        @include('Home.form.footer')
        <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 2300); // Change image every 2 seconds
            }
        </script>
        
    </body>
</html>