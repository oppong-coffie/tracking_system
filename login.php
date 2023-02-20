<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="fonts/fonts.css">
    <script src="tailwind.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: 'poppins';" class="dark:bg-gray-800">
        <div class="flex justify-center items-center h-screen ">
            <div class="h-[20rem] w-[20rem] dark:bg-gray-600 rounded-md items-center flex  justify-center h-screen">
                <form action="">
                    <div class="flex justify-center items-center text-white">
                        <h1 class="text-2xl">LOGIN</h1>
                    </div>
                    <label for="" class="text-white text-lg">Email</label><br>
                    <input class="h-8 w-52 rounded outline-none" type="text" placeholder="enter email"><br><br>
                    <label class="text-white text-lg">Password</label><br>
                    <input type="text" class="h-8 w-52 rounded outline-none"  placeholder="enter password"><br>
                    <div class="text-right pt-1 text-red-500">
                        <a class="text-sm " href="">Forgot Password</a>
                    </div><br>
                    <div class="flex justify-center items-center bg-blue-500 h-8 rounded  w-32 m-auto">
                        <input class="text-white" type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
</body>
</html>