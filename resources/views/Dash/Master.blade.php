<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('Title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="{{ asset('images/20230911095137.PNG') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">
    
    <!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib-dash/owlcarsousel/assets/owl.carsousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib-dash/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css-dash/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css-dash/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css-dash/user_dash.css') }}" rel="stylesheet">
    <link href="{{ asset('css-dash/profile.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0" style="background-color: white;">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show  position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
            style="background-color: #f2f2f2;">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar " style="background-color: white;">
                <a href="index.html" class="navbar-brand mx-4 mb-3 ">
                    <h1 class="contentmaster">Helpz</h1>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset("img-dash/sohieb.jpg") }}" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-2 mb-2">
                        @php
                            
                            $admin = \App\Models\Admin::find(session()->get("adminid"))
                   
                        @endphp
                        <span>{{ $admin->name }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a src="{{ asset("img-dash/sohieb.jpg") }}" href="{{ route('todos.index') }}" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"  ></i>Dashboard</a>
                    <a href="category" class="nav-item nav-link contentmaster" ><i
                            class="fas fa-table me-2"></i>Category</a>


                    <div class="nav-item dropdown">
                        <a href="category" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fas fa-dollar-sign me-2"></i>Our offerings</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="equipment" class="dropdown-item contentmaster" ><i
                                    class="fas fa-chair me-2"></i>Equipment</a>
                            <a href="services" class="dropdown-item contentmaster" ><i
                                    class="fas fa-lightbulb me-2"></i>Services</a>
                            <a href="medicine" class="dropdown-item contentmaster" ><i
                                    class="fas fa-medkit me-2"></i>Medicine</a>
                        </div>
                    </div>
                    <a href="admin" class="nav-item nav-link contentmaster" ><i
                            class="fas fa-user-tie me-2"></i>Admin</a>
                    <a href="user" class="nav-item nav-link contentmaster" ><i
                            class="fas fa-user me-2"></i>Users</a>
                    <a href="{{ asset('/detail') }}" class="nav-item nav-link contentmaster" ><i
                            class="fas fa-dollar-sign me-2"></i>Monetaryvolunteer</a>
                    <a href="{{ asset('/item') }}" class="nav-item nav-link contentmaster" ><i
                            class="fas fa-handshake me-2"></i>volunteeritems</a>
                    <a href="{{ route('admin.logout') }}" class="nav-item nav-link">
                        <i class="fa fa-sign-out me-2"></i>LogOut</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->



        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand sticky-top px-4 py-0"
                style="background-color: rgba(165, 204, 247, 0.786);">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-2">
                    <h2 class=" mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars contentmaster" style="font-size: 25px; "></i>
                </a>
                <form class="d-none d-md-flex ms-2">
                    <input class="form-control mt-2 border-1 contentmaster searchmaster" type="search" placeholder="Search"
                       >
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-0 contentmaster" style="font-size: 20px; "></i>
                            <span class="d-none d-lg-inline-flex" >Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end  border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset("img-dash/sohieb.jpg") }}"
                                        alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0 ">Husam send you a message</h6>
                                        <small style="font-size: smaller;">1 hour ago</small>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset("img-dash/sohieb.jpg") }}"
                                        alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0 ">Murad send you a message</h6>
                                        <small style="font-size: smaller;">30 minutes ago</small>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset("img-dash/sohieb.jpg") }}"
                                        alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0 ">Sawsan send you a message</h6>
                                        <small style="font-size: smaller;">50 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-0 contentmaster" style="font-size: 20px;  "></i>
                            <span class="d-none d-lg-inline-flex contentmaster" >Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0 ">Profile updated</h6>
                                <small style="font-size: smaller;">1 hour ago</small>
                            </a>

                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0 ">New user added</h6>
                                <small style="font-size: smaller;">40 minutes ago</small>
                            </a>

                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0 ">Password changed</h6>
                                <small style="font-size: smaller;">15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset("img-dash/sohieb.jpg") }}"
                                alt="" style="width: 40px; height: 40px;">

                        </a>
                        <div class="dropdown-menu dropdown-menu-end  border-0 rounded-0 rounded-bottom m-0">
                            <a href="adminprofile" class="dropdown-item">My Profile</a>
                            <a href="adminprofile" class="dropdown-item">Settings</a>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->





            @yield('content');


    
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    
    <script>
        // Get all delete buttons with the 'delete-button' class
        const deleteButtons = document.querySelectorAll('.delete-button');
    
        // Loop through each delete button and attach a click event listener
        deleteButtons.forEach((button) => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
    
                const deleteId = button.getAttribute('data-delete-id');
    
                // Show SweetAlert confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If the user confirms, submit the form for deletion
                        const deleteForm = document.querySelector(`#delete-form-${deleteId}`);
                        deleteForm.submit();
                    }
                });
            });
        });
    </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>




    <script src="{{ asset('lib-dash/chart/chart.min.js') }}"></script>

    <script src="{{ asset('lib-dash/easing/easing.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="{{ asset('lib-dash/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib-dash/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib-dash/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib-dash/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib-dash/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js-dash/main.js') }}"></script>
    {{-- <script src="{{ asset('js-dash/sweetalert2.all.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js-dash/sweetalert.js') }}"></script> <!-- Include your custom script --> --}}
    {{-- @stack('scripts') --}}
</body>




</html>
