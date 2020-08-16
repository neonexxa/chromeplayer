ITER=1
for file in ../Season1/*.mkv
do
  echo "${ITER}: $file"
  #mkvmerge -i "$file"
  mkvextract tracks "$file" 2:"$file.vtt"
  ITER=$(expr $ITER + 1)
done