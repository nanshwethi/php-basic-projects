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



        <div class=" max-w-[900px]  ">
            <form action="./created_product.php" method="post" enctype="multipart/form-data">
                <div class=" max-w-lg bg-slate-50 rounded p-10">
                    <div class="mb-10">
                        <h1 class="  text-xl font-semibold font-serif text-gray-800">Create Product</h1>
                    </div>
                    <div class=" max-w-sm">
                        <label for="product_name" class="block text-sm font-medium mb-2 dark:text-white">Name</label>
                        <input type="text" id="product_name" required name="product_name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="eg.apple">
                    </div>
                    <div class=" max-w-sm my-5">
                        <label for="price" class="block text-sm font-medium mb-2 dark:text-white">Price</label>
                        <input type="number" id="price" required name="price" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="eg.400">
                    </div>
                    <div class=" max-w-sm">
                        <label for="price" class="block text-sm font-medium mb-2 dark:text-white">Rating</label>

                        <select name="product_rating" class="py-3 px-4 pe-9 block w-full bg-white border-transparent  rounded-lg text-sm focus:border-blue-500 focus:ring-gray-500 focus-within:outline-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600">

                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <option value="<?=$i ?>"><?= $i ?></option>
                            <?php endfor ?>
                        </select>
                    </div>
                    <div class=" max-w-sm my-5">
                        <h1 class="block text-sm font-medium mb-2 dark:text-white">Chose photo</h1>
                        <label for="product_photo" class="sr-only">Choose file</label>
                        <input type="file" name="product_photo" id="product_photo" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10  focus-visible:outline-none  disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                            file:bg-gray-300 file:border-0
                            file:me-4
                            file:py-3 file:px-4
                            dark:file:bg-neutral-700 dark:file:text-neutral-400">
                    </div>


                    <div class=" flex justify-end gap-3 mt-10">
                        <a href="./product_list.php" class="py-3 px-4  inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-500 text-gray-600 bg-gray-50 hover:bg-gray-600 hover:text-gray-50 focus:outline-none focus:bg-gray-600 disabled:opacity-50 disabled:pointer-events-none">
                            Product list
                        </a>    
                        <button type="submit" class="py-3 px-4  inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Create
                        </button>
                        

                    </div>
                </div>


            </form>

        </div>
    </main>
    <script src="../scripts/js/open-modals-on-init.js"></script>

    <script src="./node_modules/preline/dist/preline.js"></script>

</body>

</html>