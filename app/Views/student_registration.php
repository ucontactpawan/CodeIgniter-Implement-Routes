<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 2em;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        input {
            width: 100%;
            padding: 0.5rem;
            box-sizing: border-box;
        }

        button {
            padding: 0.75rem 1.5rem;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        hr {
            margin: 2rem 0;
        }

        h1,
        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .actions a {
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
        }

        .actions a.delete {
            color: #dc3545;
        }

        .no-students {
            text-align: center;
            color: #777;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Student Management</h1>

        <hr>

        <h2>Register New Student</h2>
        <form action="/students/create" method="post">
            <?= csrf_field() ?> <!-- Important for security -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="father_name">Father's Name:</label>
                <input type="text" id="father_name" name="father_name" required>
            </div>
            <div class="form-group">
                <label for="mother_name">Mother's Name:</label>
                <input type="text" id="mother_name" name="mother_name" required>
            </div>
            <button type="submit">Add Student</button>
        </form>

        <hr>

        <h2>Registered Students</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($students)): ?>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?= esc($student['id']) ?></td>
                            <td><?= esc($student['name']) ?></td>
                            <td><?= esc($student['email']) ?></td>
                            <td class="actions">
                                <a href="#">View</a>
                                <a href="/students/delete/<?= esc($student['id']) ?>" class="delete"
                                    onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="no-students">No students found. Please add one using the form above.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

    </div>

</body>

</html>