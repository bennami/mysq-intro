<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>table</h1>
<form action="?addStudent=addStudent" method="post">
    <input type="submit" class="fadeIn fourth"  name="addStudent" value="Add student">
</form>
<h2>An overview of the students</h2>
<table border="1">
    <?php foreach ($data as $student): ?>
    <tr>
        <td>
            <a href="?id=<?php echo $student['id']; ?>"><?php echo $student['first_name']; ?></a>
        </td>


        <td>
            <?php echo $student['last_name']; ?>
        </td>
        <td>
            <?php echo $student['email']; ?>
        </td>
        <td>
            <img src="<?php echo 'images/' . $student['preferred_language'] . '.png' ?>" alt="flag">
        </td>
        <?php endforeach; ?>

</table>
</body>
</html>

