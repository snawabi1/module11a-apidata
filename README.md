
# 🌦️ Laravel Weather App - JSON API Data

A Laravel-based weather application that displays weekly weather forecasts by reading data from a static JSON file. This project **simulates a basic API response** by working with static JSON data that **mimics** real weather API responses.

## 📚 Learning Objectives

- 🔗 **API Simulation** - Work with JSON data as if from a real weather API
- 🧩 **JSON Decoding** - Use `json_decode()` to convert JSON into PHP arrays
- 🔄 **Data Processing** - Loop through structured data in Blade templates
- 🏗️ **Laravel Organization** - Practice clean MVC file structure

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

![Weather App Screenshot](Screenshot.png)