 <!--begin::Root-->
 <div class="d-flex flex-column flex-root">
     <!--begin::Page-->
     <div class="page d-flex flex-row flex-column-fluid">
         <!--begin::Aside-->
         <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
             data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
             data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
             data-kt-drawer-toggle="#kt_aside_mobile_toggle">

             <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                 <!--begin::Logo-->
                 <a href="{{ route('adminDashboardPage') }}">
                     <img alt="Logo" src="{{ asset('site/images/logo/logo2.png') }}" class="h-50px logo" />
                 </a>
                 <!--end::Logo-->
                 <!--begin::Aside toggler-->
                 <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                     data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                     data-kt-toggle-name="aside-minimize">
                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                     <span class="svg-icon svg-icon-1 rotate-180">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                             <path opacity="0.5"
                                 d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                 fill="black" />
                             <path
                                 d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                 fill="black" />
                         </svg>
                     </span>
                     <!--end::Svg Icon-->
                 </div>
                 <!--end::Aside toggler-->
             </div>

             <div class="aside-menu flex-column-fluid">
                 <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                     data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                     data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                     data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                     <!--begin::Menu-->
                     <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                         id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                         
                         <div class="menu-item">
                             <a class="menu-link" href="{{ route('adminDashboardPage') }}"
                                 title="Go to Dashboard" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                 data-bs-dismiss="click" data-bs-placement="right">
                                 <span class="menu-title">Dashboard</span>
                             </a>
                         </div>

                         <div class="menu-item menu-item-submenu">
                             <a class="menu-link" href="{{ route('okullar') }}" title="Y??ksek Okullar Sayfas??"
                                 data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                 data-bs-placement="right">
                                 <span class="menu-title">Y??ksek Okullar</span>
                             </a>



                         </div>
                         <div class="menu-item">
                             <a class="menu-link" href="{{ route('fakulteler') }}" title="Fak??lteler Sayfas??"
                                 data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                 data-bs-placement="right">
                                 <span class="menu-title">Fak??lteler </span>
                             </a>
                         </div>
                         <div class="menu-item">
                             <a class="menu-link" href="{{ route('enstituler') }}" title="Enstit??ler Sayfas??"
                                 data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                 data-bs-placement="right">
                                 <span class="menu-title">Enstit??ler </span>
                             </a>
                         </div>
                         <div class="menu-item">
                             <a class="menu-link" href="{{ route('duyurular') }}" title="Duyurular Sayfas??"
                                 data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                 data-bs-placement="right">
                                 <span class="menu-title">Duyurular </span>
                             </a>
                         </div>
                         <div class="menu-item">
                             <a class="menu-link" href="{{ route('haberler') }}" title="Haberler Sayfas??"
                                 data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                 data-bs-placement="right">
                                 <span class="menu-title">Haberler </span>
                             </a>
                         </div>
                         <div class="menu-item">
                             <a class="menu-link" href="{{ route('etkinlikler') }}" title="Etkinlikler Sayfas??"
                                 data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                 data-bs-placement="right">
                                 <span class="menu-title">Etkinlikler</span>
                             </a>
                         </div>
                         <div class="menu-item">
                             <a class="menu-link" href="{{ route('akademikPanel') }}" title="Personeller Sayfas??"
                                 data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                 data-bs-placement="right">
                                 <span class="menu-title">Akademik Kadro </span>
                             </a>
                         </div>
                         <div class="menu-item">
                             <a class="menu-link" href="{{ route('adminList') }}" title="Personeller Sayfas??"
                                 data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                 data-bs-placement="right">
                                 <span class="menu-title">Adminler </span>
                             </a>
                         </div>

                         <div class="menu-item">
                             <a class="menu-link" href="{{ route('adminLogoutPage') }}" title="????k????"
                                 data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                 data-bs-placement="right">
                                 <span class="menu-title">????k????</span>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>



         <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
             <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                 @yield('content')
             </div>
         </div>


     </div>
 </div>
