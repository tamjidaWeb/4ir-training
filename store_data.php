<?php

// Start the session
session_start();

// Database connection
$host = 'localhost';
$dbname = 'plwpdsqz_wiztecbd';
$user = 'plwpdsqz_wiztecbd';
$password = 'FTqe&x+y24gz';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch input data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $contact_no = trim($_POST['contact'] ?? '');
    $nid_no = trim($_POST['nid_no'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $gender = trim($_POST['gender'] ?? '');
    $degree = trim($_POST['degree'] ?? '');
    $institute = trim($_POST['institute'] ?? '');
    $employment_status = trim($_POST['employment'] ?? '');
    $company_name = trim($_POST['current_company_name'] ?? '');
    $job_designation = trim($_POST['job_designation'] ?? '');
    $training_location = trim($_POST['training_location'] ?? '');
    $training_course = trim($_POST['training_course'] ?? '');
    $training_phase = trim($_POST['training_phase'] ?? '');
    $are_you = trim($_POST['are_you'] ?? ''); // Capture the "are_you" field

    // Initialize an array to hold missing fields
    $missing_fields = [];

    // Check required fields
    if (empty($name)) $missing_fields[] = "Name";
    if (empty($email)) $missing_fields[] = "Email";
    if (empty($contact_no)) $missing_fields[] = "Contact Number";
    if (empty($nid_no)) $missing_fields[] = "NID Number";
    if (empty($gender)) $missing_fields[] = "Gender";
    if (empty($degree)) $missing_fields[] = "Degree";
    if (empty($institute)) $missing_fields[] = "Institute";
    if (empty($employment_status)) $missing_fields[] = "Employment Status";
    if (empty($training_phase)) $missing_fields[] = "Training Phase";
    if (empty($training_location)) $missing_fields[] = "Training Location";
    if (empty($training_course)) $missing_fields[] = "Training Course";
    if (empty($are_you)) $missing_fields[] = "Are You";

    // If there are missing fields, generate an error message
    if (count($missing_fields) > 0) {
        $_SESSION['error_message'] = "The following fields are required: " . implode(", ", $missing_fields);
        header("Location: index.php");
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_message'] = "Invalid email format.";
        header("Location: index.php");
        exit();
    }

    // Check if NID is unique
    try {
        $checkUniqueQuery = "SELECT COUNT(*) FROM applicant_4ir WHERE nid_no = :nid_no OR email = :email OR contact_no = :contact_no";
        $stmt = $conn->prepare($checkUniqueQuery);
        $stmt->execute([
            ':nid_no' => $nid_no,
            ':email' => $email,
            ':contact_no' => $contact_no,
        ]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            $_SESSION['error_message'] = "The NID, Email, or Phone Number you provided is already registered.";
            header("Location: index.php");
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['error_message'] = "An error occurred while checking uniqueness: " . $e->getMessage();
        header("Location: index.php");
        exit();
    }

    // Folder path for file uploads
    $upload_dir = 'uploads/' . $name . '-' . $nid_no . '/';

    // Check if the directory exists, if not create it
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Handle file uploads
    $resume_path = '';
    $nid_path = '';
    $certificate_path = '';

    // Allowed file types (image and PDF)
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];

    // Validate and move uploaded files
    if (!empty($_FILES['resume']['name'])) {
        $resume_tmp = $_FILES['resume']['tmp_name'];
        $resume_name = basename($_FILES['resume']['name']);
        $resume_type = mime_content_type($resume_tmp);

        if (in_array($resume_type, $allowed_types)) {
            $resume_path = $upload_dir . 'resume-' . $resume_name;
            move_uploaded_file($resume_tmp, $resume_path);
        } else {
            $_SESSION['error_message'] = "Invalid file type for resume. Only images and PDF are allowed.";
            header("Location: index.php");
            exit();
        }
    }

    if (!empty($_FILES['nid']['name'])) {
        $nid_tmp = $_FILES['nid']['tmp_name'];
        $nid_name = basename($_FILES['nid']['name']);
        $nid_type = mime_content_type($nid_tmp);

        if (in_array($nid_type, $allowed_types)) {
            $nid_path = $upload_dir . 'nid-' . $nid_name;
            move_uploaded_file($nid_tmp, $nid_path);
        } else {
            $_SESSION['error_message'] = "Invalid file type for NID. Only images and PDF are allowed.";
            header("Location: index.php");
            exit();
        }
    }

    // **Certificate is required**
    if (empty($_FILES['certificate']['name'])) {
        $_SESSION['error_message'] = "Certificate is required.";
        header("Location: index.php");
        exit();
    }

    if (!empty($_FILES['certificate']['name'])) {
        $certificate_tmp = $_FILES['certificate']['tmp_name'];
        $certificate_name = basename($_FILES['certificate']['name']);
        $certificate_type = mime_content_type($certificate_tmp);

        if (in_array($certificate_type, $allowed_types)) {
            $certificate_path = $upload_dir . 'certificate-' . $certificate_name;
            move_uploaded_file($certificate_tmp, $certificate_path);
        } else {
            $_SESSION['error_message'] = "Invalid file type for certificate. Only images and PDF are allowed.";
            header("Location: index.php");
            exit();
        }
    }

    // Insert data into the database
    try {
        $sql = "INSERT INTO applicant_4ir 
                (name, email, contact_no, nid_no, address, gender, degree, institute, employment_status, company_name, job_designation, training_location, training_course, training_phase, are_you, resume_path, nid_path, certificate_path, terms_accepted)
                VALUES (:name, :email, :contact_no, :nid_no, :address, :gender, :degree, :institute, :employment_status, :company_name, :job_designation, :training_location, :training_course, :training_phase, :are_you, :resume_path, :nid_path, :certificate_path, :terms_accepted)";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':contact_no' => $contact_no,
            ':nid_no' => $nid_no,
            ':address' => $address,
            ':gender' => $gender,
            ':degree' => $degree,
            ':institute' => $institute,
            ':employment_status' => $employment_status,
            ':company_name' => $company_name,
            ':job_designation' => $job_designation,
            ':training_location' => $training_location,
            ':training_course' => $training_course,
            ':training_phase' => $training_phase,
            ':are_you' => $are_you, // Insert the selected value of "are_you"
            ':resume_path' => $resume_path,
            ':nid_path' => $nid_path,
            ':certificate_path' => $certificate_path,
            ':terms_accepted' => $_POST['terms_accepted'] ?? 0,
        ]);

        $_SESSION['success_message'] = "Application submitted successfully!";
        header("Location: index.php");
        exit();

    } catch (PDOException $e) {
        $_SESSION['error_message'] = "An error occurred while inserting data: " . $e->getMessage();
        header("Location: index.php");
        exit();
    }
}
?>
