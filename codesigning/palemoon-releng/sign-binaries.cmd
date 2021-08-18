@echo off
rem %1 = pkcs12 password
SET CERT="E:\path\to\cert.p12"
SET DESC="Pale Moon web browser"
SET DU="http://www.palemoon.org"
SET TSIG=http://timestamp.comodoca.com/rfc3161

IF NOT "%~2" == "" cd %2
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 palemoon.exe plugin-container.exe plugin-hang-ui.exe updater.exe
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 gkmedias.dll lgpllibs.dll libEGL.dll libGLESv2.dll mozavcodec.dll mozavutil.dll mozglue.dll mozsqlite3.dll nss3.dll nssckbi.dll softokn3.dll xul.dll
cd uninstall
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 helper.exe
cd ..\browser\components
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 browsercomps.dll

exit /b