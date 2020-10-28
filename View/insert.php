<?php
require 'includes/header.php';
?>
<body>

<section class="container">
    <form action="index.php" method="post">
        <br>
        <H3>mySQL database: BECODE</H3>
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
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="first name" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Last name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="last name" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="email" required>
        </div>

        <div>
            <p><input type="submit" class="btn btn-primary" name="submit" value="Submit"></p>
        </div>
    </form>

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