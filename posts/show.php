<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include_once "../dependencies.php"; ?>
</head>

<?php

include_once "../services/PostShow.php";

use services\PostShow;

$postShow = new PostShow();
$post = $postShow->getPost($_GET['id']);
?>

<body>
    <section class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,var(--color-indigo-500),transparent)] opacity-10"></div>
        <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-gray-900 shadow-xl ring-1 shadow-indigo-500/5 ring-white/5 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <h1 class="text-white align-center justify-center text-center">
                <?php echo $post['title']; ?>
            </h1>
            <figure class="mt-10">
                <blockquote class="text-center text-xl/8 font-semibold text-white sm:text-2xl/9">
                    <p>
                        <?php echo $post['body']; ?>
                    </p>
                </blockquote>
                <figcaption class="mt-10">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="mx-auto size-10 rounded-full" />
                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                        <div class="font-semibold text-white">
                            <?php echo $post['full_name']; ?>
                        </div>
                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-white">
                            <circle r="1" cx="1" cy="1" />
                        </svg>
                        <div class="text-gray-400">
                            <?php echo $post['email']; ?>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>

</body>

</html>