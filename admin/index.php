<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
    session_unset();
    session_destroy();
}
include '../includes/config.php';
include 'includes/user_privileges.php';

// Allowed roles administrator, editor, author, contributor, subscriber
if ($user_role != 'administrator' && $user_role != 'editor' && $user_role != 'author' && $user_role != 'contributor' && $user_role != 'subscriber') {
    // User is not allowed to access this page
    header("Location: ../index.php");
    exit();
}
include 'includes/header.php';
include 'includes/navbar.php';

?>

<div class="d-flex align-items-stretch">
    <!-- Start Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
    <!-- End Sidebar -->
    <div class="page-holder bg-gray-100">
        <div class="container-fluid px-lg-4 px-xl-5">
            <!-- Page Header-->
            <div class="page-header">
                <h1 class="page-heading">Default dashboard</h1>
            </div>
            <section class="mb-3 mb-lg-5">
                <div class="row mb-3">
                    <!-- Widget Type 1-->
                    <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="fw-normal text-red">$10,500</h4>
                                        <p class="subtitle text-sm text-muted mb-0">Earnings</p>
                                    </div>
                                    <div class="flex-shrink-0 ms-3">
                                        <svg class="svg-icon text-red">
                                            <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#speed-1"> </use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer py-3 bg-red-light">
                                <div class="row align-items-center text-red">
                                    <div class="col-10">
                                        <p class="mb-0">20% increase</p>
                                    </div>
                                    <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Widget Type 1-->
                    <!-- Widget Type 1-->
                    <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="fw-normal text-blue">584</h4>
                                        <p class="subtitle text-sm text-muted mb-0">Readers</p>
                                    </div>
                                    <div class="flex-shrink-0 ms-3">
                                        <svg class="svg-icon text-blue">
                                            <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#news-1"> </use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer py-3 bg-blue-light">
                                <div class="row align-items-center text-blue">
                                    <div class="col-10">
                                        <p class="mb-0">3% increase</p>
                                    </div>
                                    <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Widget Type 1-->
                    <!-- Widget Type 1-->
                    <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="fw-normal text-primary">876</h4>
                                        <p class="subtitle text-sm text-muted mb-0">Bookmarks</p>
                                    </div>
                                    <div class="flex-shrink-0 ms-3">
                                        <svg class="svg-icon text-primary">
                                            <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#bookmark-1"> </use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer py-3 bg-primary-light">
                                <div class="row align-items-center text-primary">
                                    <div class="col-10">
                                        <p class="mb-0">10% increase</p>
                                    </div>
                                    <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Widget Type 1-->
                    <!-- Widget Type 1-->
                    <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="fw-normal text-green">3,500</h4>
                                        <p class="subtitle text-sm text-muted mb-0">Visitors</p>
                                    </div>
                                    <div class="flex-shrink-0 ms-3">
                                        <svg class="svg-icon text-green">
                                            <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#world-map-1">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer py-3 bg-green-light">
                                <div class="row align-items-center text-green">
                                    <div class="col-10">
                                        <p class="mb-0">5% decrease</p>
                                    </div>
                                    <div class="col-2 text-end"><i class="fas fa-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Widget Type 1-->
                </div>
                <div class="row">
                    <!-- Sales-->
                    <div class="col-xl-9 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-heading">Sales by channel</h5>
                                <div class="card-header-more">
                                    <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-window-minimize opacity-5 me-2"></i>Minimize</a><a class="dropdown-item" href="#!"><i class="fas fa-redo opacity-5 me-2"></i> Reload</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i> Remove </a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="col-12 col-sm-auto flex-sm-grow-1 py-3">
                                        <h3 class="subtitle text-gray-500">Total Revenue</h3>
                                        <div class="h1 text-primary">$19,200</div>
                                        <p class="mb-0"><span class="text-muted me-3">+$2,032 </span><span class="badge badge-success-light"><i class="fas fa-arrow-up me-2"></i>19.5%</span></p>
                                    </div>
                                    <div class="col-6 col-sm-auto flex-sm-grow-1 border-start py-3 d-flex align-items-center">
                                        <div>
                                            <h3 class="subtitle text-gray-500 fw-normal">Organic Search </h3>
                                            <div class="h4 fw-normal text-dark">$19,200</div>
                                            <p class="mb-0"><span class="text-muted me-2">+$2,123 </span><span class="badge badge-success-light"><i class="fas fa-arrow-up me-2"></i>21.3%</span></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-auto flex-sm-grow-1 border-start py-3 d-flex align-items-center">
                                        <div>
                                            <h3 class="subtitle text-gray-500 fw-normal">Facebook Ads </h3>
                                            <div class="h4 fw-normal text-dark">$2,500</div>
                                            <p class="mb-0"><span class="text-muted me-2">-$233 </span><span class="badge badge-danger-light"><i class="fas fa-arrow-down me-2"></i>-2.1% </span></p>
                                        </div>
                                    </div>
                                    <div class="col-auto d-none d-md-flex d-xl-none d-xxl-flex align-items-center">
                                        <div class="icon icon-xl ms-2 bg-primary-light">
                                            <svg class="svg-icon text-primary">
                                                <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#pay-1"> </use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="barChart"></canvas>
                                <ul class="mt-4 text-gray-500 list-inline card-text text-center">
                                    <li class="list-inline-item"> <span class="indicator bg-primary"></span>Organic
                                        Search </li>
                                    <li class="list-inline-item"><span class="indicator" style="background: #d0d2f3"> </span>Facebook Ads </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Sales-->
                    <!-- <Latest activity>-->
                    <div class="col-xl-3">
                        <div class="card-adjust-height-xl">
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">
                                    <h5 class="card-heading">Latest activity</h5>
                                    <div class="card-header-more">
                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-window-minimize opacity-5 me-2"></i>Minimize</a><a class="dropdown-item" href="#!"><i class="fas fa-redo opacity-5 me-2"></i> Reload</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i> Remove </a></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="list-group list-group-flush list-group-timeline">
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-0.jpg" alt="Nielsen Cobb"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Nielsen Cobb </strong> subscribed to your
                                                    newsletter.
                                                    <div class="text-gray-500 small">3m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-1.jpg" alt="Margret Cote"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Margret Cote </strong> liked your post 🎉
                                                    <div class="text-gray-500 small">4m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-2.jpg" alt="Rachel Vinson"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Rachel Vinson </strong> placed an order.
                                                    <div class="text-gray-500 small">5m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-3.jpg" alt="Gabrielle Aguirre"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Gabrielle Aguirre </strong>commented on
                                                    &quot;How to season your new grill.&quot;
                                                    <div class="text-gray-500 small">6m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-4.jpg" alt="Spears Collier"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Spears Collier </strong> subscribed to
                                                    your newsletter.
                                                    <div class="text-gray-500 small">7m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-5.jpg" alt="Keisha Thomas"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Keisha Thomas </strong> liked your post 🎉
                                                    <div class="text-gray-500 small">8m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-6.jpg" alt="Elisabeth Key"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Elisabeth Key </strong> placed an order.
                                                    <div class="text-gray-500 small">9m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-7.jpg" alt="Patel Mack"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Patel Mack </strong>commented on &quot;How
                                                    to season your new grill.&quot;
                                                    <div class="text-gray-500 small">10m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-8.jpg" alt="Erika Whitaker"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Erika Whitaker </strong> subscribed to
                                                    your newsletter.
                                                    <div class="text-gray-500 small">11m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-9.jpg" alt="Meyers Swanson"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Meyers Swanson </strong> liked your post
                                                    🎉
                                                    <div class="text-gray-500 small">12m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-10.jpg" alt="Townsend Sloan"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Townsend Sloan </strong> placed an order.
                                                    <div class="text-gray-500 small">13m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                        <div class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-auto"><img class="avatar p-1 me-2" src="dist/img/avatar-11.jpg" alt="Millicent Henry"></div>
                                                <div class="col ms-n3 pt-2 text-sm text-gray-800"><strong class="text-dark">Millicent Henry </strong>commented on
                                                    &quot;How to season your new grill.&quot;
                                                    <div class="text-gray-500 small">14m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.list-group-item-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </Latest activity>-->
                </div>
                <div class="card card-table mb-4">
                    <div class="card-header">
                        <h5 class="card-heading"> Latest Contracts</h5>
                        <div class="card-header-more">
                            <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                            <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-window-minimize opacity-5 me-2"></i>Minimize</a><a class="dropdown-item" href="#!"><i class="fas fa-redo opacity-5 me-2"></i>
                                    Reload</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i> Remove </a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="preload-wrapper">
                            <div class="table-responsive">
                                <table class="table table-hover text-sm text-gray-700 mb-0" id="ordersDatatable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Company</th>
                                            <th>Status</th>
                                            <th>Contract</th>
                                            <th>Date </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><span class="avatar p-1 me-2"><span class="avatar-text avatar-primary-light">N
                                                        </span></span>
                                                    <div class="pt-1"><strong>Nielsen Cobb</strong><br><span class="text-muted text-sm">nielsencobb@memora.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Memora</strong><br><span class="text-muted">Graniteville</span></td>
                                            <td><span class="badge badge-success-light"> <span class="indicator"></span>Open</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">30%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/11/26</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-1.jpg" alt="Margret Cote">
                                                    <div class="pt-1"><strong>Margret Cote</strong><br><span class="text-muted text-sm">margretcote@zilidium.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Zilidium</strong><br><span class="text-muted">Foxworth</span></td>
                                            <td><span class="badge badge-danger-light"> <span class="indicator"></span>Closed</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">13%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width:13%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/03/01</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-2.jpg" alt="Rachel Vinson">
                                                    <div class="pt-1"><strong>Rachel Vinson</strong><br><span class="text-muted text-sm">rachelvinson@chorizon.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Chorizon</strong><br><span class="text-muted">Eastmont</span></td>
                                            <td><span class="badge badge-warning-light"> <span class="indicator"></span>On Hold</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">100%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/07/03</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><span class="avatar p-1 me-2"><span class="avatar-text avatar-warning-light">G
                                                        </span></span>
                                                    <div class="pt-1"><strong>Gabrielle Aguirre</strong><br><span class="text-muted text-sm">gabrielleaguirre@comverges.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Comverges</strong><br><span class="text-muted">Whitewater</span></td>
                                            <td><span class="badge badge-info-light"> <span class="indicator"></span>In Progress</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">64%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100" style="width:64%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/08/07</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-4.jpg" alt="Spears Collier">
                                                    <div class="pt-1"><strong>Spears Collier</strong><br><span class="text-muted text-sm">spearscollier@remold.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Remold</strong><br><span class="text-muted">Hebron</span>
                                            </td>
                                            <td><span class="badge badge-success-light"> <span class="indicator"></span>Open</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">6%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width:6%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/05/23</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-5.jpg" alt="Keisha Thomas">
                                                    <div class="pt-1"><strong>Keisha Thomas</strong><br><span class="text-muted text-sm">keishathomas@euron.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Euron</strong><br><span class="text-muted">Levant</span>
                                            </td>
                                            <td><span class="badge badge-danger-light"> <span class="indicator"></span>Closed</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">77%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width:77%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/04/16</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><span class="avatar p-1 me-2"><span class="avatar-text avatar-primary-light">E
                                                        </span></span>
                                                    <div class="pt-1"><strong>Elisabeth Key</strong><br><span class="text-muted text-sm">elisabethkey@netagy.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Netagy</strong><br><span class="text-muted">Nile</span>
                                            </td>
                                            <td><span class="badge badge-warning-light"> <span class="indicator"></span>On Hold</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">79%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100" style="width:79%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/12/15</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-7.jpg" alt="Patel Mack">
                                                    <div class="pt-1"><strong>Patel Mack</strong><br><span class="text-muted text-sm">patelmack@zedalis.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Zedalis</strong><br><span class="text-muted">Albrightsville</span></td>
                                            <td><span class="badge badge-info-light"> <span class="indicator"></span>In Progress</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">37%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100" style="width:37%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/07/12</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-8.jpg" alt="Erika Whitaker">
                                                    <div class="pt-1"><strong>Erika Whitaker</strong><br><span class="text-muted text-sm">erikawhitaker@uniworld.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Uniworld</strong><br><span class="text-muted">Leola</span>
                                            </td>
                                            <td><span class="badge badge-success-light"> <span class="indicator"></span>Open</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">41%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width:41%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/10/13</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><span class="avatar p-1 me-2"><span class="avatar-text avatar-warning-light">M
                                                        </span></span>
                                                    <div class="pt-1"><strong>Meyers Swanson</strong><br><span class="text-muted text-sm">meyersswanson@candecor.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Candecor</strong><br><span class="text-muted">Finderne</span></td>
                                            <td><span class="badge badge-danger-light"> <span class="indicator"></span>Closed</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">98%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width:98%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/12/03</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-1.jpg" alt="Townsend Sloan">
                                                    <div class="pt-1"><strong>Townsend Sloan</strong><br><span class="text-muted text-sm">townsendsloan@rameon.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Rameon</strong><br><span class="text-muted">Coultervillle</span></td>
                                            <td><span class="badge badge-warning-light"> <span class="indicator"></span>On Hold</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">84%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100" style="width:84%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/10/19</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-2.jpg" alt="Millicent Henry">
                                                    <div class="pt-1"><strong>Millicent Henry</strong><br><span class="text-muted text-sm">millicenthenry@balooba.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Balooba</strong><br><span class="text-muted">Caron</span>
                                            </td>
                                            <td><span class="badge badge-info-light"> <span class="indicator"></span>In Progress</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">33%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width:33%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/04/12</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><span class="avatar p-1 me-2"><span class="avatar-text avatar-primary-light">M
                                                        </span></span>
                                                    <div class="pt-1"><strong>Madelyn Brock</strong><br><span class="text-muted text-sm">madelynbrock@combogene.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Combogene</strong><br><span class="text-muted">Ballico</span></td>
                                            <td><span class="badge badge-success-light"> <span class="indicator"></span>Open</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">22%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width:22%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/10/11</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-4.jpg" alt="Jenkins Carney">
                                                    <div class="pt-1"><strong>Jenkins Carney</strong><br><span class="text-muted text-sm">jenkinscarney@dadabase.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Dadabase</strong><br><span class="text-muted">Chesterfield</span></td>
                                            <td><span class="badge badge-danger-light"> <span class="indicator"></span>Closed</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">99%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width:99%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/07/03</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-5.jpg" alt="Grimes Delaney">
                                                    <div class="pt-1"><strong>Grimes Delaney</strong><br><span class="text-muted text-sm">grimesdelaney@progenex.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Progenex</strong><br><span class="text-muted">Cazadero</span></td>
                                            <td><span class="badge badge-warning-light"> <span class="indicator"></span>On Hold</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">9%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="width:9%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/01/11</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><span class="avatar p-1 me-2"><span class="avatar-text avatar-warning-light">V
                                                        </span></span>
                                                    <div class="pt-1"><strong>Valencia Rivera</strong><br><span class="text-muted text-sm">valenciarivera@xleen.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Xleen</strong><br><span class="text-muted">Kirk</span></td>
                                            <td><span class="badge badge-info-light"> <span class="indicator"></span>In Progress</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">45%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/12/01</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-7.jpg" alt="Helene Solomon">
                                                    <div class="pt-1"><strong>Helene Solomon</strong><br><span class="text-muted text-sm">helenesolomon@zomboid.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Zomboid</strong><br><span class="text-muted">Riverton</span></td>
                                            <td><span class="badge badge-success-light"> <span class="indicator"></span>Open</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">82%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width:82%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/07/09</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-8.jpg" alt="Kathleen Holman">
                                                    <div class="pt-1"><strong>Kathleen Holman</strong><br><span class="text-muted text-sm">kathleenholman@hotcakes.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Hotcakes</strong><br><span class="text-muted">Darlington</span></td>
                                            <td><span class="badge badge-danger-light"> <span class="indicator"></span>Closed</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">92%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width:92%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/01/19</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-10.jpg" alt="Merrill Garrett">
                                                    <div class="pt-1"><strong>Merrill Garrett</strong><br><span class="text-muted text-sm">merrillgarrett@affluex.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Affluex</strong><br><span class="text-muted">Utting</span>
                                            </td>
                                            <td><span class="badge badge-warning-light"> <span class="indicator"></span>On Hold</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">68%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width:68%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/08/17</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-11.jpg" alt="Sallie Booth">
                                                    <div class="pt-1"><strong>Sallie Booth</strong><br><span class="text-muted text-sm">salliebooth@ziggles.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Ziggles</strong><br><span class="text-muted">Waiohinu</span></td>
                                            <td><span class="badge badge-info-light"> <span class="indicator"></span>In Progress</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">78%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width:78%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/04/24</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-2.jpg" alt="Doris Ward">
                                                    <div class="pt-1"><strong>Doris Ward</strong><br><span class="text-muted text-sm">dorisward@imaginart.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Imaginart</strong><br><span class="text-muted">Wyano</span>
                                            </td>
                                            <td><span class="badge badge-success-light"> <span class="indicator"></span>Open</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">12%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width:12%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/04/21</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><span class="avatar p-1 me-2"><span class="avatar-text avatar-warning-light">L
                                                        </span></span>
                                                    <div class="pt-1"><strong>Lester Roach</strong><br><span class="text-muted text-sm">lesterroach@applica.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Applica</strong><br><span class="text-muted">Coventry</span></td>
                                            <td><span class="badge badge-danger-light"> <span class="indicator"></span>Closed</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">28%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width:28%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/03/10</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-4.jpg" alt="Garza Shaw">
                                                    <div class="pt-1"><strong>Garza Shaw</strong><br><span class="text-muted text-sm">garzashaw@capscreen.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Capscreen</strong><br><span class="text-muted">Beyerville</span></td>
                                            <td><span class="badge badge-warning-light"> <span class="indicator"></span>On Hold</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">81%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100" style="width:81%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/12/13</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-5.jpg" alt="Charmaine Castro">
                                                    <div class="pt-1"><strong>Charmaine Castro</strong><br><span class="text-muted text-sm">charmainecastro@naxdis.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Naxdis</strong><br><span class="text-muted">Cotopaxi</span>
                                            </td>
                                            <td><span class="badge badge-info-light"> <span class="indicator"></span>In Progress</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">33%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width:33%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/04/12</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><span class="avatar p-1 me-2"><span class="avatar-text avatar-primary-light">C
                                                        </span></span>
                                                    <div class="pt-1"><strong>Carey Petersen</strong><br><span class="text-muted text-sm">careypetersen@telepark.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Telepark</strong><br><span class="text-muted">Lowell</span>
                                            </td>
                                            <td><span class="badge badge-success-light"> <span class="indicator"></span>Open</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">18%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width:18%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/09/21</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-7.jpg" alt="Sargent Gray">
                                                    <div class="pt-1"><strong>Sargent Gray</strong><br><span class="text-muted text-sm">sargentgray@orbean.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Orbean</strong><br><span class="text-muted">Allison</span>
                                            </td>
                                            <td><span class="badge badge-danger-light"> <span class="indicator"></span>Closed</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">49%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width:49%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/01/20</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-8.jpg" alt="Dodson Goff">
                                                    <div class="pt-1"><strong>Dodson Goff</strong><br><span class="text-muted text-sm">dodsongoff@elentrix.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Elentrix</strong><br><span class="text-muted">Wedgewood</span></td>
                                            <td><span class="badge badge-warning-light"> <span class="indicator"></span>On Hold</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">21%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100" style="width:21%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/03/01</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-10.jpg" alt="Medina Ellison">
                                                    <div class="pt-1"><strong>Medina Ellison</strong><br><span class="text-muted text-sm">medinaellison@glukgluk.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Glukgluk</strong><br><span class="text-muted">Rosburg</span></td>
                                            <td><span class="badge badge-info-light"> <span class="indicator"></span>In Progress</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">10%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/12/12</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><img class="avatar p-1 me-2" src="dist/img/avatar-11.jpg" alt="Tisha Velazquez">
                                                    <div class="pt-1"><strong>Tisha Velazquez</strong><br><span class="text-muted text-sm">tishavelazquez@ginkogene.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Ginkogene</strong><br><span class="text-muted">Kapowsin</span></td>
                                            <td><span class="badge badge-success-light"> <span class="indicator"></span>Open</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">55%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width:55%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/02/04</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center"><span class="avatar p-1 me-2"><span class="avatar-text avatar-warning-light">Y
                                                        </span></span>
                                                    <div class="pt-1"><strong>Young Bowers</strong><br><span class="text-muted text-sm">youngbowers@shepard.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>Shepard</strong><br><span class="text-muted">Eureka</span>
                                            </td>
                                            <td><span class="badge badge-danger-light"> <span class="indicator"></span>Closed</span></td>
                                            <td style="min-width: 125px;">
                                                <div class="d-flex align-items-center"><span class="me-2">74%</span>
                                                    <div class="progress progress-table">
                                                        <div class="progress-bar bg-undefined" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width:74%"> </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width: 120px">
                                                <div class="d-flex align-items-center justify-content-between"><span class="me-3">2021/10/16</span>
                                                    <div>
                                                        <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-edit opacity-5 me-2"></i>Edit</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i>
                                                                Remove </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><span class="me-2" id="categoryBulkActionOrders">
                                <select class="form-select form-select-sm d-inline w-auto" name="categoryBulkAction">
                                    <option>Bulk Actions</option>
                                    <option>Delete</option>
                                </select>
                                <button class="btn btn-sm btn-outline-primary align-top">Apply </button></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Widget Type 12-->
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row gx-2 gx-lg-4 gy-5">
                                    <div class="col-sm-5">
                                        <div class="h2">625</div>
                                        <p class="subtitle">New Customers</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <div class="col-6 text-center">
                                                <div class="h3">254</div>
                                                <p class="text-muted fw-normal">Affiliates</p>
                                                <hr>
                                                <p class="text-muted mb-0">+125</p>
                                            </div>
                                            <div class="col-6 text-center">
                                                <div class="h3">328</div>
                                                <p class="text-muted">SEM</p>
                                                <hr>
                                                <p class="text-muted mb-0">+144 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Widget Type 12-->
                    <!-- Widget Type 13-->
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="row gy-5 flex-fill">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-2 text-lg"><i class="fas fa-arrow-down text-danger"></i></div>
                                            <div class="col-sm-10">
                                                <h2>1,112</h2>
                                                <h6 class="text-muted fw-normal p-b-20 p-t-10">Affiliate Sales</h6>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-2 text-lg"><i class="fas fa-arrow-up text-success"></i></div>
                                            <div class="col-sm-10">
                                                <h2>258</h2>
                                                <h6 class="text-muted fw-normal p-b-20 p-t-10">Ads Sales</h6>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Widget Type 13-->
                </div>
                <div class="row">
                    <!-- <Projects Widget>-->
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-heading">Project updates</h5>
                                <div class="card-header-more">
                                    <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-window-minimize opacity-5 me-2"></i>Minimize</a><a class="dropdown-item" href="#!"><i class="fas fa-redo opacity-5 me-2"></i> Reload</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i> Remove </a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <p class="mb-2"><strong>Publish New Theme </strong><span class="float-end text-gray-500 text-sm">10 mins ago </span></p>
                                    <p class="card-text"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-0.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Nielsen Cobb"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-1.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Margret Cote">
                                    </p>
                                    <p class="mb-2"><strong>Internal Linkbuilding </strong><span class="float-end text-gray-500 text-sm">2 hours ago </span></p>
                                    <p class="card-text"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-1.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Nielsen Cobb"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-2.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Margret Cote"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-3.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Rachel Vinson"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-4.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Gabrielle Aguirre">
                                    </p>
                                    <p class="mb-2"><strong>New Writer Onboarding </strong><span class="float-end text-gray-500 text-sm">3 days ago </span></p>
                                    <p class="card-text"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-2.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Nielsen Cobb"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-3.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Margret Cote"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-4.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Rachel Vinson">
                                    </p>
                                    <p class="mb-2"><strong>Blog Post Drafts </strong><span class="float-end text-gray-500 text-sm">5 days ago </span></p>
                                    <p class="card-text"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-3.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Nielsen Cobb"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-4.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Margret Cote"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-5.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Rachel Vinson"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-6.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Gabrielle Aguirre"><img class="avatar avatar-sm avatar-stacked p-1" src="dist/img/avatar-7.jpg" alt="User" data-bs-toggle="tooltip" data-placement="top" title="Spears Collier">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </Projects Widget>-->
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-heading">Closed projects</h5>
                                <div class="card-header-more">
                                    <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-window-minimize opacity-5 me-2"></i>Minimize</a><a class="dropdown-item" href="#!"><i class="fas fa-redo opacity-5 me-2"></i> Reload</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i> Remove </a></div>
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-center">
                                <canvas id="donut3"></canvas>
                            </div>
                            <div class="card-footer bg-white">
                                <h3 class="subtitle text-gray-500 fw-normal text-center">Total closed projects</h3>
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-auto">
                                        <div class="h4 mb-0">2,235</div>
                                    </div>
                                    <div class="col-auto"> <span class="text-muted me-2">+128</span><span class="badge badge-success-light"><i class="fas fa-arrow-up me-2"></i>21.3%</span></div>
                                </div>
                                <div class="row mt-4 card-text text-sm justify-content-center">
                                    <div class="col-auto"><span class="indicator" style="background: #0d6efd">
                                        </span><span class="text-gray-500">Sandra</span>
                                        <div class="ms-3 h6">250</div>
                                    </div>
                                    <div class="col-auto"><span class="indicator" style="background: #3d8bfd">
                                        </span><span class="text-gray-500">Becky</span>
                                        <div class="ms-3 h6">50</div>
                                    </div>
                                    <div class="col-auto"><span class="indicator" style="background: #6ea8fe">
                                        </span><span class="text-gray-500">Julie</span>
                                        <div class="ms-3 h6">100</div>
                                    </div>
                                    <div class="col-auto"><span class="indicator" style="background: #9ec5fe">
                                        </span><span class="text-gray-500">Romero</span>
                                        <div class="ms-3 h6">40</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-heading">Tickets solved</h5>
                                <div class="card-header-more">
                                    <button class="btn-header-more" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end text-sm"><a class="dropdown-item" href="#!"><i class="fas fa-expand-arrows-alt opacity-5 me-2"></i>Expand</a><a class="dropdown-item" href="#!"><i class="far fa-window-minimize opacity-5 me-2"></i>Minimize</a><a class="dropdown-item" href="#!"><i class="fas fa-redo opacity-5 me-2"></i> Reload</a><a class="dropdown-item" href="#!"><i class="far fa-trash-alt opacity-5 me-2"></i> Remove </a></div>
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-center">
                                <canvas id="pieChartCustom3"></canvas>
                            </div>
                            <div class="card-footer bg-white">
                                <h3 class="subtitle text-gray-500 fw-normal text-center">Tickets solved</h3>
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-auto">
                                        <div class="h4 mb-0">530</div>
                                    </div>
                                    <div class="col-auto"> <span class="text-muted me-2">-85</span><span class="badge badge-danger-light"><i class="fas fa-arrow-down me-2"></i>-15.6%</span></div>
                                </div>
                                <div class="row mt-4 card-text text-sm justify-content-center">
                                    <div class="col-auto"><span class="indicator" style="background: #6610f2">
                                        </span><span class="text-gray-500">John</span>
                                        <div class="ms-3 h6">300</div>
                                    </div>
                                    <div class="col-auto"><span class="indicator" style="background: #8540f5">
                                        </span><span class="text-gray-500">Mark</span>
                                        <div class="ms-3 h6">50</div>
                                    </div>
                                    <div class="col-auto"><span class="indicator" style="background: #a370f7">
                                        </span><span class="text-gray-500">Frank</span>
                                        <div class="ms-3 h6">100</div>
                                    </div>
                                    <div class="col-auto"><span class="indicator" style="background: #c29ffa">
                                        </span><span class="text-gray-500">Danny</span>
                                        <div class="ms-3 h6">80</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'includes/footer_info.php'; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>