# Makefile for browsecap recipe

OBJECTS=cookbook cookbook/browsecap cookbook/browsecap/.htaccess cookbook/browsecap/Browscap.php cookbook/browsecap/bundlepages.php cookbook/browsecap/index.html cookbook/browsecap/index.php cookbook/browsecap/LICENSE.txt cookbook/browsecap/README.txt cookbook/browsecap/wikilib.d cookbook/browsecap/wikilib.d/.htaccess cookbook/browsecap/wikilib.d/index.html cookbook/browsecap/wikilib.d/index.php cookbook/browsecap/wikilib.d/PmWiki.BrowseCap cookbook/browsecap.php

dist: $(OBJECTS)
	zip -r browsecap.zip cookbook/ -x '*~'

clean:
	rm browsecap.zip
	find . -name '*~' -delete

update:
	git submodule foreach 'git pull origin master'
