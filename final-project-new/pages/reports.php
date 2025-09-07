
    <style>
        body {
            background-color: #f8f9fa;
        }
        
        .stats-card {
            background: #fff;
            border: none;
            border-radius: 0.75rem;
            padding: 1.5rem;
            position: relative;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        
        .stats-card.primary {
            border-left: 4px solid #0d6efd;
        }
        
        .stats-card.success {
            border-left: 4px solid #198754;
        }
        
        .stats-card.info {
            border-left: 4px solid #0dcaf0;
        }
        
        .stats-card.warning {
            border-left: 4px solid #ffc107;
        }
        
        .stats-icon {
            position: absolute;
            right: 1.5rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2.5rem;
            color: #dee2e6;
        }
        
        .report-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }
        
        .report-description {
            font-size: 0.875rem;
            color: #6c757d;
            margin-bottom: 1rem;
        }
        
        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #dee2e6;
            padding: 1.25rem 1.5rem;
            border-radius: 0.75rem 0.75rem 0 0 !important;
        }
        
        .card-title {
            color: #495057;
            font-weight: 600;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table th {
            border-top: none;
            font-weight: 600;
            color: #495057;
            background-color: #f8f9fa;
        }
        
        .btn-toolbar .btn {
            border-radius: 0.5rem;
            font-weight: 500;
        }
        
        .loading-spinner {
            display: none;
            text-align: center;
            padding: 2rem;
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
        
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
        }
        
        .report-preview {
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            padding: 1.5rem;
            background: #fff;
        }
        
        .badge {
            font-weight: 500;
        }
        
        .btn-group-sm .btn {
            border-radius: 0.375rem;
        }
        
        .generate-btn {
            background-color: #ea580c;
            border: 2px solid #ea580c;
            color: #fff;
            border-radius: 0.5rem;
            padding: 0.25rem 0.75rem;
            font-size: 0.8125rem;
            font-weight: 500;
            transition: all 0.3s ease;
            }

            .generate-btn:hover {
            background-color: #ea580c;
            color: #fff;
            transform: translateY(-1px);
            }

        
        .stats-card .generate-btn {
            background-color: transparent;
            border: 2px solid #495057;
            color: #495057;
            border-radius: 0.5rem;
            padding: 0.25rem 0.75rem;
            font-size: 0.8125rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .stats-card .generate-btn:hover {
            background-color: #ea580c;
            color: #fff;
            transform: translateY(-1px);
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
        <!-- Notification container -->
        <div id="notificationContainer"></div>

        <!-- Header -->
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Reports</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="generate-btn" data-bs-toggle="modal" data-bs-target="#generateReportModal">
    <i class="fas fa-plus me-1"></i> Generate Report
</button>

            </div>
        </div>

        <!-- Quick Report Cards -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card primary" data-report="sales">
                    <div class="report-title">Sales Report</div>
                    <div class="report-description">Revenue, orders, and trends</div>
                    <button class="generate-btn">Generate</button>
                    <i class="fas fa-chart-line stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card success" data-report="inventory">
                    <div class="report-title">Menu Report</div>
                    <div class="report-description">Menu items performance</div>
                    <button class="generate-btn">Generate</button>
                    <i class="fas fa-boxes stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card info" data-report="customer">
                    <div class="report-title">Customer Report</div>
                    <div class="report-description">Customer analytics and behavior</div>
                    <button class="generate-btn">Generate</button>
                    <i class="fas fa-users stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card warning" data-report="feedback">
                    <div class="report-title">Feedback Report</div>
                    <div class="report-description">Customer feedback analysis</div>
                    <button class="generate-btn">Generate</button>
                    <i class="fas fa-star stats-icon"></i>
                </div>
            </div>
        </div>

        <!-- Recent Reports -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-history me-2"></i>Recent Reports
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Report Name</th>
                                        <th>Type</th>
                                        <th>Date Range</th>
                                        <th>Generated</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="reportsTable">
                                    <!-- Reports will be populated here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Generate Report Modal -->
        <div class="modal fade" id="generateReportModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Generate Custom Report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="reportForm" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="reportType" class="form-label">Report Type</label>
                                <select class="form-select" id="reportType" required>
                                    <option value="">Select Report Type</option>
                                    <option value="sales">Sales Report</option>
                                    <option value="inventory">Menu Analysis Report</option>
                                    <option value="customer">Customer Report</option>
                                    <option value="feedback">Feedback Report</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="reportName" class="form-label">Report Name</label>
                                <input type="text" class="form-control" id="reportName" placeholder="e.g., Monthly Sales Summary" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="startDate" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="startDate" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="endDate" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="endDate" required>
                                </div>
                            </div>
                        </form>
                        <div class="loading-spinner" id="loadingSpinner">
                            <div class="loading"></div>
                            <p class="mt-2">Generating report...</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="generateReport()">Generate PDF Report</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report Preview Modal -->
        <div class="modal fade" id="reportPreviewModal" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="previewTitle">Report Preview</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="report-preview" id="reportPreview">
                            <!-- Report content will be displayed here -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="downloadPreviewBtn">Download PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </div>