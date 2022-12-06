<?php session_start(); require_once('../sys/getToDo.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List | Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h1>WELCOME <?= $_SESSION['user']['username'];?></h1>
        <h2>THIS IS YOUR SH#T LIST</h2>
        <h3><?= $_SESSION['user']['email'];?></h3>
        <a href="../sys/logout.php" class="btn btn-danger mt-3">Logout</a>
        <form action="../sys/createToDo.php" method="POST">
            <input type="text" name="todo" placeholder=" Type Your Sh#t Here" class="rounded py-2 mt-3" style="width: 300px;">
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

        <table class="table w-50">
            <thead>
                <th>No</th>
                <th>To Do</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php foreach($todos as $todo):?>
                <tr>
                    <td><?= $todo['id'];?></td>
                    <td><?= $todo['todo'];?></td>
                    <td class="d-flex gap-2">
                        <a href="../sys/editToDo.php" class="btn btn-warning">Edit</a>
                        <form action="../sys/deleteToDo.php" method="POST">
                            <input type="hidden" name="id" value="<?= $todo['id']?>">
                            <button type="submit" class="btn btn-danger">DAH KELAR</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>