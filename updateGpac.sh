#!/bin/bash
cd /home/oscar
# on actualise gpac
svn co svn://svn.code.sf.net/p/gpac/code/trunk/gpac gpac
# on se met dans le repertoire du gpac
cd gpac
#on elimine les fichiers generes par gcov pour la couverture du code
find . -name "*.gcno" -type f -delete
# on met la configuration necessaire pour la couverture du code

./configure --enable-debug --disable-opt --enable-gprof --extra-cflags=-fprofile-arcs --extra-cflags=-ftest-coverage --extra-ldflags=-fprofile-arcs
# on recompile la source
#ceci va creer les fichiers gcno:
make
#on doit eliminer deux fichiers qui sert à rien (erreur de gpac pour gcov, lcov)
rm *.gcno
rm *.gcda
#il faut que l'utilisateur execute la commande:
# sudo make install




