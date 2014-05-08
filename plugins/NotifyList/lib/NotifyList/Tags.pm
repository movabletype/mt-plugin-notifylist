# This program is distributed under the terms of
# The MIT License (MIT)
#
# Copyright (c) 2014 Six Apart, Ltd.
#
# $Id$

package NotifyList::Tags;
use strict;

sub hdlr_notify_script {
    my ($ctx) = @_;
    return $ctx->{config}->NotifyScript;
}

1;
