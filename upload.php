<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Data</title>
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
                        File upload
                        <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </li>

            </ol>

            <hr class="shadow-sm mb-8 ">

            <div>

                <form class="max-w-sm" method="post" action="./upfile.php" enctype="multipart/form-data">
                    <label for="photo" class="sr-only ">Choose file</label>
                    <input type="file" multiple name="photo[]" id="photo" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-slate-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                        file:border-0
                        file:me-4
                        file:py-3 file:px-4
                        dark:file:bg-neutral-700 dark:file:text-neutral-400">

                        <button type="submit" class="py-3 px-4 mt-10 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Up file
                </button>
                </form>



                
            </div>


        </div>

        <div class=" flex gap-4 flex-wrap mt-12">
            <?php
            $file_name = './photo';
            $scan = scandir($file_name);
            $filtered = array_filter($scan,fn($el)=> $el != '.' && $el != '..');
            foreach($filtered as $data):?>
            <img class=" max-w-[300px] rounded object-cover" src=<?='./photo/'.$data ?> ></img>
             <?php endforeach; ?>
            
        </div>

    </main>
    <script src="../scripts/js/open-modals-on-init.js"></script>

    <script src="./node_modules/preline/dist/preline.js"></script>

</body>

</html>