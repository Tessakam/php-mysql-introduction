<?php
require 'includes/header.php';
?>
<body>

<section class="container">

    <form action="index.php" method="post">
        <div>
        <br>
        <H3>mySQL database: BECODE registration</H3>
        <H5>Already a student? <a href="http://mysqlintroduction.local/?page=login">Login </H5>
        <br>
        </div>

        <?php if (isset($students)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $message ?>
            </div>
        <?php endif; ?>

        <!--not necessary for the user - mySQL generates this automatically
        <div class="form-group">
            <label for="ID">ID</label>
            <input type="text" class="form-control" name="id" id="id" placeholder="id" required>
        </div>-->

        <div class="form-group">
            <label for="First name">First name</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="first name" required>
        </div>
        <div class="form-group">
            <label for="Last name">Last name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="last name" required>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="email" required>
        </div>

        <!-- add a password & password confirmation field to the form-->
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="text" class="form-control" name="password" id="password" placeholder="password" required>
        </div>
        <div class="form-group">
            <label for="ConfirmPassword">Confirm password</label>
            <input type="text" class="form-control" name="confirmPassword" id="confirmPassword"
                   placeholder="confirm password" required>
        </div>

        <div>
            <p><input type="submit" class="btn btn-primary" name="submit" value="Submit"></p>
        </div>

    </form>

    <?php
    ?>

</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

<?php require 'includes/footer.php' ?>

</html>