<!DOCTYPE html>
<html>

<head>
    <title>Weather Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/stylesDetail.css') }}">
</head>

<body>
    <div class="container">
        <h2 class="h2">Weather Details</h2>
        @if(isset($weather['main']))
        <h2 class="date">{{ $city }}, {{ $weather['sys']['country'] }}</h2>
        <p class="date"><strong>Date:</strong>
            {{ \Carbon\Carbon::now()->setTimezone($weather['timezone'] / 3600)->format('d M Y, H:i A') }}</p>

        <div class="icon">
            <img src="http://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}@2x.png" alt="Weather Icon">
        </div>

        <h2 class="date">Temperature</h2>
        <div>
            <h2 class="temp">{{ $weather['main']['temp'] }}°C</h2>
        </div>

        <div class="weather-row">
            <div class="weather-item">
                <i class="fas fa-wind"></i>
                <p><strong>Wind</strong></p>
                <p>{{ $weather['wind']['speed'] }} m/s</p>
            </div>
            <div class="weather-item">
                <i class="fas fa-tint"></i>
                <p><strong>Humidity</strong></p>
                <p>{{ $weather['main']['humidity'] }}%</p>
            </div>
            <div class="weather-item">
                <i class="fas fa-cloud"></i>
                <p><strong>Weather</strong></p>
                <p>{{ ucfirst($weather['weather'][0]['description']) }}</p>
            </div>
        </div>
        @else
        <p>No weather data available.</p>
        @endif
    </div>
</body>

</html>