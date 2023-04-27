# CityBlock - The API

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project 📁</a>
      <ul>
        <li><a href="#features">Features 📑</a></li>
        <li><a href="#how-to-use-it">How to use it 📡</a></li>
      </ul>
    </li>
    <li>
      <a href="#Techs">Techs 💻</a>
    </li>
    <li><a href="#build-setup">Build Setup 🧑🏻‍💻</a></li>
    <li><a href="#contributors">Contributors 👥</a></li>
  </ol>
</details>


## About the project
This project is the API of the main project [CityBlock](https://github.com/Cosmeak/CityBlock-V2).

Nothing to say more it's just an API. 🙂


### Features

- [x] Setup Server
- [ ] Setup Socket
- [ ] Set Web Token
- [x] Connection with the database
- [x] Model for Questions
- [x] Model for Rules
- [x] Model for Game Objects
- [x] Model for Administrators
- [x] Model for Players
- [x] Routes for Questions
- [x] Routes for Rules
- [x] Routes for Game Objects
- [x] Routes for Administrators
- [x] Routes for Players
- [x] Controller with CRUD for Questions
- [x] Controller with CRUD for Rules
- [x] Controller with CRUD for Game Objects
- [x] Controller for Administrators
- [x] Controller with CRUD for Players
- [x] Online Database
- [ ] Online API

And one things more: Add emit with socket for the application


### How to use it
---

| Admin    | URI                  | HTTP Request | Parameters Request | Body Request                                        | Response             |
|----------|----------------------|--------------|--------------------|-----------------------------------------------------|----------------------| 
| Register | ``/api/v1/register`` | POST         |                    | { <br/>email: string,<br/> password: string <br/> } | Admin Object (json)  | 
| Login    | ``/api/v1/login``    | POST         |                    | { <br/>email: string,<br/> password: string <br/> }           | Admin Object (json)  |

---

| Player | URI                    | HTTP Request | Parameters Request | Body Request                                                                         | Response                      |
|--------|------------------------|--------------|--------------------|--------------------------------------------------------------------------------------|-------------------------------| 
| Index  | ``/api/v1/player``     | GET          |                    |                                                                                      | Array of Player Object (json) | 
| Create | ``/api/v1/player``     | POST         |                    | { <br/> name: string <br/>}                                                          | Player Object (json)          | 
| Show   | ``/api/v1/player/:id`` | GET          | :id (player ID)    |                                                                                      | Player Object (json)          | 
| Update | ``/api/v1/player/:id`` | PUT or PATCH | :id (player ID)    | { <br/> workforces: int,<br/> materials: int,<br/> money: int,<br/> score: int<br/>} | Player Object (json)          | 
| Delete | ``/api/v1/player/:id`` | DELETE       | :id (player ID)    |                                                                                      | Player Object (json)          |

---

| Object        | URI                           | HTTP Request | Parameters Request | Body Request                                                                                                                                                                                                                                                                 | Response                      |
|---------------|-------------------------------|--------------|--------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-------------------------------| 
| Index         | ``/api/v1/object``            | GET          |                    |                                                                                                                                                                                                                                                                              | Array of Object Object (json) | 
| Create        | ``/api/v1/object``            | POST         |                    | {<br/> name: string,<br/> benefit: {<br/> workforces: int,<br/> materials: int,<br/> money: int<br/> }, <br/> cost: {<br/> workforces: int,<br/> materials: int,<br/> money: int<br/>}, <br/> score: {<br/> level_1: int,<br/> level_2: int,<br/> level_3: int,<br/>} <br/>} | Object Object (json)          | 
| Show          | ``/api/v1/object/:id``        | GET          | :id (object ID)    |                                                                                                                                                                                                                                                                              | Object Object (json)          | 
| Update        | ``/api/v1/object/:id``        | PUT or PATCH | :id (object ID)    | {<br/> player: player id, <br/> position: position id <br/>}                                                                                                                                                                                                                 | Object Object (json)          | 
| Delete        | ``/api/v1/object/:id``        | DELETE       | :id (object ID)    |                                                                                                                                                                                                                                                                              | Object Object (json)          |
| Update Player | ``/api/v1/object/:id/player`` | PUT or PATCH | :id (object ID)    | {<br/> player: player id <br/>}                                                                                                                                                                                                                                              | Object Object (json)          | 

---

| Rule   | URI                    | HTTP Request | Parameters Request | Body Request | Response |
|--------|------------------------|--------------|--------------------|--------------|----------| 
| Index  | ``/api/v1/rule``       | GET          |                    |              |          | 
| Create | ``/api/v1/rule``     | POST         |                    |              |          | 
| Show   | ``/api/v1/rule/:id`` | GET          | :id (rule ID)      |              |          | 
| Update | ``/api/v1/rule/:id`` | PUT or PATCH | :id (rule ID)    |              |          | 
| Delete | ``/api/v1/rule/:id`` | DELETE       | :id (rule ID)    |              |          | 

---

| Question | URI                    | HTTP Request | Parameters Request | Body Request | Response |
|----------|------------------------|--------------|--------------------|--------------|----------| 
| Index    | ``/api/v1/question``     | GET          |                    |              |          | 
| Create   | ``/api/v1/question``     | POST         |                    |              |          | 
| Show     | ``/api/v1/question/:id`` | GET          | :id (question ID)  |              |          | 
| Update   | ``/api/v1/question/:id`` | PUT or PATCH | :id (question ID)  |              |          | 
| Delete   | ``/api/v1/question/:id`` | DELETE       | :id (question ID)  |              |          |

---

| Position | URI                    | HTTP Request | Parameters Request | Body Request | Response |
|----------|------------------------|--------------|--------------------|--------------|----------| 
| Index    | ``/api/v1/position``     | GET          |                    |              |          | 
| Create   | ``/api/v1/position``     | POST         |                    |              |          | 
| Show     | ``/api/v1/position/:id`` | GET          | :id (position ID)  |              |          | 
| Update   | ``/api/v1/position/:id`` | PUT or PATCH | :id (position ID)    |              |          | 
| Delete   | ``/api/v1/position/:id`` | DELETE       | :id (position ID)    |              |          |


## Techs

- [NodeJS](https://nodejs.org/en/)
- [Express](https://expressjs.com/fr/)
- [Mongoose](https://mongoosejs.com/) -> [MongoDB](https://www.mongodb.com/fr-fr)
- [Socket.io](https://socket.io/)


## Build Setup

```bash
# install dependencies
$ npm install
# or
$ yarn install

# then just run for development:     
$ npm run dev
# or
$ yarn dev

# then just run for production:     
$ npm start
# or
$ yarn start


```
## Contributors

- [Guillaume FINE](https://github.com/Cosmeak)
- [Steven MADI](https://github.com/Oxyzal)
- [Quentin LEGERON](https://github.com/QuentinLegeron)

**README inspired by [Clément DUVIVIER](https://github.com/ClemOurs)**
