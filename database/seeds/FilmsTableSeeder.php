<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert(['title' => 'Horor']);
        DB::table('genres')->insert(['title' => 'Fantasy']);
        DB::table('genres')->insert(['title' => 'Drama']);
        DB::table('genres')->insert(['title' => 'Action']);
        DB::table('genres')->insert(['title' => 'History']);
        DB::table('films')->insert([
            'name' => 'The Hobbit',
            'description' => "The hobbit-hole in question belongs to Bilbo Baggins, a very respected hobbit. He is, like most of his kind, well off, well fed, and best pleased when sitting by his own fire with a pipe, a glass of good beer, and a meal to look forward to (which they take 6 times if they can).
Certainly this particular hobbit is the last person one would expect to see set off on a hazardous journey; indeed, when the wizard Gandalf the Grey stops by one morning, looking for someone to share in an adventure, Baggins fervently wishes the wizard elsewhere.

No such luck however; soon 13 fortune-seeking dwarves have arrived on the hobbit's doorstep in search for a master burglar, and before he can even grab his hat, handkerchiefs or even an umbrella, Bilbo Baggins is swept out his door and into a dangerous and long adventure.
The dwarves' goal is to return to their ancestral home in the Lonely Mountains and reclaim a stolen fortune from the dragon Smaug. Along the way, they and their reluctant companion meet giant spiders, hostile elves, ravening wolves--and, most perilous of all, a subterranean creature named Gollum from whom Bilbo wins a magical ring in a riddling contest.
It is from this life-or-death game in the dark that J.R.R. Tolkien's masterwork, The Lord of the Rings, would eventually spring. Though The Hobbit is lighter in tone than the trilogy that follows, it has, like Bilbo Baggins himself, unexpected iron at its core. Don't be fooled by its fairy-tale demeanor; this is very much a story for adults, though older children will enjoy it, too. By the time Bilbo returns to his comfortable hobbit-hole, he is a different person altogether, well primed for the bigger adventures to come and so is the reader.",
            'release_date' => '2012-12-12 0:0:0',
            'rating' => 3,
            'ticket_price' => 50,
            'photo' => '/uploads/2018_11_01_photo_22290_0-3.jpg',
            'country' => 'USA'
        ]);
        DB::table('films')->insert([
            'name' => 'Iron man',
            'description' => "In the movies and the earlier comic books, Tony Stark is just a human. Outside the suit, he does not have any superpowers. He made the suit himself, and nobody else can usually control it. Iron Man can fly and shoot beams from his hands using special technology called repulsors in his boots and gloves. He is not hurt by most weapons like guns and cannons. There are many versions of the Iron Man suit, because Stark keeps making improvements.

In the later comic books, Stark took an experimental virus called STD which allowed him to control his suit with his mind and summon it wherever he was. Stark would eventually develop an armor that he could store in his body. This armor was known as the Bleeding Edge Model 37.",
            'release_date' => '2008-04-14 0:0:0',
            'rating' => 4,
            'ticket_price' => 60,
            'photo' => '/uploads/2018_11_01_IronMan_PSP_SP_cover.jpg',
            'country' => 'USA'
        ]);
        DB::table('films')->insert([
            'name' => 'The God Father',
            'description' => "The story begins as 'Don' Vito Corleone, the head of a New York Mafia 'family', oversees his daughter's wedding with his wife Carmela. His beloved son Michael has just come home from the war, but does not intend to become part of his father's business. Through Michael's life the nature of the family business becomes clear. The business of the family is just like the head of the family, kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family. Don Vito lives his life in the way of the old country, but times are changing and some don't want to follow the old ways and look out for community and 'family'. An up and coming rival of the Corleone family wants to start selling drugs in New York, and needs the Don's influence to further his plan. The clash of the Don's fading old world values and the new ways will demand a terrible price, especially from Michael, all for the sake of the family.",
            'release_date' => '1972-03-14 0:0:0',
            'rating' => 5,
            'ticket_price' => 50,
            'photo' => '/uploads/2018_11_01_the-godfather-movie-cover.jpg',
            'country' => 'USA'
        ]);
        DB::table('comments')->insert([
            'comment' => 'The first test comment',
            'user_id' => 1,
            'film_id' => 1
        ]);
        DB::table('comments')->insert([
            'comment' => 'The first test comment',
            'user_id' => 1,
            'film_id' => 2
        ]);
        DB::table('comments')->insert([
            'comment' => 'The first test comment',
            'user_id' => 1,
            'film_id' => 3
        ]);
        DB::table('film_genres')->insert([
            'film_id' => 1,
            'genre_id' => 2
        ]);
        DB::table('film_genres')->insert([
            'film_id' => 1,
            'genre_id' => 3
        ]);
        DB::table('film_genres')->insert([
            'film_id' => 1,
            'genre_id' => 4
        ]);
        DB::table('film_genres')->insert([
            'film_id' => 2,
            'genre_id' => 4
        ]);
        DB::table('film_genres')->insert([
            'film_id' => 3,
            'genre_id' => 3
        ]);
        DB::table('film_genres')->insert([
            'film_id' => 3,
            'genre_id' => 4
        ]);
    }
}
