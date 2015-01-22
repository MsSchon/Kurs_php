<?php
if (!function_exists('countWords')) {
    /**
     * Count words
     *
     * @param string $word
     * @param string $url
     *
     * @return string
     */
    function countWords($word, $url='http://en.wikipedia.org/wiki/Miles_Davis')
    {
        $text    = file_get_contents($url);
        $count   = substr_count($text, $word);
        $message = sprintf('The word <em>%s</em> occurs on %s <b>%d</b> times.', $word, $url, $count);

        return $message;
    }
}