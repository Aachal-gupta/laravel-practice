<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title> bootsrap - @yield('title', 'default')</title>
        <meta  name="viewport" content="width=device-width ,  initial-scale=1,  shrink-to-fit=no ">

        <!-- Latest bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
         rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
         
         <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <div class="container">
            <div class="row" id="header">
                <div class="col">
                    <h1>WEBSITE NAME </h1>
                </div>
            </div>

            <div class="row">
                <div class="col" id="menu">
                    <ul>
                        <li> <a href="/"> HOME </a></li> |
                        <li> <a href="/about"> ABOUT </a></li> |
                        <li> <a href="/pest"> PEST </a></li> |
                        <li> <a href=""> PRODUCTS </a></li> |
                        <li> <a href=""> CONTACT US </a></li> |
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-9" id="content" >

                    @hasSection('content')
                     @yield('content')  
                     @else
                     <h2>no content found</h2>  
                    @endif
                  
                </div>
                <div class="col-3" id="sidebar">
                    @section('sidebar')
                    <ul>
                        <li> <a href="/"> HOME </a></li>
                        <li> <a href="about"> ABOUT </a></li>
                        <li> <a href="pest"> pest </a></li>
                        <li> <a href=""> PRODUCTS </a></li>
                        <li> <a href=""> CONTACT US </a></li>
                        {{-- <li>@show</li> --}}
                    </ul>
                    @show
                </div>
                
            </div>

            <div class="row">
                <div class="col"  id="footer">
                    @copywrite  29 Mar 2023
                </div>
               
                
            </div>


        </div>

       
       
    </body>
</html>
