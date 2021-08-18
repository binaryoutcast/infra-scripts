@echo off
rem %1 = pkcs12 password
path %PATH%;c:\buildtools\7zip;c:\mozdev\codesign
SET CERT="E:\path\to\cert.p12"
SET DESC="Pale Moon web browser"
SET DU="http://www.palemoon.org"
SET TSIG=http://timestamp.comodoca.com/rfc3161

for %%b in (Palemoon-Portable*.exe) do call :Sign %1 %%b
goto Final

:Sign
signtool sign /f %CERT% /p %1 /d %DESC% /du %DU% /fd SHA256 /tr %TSIG% /td sha256 %2
exit /b

:Final
echo Done!
