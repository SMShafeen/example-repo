<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
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
        <form action="process_registration.php" method="post">
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
        </form>
        <input
          type="submit"
          value="Register"
          class="cursor-pointer bg-blue-500 text-cyan-50 p-3 pl-10 pr-10 ml-36 mt-4"
        />
      </div>
    </div>
  </body>
</html>
