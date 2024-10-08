<?php

require "partials/head.php";
require "partials/background.php";
require "partials/header.php";
require "partials/nav.php";
require "partials/main.php";
?>
    <div class="w-full flex items-center justify-center">
        <form action="/login/verify" method="POST" class="w-full flex items-center justify-center">
            <fieldset class="border border-[#61a0ff] flex flex-col justify-center items-center lg:w-[18rem]">
                <legend class="lg:font-bold lg:text-md 2xl:text-base">Login</legend>
                <label for="username" class="font-bold">
                    Username:
                    <input id="username" value="<?= $username ?? '' ?>" type="text" name="username"
                           class="border
                    border-[#61a0ff] my-1
                    lg:p-1
                    2x:p-1">
                </label>
                <label for="password" class="font-bold">
                    Password:
                    <input id="password" type="password" name="password" class="border border-[#61a0ff] my-1 lg:p-1
                    2x:p-1">
                </label>
                <p class="text-red-500"><?= $errors['body'] ?? '' ?></p>
                <input type="submit" value="Log in" class="text-center border border-gray-500 bg-gray-200
                       rounded-sm mt-2 lg:p-1">
            </fieldset>
        </form>
    </div>
    <p class="text-green-500 text-center"><?= $success ?? '' ?></p>
    <p class="my-2 text-center lg:text-sm">Don't have an account? Get a new one: <a
                href="/register" class="text-blue-500">get a new account</a></p>
    <img src="images/profile.jpg" alt="" class="animate-spin self-center rounded-full w-16 h-16">

<?php
    require "partials/aside.php";
    require "partials/footer.php";
?>