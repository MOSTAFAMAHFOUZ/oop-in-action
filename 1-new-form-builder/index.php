<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center my-3">Form Builder</h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            <?php 
            
                require_once 'FormBuilder.php';
                $form = new FormBuilder("new-employee.php","POST",["id"=>"send","class"=>"border my-2 p-3"]);
                $form->input("text","name","",["placeholder"=>"type your name","class"=>"form-control my-2 p-2"])
                ->input("email","email","",["placeholder"=>"type your email","class"=>"form-control my-2 p-2"])
                ->input("password","password","",["placeholder"=>"type your password","class"=>"form-control my-2 p-2"])
                ->dropDown("gender",["male"=>"Male","female"=>"Female"],"female",["class"=>"form-control my-2   "])
                ->textarea("content","",["class"=>"form-control","rows"=>"7","placeholder"=>"type your message"])
                ->submit("Send Data",["class"=>"form-control btn btn-primary my-2 p-2"]);
                
                echo $form->build();
            
            ?>
            <!-- <select name="" id="" class="form-control">
                <option value="male">Male</option>
                <option value="female" selected>Female</option>
            </select> -->


                <!-- <form action="new-employee.php" method="POST" id="send" class="border my-2 p-3">
                    <input type="text" name="name" placeholder="enter your name" value="" class="my-2 form-control">
                    <input type="submit" value="Send" class="form-control btn btn-primary">
                </form> -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>