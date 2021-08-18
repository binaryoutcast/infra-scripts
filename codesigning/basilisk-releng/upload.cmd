@echo off
rem Upload files

"WinSCP.com" ^
  /log=".\WinSCP.log" /ini=nul ^
  /command ^
    "open sftp://user:pass@host:port/ -hostkey=""ssh-ed25519 256 {{hostkey-data}}""" ^
    "option confirm off" ^
    "lcd E:\mozdev\basilisk-releng" ^
    "cd /srv/www/www.basilisk-browser.org/public_html" ^
    "put hashes.txt" ^
    "lcd D:\dropbox\webpages\basilisk" ^
    "put releasenotes.shtml" ^
    "exit"

set WINSCP_RESULT=%ERRORLEVEL%
if %WINSCP_RESULT% equ 0 (
  echo Success
) else (
  echo Error
)

"WinSCP.com" ^
  /log=".\WinSCP.log" /ini=nul ^
  /command ^
    "open sftp://user:pass@host:port/ -hostkey=""ssh-rsa 2048 {{hostkey-data}}""" ^
    "option confirm off" ^
    "lcd E:\mozdev\basilisk-releng" ^
    "cd /srv/www/eu.basilisk-browser.org/public_html/release" ^
    "put basilisk-latest.*.installer.exe ./" ^
    "put basilisk-latest.*.7z ./" ^
    "put basilisk-latest.*.tar.xz ./" ^
    "cd /srv/www/aus/public_html/staging" ^
    "put basilisk-*.mar ./" ^
    "put basilisk-*.json ./" ^
    "cd /srv/www/aus/public_html" ^
    "rm release/basilisk-*" ^
    "mv staging/basilisk-* release/" ^
    "exit"

set WINSCP_RESULT=%ERRORLEVEL%
if %WINSCP_RESULT% equ 0 (
  echo Success
) else (
  echo Error
)

"WinSCP.com" ^
  /log=".\WinSCP.log" /ini=nul ^
  /command ^
    "open sftp://user:pass@host:port/ -hostkey=""ssh-rsa 2048 {{hostkey-data}}""" ^
    "lcd E:\mozdev\basilisk-releng" ^
    "cd /srv/www/us.basilisk-browser.org/public_html/release" ^
    "put basilisk-latest.*.installer.exe ./" ^
    "put basilisk-latest.*.7z ./" ^
    "put basilisk-latest.*.tar.xz ./" ^
    "exit"

set WINSCP_RESULT=%ERRORLEVEL%
if %WINSCP_RESULT% equ 0 (
  echo Success
) else (
  echo Error
)

"WinSCP.com" ^
  /log=".\WinSCP.log" /ini=nul ^
  /command ^
    "open sftp://user@host:port/ -hostkey=""ssh-rsa 2048 {{hostkey-data}}"" -privatekey=""id_rsa.ppk"" -rawsettings Compression=1" ^
    "lcd E:\mozdev\basilisk-releng" ^
    "cd /srv/www/rm-as/public_html/release" ^
    "put basilisk-latest.*.installer.exe ./" ^
    "put basilisk-latest.*.7z ./" ^
    "put basilisk-latest.*.tar.xz ./" ^
    "exit"

set WINSCP_RESULT=%ERRORLEVEL%
if %WINSCP_RESULT% equ 0 (
  echo Success
) else (
  echo Error
)
