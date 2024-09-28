<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currencie Exchange</title>
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

        <div class="p-6 lg:mt-0 bg-slate-50 shadow-lg rounded-[10px] sm:mt-6 max-w-[400px]">
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
                        Exchange Calculator
                        <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </li>

            </ol>

            <hr class="shadow-sm mb-8 ">



            <div>
                <form action="./currencies.php" method="post" enctype="application/x-www-form-urlencoded">
                    <!-- Input Number -->
                    <label for="amount" class=" block text-xl text-center text-gray-700 font-medium mb-4 dark:text-white">Enter your amount</label>
                    <div class="bg-white mx-auto border  mb-4 border-gray-200 rounded-lg dark:bg-neutral-700 dark:border-neutral-700" >
                            <div class="w-full flex justify-between items-center gap-x-1">
                                <div class="grow py-2 px-3">
                                    <input id="amount" name="amount"  class="w-full font-normal p-0 bg-transparent border-0 text-gray-800 focus-visible:outline-none focus:ring-0" type="number">
                                </div>
                                
                            </div>
                        </div>
                            <!-- End Input Number -->
                    <div class=" flex items-start justify-around mt-10">
                            
                        
                        <div class="w-[40%]">
                            <label for="from" class="block text-sm text-center text-gray-700 font-medium mb-2 dark:text-white">From</label>
                            <select id="from" name="from" class="py-3 text-gray-800 border px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus-visible:outline-none focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <?php
                                $json = file_get_contents('http://forex.cbm.gov.mm/api/latest');

                                $data_arr = json_decode($json, true);

                                foreach (array_keys($data_arr['rates']) as $keys) {
                                    echo "<option  value='$keys' >$keys</option>";
                                }
                                ?>
                                <option  value='MMK' >MMK</option>

                            </select>
                        </div>
                        <div class=" text-blue-500 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>

                        </div>
                        <div class=" w-[40%]">
                            <label for="to" class="block text-sm text-gray-700 text-center font-semibold mb-2 dark:text-white">To</label>

                            <select id="to" name="to" class="py-3 px-4 pe-9 block border text-gray-800 w-full border-gray-200 rounded-lg text-sm focus-visible:outline-none focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <?php
                                $json = file_get_contents('http://forex.cbm.gov.mm/api/latest');

                                $data_arr = json_decode($json, true);

                                foreach (array_keys($data_arr['rates']) as $keys) {
                                    echo "<option  value='$keys' >$keys</option>";
                                }

                                ?>
                                <option  value='MMK' >MMK</option>

                            </select>
                        </div>

                    </div>
                    <button type="submit" class=" mt-8 py-3 px-4 inline-flex w-full justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
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