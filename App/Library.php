<?php

// LIBRARY ////////////////////////////////////////////////////////////////////
// It's not much, but it does the job...

// walktTree() - Recursively and safely walks a tree of filtered nodes
function walkTree($path, $tree) {
    // Check to see if there are no more nodes
    if (count($path) <= 0 || $path[0] === '') {
        return $tree;
    } else {
        $node = array_shift($path);
        if (isset($tree[$node])) { return walkTree($path, $tree[$node]); }
        else                     { return false; }
    }
}
