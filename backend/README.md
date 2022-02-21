# Api - Nodejs-fcbouff

## Installation
```
npm install
```

## Open server

Run server
```
npm start 
```
Run nodemon
```
npm run dev
```

## How to use ?

All response are in json.

___

### User

**Index** [GET] : ```/api/user```
>**Response:**
>- Status (Success or Failure)
>- Data (if success) = array of object user / Reason (if error)


**Create** [POST] : ```/api/user```
>**Request Body:** 
>- username
>- email
>- password

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = object user / Reason (if error)


**Show** [GET] : ```/api/user/:id```
>**Request Header Parameter:**
> - :id (in url)

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = object user / Reason (if error)


**Update** [PUT, PATCH] : ```/api/:id```
>**Request Header Parameter:**
> - :id (in url)

>**Request Body:**
>- username
>- email
>- password

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = object user / Reason (if error)


**Destroy** [DELETE] : ```/api/user/:id```
>**Header Parameter:**
> - :id (in url)

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = object user / Reason (if error)


**Login** [POST] : ```/api/login```
>**Request Body:**
>- email
>- password

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = object user / Reason (if error)

___

### Message

**Index** [GET] : ```/api/message```
>**Response:**
>- Status (Success or Failure)
>- Data (if success) = array of object message / Reason (if error)


**Create** [POST] : ```/api/message``
>**Request Body:**
>- user (user id)
>- message

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = object message / Reason (if error)


**Show** [GET] : ```/api/message/user/:id```
>**Request Header Parameter:**
> - :id (in url)

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = array object message of this user / Reason (if error)


**Update** [PUT, PATCH] : ```/api/message/:id```
>**Request Header Parameter:**
> - :id (in url)

>**Request Body:**
>- message

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = object message / Reason (if error)


**Destroy** [DELETE] : ```/api/message/:id```
>**Header Parameter:**
> - :id (in url)

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = object message / Reason (if error)

