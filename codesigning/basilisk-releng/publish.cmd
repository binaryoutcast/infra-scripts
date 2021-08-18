@echo off
copy \mozdev\obj-bas-x64-release\dist\basilisk-*.win64.json .
copy \mozdev\obj-bas-x64-release\dist\basilisk-*.win64.7z .
copy \mozdev\obj-bas-x64-release\dist\basilisk-*.exe .
copy \mozdev\obj-bas-x64-release\dist\basilisk-*.mar .

copy /B linux\basilisk-*.xz .
copy /B linux\basilisk-*.json .
copy /B linux\basilisk-*.mar .

start /wait sign-installer.cmd %1

copy /B basilisk-*.win64.installer.exe basilisk-latest.win64.installer.exe
copy /B basilisk-*.win64.7z basilisk-latest.win64.7z
copy /B basilisk-*.tar.xz basilisk-latest.linux64.tar.xz

rem generate hashes
echo basilisk-latest.win64.installer.exe: > hashes.txt
call hash.cmd basilisk-latest.win64.installer.exe SHA256 >> hashes.txt
echo. >> hashes.txt
echo basilisk-latest.win64.7z: >> hashes.txt
call hash.cmd basilisk-latest.win64.7z SHA256 >> hashes.txt
echo. >> hashes.txt
echo basilisk-latest.linux64.tar.xz: >> hashes.txt
call hash.cmd basilisk-latest.linux64.tar.xz SHA256 >> hashes.txt

call upload.cmd

rem archive
del basilisk-latest*.*
move basilisk-* d:\basilisk-builds

pause