#!/bin/bash

XREF_WEBROOT=/regolith/account/xref.palemoon.org
TREE_PATH=/regolith/account/xref-data/trees

if [ "$1" == "mc" ]; then
  TREES=(moonchild-central)
elif [ "$1" == "binoc" ]; then
  TREES=(binoc-central)
else
  TREES=(moonchild-central binoc-central binoc-build uxp-redwood)
fi

for _tree in "${TREES[@]}"; do
  rm -f $_TREE_PATH/$_tree/*.log
  if [ "$_tree" == "moonchild-central" ]; then
    _sources=(source source-basilisk source/platform)
  elif [ "$_tree" == "binoc-central" ]; then
    _sources=(source source/calendar source/platform)
  elif [ "$_tree" == "binoc-build" ]; then
    _sources=(source source/adblocker source/inspector)
  else
    _sources=(source)
  fi

  for _source in "${_sources[@]}"; do
    echo $_tree/$_source: Updating git...
    cd $TREE_PATH/$_tree/$_source
    if [ "$_source" != "source" ]; then
      git reset --hard
      git clean -fd
    fi
    git pull
  done

  cd $XREF_WEBROOT
  echo $_tree: Updating XRef Search...
  ./update-search.pl $_tree
  echo $_tree: Updating XRef Ident...
  ./update-xref.pl $_tree
done

echo "Done."