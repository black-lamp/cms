<?php
use bl\articles\entities\Article;

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 *
 * @var $article Article
 */

?>

<h1><?= $article->getTranslation()->name ?></h1>
<p><?= $article->getTranslation()->text ?></p>