@echo off
rem %1 = pkcs12 password
SET CERT="E:\path\to\cert.p12"
SET DESC="Basilisk web browser"
SET DU="http://www.basilisk-browser.org"
SET TSIG=http://timestamp.comodoca.com/rfc3161

IF NOT "%~2" == "" cd %2
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 basilisk.exe plugin-container.exe plugin-hang-ui.exe updater.exe
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 AccessibleMarshal.dll freebl3.dll gkmedias.dll IA2Marshal.dll lgpllibs.dll libEGL.dll libGLESv2.dll mozavcodec.dll mozavutil.dll mozglue.dll mozsqlite3.dll nss3.dll nssckbi.dll softokn3.dll xul.dll
cd uninstall
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 helper.exe
cd ..\browser\components
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 browsercomps.dll

exit /b