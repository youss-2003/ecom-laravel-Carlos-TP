<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME','airport')}}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="p-6 text-gray-800 bg-gray-500 h-screen">
        <form novalidate="" action="/stored" method="post" class="container w-full max-w-xl p-8 mx-auto space-y-6 rounded-md shadow ">
            @csrf
            <h2 class="w-full text-3xl font-bold leading-tight">Contact us</h2>
            <div>
                <label for="title" class="block mb-1 ml-1">Title</label>
                <input id="title" name="title" type="text" placeholder="Your name" required="" class="block w-full p-2 rounded focus:outline-none focus:ring focus:ring-opacity-25 focus:ring-violet-600 bg-gray-100">
            </div>
            <div>
                <label for="author" class="block mb-1 ml-1">Author</label>
                <input id="author" name="author" type="text" placeholder="Your email" required="" class="block w-full p-2 rounded focus:outline-none focus:ring focus:ring-opacity-25 focus:ring-violet-600 bg-gray-100">
            </div>
            <div>
                <label for="img" class="block mb-1 ml-1">Image Link</label>
                <input id="img" name="img" type="url" placeholder="Image Link" required="" class="block w-full p-2 rounded focus:outline-none focus:ring focus:ring-opacity-25 focus:ring-violet-600 bg-gray-100">
            </div>

            <div>
                <label for="content" class="block mb-1 ml-1">Content</label>
                <textarea id="content" name="content" type="text" placeholder="Enter Post Content" class="block w-full p-2 rounded autoexpand focus:outline-none focus:ring focus:ring-opacity-25 focus:ring-violet-600 bg-gray-100"></textarea>
            </div>

            <div class='flex gap-3'>
            <label for="category">category</label>
            <select id="category" name="category">
                <option value="Fashion">Fashion</option>
                <option value="Art">Art</option>
                <option value="Politics">Politics</option>
            </select>
            <label for="poster">Is it a poster ?</label>
            <select id="poster" name="poster">
                <option value=1>Yes</option>
                <option value=0>No</option>
            </select>
            <label for="isnew">Is it new ?</label>
            <select id="isnew" name="is_new">
                <option value=1>Yes</option>
                <option value=0>No</option>
            </select>

            </div>
            <div>
                <button type="submit" class="w-full px-4 py-2 font-bold rounded shadow focus:outline-none focus:ring hover:ring focus:ring-opacity-50 bg-violet-600 focus:ring-violet-600 hover:ring-violet-600 text-gray-50">Send</button>
            </div>
        </form>
    </section>
</body>

</html>
