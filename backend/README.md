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
>- Data (if success) = array of user object / Reason (if error)


**Create** [POST] : ```/api/user```
>**Request Body:** 
>- username
>- email
>- password

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = user object / Reason (if error)


**Show** [GET] : ```/api/user/:id```
>**Request Header Parameter:**
> - :id (in url)

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = user object / Reason (if error)


**Update** [PUT, PATCH] : ```/api/:id```
>**Request Header Parameter:**
> - :id (in url)

>**Request Body:**
>- username
>- email
>- password

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = user object / Reason (if error)


**Destroy** [DELETE] : ```/api/user/:id```
>**Header Parameter:**
> - :id (in url)

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = user object / Reason (if error)


**Login** [POST] : ```/api/login```
>**Request Body:**
>- email
>- password

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = user object / Reason (if error)

___

### Message

**Index** [GET] : ```/api/user```
>**Response:**
>- Status (Success or Failure)
>- Data (if success) = array of message object / Reason (if error)


**Create** [POST] : ```/api/user```
>**Request Body:**
>- user (user id)
>- message

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = user object / Reason (if error)


**Show** [GET] : ```/api/user/:id```
>**Request Header Parameter:**
> - :id (in url)

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = message object / Reason (if error)


**Update** [PUT, PATCH] : ```/api/:id```
>**Request Header Parameter:**
> - :id (in url)

>**Request Body:**
>- user (user id)
>- message

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = message object / Reason (if error)


**Destroy** [DELETE] : ```/api/user/:id```
>**Header Parameter:**
> - :id (in url)

>**Response:**
>- Status (Success or Failure)
>- Data (if success) = message object / Reason (if error)

