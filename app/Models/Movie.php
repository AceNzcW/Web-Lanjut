<?php

namespace App\Models;


class Movie
{
    private static $movieData = [
        [
        'id' => 'tt1746090',
        'judul' => 'Equalizer 3',
        'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he
        discovers his friends are under the control of local crime bosses. As events turn deadly,
        McCall knows what he has to do: become his friends protector by taking on the mafia.',
        'tahun' => 2023,
        'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
        'foto_sampul' => 'equalizer.jpg',
        'Sutradara' => 'Antoine Fuqua'
        ],
        [
        'id' => 'tt2567856',
        'judul' => 'Mission: Impossible - Dead Reckoning Part One',
        'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon
        before it falls into the wrong hands.',
        'tahun' => 2023,
        'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
        'foto_sampul' => 'mission-imposible.jpg',
        'Sutradara' => 'Christopher McQuarrie'
        ],
        [
        'id' => 'tt1745564',
        'judul' => 'Openheimer',
        'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role
        in the development of the atomic bomb.',
        'tahun' => 2023,
        'pemain' => [' Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
        'foto_sampul' => 'openheimer.jpg',
        'Sutradara' => 'Christopher Nolan'
        ],
        [
        'id' => 'tt1745960',
        'judul' => 'Top Gun: Maverick',
        'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top
        naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a
        mission that demands the ultimate sacrifice from those chosen to fly it.',
        'tahun' => 2022,
        'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
        'foto_sampul' => 'top-gun.jpg',
        'Sutradara' => 'Joseph Kosinski'
        ],
        [
        'id' => 'tt1745644',
        'judul' => 'Interstellar',
        'sinopsis' => 'A team of intergalactic explorers must pass through wormholes and become
         trapped in the space-time dimension in an effort to ensure the survival of humanity on planet Earth.',
        'tahun' => 2014,
        'pemain' => [ 'Matthew McConaughey','Anne Hathaway','Jessica Chastain','Michael Caine'],
        'foto_sampul' => 'INTERSTELLAR.jpg',
        'Sutradara' => 'Christopher Nolan'
        ],
        [
        'id' => 'tt1746784',
        'judul' => 'Tenet',
        'sinopsis' => 'Armed with just one word—Tenet—and fighting for the survival of the world,
         the protagonist navigates the twilight world of international espionage on a mission that 
         leads to something beyond the flow of time.',
        'tahun' => 2020,
        'pemain' => [ 'John David Washington','Robert Pattinson','Elizabeth Debicki','Dimple Kapadia','Michael Caine','Kenneth Branagh'],
        'foto_sampul' => 'tenet.jpg',
        'Sutradara' => 'Christopher Nolan'
        ],
        ];

    public static function all()
    {
        return collect(self::$movieData);
    }

    public static function find($id)
    {
        $movies = static::all();
        return $movies->firstWhere('id', $id);
    }
}
