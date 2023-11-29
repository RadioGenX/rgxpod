<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'season' => 'Tempada {seasonNumber}',
    'season_abbr' => 'S{seasonNumber}',
    'number' => 'Episodio {episodeNumber}',
    'number_abbr' => 'Ep. {episodeNumber}',
    'season_episode' => 'Tempada {seasonNumber} episodio {episodeNumber}',
    'season_episode_abbr' => 'S{seasonNumber}:E{episodeNumber}',
    'persons' => '{personsCount, plural,
        one {# persoa}
        other {# persoas}
    }',
    'persons_list' => 'Persoas',
    'back_to_episodes' => 'Volver aos episodios de {podcast}',
    'comments' => 'Comentarios',
    'activity' => 'Actividade',
    'description' => 'Descrición do episodio',
    'number_of_comments' => '{numberOfComments, plural,
        one {# comentario}
        other {# comentarios}
    }',
    'all_podcast_episodes' => 'Tódolos episodios do podcast',
    'back_to_podcast' => 'Volver ao podcast',
    'preview' => [
        'title' => 'Vista previa',
        'not_published' => 'Sen publicar',
        'text' => '{publication_status, select,
            published {This episode is not yet published.}
            scheduled {This episode is scheduled for publication on {publication_date}.}
            with_podcast {This episode will be published at the same time as the podcast.}
            other {This episode is not yet published.}
        }',
        'publish' => 'Publicar',
        'publish_edit' => 'Editar publicación',
    ],
];
