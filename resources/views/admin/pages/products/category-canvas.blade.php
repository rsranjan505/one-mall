
<!DOCTYPE html>





























<!-- =========================================================
* Vuexy - Bootstrap Admin Template | v2.0.0
==============================================================

* Product Page: https://1.envato.market/vuexy_admin
* Created by: Pixinvent
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright Pixinvent (https://pixinvent.com)

=========================================================
 -->
<!-- beautify ignore:start -->


<html lang="en" class="light-style layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="https://demos.pixinvent.com/vuexy-html-admin-template/assets/" data-template="horizontal-menu-template" data-style="light">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>eCommerce Category List - Apps | Vuexy - Bootstrap Admin Template</title>


    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">


    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5J3LMKC');</script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />

    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
<link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
<link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/select2/select2.css">
<link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/@form-validation/form-validation.css">
<link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/quill/typography.css">
<link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/quill/katex.css">
<link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/quill/editor.css">

    <!-- Page CSS -->

<link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/css/pages/app-ecommerce.css">

    <!-- Helpers -->
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/js/template-customizer.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/js/config.js"></script>

  </head>

  <body>


    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
  <div class="layout-container">






<!-- Navbar -->





  <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="container-xxl">




      <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
        <a href="index.html" class="app-brand-link">
          <span class="app-brand-logo demo">
<svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
</svg>
</span>
          <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
        </a>



        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
          <i class="ti ti-x ti-md align-middle"></i>
        </a>

      </div>




      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none  ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="ti ti-menu-2 ti-md"></i>
        </a>
      </div>


      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">






        <ul class="navbar-nav flex-row align-items-center ms-auto">


          <!-- Search -->
          <li class="nav-item navbar-search-wrapper">
            <a class="nav-link btn btn-text-secondary btn-icon rounded-pill search-toggler" href="javascript:void(0);">
              <i class="ti ti-search ti-md"></i>
            </a>
          </li>
          <!-- /Search -->

          <!-- Language -->
          <li class="nav-item dropdown-language dropdown">
            <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='ti ti-language rounded-circle ti-md'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                  <span>English</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                  <span>French</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                  <span>Arabic</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                  <span>German</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ Language -->

          <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown">
            <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='ti ti-md'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span class="align-middle"><i class='ti ti-sun ti-md me-3'></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span class="align-middle"><i class="ti ti-moon-stars ti-md me-3"></i>Dark</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                  <span class="align-middle"><i class="ti ti-device-desktop-analytics ti-md me-3"></i>System</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- / Style Switcher-->

          <!-- Quick links  -->
          <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
            <a class="nav-link btn btn-text-secondary btn-icon rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class='ti ti-layout-grid-add ti-md'></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end p-0">
              <div class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h6 class="mb-0 me-auto">Shortcuts</h6>
                  <a href="javascript:void(0)" class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="ti ti-plus text-heading"></i></a>
                </div>
              </div>
              <div class="dropdown-shortcuts-list scrollable-container">
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-calendar ti-26px text-heading"></i>
                    </span>
                    <a href="app-calendar.html" class="stretched-link">Calendar</a>
                    <small>Appointments</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-file-dollar ti-26px text-heading"></i>
                    </span>
                    <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                    <small>Manage Accounts</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-user ti-26px text-heading"></i>
                    </span>
                    <a href="app-user-list.html" class="stretched-link">User App</a>
                    <small>Manage Users</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-users ti-26px text-heading"></i>
                    </span>
                    <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                    <small>Permission</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-device-desktop-analytics ti-26px text-heading"></i>
                    </span>
                    <a href="index.html" class="stretched-link">Dashboard</a>
                    <small>User Dashboard</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-settings ti-26px text-heading"></i>
                    </span>
                    <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                    <small>Account Settings</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-help ti-26px text-heading"></i>
                    </span>
                    <a href="pages-faq.html" class="stretched-link">FAQs</a>
                    <small>FAQs & Articles</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-square ti-26px text-heading"></i>
                    </span>
                    <a href="modal-examples.html" class="stretched-link">Modals</a>
                    <small>Useful Popups</small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Quick links -->

          <!-- Notification -->
          <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
            <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <span class="position-relative">
                <i class="ti ti-bell ti-md"></i>
                <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end p-0">
              <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h6 class="mb-0 me-auto">Notification</h6>
                  <div class="d-flex align-items-center h6 mb-0">
                    <span class="badge bg-label-primary me-2">8 New</span>
                    <a href="javascript:void(0)" class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="ti ti-mail-opened text-heading"></i></a>
                  </div>
                </div>
              </li>
              <li class="dropdown-notifications-list scrollable-container">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/1.png" alt class="rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                        <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                        <small class="text-muted">1h ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">Charles Franklin</h6>
                        <small class="mb-1 d-block text-body">Accepted your connection</small>
                        <small class="text-muted">12hr ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/2.png" alt class="rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">New Message ✉️</h6>
                        <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                        <small class="text-muted">1h ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-shopping-cart"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">Whoo! You have new order 🛒 </h6>
                        <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                        <small class="text-muted">1 day ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/9.png" alt class="rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">Application has been approved 🚀 </h6>
                        <small class="mb-1 d-block text-body">Your ABC project application has been approved.</small>
                        <small class="text-muted">2 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-chart-pie"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">Monthly report is generated</h6>
                        <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/5.png" alt class="rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">Send connection request</h6>
                        <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                        <small class="text-muted">4 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/6.png" alt class="rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">New message from Jane</h6>
                        <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                        <small class="text-muted">5 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-warning"><i class="ti ti-alert-triangle"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">CPU is running high</h6>
                        <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at 88.63%,</small>
                        <small class="text-muted">5 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="border-top">
                <div class="d-grid p-4">
                  <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                    <small class="align-middle">View all notifications</small>
                  </a>
                </div>
              </li>
            </ul>
          </li>
          <!--/ Notification -->

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/1.png" alt class="rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-2">
                      <div class="avatar avatar-online">
                        <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/1.png" alt class="rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0">John Doe</h6>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider my-1 mx-n2"></div>
              </li>
              <li>
                <a class="dropdown-item" href="pages-profile-user.html">
                  <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="pages-account-settings-account.html">
                  <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="pages-account-settings-billing.html">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i><span class="flex-grow-1 align-middle">Billing</span>
                    <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
                  </span>
                </a>
              </li>
              <li>
                <div class="dropdown-divider my-1 mx-n2"></div>
              </li>
              <li>
                <a class="dropdown-item" href="pages-pricing.html">
                  <i class="ti ti-currency-dollar me-3 ti-md"></i><span class="align-middle">Pricing</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="pages-faq.html">
                  <i class="ti ti-question-mark me-3 ti-md"></i><span class="align-middle">FAQ</span>
                </a>
              </li>
              <li>
                <div class="d-grid px-2 pt-2 pb-1">
                  <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
                    <small class="align-middle">Logout</small>
                    <i class="ti ti-logout ms-2 ti-14px"></i>
                  </a>
                </div>
              </li>
            </ul>
          </li>
          <!--/ User -->



        </ul>
      </div>


      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
        <input type="text" class="form-control search-input  border-0" placeholder="Search..." aria-label="Search...">
        <i class="ti ti-x search-toggler cursor-pointer"></i>
      </div>


    </div>
  </nav>


<!-- / Navbar -->



    <!-- Layout container -->
    <div class="layout-page">

      <!-- Content wrapper -->
      <div class="content-wrapper">







<!-- Menu -->
<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal  menu bg-menu-theme flex-grow-0">
  <div class="container-xxl d-flex h-100">


    <ul class="menu-inner pb-2 pb-xl-0">

      <!-- Dashboards -->
      <li class="menu-item
">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-smart-home"></i>
          <div data-i18n="Dashboards">Dashboards</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="index.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
              <div data-i18n="Analytics">Analytics</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="dashboards-crm.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
              <div data-i18n="CRM">CRM</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-ecommerce-dashboard.html" class="menu-link">
              <i class='menu-icon tf-icons ti ti-shopping-cart'></i>
              <div data-i18n="eCommerce">eCommerce</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-logistics-dashboard.html" class="menu-link">
              <i class='menu-icon tf-icons ti ti-truck'></i>
              <div data-i18n="Logistics">Logistics</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-academy-dashboard.html" class="menu-link">
              <i class='menu-icon tf-icons ti ti-book'></i>
              <div data-i18n="Academy">Academy</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Layouts -->
      <li class="menu-item
">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
          <div data-i18n="Layouts">Layouts</div>
        </a>

        <ul class="menu-sub">

          <li class="menu-item">
            <a href="layouts-without-menu.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-menu-2"></i>
              <div data-i18n="Without menu">Without menu</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="../vertical-menu-template/" class="menu-link" target="_blank">
              <i class="menu-icon tf-icons ti ti-layout-distribute-vertical"></i>
              <div data-i18n="Vertical">Vertical</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-fluid.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-maximize"></i>
              <div data-i18n="Fluid">Fluid</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-container.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-arrows-maximize"></i>
              <div data-i18n="Container">Container</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-blank.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-square"></i>
              <div data-i18n="Blank">Blank</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Apps -->
      <li class="menu-item
 active">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class='menu-icon tf-icons ti ti-layout-grid-add'></i>
          <div data-i18n="Apps">Apps</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="app-email.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-mail"></i>
              <div data-i18n="Email">Email</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-chat.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-messages"></i>
              <div data-i18n="Chat">Chat</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-calendar.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-calendar"></i>
              <div data-i18n="Calendar">Calendar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-kanban.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
              <div data-i18n="Kanban">Kanban</div>
            </a>
          </li>
          <li class="menu-item
 active">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons ti ti-shopping-cart'></i>
              <div data-i18n="eCommerce">eCommerce</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-ecommerce-dashboard.html" class="menu-link">
                  <div data-i18n="Dashboard">Dashboard</div>
                </a>
              </li>
              <li class="menu-item
 active">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Products">Products</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-ecommerce-product-list.html" class="menu-link">
                      <div data-i18n="Product List">Product List</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-product-add.html" class="menu-link">
                      <div data-i18n="Add Product">Add Product</div>
                    </a>
                  </li>
                  <li class="menu-item active">
                    <a href="app-ecommerce-category-list.html" class="menu-link">
                      <div data-i18n="Category List">Category List</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item
">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Order">Order</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-ecommerce-order-list.html" class="menu-link">
                      <div data-i18n="Order List">Order List</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-order-details.html" class="menu-link">
                      <div data-i18n="Order Details">Order Details</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item
">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Customer">Customer</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-ecommerce-customer-all.html" class="menu-link">
                      <div data-i18n="All Customers">All Customers</div>
                    </a>
                  </li>
                  <li class="menu-item
">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <div data-i18n="Customer Details">Customer Details</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="app-ecommerce-customer-details-overview.html" class="menu-link">
                          <div data-i18n="Overview">Overview</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-ecommerce-customer-details-security.html" class="menu-link">
                          <div data-i18n="Security">Security</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-ecommerce-customer-details-billing.html" class="menu-link">
                          <div data-i18n="Address & Billing">Address & Billing</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-ecommerce-customer-details-notifications.html" class="menu-link">
                          <div data-i18n="Notifications">Notifications</div>
                        </a>
                      </li>

                    </ul>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="app-ecommerce-manage-reviews.html" class="menu-link">
                  <div data-i18n="Manage Reviews">Manage Reviews</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-ecommerce-referral.html" class="menu-link">
                  <div data-i18n="Referrals">Referrals</div>
                </a>
              </li>
              <li class="menu-item
">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Settings">Settings</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-detail.html" class="menu-link">
                      <div data-i18n="Store Details">Store Details</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-payments.html" class="menu-link">
                      <div data-i18n="Payments">Payments</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-checkout.html" class="menu-link">
                      <div data-i18n="Checkout">Checkout</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-shipping.html" class="menu-link">
                      <div data-i18n="Shipping & Delivery">Shipping & Delivery</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-locations.html" class="menu-link">
                      <div data-i18n="Locations">Locations</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-notifications.html" class="menu-link">
                      <div data-i18n="Notifications">Notifications</div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons ti ti-book'></i>
              <div data-i18n="Academy">Academy</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-academy-dashboard.html" class="menu-link">
                  <div data-i18n="Dashboard">Dashboard</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-academy-course.html" class="menu-link">
                  <div data-i18n="My Course">My Course</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-academy-course-details.html" class="menu-link">
                  <div data-i18n="Course Details">Course Details</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons ti ti-truck'></i>
              <div data-i18n="Logistics">Logistics</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-logistics-dashboard.html" class="menu-link">
                  <div data-i18n="Dashboard">Dashboard</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-logistics-fleet.html" class="menu-link">
                  <div data-i18n="Fleet">Fleet</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-file-dollar"></i>
              <div data-i18n="Invoice">Invoice</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-invoice-list.html" class="menu-link">
                  <div data-i18n="List">List</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-invoice-preview.html" class="menu-link">
                  <div data-i18n="Preview">Preview</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-invoice-edit.html" class="menu-link">
                  <div data-i18n="Edit">Edit</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-invoice-add.html" class="menu-link">
                  <div data-i18n="Add">Add</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-users"></i>
              <div data-i18n="Users">Users</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-user-list.html" class="menu-link">
                  <div data-i18n="List">List</div>
                </a>
              </li>
              <li class="menu-item
">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="View">View</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-user-view-account.html" class="menu-link">
                      <div data-i18n="Account">Account</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-user-view-security.html" class="menu-link">
                      <div data-i18n="Security">Security</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-user-view-billing.html" class="menu-link">
                      <div data-i18n="Billing & Plans">Billing & Plans</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-user-view-notifications.html" class="menu-link">
                      <div data-i18n="Notifications">Notifications</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-user-view-connections.html" class="menu-link">
                      <div data-i18n="Connections">Connections</div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-settings"></i>
              <div data-i18n="Roles & Permissions">Roles & Permission</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-access-roles.html" class="menu-link">
                  <div data-i18n="Roles">Roles</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-access-permission.html" class="menu-link">
                  <div data-i18n="Permission">Permission</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <!-- Pages -->
      <li class="menu-item
">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-file"></i>

          <div data-i18n="Pages">Pages</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons ti ti-files'></i>
              <div data-i18n="Front Pages">Front Pages</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="../front-pages/landing-page.html" class="menu-link" target="_blank">
                  <div data-i18n="Landing">Landing</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="../front-pages/pricing-page.html" class="menu-link" target="_blank">
                  <div data-i18n="Pricing">Pricing</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="../front-pages/payment-page.html" class="menu-link" target="_blank">
                  <div data-i18n="Payment">Payment</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="../front-pages/checkout-page.html" class="menu-link" target="_blank">
                  <div data-i18n="Checkout">Checkout</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="../front-pages/help-center-landing.html" class="menu-link" target="_blank">
                  <div data-i18n="Help Center">Help Center</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-user-circle"></i>
              <div data-i18n="User Profile">User Profile</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="pages-profile-user.html" class="menu-link">
                  <div data-i18n="Profile">Profile</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-profile-teams.html" class="menu-link">
                  <div data-i18n="Teams">Teams</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-profile-projects.html" class="menu-link">
                  <div data-i18n="Projects">Projects</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-profile-connections.html" class="menu-link">
                  <div data-i18n="Connections">Connections</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-settings"></i>
              <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="pages-account-settings-account.html" class="menu-link">
                  <div data-i18n="Account">Account</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-account-settings-security.html" class="menu-link">
                  <div data-i18n="Security">Security</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-account-settings-billing.html" class="menu-link">
                  <div data-i18n="Billing & Plans">Billing & Plans</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-account-settings-notifications.html" class="menu-link">
                  <div data-i18n="Notifications">Notifications</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-account-settings-connections.html" class="menu-link">
                  <div data-i18n="Connections">Connections</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="pages-faq.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-help"></i>
              <div data-i18n="FAQ">FAQ</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-pricing.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-diamond"></i>
              <div data-i18n="Pricing">Pricing</div>
            </a>
          </li>
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
              <div data-i18n="Misc">Misc</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="pages-misc-error.html" class="menu-link" target="_blank">
                  <div data-i18n="Error">Error</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                  <div data-i18n="Under Maintenance">Under Maintenance</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                  <div data-i18n="Coming Soon">Coming Soon</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                  <div data-i18n="Not Authorized">Not Authorized</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-lock"></i>
              <div data-i18n="Authentications">Authentications</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item
">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Login">Login</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-login-cover.html" class="menu-link" target="_blank">
                      <div data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item
">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Register">Register</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-register-cover.html" class="menu-link" target="_blank">
                      <div data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                      <div data-i18n="Multi-steps">Multi-steps</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Verify Email">Verify Email</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                      <div data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Reset Password">Reset Password</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                      <div data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Forgot Password">Forgot Password</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                      <div data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Two Steps">Two Steps</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                      <div data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-forms"></i>
              <div data-i18n="Wizard Examples">Wizard Examples</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="wizard-ex-checkout.html" class="menu-link">
                  <div data-i18n="Checkout">Checkout</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="wizard-ex-property-listing.html" class="menu-link">
                  <div data-i18n="Property Listing">Property Listing</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="wizard-ex-create-deal.html" class="menu-link">
                  <div data-i18n="Create Deal">Create Deal</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="modal-examples.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-square"></i>
              <div data-i18n="Modal Examples">Modal Examples</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Components -->
      <li class="menu-item
">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-toggle-left"></i>
          <div data-i18n="Components">Components</div>
        </a>
        <ul class="menu-sub">
          <!-- Cards -->
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-id"></i>
              <div data-i18n="Cards">Cards</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="cards-basic.html" class="menu-link">
                  <div data-i18n="Basic">Basic</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="cards-advance.html" class="menu-link">
                  <div data-i18n="Advance">Advance</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="cards-statistics.html" class="menu-link">
                  <div data-i18n="Statistics">Statistics</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="cards-analytics.html" class="menu-link">
                  <div data-i18n="Analytics">Analytics</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="cards-actions.html" class="menu-link">
                  <div data-i18n="Actions">Actions</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- User interface -->
          <li class="menu-item
">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-color-swatch"></i>
              <div data-i18n="User interface">User interface</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="ui-accordion.html" class="menu-link">
                  <div data-i18n="Accordion">Accordion</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-alerts.html" class="menu-link">
                  <div data-i18n="Alerts">Alerts</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-badges.html" class="menu-link">
                  <div data-i18n="Badges">Badges</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-buttons.html" class="menu-link">
                  <div data-i18n="Buttons">Buttons</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-carousel.html" class="menu-link">
                  <div data-i18n="Carousel">Carousel</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-collapse.html" class="menu-link">
                  <div data-i18n="Collapse">Collapse</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-dropdowns.html" class="menu-link">
                  <div data-i18n="Dropdowns">Dropdowns</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-footer.html" class="menu-link">
                  <div data-i18n="Footer">Footer</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-list-groups.html" class="menu-link">
                  <div data-i18n="List groups">List groups</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-modals.html" class="menu-link">
                  <div data-i18n="Modals">Modals</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-navbar.html" class="menu-link">
                  <div data-i18n="Navbar">Navbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-offcanvas.html" class="menu-link">
                  <div data-i18n="Offcanvas">Offcanvas</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                  <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-progress.html" class="menu-link">
                  <div data-i18n="Progress">Progress</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-spinners.html" class="menu-link">
                  <div data-i18n="Spinners">Spinners</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-tabs-pills.html" class="menu-link">
                  <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-toasts.html" class="menu-link">
                  <div data-i18n="Toasts">Toasts</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-tooltips-popovers.html" class="menu-link">
                  <div data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-typography.html" class="menu-link">
                  <div data-i18n="Typography">Typography</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Extended components -->
          <li class="menu-item
">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-components"></i>
              <div data-i18n="Extended UI">Extended UI</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="extended-ui-avatar.html" class="menu-link">
                  <div data-i18n="Avatar">Avatar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-blockui.html" class="menu-link">
                  <div data-i18n="BlockUI">BlockUI</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-drag-and-drop.html" class="menu-link">
                  <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-media-player.html" class="menu-link">
                  <div data-i18n="Media Player">Media Player</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                  <div data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-star-ratings.html" class="menu-link">
                  <div data-i18n="Star Ratings">Star Ratings</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-sweetalert2.html" class="menu-link">
                  <div data-i18n="SweetAlert2">SweetAlert2</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-text-divider.html" class="menu-link">
                  <div data-i18n="Text Divider">Text Divider</div>
                </a>
              </li>
              <li class="menu-item
">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Timeline">Timeline</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="extended-ui-timeline-basic.html" class="menu-link">
                      <div data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                      <div data-i18n="Fullscreen">Fullscreen</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="extended-ui-tour.html" class="menu-link">
                  <div data-i18n="Tour">Tour</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-treeview.html" class="menu-link">
                  <div data-i18n="Treeview">Treeview</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-misc.html" class="menu-link">
                  <div data-i18n="Miscellaneous">Miscellaneous</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Icons -->
          <li class="menu-item
">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-brand-tabler"></i>
              <div data-i18n="Icons">Icons</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="icons-tabler.html" class="menu-link">
                  <div data-i18n="Tabler">Tabler</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="icons-font-awesome.html" class="menu-link">
                  <div data-i18n="Fontawesome">Fontawesome</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <!-- Forms -->
      <li class="menu-item
">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-forms"></i>
          <div data-i18n="Forms">Forms</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-toggle-left"></i>
              <div data-i18n="Form Elements">Form Elements</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="forms-basic-inputs.html" class="menu-link">
                  <div data-i18n="Basic Inputs">Basic Inputs</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-input-groups.html" class="menu-link">
                  <div data-i18n="Input groups">Input groups</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-custom-options.html" class="menu-link">
                  <div data-i18n="Custom Options">Custom Options</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-editors.html" class="menu-link">
                  <div data-i18n="Editors">Editors</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-file-upload.html" class="menu-link">
                  <div data-i18n="File Upload">File Upload</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-pickers.html" class="menu-link">
                  <div data-i18n="Pickers">Pickers</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-selects.html" class="menu-link">
                  <div data-i18n="Select & Tags">Select &amp; Tags</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-sliders.html" class="menu-link">
                  <div data-i18n="Sliders">Sliders</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-switches.html" class="menu-link">
                  <div data-i18n="Switches">Switches</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-extras.html" class="menu-link">
                  <div data-i18n="Extras">Extras</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-layout-navbar"></i>
              <div data-i18n="Form Layouts">Form Layouts</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="form-layouts-vertical.html" class="menu-link">
                  <div data-i18n="Vertical Form">Vertical Form</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="form-layouts-horizontal.html" class="menu-link">
                  <div data-i18n="Horizontal Form">Horizontal Form</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="form-layouts-sticky.html" class="menu-link">
                  <div data-i18n="Sticky Actions">Sticky Actions</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
              <div data-i18n="Form Wizard">Form Wizard</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="form-wizard-numbered.html" class="menu-link">
                  <div data-i18n="Numbered">Numbered</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="form-wizard-icons.html" class="menu-link">
                  <div data-i18n="Icons">Icons</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="form-validation.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-checkbox"></i>
              <div data-i18n="Form Validation">Form Validation</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Tables -->
      <li class="menu-item
">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-layout-grid"></i>
          <div data-i18n="Tables">Tables</div>
        </a>
        <ul class="menu-sub">
          <!-- Tables -->
          <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-table"></i>
              <div data-i18n="Tables">Tables</div>
            </a>
          </li>
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-layout-grid"></i>
              <div data-i18n="Datatables">Datatables</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="tables-datatables-basic.html" class="menu-link">
                  <div data-i18n="Basic">Basic</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="tables-datatables-advanced.html" class="menu-link">
                  <div data-i18n="Advanced">Advanced</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="tables-datatables-extensions.html" class="menu-link">
                  <div data-i18n="Extensions">Extensions</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <!-- Charts & Maps -->
      <li class="menu-item
">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-chart-bar"></i>
          <div data-i18n="Charts & Maps">Charts & Maps</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item
">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-chart-pie"></i>
              <div data-i18n="Charts">Charts</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="charts-apex.html" class="menu-link">
                  <div data-i18n="Apex Charts">Apex Charts</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="charts-chartjs.html" class="menu-link">
                  <div data-i18n="ChartJS">ChartJS</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="maps-leaflet.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-map"></i>
              <div data-i18n="Leaflet Maps">Leaflet Maps</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Misc -->
      <li class="menu-item
">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-box-multiple"></i>
          <div data-i18n="Misc">Misc</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
              <div data-i18n="Support">Support</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons ti ti-file-description"></i>
              <div data-i18n="Documentation">Documentation</div>
            </a>
          </li>
        </ul>
      </li>

    </ul>


  </div>
</aside>
<!-- / Menu -->


        <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">


<div class="app-ecommerce-category">
  <!-- Category List Table -->
  <div class="card">
   <div class="card-datatable table-responsive">
      <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="card-header d-flex flex-wrap py-0 flex-column flex-sm-row"><div><div id="DataTables_Table_0_filter" class="dataTables_filter me-3 mb-sm-6 mb-0 ps-0"><label><input type="search" class="form-control ms-0" placeholder="Search Category" aria-controls="DataTables_Table_0"></label></div></div><div class="d-flex justify-content-center justify-content-md-end align-items-baseline"><div class="dt-action-buttons d-flex justify-content-center flex-md-row align-items-baseline pt-0"><div class="dataTables_length" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select ms-0" fdprocessedid="ni5dcc"><option value="7">7</option><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="70">70</option><option value="100">100</option></select></label></div><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary add-new btn-primary ms-2 waves-effect waves-light" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceCategoryList" fdprocessedid="3jvssn"><span><i class="ti ti-plus ti-xs me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add Category</span></span></button> </div></div></div></div><table class="datatables-category-list table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1395px;">
        <thead>
          <tr><th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th><th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th><th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 685px;" aria-label="Categories: activate to sort column ascending" aria-sort="descending">Categories</th><th class="text-nowrap text-sm-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 192px;" aria-label="Total Products &amp;nbsp;: activate to sort column ascending">Total Products &nbsp;</th><th class="text-nowrap text-sm-end sorting_disabled" rowspan="1" colspan="1" style="width: 165px;" aria-label="Total Earning">Total Earning</th><th class="text-lg-center sorting_disabled" rowspan="1" colspan="1" style="width: 127px;" aria-label="Actions">Actions</th></tr>
        </thead><tbody><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex align-items-center"><div class="avatar-wrapper me-3 rounded-2 bg-label-secondary"><div class="avatar"><img src="../../assets/img/ecommerce-images/product-16.png" alt="Product-8" class="rounded-2"></div></div><div class="d-flex flex-column justify-content-center"><span class="text-heading text-wrap fw-medium">Travel</span><span class="text-truncate mb-0 d-none d-sm-block"><small>Choose from wide range of travel accessories from popular brands</small></span></div></div></td><td><div class="text-sm-end">4186</div></td><td><div class="mb-0 text-sm-end">$7912.99</div></td><td><div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light" fdprocessedid="ipcrjb"><i class="ti ti-edit"></i></button><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown" fdprocessedid="i9vpz"><i class="ti ti-dots-vertical ti-md"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="even"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex align-items-center"><div class="avatar-wrapper me-3 rounded-2 bg-label-secondary"><div class="avatar"><img src="../../assets/img/ecommerce-images/product-1.png" alt="Product-1" class="rounded-2"></div></div><div class="d-flex flex-column justify-content-center"><span class="text-heading text-wrap fw-medium">Smart Phone</span><span class="text-truncate mb-0 d-none d-sm-block"><small>Choose from wide range of smartphones from popular brands</small></span></div></div></td><td><div class="text-sm-end">1947</div></td><td><div class="mb-0 text-sm-end">$99129</div></td><td><div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light" fdprocessedid="f8wtj4"><i class="ti ti-edit"></i></button><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown" fdprocessedid="5be6ev"><i class="ti ti-dots-vertical ti-md"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex align-items-center"><div class="avatar-wrapper me-3 rounded-2 bg-label-secondary"><div class="avatar"><img src="../../assets/img/ecommerce-images/product-4.png" alt="Product-4" class="rounded-2"></div></div><div class="d-flex flex-column justify-content-center"><span class="text-heading text-wrap fw-medium">Shoes</span><span class="text-truncate mb-0 d-none d-sm-block"><small>Explore the latest shoes from Top brands</small></span></div></div></td><td><div class="text-sm-end">4940</div></td><td><div class="mb-0 text-sm-end">$3612.98</div></td><td><div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light" fdprocessedid="5ceo8n"><i class="ti ti-edit"></i></button><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown" fdprocessedid="tdhu5"><i class="ti ti-dots-vertical ti-md"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="even"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex align-items-center"><div class="avatar-wrapper me-3 rounded-2 bg-label-secondary"><div class="avatar"><img src="../../assets/img/ecommerce-images/product-22.png" alt="Product-10" class="rounded-2"></div></div><div class="d-flex flex-column justify-content-center"><span class="text-heading text-wrap fw-medium">Jewellery</span><span class="text-truncate mb-0 d-none d-sm-block"><small>Choose from wide range of Jewellery from popular brands</small></span></div></div></td><td><div class="text-sm-end">4186</div></td><td><div class="mb-0 text-sm-end">$7912.99</div></td><td><div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light" fdprocessedid="smy91e"><i class="ti ti-edit"></i></button><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown" fdprocessedid="qwy6s"><i class="ti ti-dots-vertical ti-md"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex align-items-center"><div class="avatar-wrapper me-3 rounded-2 bg-label-secondary"><div class="avatar"><img src="../../assets/img/ecommerce-images/product-10.png" alt="Product-7" class="rounded-2"></div></div><div class="d-flex flex-column justify-content-center"><span class="text-heading text-wrap fw-medium">Home Decor</span><span class="text-truncate mb-0 d-none d-sm-block"><small>Choose from wide range of home decor from popular brands</small></span></div></div></td><td><div class="text-sm-end">9184</div></td><td><div class="mb-0 text-sm-end">$19120.45</div></td><td><div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light" fdprocessedid="u3mjqt"><i class="ti ti-edit"></i></button><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown" fdprocessedid="btbgcc"><i class="ti ti-dots-vertical ti-md"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="even"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex align-items-center"><div class="avatar-wrapper me-3 rounded-2 bg-label-secondary"><div class="avatar"><img src="../../assets/img/ecommerce-images/product-23.png" alt="Product-11" class="rounded-2"></div></div><div class="d-flex flex-column justify-content-center"><span class="text-heading text-wrap fw-medium">Grocery</span><span class="text-truncate mb-0 d-none d-sm-block"><small>Get fresh groceries delivered at your doorstep</small></span></div></div></td><td><div class="text-sm-end">4186</div></td><td><div class="mb-0 text-sm-end">$7912.99</div></td><td><div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light" fdprocessedid="lde6es"><i class="ti ti-edit"></i></button><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown" fdprocessedid="guaqu"><i class="ti ti-dots-vertical ti-md"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex align-items-center"><div class="avatar-wrapper me-3 rounded-2 bg-label-secondary"><div class="avatar"><img src="../../assets/img/ecommerce-images/product-6.png" alt="Product-6" class="rounded-2"></div></div><div class="d-flex flex-column justify-content-center"><span class="text-heading text-wrap fw-medium">Games</span><span class="text-truncate mb-0 d-none d-sm-block"><small>Dive into world of Virtual Reality with latest games</small></span></div></div></td><td><div class="text-sm-end">5764</div></td><td><div class="mb-0 text-sm-end">$29129</div></td><td><div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light" fdprocessedid="4eknm"><i class="ti ti-edit"></i></button><button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown" fdprocessedid="qzrxn"><i class="ti ti-dots-vertical ti-md"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr></tbody>
      </table><div class="row mx-1"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 7 of 14 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link"><i class="ti ti-chevron-left ti-sm"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0" class="page-link"><i class="ti ti-chevron-right ti-sm"></i></a></li></ul></div></div></div><div style="width: 1%;"></div></div>
    </div>
  </div>
  <!-- Offcanvas to add new customer -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList" aria-labelledby="offcanvasEcommerceCategoryListLabel">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header py-6">
      <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Category</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- Offcanvas Body -->
    <div class="offcanvas-body border-top">
      <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
        <!-- Title -->
        <div class="mb-6">
          <label class="form-label" for="ecommerce-category-title">Title</label>
          <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter category title" name="categoryTitle" aria-label="category title">
        </div>
        <!-- Slug -->
        <div class="mb-6">
          <label class="form-label" for="ecommerce-category-slug">Slug</label>
          <input type="text" id="ecommerce-category-slug" class="form-control" placeholder="Enter slug" aria-label="slug" name="slug">
        </div>
        <!-- Image -->
        <div class="mb-6">
          <label class="form-label" for="ecommerce-category-image">Attachment</label>
          <input class="form-control" type="file" id="ecommerce-category-image">
        </div>
        <!-- Parent category -->
        <div class="mb-6 ecommerce-select2-dropdown">
          <label class="form-label" for="ecommerce-category-parent-category">Parent category</label>
          <select id="ecommerce-category-parent-category" class="select2 form-select" data-placeholder="Select parent category">
            <option value="">Select parent Category</option>
            <option value="Household">Household</option>
            <option value="Management">Management</option>
            <option value="Electronics">Electronics</option>
            <option value="Office">Office</option>
            <option value="Automotive">Automotive</option>
          </select>
        </div>
        <!-- Description -->
        <div class="mb-6">
          <label class="form-label">Description</label>
          <div class="form-control p-0 py-1">
            <div class="comment-editor border-0" id="ecommerce-category-description">
            </div>
            <div class="comment-toolbar border-0 rounded">
              <div class="d-flex justify-content-end">
                <span class="ql-formats me-0">
                  <button class="ql-bold"></button>
                  <button class="ql-italic"></button>
                  <button class="ql-underline"></button>
                  <button class="ql-list" value="ordered"></button>
                  <button class="ql-list" value="bullet"></button>
                  <button class="ql-link"></button>
                  <button class="ql-image"></button>
                </span>
              </div>
            </div>
          </div>

        </div>
        <!-- Status -->
        <div class="mb-6 ecommerce-select2-dropdown">
          <label class="form-label">Select category status</label>
          <select id="ecommerce-category-status" class="select2 form-select" data-placeholder="Select category status">
            <option value="">Select category status</option>
            <option value="Scheduled">Scheduled</option>
            <option value="Publish">Publish</option>
            <option value="Inactive">Inactive</option>
          </select>
        </div>
        <!-- Submit and reset -->
        <div class="mb-6">
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
          <button type="reset" class="btn btn-label-danger" data-bs-dismiss="offcanvas">Discard</button>
        </div>
      </form>
    </div>
  </div>
</div>


          </div>
          <!--/ Content -->




<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
      <div class="text-body">
        © <script>
        document.write(new Date().getFullYear())

        </script>, made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="footer-link">Pixinvent</a>
      </div>
      <div class="d-none d-lg-inline-block">

        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>

        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>


        <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>

      </div>
    </div>
  </div>
</footer>
<!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>

      <!--/ Layout container -->
    </div>

  </div>



  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>


  <!-- Drag Target Area To SlideIn Menu On Small Screens -->
  <div class="drag-target"></div>

  <!--/ Layout wrapper -->


    <div class="buy-now">
      <a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
    </div>




    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/popper/popper.js"></script>
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/js/bootstrap.js"></script>
      <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/moment/moment.js"></script>
<script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/select2/select2.js"></script>
<script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/@form-validation/popular.js"></script>
<script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/@form-validation/bootstrap5.js"></script>
<script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/@form-validation/auto-focus.js"></script>
<script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/quill/katex.js"></script>
<script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/quill/quill.js"></script>

    <!-- Main JS -->
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/js/main.js"></script>


    <!-- Page JS -->
    <script src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/js/app-ecommerce-category-list.js"></script>

  </body>

</html>

<!-- beautify ignore:end -->

