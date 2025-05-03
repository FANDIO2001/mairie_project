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
                <div class="flex justify-between gap-4 itms-center">
                  <a href=""><i class="fa fa-back"></i> Retour</a>
                  <a href="">fevjehj</a>
                </div>
                <div class="mt-5 shadow-sm p-5 mb-5 bg-white  rounded  h-screen">
                <form class="row g-3 ">

                     <div class="col-md-6">
                        <label for="inputEmail4" class="text-black font-bold">Nom</label>
                        <input type="text" class="form-control" id="inputEmail4">
                     </div>

                     <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="inputPassword4">
                     </div>

                     <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Sexe</label>
                        <input type="text" class="form-control" id="inputPassword4">
                     </div>
                     <br>
                     <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Date de Naissance</label>
                        <input type="date" class="form-control" id="inputPassword4">
                     </div>
                     <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Lieux de Naissance</label>
                        <input type="text" class="form-control" id="inputPassword4">
                     </div>

                     <div class="col-12">
                        <label for="inputAddress" class="form-label">Nom du pere</label>
                        <input type="text" class="form-control" id="inputAddress" >
                     </div>

                     <div class="col-12">
                        <label for="inputAddress2" class="form-label">Nom de la mere</label>
                        <input type="text" class="form-control" id="inputAddress2">
                     </div>
                     <div class="col-md-6">
                        <label for="inputCity" class="form-label">Proffession du pere</label>
                        <input type="text" class="form-control" id="inputCity">
                     </div>
                   
                     <div class="col-md-6">
                        <label for="inputCity" class="form-label">Proffession de la mere</label>
                        <input type="text" class="form-control" id="inputCity">
                     </div>
                   
                     <div class="mb-3 col-12">
                        <label for="formFile" class="form-label">Piece d'identification du pere</label>
                        <input class="form-control" type="file" id="formFile">
                     </div>
                     <div class="mb-3 col-12">
                        <label for="formFile" class="form-label">Piece d'identification de la mere</label>
                        <input class="form-control" type="file" id="formFile">
                     </div>
                     <div class="mb-3 col-12">
                        <label for="formFile" class="form-label">Certificat</label>
                        <input class="form-control" type="file" id="formFile">
                     </div>
                     <div class="col-12">
                        <button type="submit" class="btn btn-primary col-12 p-3 text-3xl mt-4">Sign in</button>
                     </div>
                  </form>
               </div>

               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      @include('components.js')
   </body>
</html>