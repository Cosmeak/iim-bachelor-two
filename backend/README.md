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

###User

**Index** [GET] : ```/api/user```

**Create** [POST] : ```/api/user```
>Request Body: 
>- username
>- email
>- password

**Show** [GET] : ```/api/user/:id```
>Header Parameter:
> - :id (in url)

**Update** [PUT, PATCH] : ```/api/:id```
>Header Parameter:
> - :id (in url)

>Request Body:
>- username
>- email
>- password

**Destroy** [DELETE] : ```/api/user/:id```
>Header Parameter:
> - :id (in url)

**Login** [POST] : ```/api/login```
>Request Body:
>- email
>- password