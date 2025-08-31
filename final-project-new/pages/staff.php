<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Staff Management</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addStaffModal">
                    <i class="fas fa-plus me-1"></i>Add Staff Member
                </button>
            </div>
        </div>

        <!-- Staff Stats -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card">
                    <div class="stats-number" id="totalStaff">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Active employees</div>
                    <i class="fas fa-users stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card success">
                    <div class="stats-number" id="onDutyStaff">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Currently working</div>
                    <i class="fas fa-user-check stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card warning">
                    <div class="stats-number" id="onBreakStaff">
                       <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Break time</div>
                    <i class="fas fa-coffee stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card info">
                    <div class="stats-number" id="offDutyStaff">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Not scheduled</div>
                    <i class="fas fa-user-times stats-icon"></i>
                </div>
            </div>
        </div>

        <!-- Department Overview -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-building me-2"></i>Department Overview
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row" id="departmentOverview">
                            <div class="col-md-4 mb-3">
                                <div class="department-card">
                                    <div class="card border-primary">
                                        <div class="card-body text-center">
                                            <i class="fas fa-fire fa-2x text-primary mb-2"></i>
                                            <h6>Kitchen</h6>
                                            <div class="d-flex justify-content-between">
                                                <small>Total: <span id="kitchen-total">0</span></small>
                                                <small class="text-success">Active: <span id="kitchen-active">0</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="department-card">
                                    <div class="card border-info">
                                        <div class="card-body text-center">
                                            <i class="fas fa-headset fa-2x text-info mb-2"></i>
                                            <h6>Customer Service</h6>
                                            <div class="d-flex justify-content-between">
                                                <small>Total: <span id="service-total">0</span></small>
                                                <small class="text-success">Active: <span id="service-active">0</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="department-card">
                                    <div class="card border-warning">
                                        <div class="card-body text-center">
                                            <i class="fas fa-users-cog fa-2x text-warning mb-2"></i>
                                            <h6>Management</h6>
                                            <div class="d-flex justify-content-between">
                                                <small>Total: <span id="management-total">0</span></small>
                                                <small class="text-success">Active: <span id="management-active">0</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Staff List -->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-users me-2"></i>Staff Members
                        </h5>
                    </div>
                    <div class="col-auto">
                        <div class="btn-group btn-group-sm me-2">
                            <button class="btn btn-outline-secondary active" data-filter="all">All</button>
                            <button class="btn btn-outline-secondary" data-filter="kitchen">Kitchen</button>
                            <button class="btn btn-outline-secondary" data-filter="service">Service</button>
                            <button class="btn btn-outline-secondary" data-filter="management">Management</button>
                        </div>
                        <input type="text" class="form-control form-control-sm d-inline-block" id="staffSearch" placeholder="Search staff..." style="width: 200px;">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="staffTable">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>Department</th>
                                <th>Role</th>
                                <th>Contact</th>
                                <th>Shift</th>
                                <th>Status</th>
                                <th>Salary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="staffTableBody">
                            <!-- Staff will be loaded here -->
                            <tr>
                                <td colspan="8" class="text-center">
                                    <div class="loading-container">
                                        <div class="loading"></div>
                                        <p class="mt-2 text-muted">Loading staff members...</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast container for positioning -->
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055;"></div>

    <!-- Add Staff Modal -->
    <div class="modal fade" id="addStaffModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Staff Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addStaffForm" class="needs-validation" novalidate>
                        <!-- Photo Upload Section -->
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <div class="photo-upload-container">
                                    <div class="photo-preview" id="photoPreview">
                                        <i class="fas fa-camera fa-2x text-muted"></i>
                                        <p class="text-muted mt-2">Click to upload photo</p>
                                    </div>
                                    <input type="file" class="d-none" id="staffPhoto" accept="image/*">
                                    <div class="upload-progress d-none" id="uploadProgress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                                        </div>
                                        <small class="text-muted">Uploading photo...</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="staffName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="staffName" required>
                                <div class="invalid-feedback">Please provide a valid name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="staffEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="staffEmail" required>
                                <div class="invalid-feedback">Please provide a valid email.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="staffPhone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="staffPhone" required>
                                <div class="invalid-feedback">Please provide a valid phone number.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="staffDepartment" class="form-label">Department</label>
                                <select class="form-select" id="staffDepartment" required>
                                    <option value="">Select Department</option>
                                    <option value="kitchen">Kitchen</option>
                                    <option value="service">Customer Service</option>
                                    <option value="management">Management</option>
                                </select>
                                <div class="invalid-feedback">Please select a department.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="staffRole" class="form-label">Role</label>
                                <input type="text" class="form-control" id="staffRole" placeholder="e.g., Chef, Manager" required>
                                <div class="invalid-feedback">Please provide a role.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="staffSalary" class="form-label">Salary (£)</label>
                                <input type="number" class="form-control" id="staffSalary" min="0" step="0.01" required>
                                <div class="invalid-feedback">Please provide a valid salary.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="staffAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="staffAddress" rows="3" required></textarea>
                            <div class="invalid-feedback">Please provide an address.</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="joinDate" class="form-label">Joining Date</label>
                                <input type="date" class="form-control" id="joinDate" required>
                                <div class="invalid-feedback">Please provide a joining date.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="shiftType" class="form-label">Shift Type</label>
                                <select class="form-select" id="shiftType" required>
                                    <option value="">Select Shift</option>
                                    <option value="morning">Morning (6 AM - 2 PM)</option>
                                    <option value="evening">Evening (2 PM - 10 PM)</option>
                                    <option value="night">Night (10 PM - 6 AM)</option>
                                    <option value="full">Full Day (10 AM - 10 PM)</option>
                                </select>
                                <div class="invalid-feedback">Please select a shift type.</div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="addStaffBtn">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status"></span>
                        Add Staff Member
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Staff Modal -->
    <div class="modal fade" id="editStaffModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Staff Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editStaffForm" class="needs-validation" novalidate>
                        <input type="hidden" id="editStaffId">
                        
                        <!-- Photo Upload Section for Edit -->
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <div class="photo-upload-container">
                                    <div class="photo-preview" id="editPhotoPreview">
                                        <i class="fas fa-camera fa-2x text-muted"></i>
                                        <p class="text-muted mt-2">Click to upload photo</p>
                                    </div>
                                    <input type="file" class="d-none" id="editStaffPhoto" accept="image/*">
                                    <div class="upload-progress d-none" id="editUploadProgress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                                        </div>
                                        <small class="text-muted">Uploading photo...</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editStaffName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="editStaffName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editStaffEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="editStaffEmail" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editStaffPhone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="editStaffPhone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editStaffDepartment" class="form-label">Department</label>
                                <select class="form-select" id="editStaffDepartment" required>
                                    <option value="">Select Department</option>
                                    <option value="kitchen">Kitchen</option>
                                    <option value="service">Customer Service</option>
                                    <option value="management">Management</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editStaffRole" class="form-label">Role</label>
                                <input type="text" class="form-control" id="editStaffRole" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editStaffSalary" class="form-label">Salary (£)</label>
                                <input type="number" class="form-control" id="editStaffSalary" min="0" step="0.01" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="editStaffAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="editStaffAddress" rows="3" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editJoinDate" class="form-label">Joining Date</label>
                                <input type="date" class="form-control" id="editJoinDate" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editShiftType" class="form-label">Shift Type</label>
                                <select class="form-select" id="editShiftType" required>
                                    <option value="">Select Shift</option>
                                    <option value="morning">Morning (6 AM - 2 PM)</option>
                                    <option value="evening">Evening (2 PM - 10 PM)</option>
                                    <option value="night">Night (10 PM - 6 AM)</option>
                                    <option value="full">Full Day (10 AM - 10 PM)</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="updateStaffBtn">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status"></span>
                        Update Staff Member
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Staff Details Modal -->
    <div class="modal fade" id="staffDetailsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staffDetailsTitle">Staff Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="staffDetailsBody">
                    <!-- Staff details will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning" id="editFromDetailsBtn">Edit Details</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Stats Cards Styling - Matching Dashboard */
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

        /* Loading Spinner - Matching Dashboard */
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

        .loading-container {
            padding: 2rem;
        }

        /* Card Styling - Matching Dashboard */
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

        .card-body {
            padding: 1.25rem;
        }

        .table {
            color: #5a5c69;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            font-weight: 800;
            color: #5a5c69;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05rem;
        }

        .table td {
            border-top: 1px solid #dee2e6;
            vertical-align: middle;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.025);
        }

        .btn {
            font-weight: 400;
            border-radius: 0.35rem;
            font-size: 0.875rem;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.8125rem;
            border-radius: 0.2rem;
        }

        .badge {
            font-weight: 700;
            font-size: 0.65rem;
            border-radius: 10rem;
            padding: 0.25em 0.6em;
        }

        .border-bottom {
            border-bottom: 1px solid #dee2e6 !important;
        }

        .h2 {
            font-size: 2rem;
            font-weight: 400;
            line-height: 1.2;
            color: #5a5c69;
        }

        .text-muted {
            color: #858796 !important;
        }

        .modal-header {
            border-bottom: 1px solid #dee2e6;
            background-color: #f8f9fa;
        }

        .modal-footer {
            border-top: 1px solid #dee2e6;
            background-color: #f8f9fa;
        }

        .form-control {
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
            color: #6e707e;
        }

        .form-control:focus {
            border-color: #bac8f3;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .form-select {
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
            color: #6e707e;
        }

        .form-label {
            margin-bottom: 0.5rem;
            font-weight: 700;
            color: #5a5c69;
            font-size: 0.875rem;
        }

        .container-fluid {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .btn-outline-secondary.active {
            background-color: #858796;
            border-color: #858796;
            color: #fff;
        }

        .department-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .department-card:hover {
            transform: translateY(-5px);
        }

        .avatar-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            object-fit: cover;
        }

        .avatar-circle-large {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 24px;
            object-fit: cover;
        }

        /* Photo Upload Styles */
        .photo-upload-container {
            margin-bottom: 1rem;
        }

        .photo-preview {
            width: 120px;
            height: 120px;
            border: 2px dashed #dee2e6;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin: 0 auto;
            transition: all 0.3s ease;
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .photo-preview:hover {
            border-color: #0d6efd;
            background-color: #f8f9fa;
        }

        .photo-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .photo-preview.has-image {
            border: 2px solid #28a745;
        }

        .upload-progress {
            margin-top: 10px;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
        }

        .status-buttons {
            display: flex;
            gap: 3px;
            margin-bottom: 5px;
        }

        .status-btn {
            padding: 4px 8px;
            font-size: 0.75rem;
            border-radius: 4px;
            border: 1px solid transparent;
            cursor: pointer;
            transition: all 0.2s;
            min-width: 32px;
        }

        .status-btn:hover {
            transform: scale(1.05);
            opacity: 0.8;
        }

        .status-btn.active {
            border: 2px solid #000;
            box-shadow: 0 0 5px rgba(0,0,0,0.3);
        }

        /* Error Message Styling */
        .error-message {
            color: #dc3545;
            text-align: center;
            padding: 1rem;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 0.375rem;
            margin: 0.5rem 0;
        }

        /* Department Cards from original */
        .department-card .card {
            transition: all 0.3s ease;
        }

        .department-card:hover .card {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        /* Card title styling */
        .card-title {
            font-weight: 600;
            color: #5a5c69;
        }
    </style>

    
</body>
</html>