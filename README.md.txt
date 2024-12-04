# Laravel Commands and Guide

This document serves as a quick reference for common Laravel commands and workflows.

---

## Basic Commands

### Create a New Laravel Project
`composer create-project --prefer-dist laravel/laravel <projectName>`

### Add Migrations
`php artisan migrate`

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
*(Example: `\App\Models\Task::select('id', 'title')->where('completed', true)->get();`)*

---

## Using Terminal to Add Data via Artisan

### Add an Item
```php
$book = \App\Models\Book::find(1);
$review = new \App\Models\Review();
$review->review = 'This is fine';
$review->rating = 3;
$book->reviews()->save($review);

### Add a New Item
Use the `create` method to associate and save a new review directly to a book:
```php
$book = \App\Models\Book::find(1); // Find the book with ID 1
$review = $book->reviews()->create([
    'review' => 'Sample Review', 
    'rating' => 4
]); // Create and save the review

### Reassign an Existing Item
Reassign an already existing review to a different book:
```php
$review = \App\Models\Review::find(1);  // Checks
$review->book;  // Get the book currently associated with this review
$book2 = \App\Models\Book::find(2);  // Get the book with ID 2
$book2->reviews()->save($review);  // Reassigns and save the current review to Book with ID 2
