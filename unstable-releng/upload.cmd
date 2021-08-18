@echo off
rem Upload files
"WinSCP.com" ^
  /log=".\WinSCP.log" /ini=nul ^
  /command ^
    "open sftp://user:pass@host:port/ -hostkey=""ssh-rsa 2048 {{hostkey-data}}""" ^
    "option confirm off" ^
    "lcd E:\mozdev\unstable" ^
    "cd /srv/www/relmirror.palemoon.org/public_html/release" ^
    "put palemoon-unstable-latest.win32.installer.exe" ^
    "put palemoon-unstable-latest.win32.7z" ^
    "put palemoon-unstable-latest.win32.portable.exe" ^
    "put palemoon-unstable-latest.win64.installer.exe" ^
    "put palemoon-unstable-latest.win64.7z" ^
    "put palemoon-unstable-latest.win64.portable.exe" ^
    "cd /srv/www/aus/public_html/unstable" ^
    "put palemoon-unstable-latest.win32.complete.mar" ^
    "put palemoon-unstable-latest.win32.json" ^
    "put palemoon-unstable-latest.win64.complete.mar" ^
    "put palemoon-unstable-latest.win64.json" ^
    "rm *.manifest" ^
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
    "lcd E:\mozdev\unstable" ^
    "cd /srv/www/rm-us/public_html/release" ^
    "put palemoon-unstable-latest.win32.installer.exe" ^
    "put palemoon-unstable-latest.win32.portable.exe" ^
    "put palemoon-unstable-latest.win32.7z" ^
    "put palemoon-unstable-latest.win64.installer.exe" ^
    "put palemoon-unstable-latest.win64.7z" ^
    "put palemoon-unstable-latest.win64.portable.exe" ^
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
    "lcd D:\dropbox\webpages\palemoon.org\unstable" ^
    "cd /srv/www/www.palemoon.org/public_html/unstable" ^
    "put releasenotes.shtml" ^
    "exit"

set WINSCP_RESULT=%ERRORLEVEL%
if %WINSCP_RESULT% equ 0 (
  echo Success
) else (
  echo Error
)
