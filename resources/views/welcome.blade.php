<!DOCTYPE html>
<html lang="en">
   <head>
      @include('components.css')
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">

            <!-- Sidebar  -->
               @include('components.sidebar')
            <!-- end sidebar -->
            <!-- right content -->

            <div id="content">

               <!-- topbar -->
                  @include('components.togglebar')
               <!-- end topbar -->

               <!-- dashboard inner -->
                  @include('components.dashboard')
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      @include('components.js')
   </body>
</html>