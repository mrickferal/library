<?php

class Movie
{  
    // language
    public const FILTER_LANGUAGES = "languages";
    public const LANGUAGE_ENGLISH = "english";
    public const LANGUAGE_FRENCH = "french";
    public const LANGUAGE_SPANISH = "spanish";
    
    // mode
    public const FILTER_MODES = "modes";
    public const MODE_FICTION = "fiction";
    public const MODE_NONFICTION = "nonfiction";

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
        Movie::FILTER_LANGUAGES,
        Movie::FILTER_MODES,
        Movie::FILTER_GENRES,
        Movie::FILTER_WATCHED_STATUSES
    ];

    public const FILTER_PROPERTIES = [
        Movie::FILTER_LANGUAGES => "language",
        Movie::FILTER_MODES => "mode",
        Movie::FILTER_GENRES => "genre",
        Movie::FILTER_WATCHED_STATUSES => "watchedStatus"
    ];

    public const LANGUAGES = [
        Movie::LANGUAGE_ENGLISH,
        Movie::LANGUAGE_FRENCH,
        Movie::LANGUAGE_SPANISH
    ];

    public const MODES = [
        Movie::MODE_FICTION,
        Movie::MODE_NONFICTION,
    ];

    public const GENRES = [
        Movie::GENRE_SCIENCE_FICTION,
        Movie::GENRE_FANTASY,
        Movie::GENRE_FANTASTIC,
        Movie::GENRE_MYSTERY,
        Movie::GENRE_HORROR,
        Movie::GENRE_COMIC,
        Movie::GENRE_COMIC_BOOK
    ];

    public const WATCHED_STATUSES = [
        Movie::WATCHED_STATUS_WATCHED,
        Movie::WATCHED_STATUS_NOT_WATCHED
    ];

    public const VALUE_BY_DEFAULT = "∅";

    public const MOVIES = [
        [
            "Title" => "",
            "Year" => "",
            "Language" => Movie::LANGUAGE_ENGLISH,
            "Mode" => Movie::MODE_FICTION,
            "Genre" => Movie::GENRE_SCIENCE_FICTION,
            "Watched Status" => Movie::WATCHED_STATUS_NOT_WATCHED
        ],
        // science-ficton
        // fantasy
        // fantastic
        // mystery
        // horror
        // comic
        // comic-book
    ]; 
}