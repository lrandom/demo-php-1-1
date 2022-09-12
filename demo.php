<?php
$text = '<mark
          class="prep-highlight no-select error-highlight tag-highlight prep-replace" prep-mark-index="20"
          marking-tag-ids-error="18" prep-selected="mental nurse" prep-replace="mental nursing"><del
          class="replace-line">mental nurse</del><span class="correct-line">mental nursing </span></mark><sup
          id="prep-tag-33111-16">16</sup> was the least <mark
          class="prep-highlight no-select error-highlight tag-highlight prep-replace" prep-mark-index="21"
          marking-tag-ids-error="14" prep-selected="intrigued" prep-replace="popular"><del
          class="replace-line">intrigued</del><span
          class="correct-line">popular </span></mark>';
$text = preg_replace('/(<span\b[^>]*>)[^<>]*(<\/span>)/i', "", $text);
$text = preg_replace('/(<sup\b[^>]*>)[^<>]*(<\/sup>)/i', "", $text);
$text = preg_replace('/<[^>]*>/i', "", $text);
echo $text;