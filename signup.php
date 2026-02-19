<?php 
include 'signup_database.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Hospital Admin System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/signup.css">
</head>
<body class="signup-page">

    <div class="signup-card">
        <div class="signup-header">
            <i class="fas fa-hospital-alt"></i>
            <h3>Hospital Admin</h3>
            <p class="text-muted small">Create Your Account</p>
        </div>

        <?php if ($error): ?>
            <div class="alert alert-danger small py-2"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="alert alert-success small py-2">
                <?= $success ?> <a href="login.php" class="alert-link">Login here</a>
            </div>
        <?php endif; ?>

        <form action="signup.php" method="POST">

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                    <input type="text" class="form-control" name="full_name" 
                        placeholder="Full Name" 
                        value="<?= isset($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : '' ?>" 
                        required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" name="username" 
                        placeholder="Username" 
                        value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>" 
                        required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" name="email" 
                        placeholder="Email Address" 
                        value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" 
                        required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Role</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                    <select class="form-select" name="role_id" required>
                        <option value="" disabled selected>Select Role</option>
                        <?php while($row = $roles->fetch_assoc()): ?>
                            <option value="<?= $row['role_id'] ?>" 
                                <?= (isset($_POST['role_id']) && $_POST['role_id'] == $row['role_id']) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($row['role_name']) ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Department</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                    <select class="form-select" name="department_id" required>
                        <option value="" disabled selected>Select Department</option>
                        <?php while($row = $departments->fetch_assoc()): ?>
                            <option value="<?= $row['department_id'] ?>"
                                <?= (isset($_POST['department_id']) && $_POST['department_id'] == $row['department_id']) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($row['department_name']) ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">Confirm Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                </div>
                <div id="password-error" class="text-danger small mt-1" style="display:none;">
                    Passwords do not match.
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 btn-signup">
                <i class="fas fa-user-plus me-2"></i> Create Account
            </button>

        </form>

        <div class="text-center mt-3">
            <p class="small text-muted mb-0">
                Already have an account? <a href="login.php" class="text-decoration-none">Sign In</a>
            </p>
        </div>

        <div class="signup-footer">
            <p class="small text-muted mb-0">&copy; 2026 HMS Management System</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/signup_function.js"></script>
</body>
</html>