#!/bin/bash
if [ $# -ne 2 ]
then
  echo "$0: [ERR] usage: $0 VERSION NAME"
else
  VERSION=$1
  NAME=$2
  docker build -t michi/audiothek:$VERSION . && docker run -dP --name $NAME michi/audiothek:$VERSION
fi
