<?php

function _e($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
