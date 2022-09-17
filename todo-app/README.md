# Todo Application

## Instructions

- `composer install`
- Copy the `.env.example` file and make a new file `.env`
- Run: `php -S localhost:8080 -t public/`


## Requirements:

In this todo application,

- A user can register to the system via email and password
- Email must be unique
- Password must need to be stored in hash to database
- A user can log in to the application with his email and password
- If authenticated, he will be redirected to the dashboard

- If a user already registered with the email, then show "User already registered".
- If a user provides wrong credentials, show "User email or password is incorrect. Please try again."

- A user can add new todo
- A user can view the todo list in his dashboard after login
- A user can only view his todo list. Other user todo list cannot be viewed.
- A user can add multiple tag to a specific todo. (i.e. work, home etc)

## Technical Requirements

- Any credential SHOULD not be written in application layer directly. It SHOULD be maintained via ENV variables..

## Database Design

### Table: `users`
Columns:
- `id` (int, primary)
- `name` (varchar, length: 100)
- `email` (varchar,  unique, length: 100)
- `password` (varchar, length: 255)
- `role` (varchar, length: 20)
- `is_active` (tinyInt)
- `created_at`
- `updated_at`

### Table: `todos`

Column:
- `id`
- `title` (varchar 255)
- `description` (text)
- `tags` (varchar 255)
- `status` (varchar 50)
- `completed_at` (datetime)
- `created_at`(datetime)
- `updated_at` (datetime)

## Table: `tags`

Columns:
- `id`
- `tag_name` (varchar 20)


[Skipping this table for now]
## Table: `todos_tags`

> Mapping Table
Column:
- `id`
- `todo_id`
- `tag_id`



