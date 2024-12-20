# Laravel Commands and Guide

This document serves as a quick reference for common Laravel commands and workflows.

---

## Basic Commands

### Create a New Laravel Project

    `composer create-project --prefer-dist laravel/laravel <projectName>`

### Add Migrations

    `php artisan migrate`

### Create a Controller with placeholder for CRUD function

    `php artisan make:controller ReviewController --resource`

### Create a Model with Migration

    `php artisan make:model <ModelName> --migration`

### Create a Factory

    `php artisan make:factory <ModelName>Factory --model=<ModelName>`

### Run Database Seeder

    `php artisan db:seed`

### Refresh Migrations and Reseed Database

    `php artisan migrate:refresh --seed`

### Use Tinker for Queries in the Command Line

    `php artisan tinker`

_(Example: `\App\Models\Task::select('id', 'title')->where('completed', true)->get();`)_

---

## Using Terminal to Add Data via Artisan

### Add an Item

    $book = \App\Models\Book::find(1);

    $review = new \App\Models\Review();

    $review->review = 'This is fine';

    $review->rating = 3;

    $book->reviews()->save($review);

### Add a New Item

Use the `create` method to associate and save a new review directly to a book:

    $book = \App\Models\Book::find(1); // Find the book with ID 1

    $review = $book->reviews()->create([
    'review' => 'Sample Review',
    'rating' => 4
    ]); // Create and save the review

### Reassign an Existing Item

Reassign an already existing review to a different book:

    $review = \App\Models\Review::find(1); // Checks

    $review->book; // Get the book currently associated with this review

    $book2 = \App\Models\Book::find(2); // Get the book with ID 2

    $book2->reviews()->save($review); // Reassigns and save the current review to Book with ID 2

### Reassign an Existing Item

    \App\Models\Book::where('title', 'like', '%delectus%')->get();

### Calling Scope or Query Builder

After creating a querying function we can call it in tinker terminal, e.g. scopeTitle = (title)

    \App\models\Book::title('qui')->get();

We can also add another parameters

    \App\models\Book::title('qui')->where('created_at', '>', '2023-04-02')->get();

We can convert those lines above into SQL Query by adding ' toSQL() '

    \App\models\Book::title('qui')->where('created_at', '>', '2023-04-02')->toSQL();

    result = = "select \* from `books` where `title` LIKE ? and `created_at` > ?"

Using withCount in query, and will return reviews_count: <totalCount>

    \App\Models\Book::limit(5)->withAvg('reviews', 'rating')->orderBy('reviews_avg_rating')->toSql();

    result = "select `books`.*, (select avg(`reviews`.`rating`) from `reviews` where `books`.`id` = `reviews`.`book_id`) as `reviews_avg_rating` from `books` order by `reviews_avg_rating` asc limit 5"

Get books of limit 5, and having a review count of greater than or equal to 40, and ordered by reviews_avg_rating in descending order

    \App\Models\Book::withCount('reviews')->withAvg('reviews','rating')->having('reviews_count', '>=', 40)->orderBy('reviews_avg_rating', 'desc')->limit(5)->toSQL();

    result = "select `books`.*, (select count(*) from `reviews` where `books`.`id` = `reviews`.`book_id`) as `reviews_count`, (select avg(`reviews`.`rating`) from `reviews` where `books`.`id` = `reviews`.`book_id`) as `reviews_avg_rating` from `books` having `reviews_count` >= ? order by `reviews_avg_rating` desc limit 5"
