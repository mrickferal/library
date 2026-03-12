<?php

class Documentary
{
    // language
    public const FILTER_LANGUAGES = "languages";
    public const LANGUAGE_ENGLISH = "english";
    public const LANGUAGE_FRENCH = "french";

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
        Documentary::FILTER_LANGUAGES,
        Documentary::FILTER_GENRES,
        Documentary::FILTER_WATCHED_STATUSES
    ];

    public const FILTER_PROPERTIES = [
        Documentary::FILTER_LANGUAGES => "language",
        Documentary::FILTER_GENRES => "genre",
        Documentary::FILTER_WATCHED_STATUSES => "watchedStatus"
    ];

    public const LANGUAGES = [
        Documentary::LANGUAGE_ENGLISH,
        Documentary::LANGUAGE_FRENCH
    ];

    public const GENRES = [
        Documentary::GENRE_SCIENCE_FICTION,
        Documentary::GENRE_FANTASY,
        Documentary::GENRE_FANTASTIC,
        Documentary::GENRE_MYSTERY,
        Documentary::GENRE_HORROR,
        Documentary::GENRE_COMIC,
        Documentary::GENRE_COMIC_BOOK
    ];

    public const WATCHED_STATUSES = [
        Documentary::WATCHED_STATUS_WATCHED,
        Documentary::WATCHED_STATUS_NOT_WATCHED
    ];

    public const VALUE_BY_DEFAULT = "∅";

    public const DOCUMENTARIES = [
        [
            "Title" => "",
            "Year" => "",
            "Language" => Documentary::LANGUAGE_ENGLISH,
            "Genre" => Documentary::GENRE_SCIENCE_FICTION,
            "Watched Status" => Documentary::WATCHED_STATUS_NOT_WATCHED
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