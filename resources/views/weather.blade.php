<div>
    <p>This is to show the weather</p>
    <div>
        <h1>{{ $name }}</h1>
        <h2>{{ $temperature }}</h2>
        <h2>{{ $condition_text }}</h2>
        <img src={{ $condition_icon }} alt="">
    </div>
</div>
