<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Weather</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center p-4 sm:p-6 md:p-8">
    <div class="w-full max-w-md mx-auto bg-white shadow-lg rounded-xl p-4 sm:p-6 md:p-8 space-y-6">
        <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-center text-gray-800">
            City Weather Finder
        </h1>

        <form action="{{ route('weatherapp') }}" method="get" class="space-y-4">
            @csrf
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                <input 
                    type="text" 
                    name="city" 
                    placeholder="Enter the city name..." 
                    class="w-full px-3 py-2 sm:px-4 sm:py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base"
                >
                <button 
                    type="submit" 
                    class="w-full sm:w-auto bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors text-sm sm:text-base"
                >
                    Submit
                </button>
            </div>
        </form>

        @if(isset($name) && $name != '')
            <div class="text-center space-y-4 p-4 bg-gray-50 rounded-lg">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900">
                    {{ $name }}
                </h1>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-blue-600">
                    {{ $temperature }}
                </h2>
                <div class="flex flex-col sm:flex-row items-center justify-center space-y-2 sm:space-y-0 sm:space-x-4">
                    <img 
                        src="{{ $condition_icon }}" 
                        alt="Weather Condition" 
                        class="w-12 h-12 sm:w-16 sm:h-16 md:w-20 md:h-20"
                    >
                    <h2 class="text-lg sm:text-xl md:text-2xl text-gray-700">
                        {{ $condition_text }}
                    </h2>
                </div>
            </div>
        @endif
    </div>
</body>
</html>