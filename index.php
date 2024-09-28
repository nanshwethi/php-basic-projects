<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./app.css">
</head>

<body>

    <main class=" p-10 lg:pl-[18rem] lg:mx-0 mx-auto">

        <div class=" flex gap-2 mb-5 items-start lg:hidden ">

            <div class=" text-center">
                <button type="button" class=" py-1  pe-2 inline-flex justify-center items-center gap-x-2 text-start text-slate-400 text-lg font-medium rounded-lg align-middle  focus:outline-none dark:bg-white dark:text-neutral-800 dark:hover:bg-neutral-200 dark:focus:bg-neutral-200" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-example" aria-label="Toggle navigation" data-hs-overlay="#hs-offcanvas-example">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                </button>
            </div>
            <h1 class=" text-2xl font-bold font-serif ">Backend Projects</h1>

        </div>
        <?php include('./template/sidebar.php') ?>

        <div class="p-6 lg:mt-0 bg-slate-50 rounded-[10px] sm:mt-6 max-w-[400px]">
            <ol class="flex items-center whitespace-nowrap   pb-1 ">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                        Home
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-700 font-semibold hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                        Area Calculator
                        <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </li>

            </ol>

            <hr class="shadow-sm mb-8 ">

            <div>
                <form action="./area.php" method="post" enctype="application/x-www-form-urlencoded">
                    <div class="max-w-full">
                        <label for="width" class=" block text-sm font-medium mb-1 dark:text-white">Width</label>

                        <input type="number" required name="width" id="width" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    </div>
                    <div class="max-w-full my-4">
                        <label for="height" class="block text-sm font-medium mb-1 dark:text-white">Height</label>

                        <input type="number" required name="height" id="height" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    </div>
                    <button type="submit" class=" mt-6 py-3 px-4 inline-flex w-full justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Calculate
                    </button>
                </form>
            </div>

        </div>

    </main>
    <script src="../scripts/js/open-modals-on-init.js"></script>

    <script src="./node_modules/preline/dist/preline.js"></script>

</body>

</html>