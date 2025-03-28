<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Weather</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white shadow-lg rounded-xl p-6">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">
            City Weather Finder
        </h1>

        <form action="/" method="get" class="space-y-4">
            <div class="flex space-x-2">
                <input 
                    type="text" 
                    name="city" 
                    placeholder="Enter the city name..." 
                    class="flex-grow px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors"
                >
                    Submit
                </button>
            </div>
        </form>

        @if(isset($name))
            <div class="mt-6 text-center space-y-4 p-4 bg-gray-50 rounded-lg">
                <h1 class="text-3xl font-bold text-gray-900">
                    {{ $name }}
                </h1>
                <h2 class="text-5xl font-extrabold text-blue-600">
                    {{ $temperature }}
                </h2>
                <div class="flex items-center justify-center space-x-2">
                    <img 
                        src="{{ $condition_icon }}" 
                        alt="Weather Condition" 
                        class="w-16 h-16"
                    >
                    <h2 class="text-xl text-gray-700">
                        {{ $condition_text }}
                    </h2>
                </div>
            </div>
        @endif
    </div>
</body>
</html>