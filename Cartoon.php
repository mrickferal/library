<?php

class Cartoon
{  
    // language
    public const FILTER_LANGUAGES = "languages";
    public const LANGUAGE_ENGLISH = "english";
    public const LANGUAGE_FRENCH = "french";
    public const LANGUAGE_SPANISH = "spanish";
    public const LANGUAGE_JAPANESE = "japanese";

    // genre
    public const FILTER_GENRES = "genres";
    public const GENRE_SCIENCE_FICTION = "science-ficton";
    public const GENRE_FANTASY = "fantasy";
    public const GENRE_FANTASTIC = "fantastic";
    public const GENRE_MYSTERY = "mystery";
    public const GENRE_HORROR = "horror";
    public const GENRE_COMIC = "comic";
    public const GENRE_COMIC_BOOK = "comic-book";

    // watchedStatus
    public const FILTER_WATCHED_STATUSES = "watched-statuses";
    public const WATCHED_STATUS_WATCHED = "watched";
    public const WATCHED_STATUS_NOT_WATCHED = "not-watched";

    public const FILTERS = [
        Cartoon::FILTER_LANGUAGES,
        Cartoon::FILTER_GENRES,
        Cartoon::FILTER_WATCHED_STATUSES
    ];

    public const FILTER_PROPERTIES = [
        Cartoon::FILTER_LANGUAGES => "language",
        Cartoon::FILTER_GENRES => "genre",
        Cartoon::FILTER_WATCHED_STATUSES => "watchedStatus"
    ];

    public const LANGUAGES = [
        Cartoon::LANGUAGE_ENGLISH,
        Cartoon::LANGUAGE_FRENCH,
        Cartoon::LANGUAGE_SPANISH,
        Cartoon::LANGUAGE_JAPANESE
    ];

    public const GENRES = [
        Cartoon::GENRE_SCIENCE_FICTION,
        Cartoon::GENRE_FANTASY,
        Cartoon::GENRE_FANTASTIC,
        Cartoon::GENRE_MYSTERY,
        Cartoon::GENRE_HORROR,
        Cartoon::GENRE_COMIC,
        Cartoon::GENRE_COMIC_BOOK
    ];

    public const WATCHED_STATUSES = [
        Cartoon::WATCHED_STATUS_WATCHED,
        Cartoon::WATCHED_STATUS_NOT_WATCHED
    ];

    public const VALUE_BY_DEFAULT = "∅";

    public const CARTOONS = [
        // science-ficton
        // fantasy
        // fantastic
        // mystery
        // horror
        // comic
        [
            "Title" => "South Park",
            "Year" => "1997",
            "Number Of Seasons" => "28",
            "Number Of Episodes" => "338",
            "Language" => Cartoon::LANGUAGE_ENGLISH,
            "Genre" => Cartoon::GENRE_COMIC,
            "Watched Status" => Cartoon::WATCHED_STATUS_NOT_WATCHED,
            "Info" => Cartoon::VALUE_BY_DEFAULT
        ],
        // comic-book
    ]; 
}