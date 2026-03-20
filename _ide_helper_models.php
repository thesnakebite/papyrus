<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string|null $image
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereUpdatedAt($value)
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $book_id
 * @property int $user_id
 * @property \App\Enums\Books\BookStatus $status
 * @property int|null $rating
 * @property string|null $review
 * @property \Illuminate\Support\Carbon|null $requested_at
 * @property \Illuminate\Support\Carbon|null $borrowed_at
 * @property \Illuminate\Support\Carbon|null $returned_at
 * @property \Illuminate\Support\Carbon|null $return_requested_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Book $book
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereBorrowedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereRequestedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereReturnRequestedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereReturnedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookUser whereUserId($value)
 */
	class BookUser extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Book> $books
 * @property-read int|null $books_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser {}
}

