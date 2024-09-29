<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="store.php?active=true&type=admin" method="POST" class="border p-3 my-3" enctype="multipart/form-data" >
                    <div class="mb-3">
                        <input type="text" name="name" id="" class="form-control" placeholder="Type Your Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" id="" class="form-control" placeholder="Type Your Email">
                    </div>
                    <div class="mb-3">
                        <input type="file" name="image" id="" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <input type="file" name="cv" id="" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="send" id="" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>