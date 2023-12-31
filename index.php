<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
            jacketprice: '#FABE4C',
          }

        }
      }
    }
  </script>
</head>

<body class="h-screen flex items-center justify-center dark:bg-slate-800">
    <div class="p-8 max-w-sm mx-auto bg-white rounded-xl shadow-md">
        <div class="shrink-0">
            <img class="h-12 w-12" src="img/air-canada-plane.jpg" alt="ChitChat Logo">
        </div>
        <div>
            <div class="text-xl font-medium text-black">ChitChat</div>
            <p class="text-slate-500">You have a new message!</p>
        </div>
    </div>

    <div class="max-w-sm mx-auto p-8 bg-white rounded-xl shadow-md space-y-2 sm:text sm:items-center sm:py-4 sm:space-y-0 sm:space-x-6 sm:dark:hover:bg-gray-700">
       <img class="h-24 mx-auto rounded-full ring-4 sm:flex-shrink-0 transform hover:scale-105 duration-500" src="img/air-canada-plane.jpg" alt="ChitChat Logo">

    <div  class='text-center'>
        <div>
            <P class="text-lg text-black font-semibold">Learn with amir</P>
            <P class="text-gray-500 font-medium">Amir YOutube Channel</P>
        </div>
        <button class="px-4 py-1 border border-purple-200 rounded-full text-sm text-purple-600 font-semibold hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Click Me</button>
    </div>
    </div>


</body>

</html>