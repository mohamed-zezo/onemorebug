<?php
use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://onemorebug.test',
    'siteName' => 'One More Bug',
    'title' => 'One more bug',
    'description' => 'Website description.',
    'collections' => [
        // Posts collection sorted by date and in descending order (latest post at the top)
        'posts' => [
            'sort' => '-date'
        ],
        'fav' => [
            'path' => 'fav',
        ],
    ],
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },

    // Number of collection items to show per page
    'perPage' => 5,

    // The email address to send the https://formspree.io/ contact form submissions to
    'email' => '',

    // short description for posts
    'getExcerpt' => function ($page, $length = 225) {
        $content = $page->excerpt ?? $page->getContent();
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content), '<code>'
        );
        $truncated = substr($cleaned, 0, $length);
        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }
        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
        
];
