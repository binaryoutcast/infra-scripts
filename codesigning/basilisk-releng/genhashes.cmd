rem generate hashes
echo basilisk-latest.win32.installer.exe: > hashes.txt
call hash.cmd basilisk-latest.win32.installer.exe SHA256 >> hashes.txt
echo. >> hashes.txt
echo basilisk-latest.win64.installer.exe: >> hashes.txt
call hash.cmd basilisk-latest.win64.installer.exe SHA256 >> hashes.txt
echo. >> hashes.txt
echo basilisk-latest.win32.7z: >> hashes.txt
call hash.cmd basilisk-latest.win32.7z SHA256 >> hashes.txt
echo. >> hashes.txt
echo basilisk-latest.win64.7z: >> hashes.txt
call hash.cmd basilisk-latest.win64.7z SHA256 >> hashes.txt
echo. >> hashes.txt
echo basilisk-latest.linux64.tar.xz: >> hashes.txt
call hash.cmd basilisk-latest.linux64.tar.xz SHA256 >> hashes.txt
