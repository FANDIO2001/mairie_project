            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>John David</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h3><a href="{{ url('/') }}" class="text-white ml-5 mt-3 hover:animate_animated animate-bounce">Dasboard</a></h3>
                  <ul class="list-unstyled components">
                

                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Hopitaux</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="general_elements.html"><i class="fa fa-plus"></i> <span>Ajouter Un Nouvel Hopital</span></a></li>
                           <li><a href="media_gallery.html"><i class="fa fa-list"></i><span>Liste Des Hopitaux</span></a></li>
                           <li><a href="icons.html"><i class="fa fa-table"></i><span>Statistique des Haupitaux</span></a></li>
                       
                        </ul>
                     </li>

                     <li>
                

                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Mairie</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="email.html"><i class="fa fa-plus"></i> <span>Nouvelle Mairie</span></a></li>
                           <li><a href="calendar.html"><i class="fa fa-list"></i> <span>Toute les Mairies</span></a></li>
                           <li><a href="media_gallery.html"><i class="fa fa-table"></i> <span>Stat Sur les Mairires</span></a></li>
                        </ul>
                     </li>

                     <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Declaration</span></a></li>
                     <li>
                        <a href="#">
                           <i class="fa fa-paper-plane red_color"></i> <span>Contact</span>
                        </a>
                     </li>
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Etablir des Actes</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="{{ route('naissance') }}">> <span>Acte de Naissance</span></a>
                           </li>
                           <li>
                              <a href="#">> <span>Acte de Mariage</span></a>
                           </li>
                           <li>
                              <a href="#">> <span>Acte de desces</span></a>
                           </li>
           
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->