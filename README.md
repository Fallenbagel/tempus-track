# Tempus Track

The Tempus Track is a Laravel-based web application designed to facilitate attendance tracking, record keeping, and management of attendance-related metrics. This app leverages the power of Livewire, Folio, and Volt to create a dynamic and user-friendly interface for managing attendance records and related information.

## Features

- **Attendance Tracking:** Record attendance check-ins and calculate lateness.
- **Free Late Minutes:** Keep track of available free late minutes for each user.
- **Absence Management:** Monitor the number of days a user has been absent.
- **Leave Tracking:** Track sick leaves and family leaves for each user.
- **Overtime and Bonus Calculation:** Calculate earnings from overtime and attendance bonuses.

## Technologies Used

- **Laravel:** 
- **Livewire:**
- **Folio:** 
- **Volt:** 

## Getting Started

Follow these steps to set up and run the Tempus Track on your local machine:

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/Fallenbagel/tempus-track.git
   cd tempus-track
   ```

2. **Install Dependencies:**

   ```bash
   composer install
   npm install
   ```

3. **Configure Environment Variables:**
   Copy the `.env.example` file to `.env` and update the necessary environment variables like database connection, mail settings, etc.

4. **Generate Application Key:**

   ```bash
   php artisan key:generate
   ```

5. **Migrate and Seed Database:**

   ```bash
   php artisan migrate --seed
   ```

6. **Run the Development Server:**

   ```bash
   php artisan serve
   ```

7. **Access the Application:**
   Open your browser and navigate to `http://localhost:8000` to access the application.

## Usage

- **Login:** Users can log in using their credentials.
- **Dashboard:** View attendance summaries, leave balances, and earnings information.
- **Attendance Check-In:** Record attendance check-ins and calculate lateness automatically.
- **Leave Requests:** Submit sick leave and family leave requests.
- **Overtime and Bonus:** View earnings from overtime and attendance bonuses.

## Contributing

Contributions are welcome! If you want to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and commit them with descriptive commit messages.
4. Push your changes to your forked repository.
5. Submit a pull request, describing your changes in detail.

## License

This project is licensed under the [MIT License](LICENSE).
