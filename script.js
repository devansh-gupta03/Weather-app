function getWeather() {
    
    const city = document.getElementById('cityInput').value;

    
    if (city) {
        
        fetch(`weather.php?city=${city}`)
            .then(response => response.json())
            .then(data => {
                console.log(data); 

                
                if (data.cod === 200) {
                    
                    document.getElementById('city').innerText = data.name;
                    document.getElementById('temperature').innerText = `Temperature: ${data.main.temp}°C`;
                    document.getElementById('description').innerText = data.weather[0].description;
                    document.getElementById('weatherIcon').src = `https://openweathermap.org/img/wn/${data.weather[0].icon}@2x.png`;
                } else {
                    alert('City not found');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while fetching the weather data.');
            });
    } else {
        alert('Please enter a city name');
    }
}
