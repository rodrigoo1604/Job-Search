## 💼 Job Search 

This project consists of a view where you can see all your job applications in a table, through an api you can also create new ones, delete them, update them and even see one in specific.

In the website there is also a link where you can track the follow-up of each application, even creating new ones, delete them, update them and seeing one in specific.

The project was an introduction to table relationships, in this case we used a 1 to many relation.

## 👁️ Views  
This is the main view:

![image_720](https://github.com/user-attachments/assets/3bb416ae-2179-4179-8e19-9af376463de8)

This is an application follow-up view

![image_720](https://github.com/user-attachments/assets/a4cf42b3-614f-4845-a0bf-b46fc6dbee38)


## 💻 Languages ​​and tools used  

Project coding:

![](https://skillicons.dev/icons?i=php,html,css)
![](https://skillicons.dev/icons?i=laravel,git,github,vscode,)

Presentation:

<p>
<img src="https://static.vecteezy.com/system/resources/previews/032/329/175/non_2x/canva-icon-logo-symbol-free-png.png" alt="Incono azul de Canvas" width="50" style="margin-right: 3px"/>
</p>

## ⚙️ Installation prerequisites

🟢Install [Node.js](https://nodejs.org/en/download/source-code)

🟢Install [Composer](https://getcomposer.org/download/)

## 🛞 Installation Guide 

-1: Before installing the project, you have to create a database, in my case i have used mysql with xampp as host.

-2: Open the terminal and paste this command:

`git clone https://github.com/rodrigoo1604/Job-Search.git`

⚠️ Be careful, you have to be in the folder you want this project cloned at!

-3: After you have cloned the repository, rename the file `.env.example` to `.env` and adjust the database configuration to yours.


-4: Last but not least, open three terminals in bash and execute the following commands

▷Console 1:
    `npm install` and after `npm run dev`
    
▷Console 2:
    `composer install` and after `php artisan serve`
    
▷Console 3: 
    `php artisan migrat:fresh` and after `php artisan migrat:fresh --seed`
    
-And that should be it, just open the browser and insert the url the server has provided you

⚠️ If you have done the previous steps and something has gone wrong please go back to the third command console and insert this:

`php artisan key:generate` and after `php artisan config:cache` 

## 🌐 Endpoints 
Ten endpoints have been generated in total, each five related to each table.

### For the first table:

📖 Read (GET)
`/api/applications`

✏️ Create (POST)
`/api/applications`

💱 Update (PUT)
`/api/applications/{id}`

❌ Destroy (DELETE)
`/api/applications/{id}`

👁️ Show (GET)
`/api/applications/{id}`

### For the second table

📖 Read (GET)
`/api/applications/{application_id}/news`

✏️ Create (POST)
`/api/applications/{application_id}/news`

💱 Update (PUT)
`/api/applications/{application_id}/news/{follow-up_id}`

❌ Destroy (DELETE)
`/api/applications/{application_id}/news/{follow-up_id}`

👁️ Show (GET)
`/api/applications/{application_id}/news/{follow-up_id}`

## 🧑‍🔬 Tests 
All tests have passed ;) , insert `php artisan test --coverage` or `php artisan test --coverage-html=coverage-report` in the console to check them

![image_720](https://github.com/user-attachments/assets/f8a8149c-9989-4de1-b3fe-21ac275a8383)


## 🗂️ DDBB Diagram 
For the correct structuring of the database, as this was the first time we have worked with related tables, it is crucial to have a diagram of the DDBB. I have made it with DrawSQL: https://drawsql.app/teams/rodrigo-35/diagrams/job-search

![image](https://github.com/user-attachments/assets/5e78a65e-e711-4da3-9bec-cb49791a035a)


## 🙍‍♂️ About me 
Hello, i am a student in a backend and AWS bootcamp.
- [Github Profile](https://github.com/rodrigoo1604)
