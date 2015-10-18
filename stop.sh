if [ $# -ne 1 ]
then 
  echo 'usage: $0 NAME'
else
  docker stop $1 && docker rm $1
fi
