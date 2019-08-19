<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $formatArray = ['VHS', 'DVD', 'Streaming'];


        DB::table('movies')->insert([
            ['title'=>'The Seven Samurai', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1954', 'rating'=>rand(0,5)],
            ['title'=>'Bonnie and Clyde', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1967', 'rating'=>rand(0,5)],
            ['title'=>'Reservoir Dogs', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1992', 'rating'=>rand(0,5)],
            ['title'=>'Airplane!', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1980', 'rating'=>rand(0,5)],
            ['title'=>'Pan\'s Labyrinth', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2006', 'rating'=>rand(0,5)],
            ['title'=>'Doctor Zhivago', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1965', 'rating'=>rand(0,5)],
            ['title'=>'The Deer Hunter', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1978', 'rating'=>rand(0,5)],
            ['title'=>'Close Encounters of the Third Kind', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1977', 'rating'=>rand(0,5)],
            ['title'=>'Up', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2009', 'rating'=>rand(0,5)],
            ['title'=>'Rocky', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1976', 'rating'=>rand(0,5)],
            ['title'=>'Memento', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2000', 'rating'=>rand(0,5)],
            ['title'=>'Braveheart', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1995', 'rating'=>rand(0,5)],
            ['title'=>'Slumdog Millionaire', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2008', 'rating'=>rand(0,5)],
            ['title'=>'The Lord of the Rings: The Return of the King', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2003', 'rating'=>rand(0,5)],
            ['title'=>'Beauty and the Beast', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1991', 'rating'=>rand(0,5)],
            ['title'=>'Seven', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1995', 'rating'=>rand(0,5)],
            ['title'=>'Inception', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2010', 'rating'=>rand(0,5)],
            ['title'=>'Die Hard', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1988', 'rating'=>rand(0,5)],
            ['title'=>'The Lord of the Rings: The Fellowship of the Ring', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2001', 'rating'=>rand(0,5)],
            ['title'=>'Amadeus', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1984', 'rating'=>rand(0,5)],
            ['title'=>'On the Waterfront', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1954', 'rating'=>rand(0,5)],
            ['title'=>'Wall-E', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2008', 'rating'=>rand(0,5)],
            ['title'=>'12 Angry Men', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1957', 'rating'=>rand(0,5)],
            ['title'=>'Ghostbusters', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1984', 'rating'=>rand(0,5)],
            ['title'=>'Brokeback Mountain', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2005', 'rating'=>rand(0,5)],
            ['title'=>'The Bridge on the River Kwai', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1957', 'rating'=>rand(0,5)],
            ['title'=>'Blazing Saddles', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1974', 'rating'=>rand(0,5)],
            ['title'=>'All the President\'s Men', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1976', 'rating'=>rand(0,5)],
            ['title'=>'Young Frankenstein', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1974', 'rating'=>rand(0,5)],
            ['title'=>'Almost Famous', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2000', 'rating'=>rand(0,5)],
            ['title'=>'Vertigo', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1958', 'rating'=>rand(0,5)],
            ['title'=>'Gladiator', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2000', 'rating'=>rand(0,5)],
            ['title'=>'Monty Python and The Holy Grail', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1975', 'rating'=>rand(0,5)],
            ['title'=>'Avatar', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2009', 'rating'=>rand(0,5)],
            ['title'=>'The Lion King', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1994', 'rating'=>rand(0,5)],
            ['title'=>'Raging Bull', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1980', 'rating'=>rand(0,5)],
            ['title'=>'Mary Poppins', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1964', 'rating'=>rand(0,5)],
            ['title'=>'Groundhog Day', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1993', 'rating'=>rand(0,5)],
            ['title'=>'North by Northwest', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1959', 'rating'=>rand(0,5)],
            ['title'=>'West Side Story', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1961', 'rating'=>rand(0,5)],
            ['title'=>'Amelie', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2001', 'rating'=>rand(0,5)],
            ['title'=>'Thelma &amp; Louise', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1991', 'rating'=>rand(0,5)],
            ['title'=>'Sunset Blvd.', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1950', 'rating'=>rand(0,5)],
            ['title'=>'The Dark Knight', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2008', 'rating'=>rand(0,5)],
            ['title'=>'Eternal Sunshine of the Spotless Mind', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2004', 'rating'=>rand(0,5)],
            ['title'=>'Taxi Driver', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1976', 'rating'=>rand(0,5)],
            ['title'=>'Butch Cassidy and the Sundance Kid', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1969', 'rating'=>rand(0,5)],
            ['title'=>'Good Will Hunting', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1997', 'rating'=>rand(0,5)],
            ['title'=>'All About Eve', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1950', 'rating'=>rand(0,5)],
            ['title'=>'The Big Lebowski', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1998', 'rating'=>rand(0,5)],
            ['title'=>'Jurassic Park', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1993', 'rating'=>rand(0,5)],
            ['title'=>'Rear Window', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1954', 'rating'=>rand(0,5)],
            ['title'=>'The Usual Suspects', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1995', 'rating'=>rand(0,5)],
            ['title'=>'Some Like It Hot', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1959', 'rating'=>rand(0,5)],
            ['title'=>'Saving Private Ryan', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1998', 'rating'=>rand(0,5)],
            ['title'=>'Titanic', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1997', 'rating'=>rand(0,5)],
            ['title'=>'The Matrix', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1999', 'rating'=>rand(0,5)],
            ['title'=>'Toy Story', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1995', 'rating'=>rand(0,5)],
            ['title'=>'Alien', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1979', 'rating'=>rand(0,5)],
            ['title'=>'Psycho', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1960', 'rating'=>rand(0,5)],
            ['title'=>'Fight Club', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1999', 'rating'=>rand(0,5)],
            ['title'=>'The Shining', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1980', 'rating'=>rand(0,5)],
            ['title'=>'When Harry Met Sally', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1989', 'rating'=>rand(0,5)],
            ['title'=>'Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1964', 'rating'=>rand(0,5)],
            ['title'=>'Ferris Bueller\'s Day Off', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1986', 'rating'=>rand(0,5)],
            ['title'=>'A Clockwork Orange', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1971', 'rating'=>rand(0,5)],
            ['title'=>'American Beauty', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1999', 'rating'=>rand(0,5)],
            ['title'=>'Fargo', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1996', 'rating'=>rand(0,5)],
            ['title'=>'The Empire Strikes Back', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1980', 'rating'=>rand(0,5)],
            ['title'=>'The Princess Bride', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1987', 'rating'=>rand(0,5)],
            ['title'=>'One Flew Over the Cuckoo\'s Nest', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1975', 'rating'=>rand(0,5)],
            ['title'=>'Blade Runner', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1982', 'rating'=>rand(0,5)],
            ['title'=>'The Graduate', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1967', 'rating'=>rand(0,5)],
            ['title'=>'The Breakfast Club', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1985', 'rating'=>rand(0,5)],
            ['title'=>'Singin\' in the Rain', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1952', 'rating'=>rand(0,5)],
            ['title'=>'The Sound of Music', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1965', 'rating'=>rand(0,5)],
            ['title'=>'Jaws', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1975', 'rating'=>rand(0,5)],
            ['title'=>'Lawrence of Arabia', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1962', 'rating'=>rand(0,5)],
            ['title'=>'The Silence of the Lambs', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1991', 'rating'=>rand(0,5)],
            ['title'=>'Chinatown', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1974', 'rating'=>rand(0,5)],
            ['title'=>'It\'s a Wonderful Life', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1946', 'rating'=>rand(0,5)],
            ['title'=>'Goodfellas', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1990', 'rating'=>rand(0,5)],
            ['title'=>'Annie Hall', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1977', 'rating'=>rand(0,5)],
            ['title'=>'Apocalypse Now', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1979', 'rating'=>rand(0,5)],
            ['title'=>'To Kill a Mockingbird', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1962', 'rating'=>rand(0,5)],
            ['title'=>'Gone With the Wind', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1939', 'rating'=>rand(0,5)],
            ['title'=>'Forrest Gump', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1994', 'rating'=>rand(0,5)],
            ['title'=>'Raiders of the Lost Ark', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1981', 'rating'=>rand(0,5)],
            ['title'=>'Back to the Future', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1985', 'rating'=>rand(0,5)],
            ['title'=>'Star Wars', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1977', 'rating'=>rand(0,5)],
            ['title'=>'Schindler\'s List', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1993', 'rating'=>rand(0,5)],
            ['title'=>'2001: A Space Odyssey', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1968', 'rating'=>rand(0,5)],
            ['title'=>'E.T. The Extra-Terrestrial', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1982', 'rating'=>rand(0,5)],
            ['title'=>'The Godfather: Part II', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1974', 'rating'=>rand(0,5)],
            ['title'=>'Casablanca', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1942', 'rating'=>rand(0,5)],
            ['title'=>'Pulp Fiction', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1994', 'rating'=>rand(0,5)],
            ['title'=>'The Shawshank Redemption', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1994', 'rating'=>rand(0,5)],
            ['title'=>'Citizen Kane', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1941', 'rating'=>rand(0,5)],
            ['title'=>'The Wizard of Oz', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1939', 'rating'=>rand(0,5)],
            ['title'=>'The Godfather', 'media_format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1972', 'rating'=>rand(0,5)]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        DB::table('movies')->delete();
    }
}
