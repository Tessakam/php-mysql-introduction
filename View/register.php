<?php
require 'includes/header.php';
?>
<body>

<section class="container">
    <form action="index.php" method="post">
        <br>
        <H3>mySQL database: BECODE registration</H3>
        <br>

        <?php if (isset($students)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $message ?>
            </div>
        <?php endif; ?>


        <div class="form-group">
            <label for="formGroupExampleInput">ID</label>
            <input type="text" class="form-control" name="id" id="id" placeholder="id">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">First name</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="first name" >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Last name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="last name" >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="email" >
        </div>

        <div>
            <p><input type="submit" class="btn btn-primary" name="submit" value="Submit"></p>
        </div>

        <!-- Login page -->
        <br>
        <H3>mySQL database: BECODE login</H3>
        <br>

        <form class = "form-signin " role = "form"
              action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
              ?>" method = "post">
            <input type = "text" class = "form-control mr-sm-2"
                   name = "username" placeholder = "username"><br>
            <input type = "password" class = "form-control mr-sm-2"
                   name = "password" placeholder = "password"><br>
            <button class = "btn btn-primary" type = "submit"
                    name = "login">Login</button>
        </form>

        <?php if (isset($errormessage)): ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $errormessage ?>
            </div>
        <?php endif; ?>

        <?php if (isset($successmessage)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successmessage ?>
            </div>
        <?php endif; ?>

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