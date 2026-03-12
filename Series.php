<?php

class Series
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
        Series::FILTER_LANGUAGES,
        Series::FILTER_MODES,
        Series::FILTER_GENRES,
        Series::FILTER_WATCHED_STATUSES
    ];

    public const FILTER_PROPERTIES = [
        Series::FILTER_LANGUAGES => "language",
        Series::FILTER_MODES => "mode",
        Series::FILTER_GENRES => "genre",
        Series::FILTER_WATCHED_STATUSES => "watchedStatus"
    ];

    public const LANGUAGES = [
        Series::LANGUAGE_ENGLISH,
        Series::LANGUAGE_FRENCH,
        Series::LANGUAGE_SPANISH
    ];

    public const MODES = [
        Series::MODE_FICTION,
        Series::MODE_NONFICTION,
    ];

    public const GENRES = [
        Series::GENRE_SCIENCE_FICTION,
        Series::GENRE_FANTASY,
        Series::GENRE_FANTASTIC,
        Series::GENRE_MYSTERY,
        Series::GENRE_HORROR,
        Series::GENRE_COMIC,
        Series::GENRE_COMIC_BOOK
    ];

    public const WATCHED_STATUSES = [
        Series::WATCHED_STATUS_WATCHED,
        Series::WATCHED_STATUS_NOT_WATCHED
    ];

    public const VALUE_BY_DEFAULT = "∅";

    public const SERIES = [
        // science-ficton
        // fantasy
        // fantastic
        // mystery
        // horror
        // comic
        // comic-book
        [
            "Title" => "Smalville",
            "Year" => "2001",
            "Number Of Seasons" => "10",
            "Number Of Episodes" => "218",
            "Language" => Series::LANGUAGE_ENGLISH,
            "Mode" => Series::MODE_FICTION,
            "Genre" => Series::GENRE_COMIC_BOOK,
            "Watched Status" => Series::WATCHED_STATUS_WATCHED,
            "Info" => Series::VALUE_BY_DEFAULT
        ],
    ]; 
}