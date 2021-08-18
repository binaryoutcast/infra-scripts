@echo off
rem %1 = pkcs12 password
path %PATH%;c:\buildtools\7zip;c:\mozdev\codesign
SET CERT="e:\path\to\cert.p12"
SET DESC="Pale Moon web browser"
SET DU="http://www.palemoon.org"
SET TSIG=http://timestamp.comodoca.com/rfc3161

for %%b in (*.installer.exe) do call :Sign %1 %%b
goto Final

:Sign
7z x %2 -oinstall
cd install
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 setup.exe

7z a -r ..\archive.7z *
cd ..
move %2 %2.org
copy /b 7zSD.sfx + app.tag + archive.7z %2
del archive.7z
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 %2
rmdir /S /Q install
del %2.org
exit /b

:Final
echo Done!
