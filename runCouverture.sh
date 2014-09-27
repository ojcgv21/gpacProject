#!/bin/bash
cd /home/oscar
lcov --capture --directory gpac --output-file coverage.info
genhtml coverage.info --output-directory /var/www/html/couverture/lcov
