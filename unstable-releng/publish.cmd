@echo off
del /Q palemoon-unstable*.*

copy /B \mozdev\obj-pm-x86-unstable\dist\palemoon-*.win32.json .
copy /B \mozdev\obj-pm-x86-unstable\dist\palemoon-*.win32.7z .
copy /B \mozdev\obj-pm-x86-unstable\dist\palemoon-*.exe .
copy /B \mozdev\obj-pm-x86-unstable\dist\palemoon-*.mar .
copy /B \mozdev\obj-pm-x64-unstable\dist\palemoon-*.win64.json .
copy /B \mozdev\obj-pm-x64-unstable\dist\palemoon-*.win64.7z .
copy /B \mozdev\obj-pm-x64-unstable\dist\palemoon-*.exe .
copy /B \mozdev\obj-pm-x64-unstable\dist\palemoon-*.mar .

rename palemoon-*.win32.7z palemoon-unstable-latest.win32.7z
rename palemoon-*.win32.installer.exe palemoon-unstable-latest.win32.installer.exe
rename palemoon-*.win32.complete.mar palemoon-unstable-latest.win32.complete.mar
rename palemoon-*.win32.json palemoon-unstable-latest.win32.json
rename palemoon-*.win64.7z palemoon-unstable-latest.win64.7z
rename palemoon-*.win64.installer.exe palemoon-unstable-latest.win64.installer.exe
rename palemoon-*.win64.complete.mar palemoon-unstable-latest.win64.complete.mar
rename palemoon-*.win64.json palemoon-unstable-latest.win64.json

rem Pack portable
del /S /Q portable32\Bin\palemoon\*
rmdir /S /Q portable32\Bin\palemoon
del /S /Q portable64\Bin\palemoon\*
rmdir /S /Q portable64\Bin\palemoon

pushd portable32\Bin
C:\buildtools\7zip\7z x ..\..\palemoon-unstable-latest.win32.7z
popd

pushd portable32
C:\buildtools\7zip\7z a -r -t7z -mx5 -sfx7z.sfx ..\palemoon-unstable-latest.win32.portable.exe
popd

pushd portable64\Bin
C:\buildtools\7zip\7z x ..\..\palemoon-unstable-latest.win64.7z
popd

pushd portable64
C:\buildtools\7zip\7z a -r -t7z -mx5 -sfx7z.sfx ..\palemoon-unstable-latest.win64.portable.exe
popd

call upload.cmd

pause