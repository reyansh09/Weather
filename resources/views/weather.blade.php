<!DOCTYPE html>
<html>

<head>
    <title>Weather App</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="container">
        <h2>Weather Application</h2>
        <form method="POST" action="{{ route('weatherDetail') }}">
            @csrf
            <input class="input-group" type="text" name="city" placeholder="Enter city" required onfocus="showButton()"
                onblur="hideButton()">
            <button class="weather-btn" id="weather-btn" style="display:none;" type="submit">Get Weather</button>
        </form>

    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>