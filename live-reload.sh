#!/usr/bin/env bash

fast-live-reload \
    -ep "compass watch" \
    -s http://192.168.0.14/ \
    src -e "grunt sync" -nn \
    ~/host/ciplogic/blog/templates/ciplogic_snappy

