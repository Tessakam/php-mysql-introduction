<?php
require 'includes/header.php';
?>
<body>
<!--skipped step 5 (profile page) so created basic page to link with id -->

<div>
    <a href="http://mysqlintroduction.local/?page=table"
</div>

<div class="container">
    <form action="" method="post">

        <br>
        <H3>mySQL database: edit or delete</H3>
        <br>

        <tr>
            <td><?php echo "ID: " . $student->getId(); ?></td>
            <td><?php echo "First name: " . $student->getFirstName(); ?></td>
            <td><?php echo "Last name: " . $student->getLastName(); ?></td>
            <td><?php echo "Email: " . $student->getEmail(); ?></td>

        </tr>

        <button class="btn btn-primary" type="submit" name="Edit">Edit</button>
        <button class="btn btn-primary" type="submit" name="Delete">Delete</button>

    </form>
</div>

</body>

<?php require 'includes/footer.php' ?>

</html>