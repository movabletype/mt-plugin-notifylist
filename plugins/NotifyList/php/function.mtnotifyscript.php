<?php
# This program is distributed under the terms of
# The MIT License (MIT)
#
# Copyright (c) 2014 Six Apart, Ltd.
#
# $Id$

function smarty_function_mtnotifyscript($args, &$ctx) {
    // status: complete
    // parameters: none
    return $ctx->mt->config('NotifyScript');
}
?>
