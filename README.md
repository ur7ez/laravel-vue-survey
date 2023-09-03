# Survey Full Stack Application

Built with these technologies following this [YouTube Video](https://youtu.be/WLQDpY7lOLg)
<table>
    <tr>
        <td>
            <a href="https://laravel.com"><img src="https://i.imgur.com/pBNT1yy.png" /></a>
        </td>
        <td>
            <a href="https://vuejs.org/"><img src="https://i.imgur.com/BxQe48y.png" /></a>
        </td>
        <td>
            <a href="https://tailwindcss.com/"><img src="https://i.imgur.com/wdYXsgR.png" /></a>
        </td>
    </tr>
</table> 


## Requirements
You need to have PHP version **8.0** or above. Node.js version **14.18** or above.


## Installation

#### Backend
1. Clone the project
2. Go to the project root directory
3. Run `composer install`
4. Create database
5. Copy `.env.example` into `.env` file and adjust parameters
6. If you clone the project using `git clone` you also need to add `APP_KEY`:
     
    `php artisan key:generate --ansi`

7. Run `php artisan serve` to start the project at http://localhost:8000

#### Frontend
1. Navigate to `vue` folder using terminal
2. Run `npm install` to install vue.js project dependencies
3. Copy `vue/.env.example` into `vue/.env` and specify `VITE_API_BASE_URL` if different
4. Start frontend by running `npm run dev`
5. Open http://localhost:5173
