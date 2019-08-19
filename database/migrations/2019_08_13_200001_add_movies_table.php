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
            ['title'=>'The Seven Samurai', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1954', 'rating'=>rand(0,5)],
            ['title'=>'Bonnie and Clyde', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1967', 'rating'=>rand(0,5)],
            ['title'=>'Reservoir Dogs', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1992', 'rating'=>rand(0,5)],
            ['title'=>'Airplane!', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1980', 'rating'=>rand(0,5)],
            ['title'=>'Pan\'s Labyrinth', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2006', 'rating'=>rand(0,5)],
            ['title'=>'Doctor Zhivago', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1965', 'rating'=>rand(0,5)],
            ['title'=>'The Deer Hunter', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1978', 'rating'=>rand(0,5)],
            ['title'=>'Close Encounters of the Third Kind', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1977', 'rating'=>rand(0,5)],
            ['title'=>'Up', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2009', 'rating'=>rand(0,5)],
            ['title'=>'Rocky', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1976', 'rating'=>rand(0,5)],
            ['title'=>'Memento', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2000', 'rating'=>rand(0,5)],
            ['title'=>'Braveheart', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1995', 'rating'=>rand(0,5)],
            ['title'=>'Slumdog Millionaire', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2008', 'rating'=>rand(0,5)],
            ['title'=>'The Lord of the Rings: The Return of the King', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2003', 'rating'=>rand(0,5)],
            ['title'=>'Beauty and the Beast', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1991', 'rating'=>rand(0,5)],
            ['title'=>'Seven', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1995', 'rating'=>rand(0,5)],
            ['title'=>'Inception', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2010', 'rating'=>rand(0,5)],
            ['title'=>'Die Hard', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1988', 'rating'=>rand(0,5)],
            ['title'=>'The Lord of the Rings: The Fellowship of the Ring', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2001', 'rating'=>rand(0,5)],
            ['title'=>'Amadeus', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1984', 'rating'=>rand(0,5)],
            ['title'=>'On the Waterfront', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1954', 'rating'=>rand(0,5)],
            ['title'=>'Wall-E', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2008', 'rating'=>rand(0,5)],
            ['title'=>'12 Angry Men', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1957', 'rating'=>rand(0,5)],
            ['title'=>'Ghostbusters', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1984', 'rating'=>rand(0,5)],
            ['title'=>'Brokeback Mountain', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2005', 'rating'=>rand(0,5)],
            ['title'=>'The Bridge on the River Kwai', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1957', 'rating'=>rand(0,5)],
            ['title'=>'Blazing Saddles', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1974', 'rating'=>rand(0,5)],
            ['title'=>'All the President\'s Men', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1976', 'rating'=>rand(0,5)],
            ['title'=>'Young Frankenstein', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1974', 'rating'=>rand(0,5)],
            ['title'=>'Almost Famous', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2000', 'rating'=>rand(0,5)],
            ['title'=>'Vertigo', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1958', 'rating'=>rand(0,5)],
            ['title'=>'Gladiator', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2000', 'rating'=>rand(0,5)],
            ['title'=>'Monty Python and The Holy Grail', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1975', 'rating'=>rand(0,5)],
            ['title'=>'Avatar', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2009', 'rating'=>rand(0,5)],
            ['title'=>'The Lion King', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1994', 'rating'=>rand(0,5)],
            ['title'=>'Raging Bull', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1980', 'rating'=>rand(0,5)],
            ['title'=>'Mary Poppins', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1964', 'rating'=>rand(0,5)],
            ['title'=>'Groundhog Day', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1993', 'rating'=>rand(0,5)],
            ['title'=>'North by Northwest', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1959', 'rating'=>rand(0,5)],
            ['title'=>'West Side Story', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1961', 'rating'=>rand(0,5)],
            ['title'=>'Amelie', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2001', 'rating'=>rand(0,5)],
            ['title'=>'Thelma &amp; Louise', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1991', 'rating'=>rand(0,5)],
            ['title'=>'Sunset Blvd.', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1950', 'rating'=>rand(0,5)],
            ['title'=>'The Dark Knight', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2008', 'rating'=>rand(0,5)],
            ['title'=>'Eternal Sunshine of the Spotless Mind', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'2004', 'rating'=>rand(0,5)],
            ['title'=>'Taxi Driver', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1976', 'rating'=>rand(0,5)],
            ['title'=>'Butch Cassidy and the Sundance Kid', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1969', 'rating'=>rand(0,5)],
            ['title'=>'Good Will Hunting', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1997', 'rating'=>rand(0,5)],
            ['title'=>'All About Eve', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1950', 'rating'=>rand(0,5)],
            ['title'=>'The Big Lebowski', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1998', 'rating'=>rand(0,5)],
            ['title'=>'Jurassic Park', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1993', 'rating'=>rand(0,5)],
            ['title'=>'Rear Window', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1954', 'rating'=>rand(0,5)],
            ['title'=>'The Usual Suspects', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1995', 'rating'=>rand(0,5)],
            ['title'=>'Some Like It Hot', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1959', 'rating'=>rand(0,5)],
            ['title'=>'Saving Private Ryan', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1998', 'rating'=>rand(0,5)],
            ['title'=>'Titanic', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1997', 'rating'=>rand(0,5)],
            ['title'=>'The Matrix', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1999', 'rating'=>rand(0,5)],
            ['title'=>'Toy Story', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1995', 'rating'=>rand(0,5)],
            ['title'=>'Alien', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1979', 'rating'=>rand(0,5)],
            ['title'=>'Psycho', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1960', 'rating'=>rand(0,5)],
            ['title'=>'Fight Club', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1999', 'rating'=>rand(0,5)],
            ['title'=>'The Shining', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1980', 'rating'=>rand(0,5)],
            ['title'=>'When Harry Met Sally', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1989', 'rating'=>rand(0,5)],
            ['title'=>'Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1964', 'rating'=>rand(0,5)],
            ['title'=>'Ferris Bueller\'s Day Off', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1986', 'rating'=>rand(0,5)],
            ['title'=>'A Clockwork Orange', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1971', 'rating'=>rand(0,5)],
            ['title'=>'American Beauty', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1999', 'rating'=>rand(0,5)],
            ['title'=>'Fargo', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1996', 'rating'=>rand(0,5)],
            ['title'=>'The Empire Strikes Back', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1980', 'rating'=>rand(0,5)],
            ['title'=>'The Princess Bride', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1987', 'rating'=>rand(0,5)],
            ['title'=>'One Flew Over the Cuckoo\'s Nest', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1975', 'rating'=>rand(0,5)],
            ['title'=>'Blade Runner', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1982', 'rating'=>rand(0,5)],
            ['title'=>'The Graduate', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1967', 'rating'=>rand(0,5)],
            ['title'=>'The Breakfast Club', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1985', 'rating'=>rand(0,5)],
            ['title'=>'Singin\' in the Rain', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1952', 'rating'=>rand(0,5)],
            ['title'=>'The Sound of Music', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1965', 'rating'=>rand(0,5)],
            ['title'=>'Jaws', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1975', 'rating'=>rand(0,5)],
            ['title'=>'Lawrence of Arabia', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1962', 'rating'=>rand(0,5)],
            ['title'=>'The Silence of the Lambs', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1991', 'rating'=>rand(0,5)],
            ['title'=>'Chinatown', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1974', 'rating'=>rand(0,5)],
            ['title'=>'It\'s a Wonderful Life', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1946', 'rating'=>rand(0,5)],
            ['title'=>'Goodfellas', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1990', 'rating'=>rand(0,5)],
            ['title'=>'Annie Hall', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1977', 'rating'=>rand(0,5)],
            ['title'=>'Apocalypse Now', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1979', 'rating'=>rand(0,5)],
            ['title'=>'To Kill a Mockingbird', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1962', 'rating'=>rand(0,5)],
            ['title'=>'Gone With the Wind', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1939', 'rating'=>rand(0,5)],
            ['title'=>'Forrest Gump', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1994', 'rating'=>rand(0,5)],
            ['title'=>'Raiders of the Lost Ark', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1981', 'rating'=>rand(0,5)],
            ['title'=>'Back to the Future', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1985', 'rating'=>rand(0,5)],
            ['title'=>'Star Wars', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1977', 'rating'=>rand(0,5)],
            ['title'=>'Schindler\'s List', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1993', 'rating'=>rand(0,5)],
            ['title'=>'2001: A Space Odyssey', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1968', 'rating'=>rand(0,5)],
            ['title'=>'E.T. The Extra-Terrestrial', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1982', 'rating'=>rand(0,5)],
            ['title'=>'The Godfather: Part II', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1974', 'rating'=>rand(0,5)],
            ['title'=>'Casablanca', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1942', 'rating'=>rand(0,5)],
            ['title'=>'Pulp Fiction', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1994', 'rating'=>rand(0,5)],
            ['title'=>'The Shawshank Redemption', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1994', 'rating'=>rand(0,5)],
            ['title'=>'Citizen Kane', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1941', 'rating'=>rand(0,5)],
            ['title'=>'The Wizard of Oz', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1939', 'rating'=>rand(0,5)],
            ['title'=>'The Godfather', 'format' => $formatArray[rand(0, 2)], 'length' => rand(80, 130), 'release_year'=>'1972', 'rating'=>rand(0,5)]
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
