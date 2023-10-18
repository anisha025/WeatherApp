<!DOCTYPE html>
<html>
<head>
    <title>Weather Information</title>
    <style>
        /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Set a background color for the whole page */
body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
    text-align: center;
}

/* Style the header */
h1 {
    background-color: #007BFF;
    color: #fff;
    padding: 20px;
}

/* Style the weather information container */
.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
}

/* Style the weather information paragraphs */
p {
    margin: 10px 0;
    font-weight: bold;
}

/* Style the temperature paragraph */
p.temperature {
    font-size: 24px;
}

/* Style the description paragraph */
p.description {
    font-size: 18px;
    color: #333;
}

    </style>
</head>
<body>
    <h1>Current Weather in {{ $weatherData['name'] }}</h1>
    <p>Description: {{ $weatherData['weather'][0]['description'] }}</p>
    <p>Temperature: {{ $weatherData['main']['temp'] }} &#8451;</p>
</body>
</html>
