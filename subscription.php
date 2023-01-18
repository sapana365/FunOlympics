

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class='bg-white text-black w-full py-40 px-4'>
        <div class='max-w-[1240px] mx-auto grid md:grid-cols-1 gap-8'>
        
            <form action="Subscribe.php" method="POST">
                <div class='w-full shadow-xl flex flex-col p-2 md:my-0 my-8 rounded-lg scale-110 hover:scale-125 duration-75 bg-[#710082] text-white mx-16' style="align-items: center;">
                    <img src="" alt="" />
                    <h2 class='text-2xl font-bol text-center py-8 font-bold'>One time subscription</h2>
                    <p class='text-2xl font-bold text-center pt-8 pb-2'>$120 /-</p>
                  
                    <div class='text-center font-medium'>
                        <p class='py-2 border-b mx-8 mt-8'>Features -</p>
                        <p class='py-2 border-b mx-8'>Check Schedule</p>
                        <p class='py-2 border-b mx-8'>Check Matches Result</p>
                        <p class='py-2 border-b mx-8'>Search News and videos</p>
                        <p class='py-2 border-b mx-8'>Choose language and broadcast channel</p>
                        <p class='py-2 border-b mx-8'>Full HD stream</p>
                        <p class='py-2 border-b mx-8'>Unlimited streaming broadcast </p>
                        <input type="hidden" name="TierId" value="3">
                    </div>
                    <button type="submit" class='bg-white w-[200px] rounded-md font-medium my-6 mx-auto px-6 py-3 text-[#710082]'>Subscribe</button>
                </div>
            </form>
        </div>
    </div>
    <div>

</body>

</html>