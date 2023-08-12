<!DOCTYPE html>
<html>
    <head>
        <!-- <link rel="stylesheet" href="/front/DoAn2/css/bootstrap.min.css" type="text/css"> -->
        <link rel="stylesheet" href="/front/DoAn2/css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="/front/DoAn2/CSS/cs.css">
        <link rel="stylesheet" href="/front/DoAn2/CSS/core.css">
        <script src="/front/DoAn2/angular/angular.min.js"></script>
        <script src="/front/DoAn2/angular/global.js"></script>
        <link rel="stylesheet" href="/front/DoAn2/CSS/cartcss.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/front/DoAn2/form/tt.html">
	    <script src="/front/DoAn2/angular/home.js"></script>
        
    </head>
    <body>
        
        {{-- class dau --}}
        @include('Home.form.dau')
        
        {{-- div class <header> --}}
        @include('Home.form.header')
        {{-- div class mainnav --}}
        @include('Home.form.mainnav')
        
        {{-- div class bodi --}}
        @yield('layout')
        
        {{-- div class footer --}}
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
            
        <!-- <script>
            function  addToCart(item) {
                 item.quantity = 1;
                 console.log(item.quantity);
                 var list;
                 if (localStorage.getItem('car') == null) {
                     list = [item];
                 }
                 else 
                 {
                     list = JSON.parse(localStorage.getItem('car')) || [];
                     let ok = true;
                     for (let x of list) 
                     {
                         if (x.id == item.id) 
                         {
                            x.quantity += 1;
                            ok = false;
                            break;
                         }
                    }
                    if(ok)
                    {
                     list.push(item); 
                    } 
                 }
                 localStorage.setItem('car', JSON.stringify(list));
                 
                 alert("Đã thêm giở hàng thành công");
             }
         </script>  -->
    <script src="/front/DoAn2/js/jquery-3.3.1.min.js"></script>
    <script src="/front/DoAn2/js/bootstrap.min.js"></script>
    <script src="/front/DoAn2/js/jquery.nice-select.min.js"></script>
    <script src="/front/DoAn2/js/jquery-ui.min.js"></script>
    <script src="/front/DoAn2/js/jquery.slicknav.js"></script>
    <script src="/front/DoAn2/js/mixitup.min.js"></script>
    <script src="/front/DoAn2/js/owl.carousel.min.js"></script>
	<div id='mainDiv'></div>
    </body>
</html>