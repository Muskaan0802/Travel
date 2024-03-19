

    <?php

    $connection = mysqli_connect("localhost", "root","book_db");  // Establishing connection with server by passing server details

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $loaction = $_POST['loaction'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = "insert into book_form(name,	email,	phone,	address,	loaction,	guests,	arrivals,	leaving	)
         values('$name','$email','$phone','$address','$loaction','$guests','$arrivals','$leaving')";

         mysqli_query($connection, $request);

         header('location: book.html');

    }
    else{
        echo'something wrong try again';
    }
    ?>
