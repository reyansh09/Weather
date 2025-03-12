<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }
        h2 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        input, button {
            padding: 10px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            cursor: pointer;
        }
        .weather-info {
            background: white;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <h2>Weather Application</h2>
    <form method="POST" action="/weather">
        @csrf
        <input type="text" name="city" placeholder="Enter city" required>
        <button type="submit">Get Weather</button>
    </form>
    
    @if(isset($weather['main']))
        <div class="weather-info">
            <h3>Weather in {{ $city }}</h3>
            <p><strong>Temperature:</strong> {{ $weather['main']['temp'] }}°C</p>
            <p><strong>Humidity:</strong> {{ $weather['main']['humidity'] }}%</p>
            <p><strong>Weather:</strong> {{ $weather['weather'][0]['description'] }}</p>
        </div>
    @elseif(isset($weather['message']))
        <p>{{ $weather['message'] }}</p>
    @endif
</body>
</html>