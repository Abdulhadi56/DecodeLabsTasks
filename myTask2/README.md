# Student Management API

## Project Overview

This project demonstrates basic Backend API Development using PHP. The API allows users to retrieve student records and add new students through GET and POST endpoints.

## Features

* GET API Endpoint
* POST API Endpoint
* Input Validation
* JSON Responses
* Data Storage using JSON File
* Error Handling

## Technologies Used

* PHP
* JSON
* Postman

## API Endpoints

### GET Students

```http
GET /api/getStudents.php
```

Returns all student records.

### Add Student

```http
POST /api/addStudent.php
```

Parameters:

* name
* email

Returns success or validation error message.

## Folder Structure

project2-backend-api/

├── api/

│   ├── getStudents.php

│   └── addStudent.php

├── data/

│   └── students.json

├── index.php

└── README.md

## Learning Outcomes

* REST API Basics
* GET Requests
* POST Requests
* Data Validation
* JSON Handling
* Backend Development using PHP

## Author

Abdullah Khawaja

DecodeLabs Full Stack Development Training 2026
