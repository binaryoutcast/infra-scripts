@echo off
rem %1 = pkcs12 password
path %PATH%;c:\buildtools\7zip;c:\mozdev\codesign
SET CERT="E:\path\to\cert.p12"
SET DESC="Pale Moon web browser"
SET DU="http://www.palemoon.org"
SET TSIG=http://timestamp.comodoca.com/rfc3161

for %%b in (*.installer.exe) do call :Sign %1 %%b
goto Final

:Sign
7z x %2 -oinstall
cd install
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 setup.exe
pushd core
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 palemoon.exe plugin-container.exe plugin-hang-ui.exe updater.exe
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 gkmedias.dll lgpllibs.dll libEGL.dll libGLESv2.dll mozavcodec.dll mozavutil.dll mozglue.dll mozsqlite3.dll nss3.dll nssckbi.dll softokn3.dll xul.dll
cd uninstall
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 helper.exe
cd ..\browser\components
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 browsercomps.dll
popd

7z a -r ..\archive.7z *
cd ..
move %2 %2.org
copy /b 7zSD.sfx + app.tag + archive.7z %2
del archive.7z
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 %2
rmdir /S /Q install
exit /b

:Final
echo Done!
