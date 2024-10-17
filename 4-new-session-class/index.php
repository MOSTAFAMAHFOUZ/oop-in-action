<?php session_start(); ?>
<?php require_once 'Session.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center my-3 p-2">New Session Class</h1>
    <h2 class="text-center my-3 p-2">Add New User</h2>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <?php

                    // echo "<pre>";
                    // print_r(Session::get("errors")??'');
                    // echo "<pre>";

                ?>
                <?php /* if(Session::has('errors')): ?>
                <?php foreach(Session::flash('errors') as $error): ?>
                    <div class="alert alert-danger p-1 my-1"><?=  $error; ?></div>
                <?php endforeach; ?>
                <?php endif; */ ?>

                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success p-1 my-1"><?=  Session::flash('success'); ?></div>
                <?php endif; ?>
                <form action="store.php" method="POST" class="border p-3 my-3">
                    <div class="mb-3">
                        <input type="text" name="name" placeholder="type your name" class="form-control">
                        <?php echo Session::error('name'); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" placeholder="type your email" class="form-control">
                        <?php echo Session::error('email'); ?>

                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" placeholder="type your phone" class="form-control">
                        <?php echo Session::error('phone'); ?>

                    </div>
                    <div class="mb-3">
                        <input type="text" name="password" placeholder="type your password" class="form-control">
                        <?php echo Session::error('password'); ?>

                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Send" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>