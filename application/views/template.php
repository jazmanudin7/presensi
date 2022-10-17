<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>

  <meta charset="utf-8" />
  <title>CV. Makmur Permata</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

  <!-- Layout config Js -->
  <script src="<?php echo base_url(); ?>assets/js/layout.js"></script>
  <!-- Bootstrap Css -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="<?php echo base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
  <!-- custom Css-->
  <link href="<?php echo base_url(); ?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url(); ?>assets/css/DataTables.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>assets/css/mc-calendar.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.css" />

  <!-- Sweet Alert css-->
  <link href="<?php echo base_url(); ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jQuery.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jQueryDataTable.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/mc-calendar.min.js"></script>


  <!-- Sweet Alerts js -->
  <script src="<?php echo base_url(); ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

</head>

<body style="zoom:85%">

  <!-- Begin page -->
  <div id="layout-wrapper">

    <header id="page-topbar">
      <div class="layout-width">
        <div class="navbar-header">
          <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box horizontal-logo">
              <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                  <img src="<?php echo base_url(); ?>assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                  <img src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="" height="17">
                </span>
              </a>

              <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                  <img src="<?php echo base_url(); ?>assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                  <img src="<?php echo base_url(); ?>assets/images/logo-light.png" alt="" height="17">
                </span>
              </a>
            </div>

            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
              <span class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-md-block">
              <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                <span class="mdi mdi-magnify search-widget-icon"></span>
                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
              </div>
              <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                <div data-simplebar style="max-height: 320px;">
                  <!-- item-->
                  <div class="dropdown-header">
                    <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                  </div>

                  <div class="dropdown-item bg-transparent text-wrap">
                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to
                      setup <i class="mdi mdi-magnify ms-1"></i></a>
                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons
                      <i class="mdi mdi-magnify ms-1"></i></a>
                  </div>
                  <!-- item-->
                  <div class="dropdown-header mt-2">
                    <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                  </div>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                    <span>Analytics Dashboard</span>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                    <span>Help Center</span>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                    <span>My account settings</span>
                  </a>

                  <!-- item-->
                  <div class="dropdown-header mt-2">
                    <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                  </div>

                  <div class="notification-list">
                    <!-- item -->
                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                      <div class="d-flex">
                        <img src="<?php echo base_url(); ?>assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                        <div class="flex-1">
                          <h6 class="m-0">Angela Bernier</h6>
                          <span class="fs-11 mb-0 text-muted">Manager</span>
                        </div>
                      </div>
                    </a>
                    <!-- item -->
                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                      <div class="d-flex">
                        <img src="<?php echo base_url(); ?>assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                        <div class="flex-1">
                          <h6 class="m-0">David Grasso</h6>
                          <span class="fs-11 mb-0 text-muted">Web Designer</span>
                        </div>
                      </div>
                    </a>
                    <!-- item -->
                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                      <div class="d-flex">
                        <img src="<?php echo base_url(); ?>assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                        <div class="flex-1">
                          <h6 class="m-0">Mike Bunch</h6>
                          <span class="fs-11 mb-0 text-muted">React Developer</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="text-center pt-3 pb-1">
                  <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results
                    <i class="ri-arrow-right-line ms-1"></i></a>
                </div>
              </div>
            </form>
          </div>

          <div class="d-flex align-items-center">

            <div class="dropdown d-md-none topbar-head-dropdown header-item">
              <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-search fs-22"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                <form class="p-3">
                  <div class="form-group m-0">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                      <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="dropdown ms-1 topbar-head-dropdown header-item">
              <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img id="header-lang-img" src="<?php echo base_url(); ?>assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">
              </button>
              <div class="dropdown-menu dropdown-menu-end">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                  <img src="<?php echo base_url(); ?>assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                  <span class="align-middle">English</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                  <img src="<?php echo base_url(); ?>assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                  <span class="align-middle">Española</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                  <img src="<?php echo base_url(); ?>assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                  <img src="<?php echo base_url(); ?>assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
                  <span class="align-middle">Italiana</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                  <img src="<?php echo base_url(); ?>assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
                  <span class="align-middle">русский</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                  <img src="<?php echo base_url(); ?>assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
                  <span class="align-middle">中国人</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                  <img src="<?php echo base_url(); ?>assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
                  <span class="align-middle">français</span>
                </a>
              </div>
            </div>

            <div class="dropdown topbar-head-dropdown ms-1 header-item">
              <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class='bx bx-category-alt fs-22'></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                    </div>
                    <div class="col-auto">
                      <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                        <i class="ri-arrow-right-s-line align-middle"></i></a>
                    </div>
                  </div>
                </div>

                <div class="p-2">
                  <div class="row g-0">
                    <div class="col">
                      <a class="dropdown-icon-item" href="#!">
                        <img src="<?php echo base_url(); ?>assets/images/brands/github.png" alt="Github">
                        <span>GitHub</span>
                      </a>
                    </div>
                    <div class="col">
                      <a class="dropdown-icon-item" href="#!">
                        <img src="<?php echo base_url(); ?>assets/images/brands/bitbucket.png" alt="bitbucket">
                        <span>Bitbucket</span>
                      </a>
                    </div>
                    <div class="col">
                      <a class="dropdown-icon-item" href="#!">
                        <img src="<?php echo base_url(); ?>assets/images/brands/dribbble.png" alt="dribbble">
                        <span>Dribbble</span>
                      </a>
                    </div>
                  </div>

                  <div class="row g-0">
                    <div class="col">
                      <a class="dropdown-icon-item" href="#!">
                        <img src="<?php echo base_url(); ?>assets/images/brands/dropbox.png" alt="dropbox">
                        <span>Dropbox</span>
                      </a>
                    </div>
                    <div class="col">
                      <a class="dropdown-icon-item" href="#!">
                        <img src="<?php echo base_url(); ?>assets/images/brands/mail_chimp.png" alt="mail_chimp">
                        <span>Mail Chimp</span>
                      </a>
                    </div>
                    <div class="col">
                      <a class="dropdown-icon-item" href="#!">
                        <img src="<?php echo base_url(); ?>assets/images/brands/slack.png" alt="slack">
                        <span>Slack</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="dropdown topbar-head-dropdown ms-1 header-item">
              <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <i class='bx bx-shopping-bag fs-22'></i>
                <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
              </button>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                    </div>
                    <div class="col-auto">
                      <span class="badge badge-soft-warning fs-13"><span class="cartitem-badge">7</span>
                        items</span>
                    </div>
                  </div>
                </div>
                <div data-simplebar style="max-height: 300px;">
                  <div class="p-2">
                    <div class="text-center empty-cart" id="empty-cart">
                      <div class="avatar-md mx-auto my-3">
                        <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                          <i class='bx bx-cart'></i>
                        </div>
                      </div>
                      <h5 class="mb-3">Your Cart is Empty!</h5>
                      <a href="#" class="btn btn-success w-md mb-3">Shop Now</a>
                    </div>
                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                      <div class="d-flex align-items-center">
                        <img src="<?php echo base_url(); ?>assets/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                        <div class="flex-1">
                          <h6 class="mt-0 mb-1 fs-14">
                            <a href="apps-ecommerce-product-details.html" class="text-reset">Branded
                              T-Shirts</a>
                          </h6>
                          <p class="mb-0 fs-12 text-muted">
                            Quantity: <span>10 x $32</span>
                          </p>
                        </div>
                        <div class="px-2">
                          <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                        </div>
                        <div class="ps-2">
                          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                        </div>
                      </div>
                    </div>

                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                      <div class="d-flex align-items-center">
                        <img src="<?php echo base_url(); ?>assets/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                        <div class="flex-1">
                          <h6 class="mt-0 mb-1 fs-14">
                            <a href="apps-ecommerce-product-details.html" class="text-reset">Bentwood Chair</a>
                          </h6>
                          <p class="mb-0 fs-12 text-muted">
                            Quantity: <span>5 x $18</span>
                          </p>
                        </div>
                        <div class="px-2">
                          <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                        </div>
                        <div class="ps-2">
                          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                        </div>
                      </div>
                    </div>

                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                      <div class="d-flex align-items-center">
                        <img src="<?php echo base_url(); ?>assets/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                        <div class="flex-1">
                          <h6 class="mt-0 mb-1 fs-14">
                            <a href="apps-ecommerce-product-details.html" class="text-reset">
                              Borosil Paper Cup</a>
                          </h6>
                          <p class="mb-0 fs-12 text-muted">
                            Quantity: <span>3 x $250</span>
                          </p>
                        </div>
                        <div class="px-2">
                          <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                        </div>
                        <div class="ps-2">
                          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                        </div>
                      </div>
                    </div>

                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                      <div class="d-flex align-items-center">
                        <img src="<?php echo base_url(); ?>assets/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                        <div class="flex-1">
                          <h6 class="mt-0 mb-1 fs-14">
                            <a href="apps-ecommerce-product-details.html" class="text-reset">Gray
                              Styled T-Shirt</a>
                          </h6>
                          <p class="mb-0 fs-12 text-muted">
                            Quantity: <span>1 x $1250</span>
                          </p>
                        </div>
                        <div class="px-2">
                          <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                        </div>
                        <div class="ps-2">
                          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                        </div>
                      </div>
                    </div>

                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                      <div class="d-flex align-items-center">
                        <img src="<?php echo base_url(); ?>assets/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                        <div class="flex-1">
                          <h6 class="mt-0 mb-1 fs-14">
                            <a href="apps-ecommerce-product-details.html" class="text-reset">Stillbird Helmet</a>
                          </h6>
                          <p class="mb-0 fs-12 text-muted">
                            Quantity: <span>2 x $495</span>
                          </p>
                        </div>
                        <div class="px-2">
                          <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                        </div>
                        <div class="ps-2">
                          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                  <div class="d-flex justify-content-between align-items-center pb-3">
                    <h5 class="m-0 text-muted">Total:</h5>
                    <div class="px-2">
                      <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                    </div>
                  </div>

                  <a href="apps-ecommerce-checkout.html" class="btn btn-success text-center w-100">
                    Checkout
                  </a>
                </div>
              </div>
            </div>

            <div class="ms-1 header-item d-none d-sm-flex">
              <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                <i class='bx bx-fullscreen fs-22'></i>
              </button>
            </div>

            <div class="ms-1 header-item d-none d-sm-flex">
              <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                <i class='bx bx-moon fs-22'></i>
              </button>
            </div>

            <div class="dropdown topbar-head-dropdown ms-1 header-item">
              <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class='bx bx-bell fs-22'></i>
                <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                <div class="dropdown-head bg-primary bg-pattern rounded-top">
                  <div class="p-3">
                    <div class="row align-items-center">
                      <div class="col">
                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                      </div>
                      <div class="col-auto dropdown-tabs">
                        <span class="badge badge-soft-light fs-13"> 4 New</span>
                      </div>
                    </div>
                  </div>

                  <div class="px-2 pt-2">
                    <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                      <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                          All (4)
                        </a>
                      </li>
                      <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab" aria-selected="false">
                          Messages
                        </a>
                      </li>
                      <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab" aria-selected="false">
                          Alerts
                        </a>
                      </li>
                    </ul>
                  </div>

                </div>

                <div class="tab-content" id="notificationItemsTabContent">
                  <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                      <div class="text-reset notification-item d-block dropdown-item position-relative">
                        <div class="d-flex">
                          <div class="avatar-xs me-3">
                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                              <i class="bx bx-badge-check"></i>
                            </span>
                          </div>
                          <div class="flex-1">
                            <a href="#!" class="stretched-link">
                              <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author
                                Graphic
                                Optimization <span class="text-secondary">reward</span>
                                is
                                ready!
                              </h6>
                            </a>
                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                              <span><i class="mdi mdi-clock-outline"></i> Just 30 sec
                                ago</span>
                            </p>
                          </div>
                          <div class="px-2 fs-15">
                            <div class="form-check notification-check">
                              <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                              <label class="form-check-label" for="all-notification-check01"></label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="text-reset notification-item d-block dropdown-item position-relative active">
                        <div class="d-flex">
                          <img src="<?php echo base_url(); ?>assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                          <div class="flex-1">
                            <a href="#!" class="stretched-link">
                              <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                            </a>
                            <div class="fs-13 text-muted">
                              <p class="mb-1">Answered to your comment on the
                                cash flow forecast's
                                graph 🔔.</p>
                            </div>
                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                              <span><i class="mdi mdi-clock-outline"></i> 48 min
                                ago</span>
                            </p>
                          </div>
                          <div class="px-2 fs-15">
                            <div class="form-check notification-check">
                              <input class="form-check-input" type="checkbox" value="" id="all-notification-check02" checked>
                              <label class="form-check-label" for="all-notification-check02"></label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="text-reset notification-item d-block dropdown-item position-relative">
                        <div class="d-flex">
                          <div class="avatar-xs me-3">
                            <span class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                              <i class='bx bx-message-square-dots'></i>
                            </span>
                          </div>
                          <div class="flex-1">
                            <a href="#!" class="stretched-link">
                              <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the
                                conversation
                              </h6>
                            </a>
                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                              <span><i class="mdi mdi-clock-outline"></i> 2 hrs
                                ago</span>
                            </p>
                          </div>
                          <div class="px-2 fs-15">
                            <div class="form-check notification-check">
                              <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                              <label class="form-check-label" for="all-notification-check03"></label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="text-reset notification-item d-block dropdown-item position-relative">
                        <div class="d-flex">
                          <img src="<?php echo base_url(); ?>assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                          <div class="flex-1">
                            <a href="#!" class="stretched-link">
                              <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                            </a>
                            <div class="fs-13 text-muted">
                              <p class="mb-1">We talked about a project on
                                linkedin.</p>
                            </div>
                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                              <span><i class="mdi mdi-clock-outline"></i> 4 hrs
                                ago</span>
                            </p>
                          </div>
                          <div class="px-2 fs-15">
                            <div class="form-check notification-check">
                              <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                              <label class="form-check-label" for="all-notification-check04"></label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="my-3 text-center">
                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                          All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                      </div>
                    </div>

                  </div>

                  <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                      <div class="text-reset notification-item d-block dropdown-item">
                        <div class="d-flex">
                          <img src="<?php echo base_url(); ?>assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                          <div class="flex-1">
                            <a href="#!" class="stretched-link">
                              <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                            </a>
                            <div class="fs-13 text-muted">
                              <p class="mb-1">We talked about a project on
                                linkedin.</p>
                            </div>
                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                              <span><i class="mdi mdi-clock-outline"></i> 30 min
                                ago</span>
                            </p>
                          </div>
                          <div class="px-2 fs-15">
                            <div class="form-check notification-check">
                              <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01">
                              <label class="form-check-label" for="messages-notification-check01"></label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="text-reset notification-item d-block dropdown-item">
                        <div class="d-flex">
                          <img src="<?php echo base_url(); ?>assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                          <div class="flex-1">
                            <a href="#!" class="stretched-link">
                              <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                            </a>
                            <div class="fs-13 text-muted">
                              <p class="mb-1">Answered to your comment on the
                                cash flow forecast's
                                graph 🔔.</p>
                            </div>
                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                              <span><i class="mdi mdi-clock-outline"></i> 2 hrs
                                ago</span>
                            </p>
                          </div>
                          <div class="px-2 fs-15">
                            <div class="form-check notification-check">
                              <input class="form-check-input" type="checkbox" value="" id="messages-notification-check02">
                              <label class="form-check-label" for="messages-notification-check02"></label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="text-reset notification-item d-block dropdown-item">
                        <div class="d-flex">
                          <img src="<?php echo base_url(); ?>assets/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                          <div class="flex-1">
                            <a href="#!" class="stretched-link">
                              <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                            </a>
                            <div class="fs-13 text-muted">
                              <p class="mb-1">Mentionned you in his comment on
                                📃 invoice #12501.
                              </p>
                            </div>
                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                              <span><i class="mdi mdi-clock-outline"></i> 10 hrs
                                ago</span>
                            </p>
                          </div>
                          <div class="px-2 fs-15">
                            <div class="form-check notification-check">
                              <input class="form-check-input" type="checkbox" value="" id="messages-notification-check03">
                              <label class="form-check-label" for="messages-notification-check03"></label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="text-reset notification-item d-block dropdown-item">
                        <div class="d-flex">
                          <img src="<?php echo base_url(); ?>assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                          <div class="flex-1">
                            <a href="#!" class="stretched-link">
                              <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                            </a>
                            <div class="fs-13 text-muted">
                              <p class="mb-1">We talked about a project on
                                linkedin.</p>
                            </div>
                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                              <span><i class="mdi mdi-clock-outline"></i> 3 days
                                ago</span>
                            </p>
                          </div>
                          <div class="px-2 fs-15">
                            <div class="form-check notification-check">
                              <input class="form-check-input" type="checkbox" value="" id="messages-notification-check04">
                              <label class="form-check-label" for="messages-notification-check04"></label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="my-3 text-center">
                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                          All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab">
                    <div class="w-25 w-sm-50 pt-3 mx-auto">
                      <img src="<?php echo base_url(); ?>assets/images/svg/bell.svg" class="img-fluid" alt="user-pic">
                    </div>
                    <div class="text-center pb-5 mt-2">
                      <h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php

            $nama_lengkap       = $this->session->userdata('nama_lengkap');
            $jabatan            = $this->session->userdata('jabatan');
            ?>
            <div class="dropdown ms-sm-3 header-item topbar-user">
              <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="d-flex align-items-center">
                  <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg" alt="Header Avatar">
                  <span class="text-start ms-xl-2">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo $nama_lengkap; ?></span>
                    <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span>
                  </span>
                </span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <h6 class="dropdown-header">Welcome Anna!</h6>
                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                  <span class="align-middle">Messages</span></a>
                <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i>
                  <span class="align-middle">Taskboard</span></a>
                <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-soft-success text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>auth/logout"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
      <!-- LOGO -->
      <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
          <span class="logo-sm">
            <img src="<?php echo base_url(); ?>assets/images/logo-sm.png" alt="" height="22">
          </span>
          <span class="logo-lg">
            <img src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="" height="17">
          </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
          <span class="logo-sm">
            <img src="<?php echo base_url(); ?>assets/images/logo-sm.png" alt="" height="22">
          </span>
          <span class="logo-lg">
            <img src="<?php echo base_url(); ?>assets/images/logo-light.png" alt="" height="17">
          </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
          <i class="ri-record-circle-line"></i>
        </button>
      </div>

      <div id="scrollbar">
        <div class="container-fluid">

          <div id="two-column-menu">
          </div>
          <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>" class="nav-link menu-link" aria-expanded="false" aria-controls="sidebarDashboards">
                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">DASHBORAD</span>
              </a>
            </li>
            <?php
            $level  = $this->session->userdata('level');
            if ($level == 'HRD' || $level == 'SPV HRD' || $level == 'ADMINISTRATOR') { ?>
              <li class="menu-title"><span data-key="t-menu">DATA MASTER</span></li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                  <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">DATA MASTER</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarDashboards">
                  <ul class="nav nav-sm flex-column">
                    <?php if ($level == 'HRD' || $level == 'ADMINISTRATOR') { ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>gaji/viewGaji" class="nav-link" data-key="t-projects">
                          DATA GAJI </a>
                      </li>
                    <?php } ?>
                    <?php if ($level == 'SPV HRD' || $level == 'ADMINISTRATOR') { ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>Departemen" class="nav-link" data-key="t-projects">
                          DATA DEPT / GROUP </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>Ketentuan" class="nav-link" data-key="t-projects">
                          KETENTUAN KONTRAK</a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </li>
            <?php } ?>

            <?php if ($level == 'HRD' || $level == 'SPV HRD' || $level == 'ADMINISTRATOR') { ?>
              <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">KARYAWAN</span></li>

              <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarAuths" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuths">
                  <i class="ri-account-circle-line"></i> <span data-key="t-authentication">DATA KARYAWAN</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarAuths">
                  <ul class="nav nav-sm flex-column">
                    <?php if ($level == 'SPV HRD' || $level == 'HRD' || $level == 'ADMINISTRATOR') { ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>karyawan" class="nav-link" data-key="t-projects">
                          KARYAWAN </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>kontrak" class="nav-link" data-key="t-projects">
                          KONTRAK </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>pemutihan" class="nav-link" data-key="t-projects">
                          PEMUTIHAN </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>Sp" class="nav-link" data-key="t-projects">
                          SURAT PERINGATAN (SP) </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>resign" class="nav-link" data-key="t-projects">
                          KELUAR </a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </li>
            <?php } ?>

            <?php if ($level == 'HRD' || $level == 'ADMINISTRATOR' || $level == 'SPV HRD' || $level == 'ADMIN' || $level == 'MANAGER') { ?>
              <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">PRESENSI</span></li>

              <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                  <i class="ri-account-circle-line"></i> <span data-key="t-authentication">DATA PRESENSI</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarAuth">
                  <ul class="nav nav-sm flex-column">
                    <?php if ($level == 'HRD' || $level == 'SPV HRD' || $level == 'ADMINISTRATOR') { ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>absensi" class="nav-link" data-key="t-projects">
                          DATA PRESENSI </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>surat/viewSurat" class="nav-link" data-key="t-projects">
                          DATA SURAT ABSEN </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>lembur/viewLembur" class="nav-link" data-key="t-projects">
                          DATA LEMBUR </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>surat/viewApprovalSurat" class="nav-link" data-key="t-projects">
                          APPROVAL SURAT </a>
                      </li>
                    <?php } ?>
                    <?php if ($level == 'ADMIN') { ?>
                      <!-- <li class="nav-item">
                        <a href="#" class="nav-link" data-key="t-projects">
                          CATATAN</a>
                      </li> -->
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>surat/viewSuratDept" class="nav-link" data-key="t-projects">
                          DATA SURAT ABSEN </a>
                      </li>
                    <?php } ?>
                    <?php if ($level == 'MANAGER') { ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>surat/viewSuratDept" class="nav-link" data-key="t-projects">
                          DATA SURAT ABSEN </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>surat/viewApprovalSurat" class="nav-link" data-key="t-projects">
                          APPROVAL SURAT </a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </li>
            <?php } ?>

            <?php if ($level == 'HRD' || $level == 'MANAGER' || $level == 'ADMINISTRATOR' || $level == 'ADMIN') { ?>
              <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">LAPORAN</span></li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                  <i class="ri-stack-line"></i> <span data-key="t-advance-ui">LAPORAN PRESENSI</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                  <ul class="nav nav-sm flex-column">
                    <?php if ($level == 'ADMINISTRATOR' ) { ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanAbsensiPerDepartemen" class="nav-link" data-key="t-projects">
                          LAPORAN PRESENSI DEPT</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanAbsensiJamKerja" class="nav-link" data-key="t-projects">
                          LAPORAN PRESENSI </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanDetailAbsensi" class="nav-link" data-key="t-projects">
                          LAPORAN DETAIL PRESENSI</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanRekapTahunan" class="nav-link" data-key="t-projects">
                          LAPORAN ROTASI (ABSENSI)</a>
                      </li>
                    <?php } ?>
                    <?php if ($level == 'HRD') { ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanAbsensiJamKerja" class="nav-link" data-key="t-projects">
                          LAPORAN PRESENSI </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanDetailAbsensi" class="nav-link" data-key="t-projects">
                          LAPORAN DETAIL PRESENSI</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanRekapTahunan" class="nav-link" data-key="t-projects">
                          LAPORAN TAHUNAN</a>
                      </li>
                    <?php } ?>
                    <?php if ($level == 'MANAGER') { ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanAbsensiPerDepartemen" class="nav-link" data-key="t-projects">
                          LAPORAN PRESENSI</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanDetailAbsensi" class="nav-link" data-key="t-projects">
                          LAPORAN DETAIL PRESENSI</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanRekapTahunan" class="nav-link" data-key="t-projects">
                          LAPORAN TAHUNAN</a>
                      </li>
                    <?php } ?>
                    <?php if ($level == 'ADMIN') { ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanAbsensiPerDepartemen" class="nav-link" data-key="t-projects">
                          LAPORAN PRESENSI</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanDetailAbsensi" class="nav-link" data-key="t-projects">
                          LAPORAN DETAIL PRESENSI</a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </li>
            <?php } ?>

            <?php if ($level == 'HRD' || $level == 'SPV HRD' || $level == 'ADMINISTRATOR') { ?>
              <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarAdvanceUIs" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                  <i class="ri-stack-line"></i> <span data-key="t-advance-ui">LAPORAN KARYAWAN</span>

                </a>
                <div class="collapse menu-dropdown" id="sidebarAdvanceUIs">
                  <ul class="nav nav-sm flex-column">
                    <?php if ($level == 'SPV HRD' || $level == 'HRD' ||  $level == 'ADMINISTRATOR') { ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanKaryawan" class="nav-link" data-key="t-projects">
                          KARYAWAN </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanKaryawanKontrak" class="nav-link" data-key="t-projects">
                          HISTORI KONTRAK </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanKaryawanPemutihan" class="nav-link" data-key="t-projects">
                          HISTORI PEMUTIHAN </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanKaryawanSp" class="nav-link" data-key="t-projects">
                          HISTORI SP </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>laporan/laporanKaryawanResign" class="nav-link" data-key="t-projects">
                          HISTORI KELUAR </a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </li>
            <?php } ?>

            <?php if ($level == 'HRD' || $level == 'ADMINISTRATOR') { ?>
              <li class="menu-title"><span data-key="t-menu">Settings</span></li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="#settings" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="settings">
                  <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">SETTINGS</span>
                </a>
                <div class="collapse menu-dropdown" id="settings">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>settings" class="nav-link" data-key="t-projects">
                        JAM KERJA </a>
                    </li>
                    <?php if ($level == 'ADMINISTRATOR') { ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>user" class="nav-link" data-key="t-projects">
                          USER </a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </li>
            <?php } ?>

          </ul>
        </div>
      </div>
    </div>
    <div class="vertical-overlay"></div>

    <div class="main-content">

      <div class="page-content">
        <div class="container-fluid">

          <?php echo $contents;
          ?>
        </div>
        <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <script>
                document.write(new Date().getFullYear())
              </script> Velzon © CV. Pacific & CV. Makmur Permata
            </div>
            <div class="col-sm-6">
              <div class="text-sm-end d-none d-sm-block">
                Design & Developer by Jazmanudin
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->



  <!--start back-to-top-->
  <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
  </button>
  <!--end back-to-top-->

  <div class="customizer-setting d-none d-md-block">
    <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
      <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
    </div>
  </div>

  <!-- Theme Settings -->
  <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
      <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

      <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
      <div data-simplebar class="h-100">
        <div class="p-4">
          <h6 class="mb-0 fw-semibold text-uppercase">Layout</h6>
          <p class="text-muted">Choose your layout</p>

          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio">
                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Vertical</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio">
                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                  <span class="d-flex h-100 flex-column gap-1">
                    <span class="bg-light d-flex p-1 gap-1 align-items-center">
                      <span class="d-block p-1 bg-soft-primary rounded me-1"></span>
                      <span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
                      <span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
                    </span>
                    <span class="bg-light d-block p-1"></span>
                    <span class="bg-light d-block p-1 mt-auto"></span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Horizontal</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio">
                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1">
                        <span class="d-block p-1 bg-soft-primary mb-2"></span>
                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                        <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                      </span>
                    </span>
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Two Column</h5>
            </div>
            <!-- end col -->
          </div>

          <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Color Scheme</h6>
          <p class="text-muted">Choose Light or Dark Scheme.</p>

          <div class="colorscheme-cardradio">
            <div class="row">
              <div class="col-4">
                <div class="form-check card-radio">
                  <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light">
                  <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-light">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Light</h5>
              </div>

              <div class="col-4">
                <div class="form-check card-radio dark">
                  <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark">
                  <label class="form-check-label p-0 avatar-md w-100 bg-dark" for="layout-mode-dark">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-soft-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-soft-light d-block p-1"></span>
                          <span class="bg-soft-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Dark</h5>
              </div>
            </div>
          </div>

          <div id="layout-width">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Width</h6>
            <p class="text-muted">Choose Fluid or Boxed layout.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check card-radio">
                  <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                  <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Fluid</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio">
                  <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                  <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                    <span class="d-flex gap-1 h-100 border-start border-end">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Boxed</h5>
              </div>
            </div>
          </div>

          <div id="layout-position">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Position</h6>
            <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

            <div class="btn-group radio" role="group">
              <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
              <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

              <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
              <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
            </div>
          </div>
          <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Topbar Color</h6>
          <p class="text-muted">Choose Light or Dark Topbar Color.</p>

          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio">
                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Light</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio">
                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-primary d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Dark</h5>
            </div>
          </div>

          <div id="sidebar-size">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Size</h6>
            <p class="text-muted">Choose a size of Sidebar.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                  <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Default</h5>
              </div>

              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                  <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 bg-soft-primary rounded mb-2"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Compact</h5>
              </div>

              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                  <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1">
                          <span class="d-block p-1 bg-soft-primary mb-2"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
              </div>

              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                  <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1">
                          <span class="d-block p-1 bg-soft-primary mb-2"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
              </div>
            </div>
          </div>

          <div id="sidebar-view">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar View</h6>
            <p class="text-muted">Choose Default or Detached Sidebar view.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                  <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Default</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                  <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                    <span class="d-flex h-100 flex-column">
                      <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                        <span class="d-block p-1 bg-soft-primary rounded me-1"></span>
                        <span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
                        <span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
                      </span>
                      <span class="d-flex gap-1 h-100 p-1 px-2">
                        <span class="flex-shrink-0">
                          <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                            <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                            <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                            <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          </span>
                        </span>
                      </span>
                      <span class="bg-light d-block p-1 mt-auto px-2"></span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Detached</h5>
              </div>
            </div>
          </div>
          <div id="sidebar-color">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Color</h6>
            <p class="text-muted">Choose Ligth or Dark Sidebar Color.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                  <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Light</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                  <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Dark</h5>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
      <div class="row">
        <div class="col-6">
          <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
        </div>
        <div class="col-6">
          <a href="#" target="_blank" class="btn btn-primary w-100">Buy
            Now</a>
        </div>
      </div>
    </div>
  </div>

  <!-- JAVASCRIPT -->
  <script src="<?php echo base_url(); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/libs/simplebar/simplebar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/libs/node-waves/waves.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/libs/feather-icons/feather.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>

  <!-- App js -->
  <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

</body>

</html>

<script>
  $(".select2").select2();
</script>