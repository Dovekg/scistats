<?php

function setActive($path)
{
    return Request::is($path . '*') ? 'active' : '';
}

function setVisible($path)
{
    return Request::is('*' . $path) ? 'display:none' : '' ;
}
function setHide($path)
{
    return Request::is('*' . $path) ? '' : 'display:none' ;
}