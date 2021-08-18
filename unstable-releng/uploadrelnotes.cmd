@echo off


"D:\Apps\INTERNET\WinSCP\WinSCP.com" ^
  /log=".\WinSCP.log" /ini=nul ^
  /command ^
    "open sftp://root:fVi1Xe5U31Co5FJc1u@de2.palemoon.org:28222/ -hostkey=""ssh-ed25519 256 c4:b7:b1:b4:65:ff:1b:ef:64:52:47:10:4b:84:a5:4f""" ^
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
