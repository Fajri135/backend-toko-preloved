<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>

Admin Dashboard

</title>

@vite([
'resources/css/app.css',
'resources/js/app.js'
])

</head>

<body class="bg-light">

<!-- SIDEBAR -->

@include('admin.components.sidebar')


<!-- MAIN -->

<main class="ml-72 min-h-screen p-10">


    <!-- HEADER -->

    <div class="flex justify-between items-center">

        <div>

            <h1 class="
            text-5xl
            font-bold
            text-primary
            ">

                Dashboard

            </h1>

            <p class="
            text-secondary
            mt-3
            ">

                Welcome back Admin 👋

            </p>

        </div>


        <div class="
        bg-white
        px-6
        py-4
        rounded-2xl
        shadow-md
        ">

            <p class="text-secondary">

                Today

            </p>

            <h2 class="font-bold text-primary">

                {{ date('d M Y') }}

            </h2>

        </div>

    </div>



    <!-- CARDS -->

    <div class="
    grid
    md:grid-cols-2
    xl:grid-cols-3
    gap-8
    mt-14
    ">


        <!-- CARD -->

        <div class="
        bg-white
        rounded-3xl
        p-8
        shadow-md
        ">

            <p class="text-secondary">

                Total Products

            </p>

            <h2 class="
            text-5xl
            font-bold
            text-primary
            mt-4
            ">

                120

            </h2>

        </div>



        <div class="
        bg-white
        rounded-3xl
        p-8
        shadow-md
        ">

            <p class="text-secondary">

                Products Sold

            </p>

            <h2 class="
            text-5xl
            font-bold
            text-accent
            mt-4
            ">

                87

            </h2>

        </div>



        <div class="
        bg-white
        rounded-3xl
        p-8
        shadow-md
        ">

            <p class="text-secondary">

                New Orders

            </p>

            <h2 class="
            text-5xl
            font-bold
            text-primary
            mt-4
            ">

                24

            </h2>

        </div>


    </div>



    <!-- ACTIVITY -->

    <div class="
    mt-14
    bg-white
    rounded-3xl
    p-10
    shadow-md
    ">

        <h2 class="
        text-3xl
        font-bold
        text-primary
        mb-8
        ">

            Recent Activity

        </h2>


        <div class="space-y-6">


            <div class="
            flex
            justify-between
            bg-light
            p-5
            rounded-2xl
            ">

                <p>

                    Added new product

                </p>

                <span class="text-secondary">

                    5 mins ago

                </span>

            </div>


            <div class="
            flex
            justify-between
            bg-light
            p-5
            rounded-2xl
            ">

                <p>

                    Updated product stock

                </p>

                <span class="text-secondary">

                    12 mins ago

                </span>

            </div>


            <div class="
            flex
            justify-between
            bg-light
            p-5
            rounded-2xl
            ">

                <p>

                    New admin login

                </p>

                <span class="text-secondary">

                    1 hour ago

                </span>

            </div>

        </div>

    </div>


</main>

</body>

</html>