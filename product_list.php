<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./app.css">
</head>

<body>

    <main class=" p-10 lg:pl-[18rem] lg:mx-0 mx-auto max-w-[1920px]">

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
        <div class="flex justify-between items-center mb-12">
            <div class=" ">
                <h1 class="  text-xl font-semibold font-serif text-gray-700">Product list</h1>
            </div>
            <div class=" text-end ">
                <a href="./create_product.php" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Create Products
                </a>
            </div>
        </div>

        <div class=" max-w-[900px]">
            <div class="-m-1.5 overflow-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <div class="table border-collapse table-auto w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <div class="table-header-group">
                                <div class="table-row">
                                    <div class="table-cell px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Profile</div>
                                    <div class="table-cell px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</div>
                                    <div class="table-cell px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Price</div>
                                    <div class="table-cell px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Rating</div>
                                    <div class="table-cell px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</div>
                                </div>
                            </div>

                            <?php $un_data = scandir('./products');
                            $data = array_filter($un_data, fn($i) => $i != '.' && $i != '..');

                            foreach ($data as $value) :
                                $dd = file_get_contents('./products/' . $value);
                                $de = json_decode($dd);
                                // var_dump($de);

                            ?>
                                <div class="table-row-group divide-y divide-gray-200 bg-white dark:divide-neutral-700 dark:bg-neutral-800">
                                    <div class="table-row">
                                        <div class="table-cell px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200"><img src="./product_images/<?= $de->{'product_image'}  ?>" class=" w-[50px] rounded-full h-[50px] object-cover" alt=""></div>

                                        <div class="table-cell px-6 py-2 whitespace-nowrap align-middle text-sm font-medium text-gray-800 dark:text-neutral-200"><?= $de->{'product_name'} ?></div>
                                        <div class="table-cell px-6 py-2 whitespace-nowrap text-sm text-gray-800 align-middle  dark:text-neutral-200"><?= $de->{'price'} ?></div>
                                        <div class="table-cell px-6 py-2 whitespace-nowrap text-sm text-gray-800 align-middle  dark:text-neutral-200">
                                            <div class=" flex gap-1">
                                            <?php
                                            for ($i = 1; $i <= 5; $i++): ?>
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="size-4 <?= $i<= $de->{'product_rating'}  ? ' fill-yellow-400' : ' fill-slate-200' ?>">
                                                    <path fill-rule="evenodd" d="M8 1.75a.75.75 0 0 1 .692.462l1.41 3.393 3.664.293a.75.75 0 0 1 .428 1.317l-2.791 2.39.853 3.575a.75.75 0 0 1-1.12.814L7.998 12.08l-3.135 1.915a.75.75 0 0 1-1.12-.814l.852-3.574-2.79-2.39a.75.75 0 0 1 .427-1.318l3.663-.293 1.41-3.393A.75.75 0 0 1 8 1.75Z" clip-rule="evenodd" />
                                                </svg> 

                                            <?php endfor ?>
                                            </div>
                                            

                                        </div>
                                        <div class="table-cell px-6 py-2 whitespace-nowrap align-middle  text-end text-sm font-medium">
                                            <a href="./delete_product.php?json_data=<?= $value ?>&img=<?= $de->{'product_image'}  ?>" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</a>
                                        </div>
                                    </div>

                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../scripts/js/open-modals-on-init.js"></script>

    <script src="./node_modules/preline/dist/preline.js"></script>

</body>

</html>