<?php

require_once "config.php";

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  // $password = mysqli_real_escape_string($conn, password_hash($password, PASSWORD_DEFAULT));
  $password = mysqli_real_escape_string($conn, md5($_POST['password']));
  $cpassword = mysqli_real_escape_string($conn, md5($_POST['confirm_password']));

  $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('Query Failed!');
    if(mysqli_num_rows($select_users) > 0){
        $message[] = 'User already exist!';
    }
    else{
       if($password != $cpassword){
        $message[] = 'Confirm password not matched!';
       }
       else{
        mysqli_query($conn, "INSERT INTO `users`(first_name, last_name, email, password) VALUES ('$name', '$last_name', '$email', '$password')") or die('Query Failed!');
        $message[] = 'Registered Successfully!';
        header('location: index.php');
       }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
  </head>

  <?php
  
  if(isset($message)){
    foreach($message as $message){
        echo '<div class="message">
                    <span>'.$message.'</span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
              </div>';
    }
  }

  ?>

  <body class="bg-sky-200 flex items-center justify-center">
    <div class="w-[55%] mt-24 bg-slate-50 flex rounded-lg overflow-hidden">
      <div class="left w-[50%] bg-blue-500">
        <h1 class="text-white text-[2rem] pl-8 pt-8 font-semibold">
          Information
        </h1>
        <p class="text-[0.9rem] p-6 text-white">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem optio
          libero corrupti provident, molestias, eligendi debitis perferendis
          soluta a quibusdam quas reiciendis eum rem quaerat dolore maiores
          labore alias explicabo?
        </p>
        <p class="text-[0.9rem] pb-4 pl-6 pr-6 text-white">
          <b>Eu ultrices</b>: Lorem ipsum dolor sit amet consectetur adipisicing
          elit. em facere fugit facilis mollitia nesciunt tempor
        </p>
        <button
          href="#"
          class="bg-white text-black text-sm p-2 pl-5 pr-5 m-6 mb-44 rounded-md"
        >
          Have An Account
        </button>
      </div>
      <div class="right">
        <div class="">
          <h2 class="text-blue-500 font-bold text-[2rem] pl-6 pt-8 pb-4">
            REGISTER FORM
          </h2>
        </div>
        <form action="" method="post">
          <div class="form grid grid-cols-2 m-2 ml-6">
            <div class="first_name flex flex-col p-2">
              <label for="first_name" class="text-[1.1rem]">First Name</label>
              <input
                type="text"
                id="first_name"
                name="first_name"
                class="mb-2 mt-2 bg-slate-200 h-8"
                required
              /><br />
            </div>
            <div class="last_name flex flex-col p-2">
              <label for="last_name" class="text-[1.1rem]">Last Name</label>
              <input
                type="text"
                id="last_name"
                name="last_name"
                class="mb-2 mt-2 bg-slate-200 h-8"
                required
              /><br />
            </div>
            <div class="email flex flex-col p-2">
              <label for="email" class="text-[1.1rem]">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                class="mb-2 mt-2 bg-slate-200 h-8"
                required
              /><br />
            </div>
            <div class="password flex flex-col p-2">
              <label for="password" class="text-[1.1rem]">Password</label>
              <input
                type="password"
                id="password"
                name="password"
                class="mb-2 mt-2 bg-slate-200 h-8"
                required
              /><br />
            </div>
            <div class="confirm_password flex flex-col p-2">
              <label for="confirm_password" class="text-[1.1rem]"
                >Confirm Password</label
              >
              <input
                type="password"
                id="confirm_password"
                name="confirm_password"
                class="mb-2 mt-2 h-8 bg-slate-200"
                required
              /><br />
            </div>
          </div>
          <input
          name="submit"
            type="submit"
            value="Register"
            class="cursor-pointer bg-blue-500 text-cyan-50 p-3 pl-10 pr-10 ml-36 mt-4"
          />
        </form>
      </div>
    </div>
  </body>
</html>
