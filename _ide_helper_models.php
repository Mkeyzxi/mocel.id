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
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $writer
 * @property string $paragraph
 * @property string $category
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ArtikelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel filter()
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel whereParagraph($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artikel whereWriter($value)
 */
	class Artikel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $workshop_name
 * @property string $address
 * @property float $rating
 * @property string $ability
 * @property string|null $google_maps
 * @property string|null $city
 * @property string|null $workshop_category
 * @property string $workshop_image
 * @property string $workshop_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\BengkelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel filter()
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereAbility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereGoogleMaps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereWorkshopCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereWorkshopImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereWorkshopName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bengkel whereWorkshopNumber($value)
 */
	class Bengkel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $profile
 * @property string $phone_number
 * @property int $is_admin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

