
# 🌦️ Laravel Weather App - JSON API Data

A Laravel-based weather application that displays weekly weather forecasts by reading data from a static JSON file. This project demonstrates how to work with JSON data, Laravel controllers, Blade templates, and error handling.

## ✨ Features

- � **Dynamic Weather Display** - Weekly forecast table with high/low temperatures
- 🎨 **Conditional Styling** - Rainy days highlighted in blue
- 🛡️ **Error Handling** - Graceful fallback when JSON file is missing or invalid
- 📱 **Responsive Design** - Clean, readable table layout
- ⚡ **Laravel Framework** - Built with Laravel 12.x

## 🛠 Setup Instructions

### Prerequisites
- XAMPP with Apache and PHP 8.x
- Composer (for Laravel dependencies)

### Installation Steps

1. **Clone or download the project** to your XAMPP `htdocs` directory:
   ```
   C:\xampp\htdocs\json-playground
   ```

2. **Start Apache** from the XAMPP Control Panel

3. **Install dependencies** (if needed):
   ```bash
   composer install
   ```

4. **Configure environment**:
   - Ensure `.env` file exists (copy from `.env.example` if needed)
   - Generate application key: `php artisan key:generate`

5. **Verify JSON data file** exists at:
   ```
   storage/app/weather.json
   ```

6. **Access the application** in your browser:
   - **Home page:** `http://localhost/json-playground/public/`
   - **Weather page:** `http://localhost/json-playground/public/weather`

> 💡 **Note:** No need to run `php artisan serve` - Apache serves directly from the `/public` folder.

## 📁 Project Structure

```
json-playground/
├── app/Http/Controllers/WeatherController.php  # Main weather logic
├── resources/views/weather/index.blade.php     # Weather display template
├── storage/app/weather.json                    # JSON weather data
├── routes/web.php                              # Application routes
└── public/                                     # Web-accessible files
```

## 🔧 How It Works

1. **Route Definition** - `/weather` route points to `WeatherController@index`
2. **Data Reading** - Controller reads JSON from `storage/app/weather.json`
3. **Error Handling** - Provides fallback data if file is missing/invalid
4. **Template Rendering** - Blade template displays data in a formatted table
5. **Conditional Styling** - CSS highlights rainy days in blue

## 📷 Screenshot

Below is a screenshot of the working Laravel app showing weather data loaded from a static JSON file:

![Screenshot of a web page displaying a weekly weather forecast table. The table lists days Monday through Friday, with columns for high and low temperatures and weather conditions. Wednesday's row is highlighted in blue, showing high 68°F, low 55°F, and condition Rain. Other conditions include Sunny, Partly Cloudy, and Cloudy. The page header reads Weekly Weather Forecast in large bold text. The environment is a browser window with the URL localhost/json-playground/public/weather visible. The overall tone is neutral and informative.]