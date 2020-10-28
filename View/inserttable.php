<?php
require 'includes/header.php';
?>

<body>
<section class="container">
<!--get all students from the database with studentloader-->
    <table style="width:70%" class="center">
        <tr>
            <th>ID number</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Personal page</th>
        </tr>

        <?php
        foreach ($allstudents as $student):
            ?>
            <tr>
                <td><?php echo $student->getId(); ?></td>
                <td><?php echo $student->getFirstName(); ?></td>
                <td><?php echo $student->getLastName(); ?></td>
                <td><?php echo $student->getEmail(); ?></td>
                <!-- No result = no profile page -->
                <td><a href=index.php?user= <?php echo $student->getFirstName(); ?> </a></td>

            </tr>
        <?php endforeach; ?>

    </table>
    <br>

</body>
</html>