<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Details</title>
    <style>
        body { font-family: sans-serif; margin: 2em; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #333; }
        .details-grid { display: grid; grid-template-columns: 150px 1fr; gap: 10px; margin-top: 20px; }
        .details-grid strong { color: #555; }
        .back-link { display: block; text-align: center; margin-top: 20px; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>

<div class="container">
    <h1>Student Details</h1>

    <?php if (!empty($student)): ?>
        <div class="details-grid">
            <strong>ID:</strong>
            <span><?= esc($student['id']) ?></span>

            <strong>Name:</strong>
            <span><?= esc($student['name']) ?></span>

            <strong>Email:</strong>
            <span><?= esc($student['email']) ?></span>
            
            <strong>Address:</strong>
            <span><?= esc($student['address']) ?></span>

            <strong>Phone:</strong>
            <span><?= esc($student['phone']) ?></span>

            <strong>Father's Name:</strong>
            <span><?= esc($student['father_name']) ?></span>

            <strong>Mother's Name:</strong>
            <span><?= esc($student['mother_name']) ?></span>

            <strong>Registered On:</strong>
            <span><?= esc($student['created_at']) ?></span>
        </div>
    <?php else: ?>
        <p>Student not found.</p>
    <?php endif; ?>

    <a href="/students" class="back-link">&larr; Back to Student List</a>
</div>

</body>
</html>
