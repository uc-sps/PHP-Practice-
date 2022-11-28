<?php
function get_var($varname)
{
    global $$varname;
    echo $$varname;
}
