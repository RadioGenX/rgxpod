<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'title' => 'Generelle innstillingar',
    'instance' => [
        'title' => 'Nettstad',
        'site_icon' => 'Sideikon',
        'site_icon_delete' => 'Slett sideikonet',
        'site_icon_hint' => 'Nettstadikon er det du ser i fanene på nettlesaren, bokmerkelina og når du legg til ein nettstad som snarveg på mobile einingar.',
        'site_icon_helper' => 'Ikonet må vera kvadratisk og minst 512pkt breitt og høgt.',
        'site_name' => 'Nettstadnamn',
        'site_description' => 'Skildring av nettstaden',
        'submit' => 'Lagre',
        'editSuccess' => 'Nettstaden er oppdatert!',
        'deleteIconSuccess' => 'Nettstadikonet er fjerna!',
    ],
    'images' => [
        'title' => 'Bilete',
        'subtitle' => 'Her kan du regenerera alle bileta, basert på dei opplasta originalane. Dette gjer du dersom du ser at det manglar bilete. Dette kan ta ei stund.',
        'regenerate' => 'Regenerer bilete',
        'regenerationSuccess' => 'Alle bileta er regenererte!',
    ],
    'housekeeping' => [
        'title' => 'Reinhald',
        'subtitle' => 'Gjer ulike reinhaldsoppgåver. Bruk dette viss du kjem borti feil med mediafiler eller dataintegritet. Dette kan ta ei stund.',
        'reset_counts' => 'Nullstill teljarar',
        'reset_counts_helper' => 'Dette nullstiller alle datateljarar (tal på fylgjarar, innlegg, kommentarar…).',
        'rewrite_media' => 'Overskriv metadata for medium',
        'rewrite_media_helper' => 'Dette vil sletta alle overflødige mediafiler og laga dei på nytt (bilete, lydfiler, transkriberingar, kapittel, …)',
        'rename_episodes_files' => 'Gje episode-lydfilene nytt namn',
        'rename_episodes_files_hint' => 'Dette alternativet gjev alle episode-lydfilene tilfeldige nye namn. Bruk dette viss lenka til dei private episodane vart leken, for då blir ho i praksis gøymt att.',
        'clear_cache' => 'Slett bufferinnhald',
        'clear_cache_helper' => 'Dette tømmer redis-mellomlageret eller skrivbare/mellomlagra filer.',
        'run' => 'Gjer reinhald',
        'runSuccess' => 'Reinhaldet er utført!',
    ],
    'theme' => [
        'title' => 'Bunad',
        'accent_section_title' => 'Framheva farge',
        'accent_section_subtitle' => 'Vel kva farge som blir framheva på alle dei offentlege sidene.',
        'pine' => 'Furu',
        'crimson' => 'Karmosinraud',
        'amber' => 'Rav',
        'lake' => 'Innsjø',
        'jacaranda' => 'Syrinblå',
        'onyx' => 'Onyks',
        'submit' => 'Lagre',
        'setInstanceThemeSuccess' => 'Bunaden er oppdatert!',
    ],
];
