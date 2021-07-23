<?php
function redirect($page)
{
    header("Location" . URLROOT . "/" . $page);
}
function redirectWithData($page, $data)
{
    header("Location" . URLROOT . "/" . $page);
}
