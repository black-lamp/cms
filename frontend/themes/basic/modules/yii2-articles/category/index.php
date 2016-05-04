<?php
use bl\articles\entities\Category;

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 *
 * @var $category Category
 */

?>

<h1><?= $category->getTranslation()->name ?></h1>
<p><?= $category->getTranslation()->text ?></p>