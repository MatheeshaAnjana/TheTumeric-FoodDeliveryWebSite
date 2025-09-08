
    <style>
        .stats-card {
            background: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            padding: 1.5rem;
            position: relative;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        
        .stats-card.success {
            border-left: 4px solid #198754;
        }
        
        .stats-card.warning {
            border-left: 4px solid #ffc107;
        }
        
        .stats-card.info {
            border-left: 4px solid #0dcaf0;
        }
        
        .stats-card:not(.success):not(.warning):not(.info) {
            border-left: 4px solid #0d6efd;
        }
        
        .stats-number {
            font-size: 2rem;
            font-weight: 700;
            color: #495057;
            margin-bottom: 0.25rem;
        }
        
        .stats-label {
            font-size: 0.875rem;
            color: #6c757d;
            margin-bottom: 0;
        }
        
        .stats-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: #dee2e6;
        }
        
        .card {
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 0.75rem 1.25rem;
        }
        
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }
        
        .list-group-item {
            border-left: 0;
            border-right: 0;
            border-top: 0;
            border-bottom: 1px solid #dee2e6;
            padding: 0.75rem 0;
        }
        
        .list-group-item:last-child {
            border-bottom: 0;
        }
        
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid #f3f3f3;
            border-top: 3px solid #0d6efd;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .error-message {
            color: #dc3545;
            text-align: center;
            padding: 1rem;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 0.375rem;
            margin: 0.5rem 0;
        }
        .h2 {
            font-size: 2rem;
            font-weight: 400;
            line-height: 1.2;
            color: #495057;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>

        <!-- Stats Cards -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card">
                    <div class="stats-number" id="todayOrders">
                         <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Today's Orders</div>
                    <i class="fas fa-shopping-cart stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card success">
                    <div class="stats-number" id="todayRevenue">
                         <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Today's Revenue</div>
                    <i class="fas fa-pound-sign stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card warning">
                    <div class="stats-number" id="pendingDeliveries">
                         <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Pending Deliveries</div>
                    <i class="fas fa-truck stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card info">
                    <div class="stats-number" id="averageRating">
                         <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Average Rating</div>
                    <i class="fas fa-star stats-icon"></i>
                </div>
            </div>
        </div>

        <!-- Charts and Recent Activity -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-chart-line me-2"></i>Sales Overview
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-clock me-2"></i>Recent Orders
                        </h5>
                    </div>
                    <div class="card-body">
                        <div id="recentOrders">
                            <div class="text-center">
                                 <div class="spinner-border spinner-border-sm" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                 </div>
                                <p class="mt-2">Loading recent orders...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-bolt me-2"></i>Quick Actions
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <a href="index.php?page=orders" class="btn btn-outline-primary w-100 h-100 d-flex flex-column justify-content-center" onclick="createNewOrder(); return false;">
                                    <i class="fas fa-plus fa-2x mb-2"></i>
                                    <span>New Order</span>
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="index.php?page=menu" class="btn btn-outline-success w-100 h-100 d-flex flex-column justify-content-center" onclick="addMenuItem(); return false;">
                                    <i class="fas fa-utensils fa-2x mb-2"></i>
                                    <span>Add Menu Item</span>
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="index.php?page=promotions" class="btn btn-outline-warning w-100 h-100 d-flex flex-column justify-content-center" onclick="createPromotion(); return false;">
                                    <i class="fas fa-percentage fa-2x mb-2"></i>
                                    <span>Create Promotion</span>
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="index.php?page=reports" class="btn btn-outline-info w-100 h-100 d-flex flex-column justify-content-center" onclick="viewReports(); return false;">
                                    <i class="fas fa-chart-bar fa-2x mb-2"></i>
                                    <span>View Reports</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- New Order Modal -->
    <div class="modal fade" id="newOrderModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="newOrderForm">
                        <div class="mb-3">
                            <label class="form-label">Customer</label>
                            <select class="form-select" id="customerId" required>
                                <option value="">Select Customer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Delivery Address</label>
                            <textarea class="form-control" id="deliveryAddress" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Menu Items</label>
                            <div id="menuItems"></div>
                        </div>
                        <div class="mb-3">
                            <strong>Total: £<span id="orderTotal">0</span></strong>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="submitOrder()">Create Order</button>
                </div>
            </div>
        </div>
    </div>

    