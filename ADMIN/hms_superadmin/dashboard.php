<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Admin Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="d-flex align-items-center">
                <i class="fas fa-hospital-alt text-primary fs-3 me-2"></i>
                <h4 class="mb-0">Hospital Admin</h4>
            </div>
            <button class="btn btn-link sidebar-toggle d-lg-none" id="sidebarClose">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <nav class="sidebar-nav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.html">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="administrative.html">
                        <i class="fas fa-user-cog"></i>
                        <span>Administrative</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="facilities.html">
                        <i class="fas fa-building"></i>
                        <span>Facilities Reservation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="document-management.html">
                        <i class="fas fa-folder-open"></i>
                        <span>Document Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="legal-management.html">
                        <i class="fas fa-gavel"></i>
                        <span>Legal Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user-management.html">
                        <i class="fas fa-users"></i>
                        <span>User Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="visitor-management.html">
                        <i class="fas fa-id-card"></i>
                        <span>Visitor Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="approval-management.html">
                        <i class="fas fa-check-circle"></i>
                        <span>Approval Management</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="sidebar-footer">
            <div class="user-info">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=0D6EFD&color=fff" alt="Admin" class="rounded-circle">
                <div class="ms-2">
                    <h6 class="mb-0">Admin User</h6>
                    <small class="text-muted">Administrator</small>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
            <div class="container-fluid">
                <button class="btn btn-link sidebar-toggle" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="ms-auto d-flex align-items-center">
                    <!-- Search -->
                    <form class="d-none d-md-flex me-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button class="btn btn-outline-secondary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    
                    <!-- Notifications -->
                    <div class="dropdown me-3">
                        <button class="btn btn-link position-relative" data-bs-toggle="dropdown">
                            <i class="fas fa-bell fs-5"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><h6 class="dropdown-header">Notifications</h6></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-info-circle text-primary me-2"></i> New visitor registered</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-file-alt text-warning me-2"></i> Document pending approval</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-calendar text-success me-2"></i> Facility booked</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-center" href="#">View all</a></li>
                        </ul>
                    </div>
                    
                    <!-- User Profile -->
                    <div class="dropdown">
                        <button class="btn btn-link d-flex align-items-center" data-bs-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name=Admin+User&background=0D6EFD&color=fff" alt="Admin" class="rounded-circle me-2" width="32" height="32">
                            <span class="d-none d-md-inline">Admin User</span>
                            <i class="fas fa-chevron-down ms-2"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="content-wrapper">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>

            <!-- Page Title -->
            <div class="page-header mb-4">
                <h2 class="page-title">Dashboard Overview</h2>
                <p class="text-muted">Welcome to Hospital Admin Dashboard</p>
            </div>

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <div class="col-xl-3 col-md-6">
                    <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Total Visitors Today</p>
                                    <h3 class="mb-0">245</h3>
                                    <small class="text-success"><i class="fas fa-arrow-up"></i> 12% from yesterday</small>
                                </div>
                                <div class="stat-icon bg-primary-subtle text-primary">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                    <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Pending Approvals</p>
                                    <h3 class="mb-0">18</h3>
                                    <small class="text-warning"><i class="fas fa-clock"></i> Action required</small>
                                </div>
                                <div class="stat-icon bg-warning-subtle text-warning">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                    <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Active Reservations</p>
                                    <h3 class="mb-0">32</h3>
                                    <small class="text-info"><i class="fas fa-calendar-check"></i> For today</small>
                                </div>
                                <div class="stat-icon bg-info-subtle text-info">
                                    <i class="fas fa-building"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                    <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Total Documents</p>
                                    <h3 class="mb-0">1,284</h3>
                                    <small class="text-success"><i class="fas fa-file-alt"></i> 45 new this week</small>
                                </div>
                                <div class="stat-icon bg-success-subtle text-success">
                                    <i class="fas fa-folder"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity & Quick Actions -->
            <div class="row g-4 mb-4">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">Recent Activity</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Activity</th>
                                            <th>Module</th>
                                            <th>User</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="fas fa-user-plus text-primary me-2"></i>
                                                New visitor registered
                                            </td>
                                            <td>Visitor Management</td>
                                            <td>John Smith</td>
                                            <td>5 mins ago</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fas fa-calendar text-info me-2"></i>
                                                Conference room booked
                                            </td>
                                            <td>Facilities</td>
                                            <td>Sarah Johnson</td>
                                            <td>15 mins ago</td>
                                            <td><span class="badge bg-info">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fas fa-file-upload text-warning me-2"></i>
                                                Document uploaded
                                            </td>
                                            <td>Document Management</td>
                                            <td>Mike Davis</td>
                                            <td>32 mins ago</td>
                                            <td><span class="badge bg-warning">Pending Review</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Approval granted
                                            </td>
                                            <td>Approval Management</td>
                                            <td>Admin User</td>
                                            <td>1 hour ago</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fas fa-user-edit text-primary me-2"></i>
                                                User profile updated
                                            </td>
                                            <td>User Management</td>
                                            <td>Emily Wilson</td>
                                            <td>2 hours ago</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">Quick Actions</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newVisitorModal">
                                    <i class="fas fa-user-plus me-2"></i> Register Visitor
                                </button>
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#bookFacilityModal">
                                    <i class="fas fa-calendar-plus me-2"></i> Book Facility
                                </button>
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#uploadDocModal">
                                    <i class="fas fa-upload me-2"></i> Upload Document
                                </button>
                                <button class="btn btn-outline-primary" href="approval-management.html">
                                    <i class="fas fa-tasks me-2"></i> View Pending Approvals
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">System Status</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <small>Storage Usage</small>
                                    <small class="text-muted">67%</small>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <small>Active Users</small>
                                    <small class="text-muted">24/50</small>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 48%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between mb-1">
                                    <small>Server Load</small>
                                    <small class="text-muted">32%</small>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 32%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer bg-white border-top mt-auto py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0 text-muted">&copy; 2024 Hospital Admin System. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p class="mb-0 text-muted">Version 1.0.0</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Quick Action Modals -->
    <!-- New Visitor Modal -->
    <div class="modal fade" id="newVisitorModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register New Visitor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter visitor name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Purpose of Visit</label>
                            <select class="form-select">
                                <option>Select purpose</option>
                                <option>Meeting</option>
                                <option>Delivery</option>
                                <option>Consultation</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact Number</label>
                            <input type="tel" class="form-control" placeholder="Enter contact number">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Register Visitor</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Custom JS -->
     <script src="assets/js/main.js"></script>
</body>
</html>
