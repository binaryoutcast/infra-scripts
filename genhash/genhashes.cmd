@echo off
rem generate hashes
pushd ..\%1
echo Hashes for release %1
echo Hashes for release %1 > hashes.txt
for %%a in (*.exe) do (
  echo %%a >> hashes.txt
  call ..\genhash\hash.cmd %%a SHA256 >> hashes.txt
  echo. >> hashes.txt
)
for %%a in (*.7z) do (
  echo %%a >> hashes.txt
  call ..\genhash\hash.cmd %%a SHA256 >> hashes.txt
  echo. >> hashes.txt
)
goto finished
for %%a in (*.xz) do (
  echo %%a >> hashes.txt
  call ..\genhash\hash.cmd %%a SHA256 >> hashes.txt
  echo. >> hashes.txt
)
:finished
popd