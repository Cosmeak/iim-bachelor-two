# Cityblock-API

API for the board game Cityblock

## How to install and run the project

First step: clone the projet
```
git clone https://github.com/Cosmeak/Cityblock-API.git
```

Second step: intall dependencies
```
npm install
```

Last step: launch the server
```
npm start
```
or if you want to have an auto update when you modify the project
```
npm run dev
```

## How to use this API 

All the response of this API are in json.

---

| Admin    | URI                  | HTTP Request | Parameters Request | Body Request                               | Response             |
|----------|----------------------|--------------|--------------------|--------------------------------------------|----------------------| 
| Register | ``/api/v1/register`` | POST         |                    | - email (string)<br/> - password (string)  | Admin Object (json)  | 
| Login    | ``/api/v1/login``    | POST         |                    | - email (string)<br/> - password (string)  | Admin Object (json)  |

---

| Player | URI                    | HTTP Request | Parameters Request | Body Request                                                                    | Response                      |
|--------|------------------------|--------------|--------------------|---------------------------------------------------------------------------------|-------------------------------| 
| Index  | ``/api/v1/player``     | GET          |                    |                                                                                 | Array of Player Object (json) | 
| Create | ``/api/v1/player``     | POST         |                    | - username (string)                                                             | Player Object (json)          | 
| Show   | ``/api/v1/player/:id`` | GET          | :id (player ID)    |                                                                                 | Player Object (json)          | 
| Update | ``/api/v1/player/:id`` | PUT or PATCH | :id (player ID)    | - workforces (int)<br/> - materials (int)<br/> - money (int)<br/> - score (int) | Player Object (json)          | 
| Delete | ``/api/v1/player/:id`` | DELETE       | :id (player ID)    |                                                                                 | Player Object (json)          |

---

| Object        | URI                           | HTTP Request | Parameters Request | Body Request         | Response                      |
|---------------|-------------------------------|--------------|--------------------|----------------------|-------------------------------| 
| Index         | ``/api/v1/object``            | GET          |                    |                      | Array of Object Object (json) | 
| Create        | ``/api/v1/object``            | POST         |                    | -                    | Object Object (json)          | 
| Show          | ``/api/v1/object/:id``        | GET          | :id (object ID)    |                      | Object Object (json)          | 
| Update        | ``/api/v1/object/:id``        | PUT or PATCH | :id (object ID)    |                      | Object Object (json)          | 
| Delete        | ``/api/v1/object/:id``        | DELETE       | :id (object ID)    |                      | Object Object (json)          |
| Update Player | ``/api/v1/object/:id/player`` | PUT or PATCH | :id (object ID)    | - player (player id) | Object Object (json)          | 

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
