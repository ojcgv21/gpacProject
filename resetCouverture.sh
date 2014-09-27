#!/bin/bash
################ deuxieme script - nettoyer tout##############
#on doit eliminer les fichers gcno et gcda
cd /home/oscar
cd gpac
#on elimine les fichiers generes par gcov pour la couverture du code
find . -name "*.gcno" -type f -delete
#on elimine les fichiers generes par lcov (au moment d'executer les apps de GPAC)
find . -name "*.gcda" -type f -delete
