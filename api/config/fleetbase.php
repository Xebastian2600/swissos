<?php

/*
 * -------------------------------------------------------------------------
 * App-level override for vendor/fleetbase/core-api's config/fleetbase.php
 * -------------------------------------------------------------------------
 *
 * CoreServiceProvider::mergeConfigFrom() does a shallow array_merge, so any
 * top-level key defined here (e.g. 'branding') completely replaces the
 * corresponding key from the vendor package's default config rather than
 * merging into it. Only the 'branding' key is overridden here; every other
 * fleetbase.* config value keeps coming from the vendor package default.
 */

return [
    'branding' => [
        'logo_url' => env('BRANDING_LOGO_URL', '/images/swissos-logo.png'),
        'icon_url' => env('BRANDING_ICON_URL', 'https://flb-assets.s3.ap-southeast-1.amazonaws.com/static/fleetbase-icon.png'),
    ],
];
