<?php

namespace Database\Seeders;

use App\Enums\Books\BookStatus;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class BookUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::each(function ($user) {
            $bookIds = Book::inRandomOrder()->take(rand(3, 5))->pluck('id');

            foreach ($bookIds as $bookId) {
                // code...
                $status = collect(BookStatus::cases())->random();
                $requestedAt = now()->subDays(rand(5, 30));
                $borrowedAt = in_array($status, [BookStatus::Borrowed, BookStatus::Returned]) ? $requestedAt->copy()->addDays(rand(1, 5)) : null;
                $returnedAt = $status === BookStatus::Returned ? $borrowedAt->copy()->addDays(rand(2, 10)) : null;
                $rating = $status === BookStatus::Returned ? rand(3, 5) : null;

                $user->books()->attach($bookId, [
                    'status' => $status->value,
                    'requested_at' => $requestedAt,
                    'borrowed_at' => $borrowedAt,
                    'returned_at' => $returnedAt,
                    'rating' => $rating,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });
    }
}
