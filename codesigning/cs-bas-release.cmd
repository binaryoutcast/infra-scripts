@echo off
path %path%;e:\mozdev\codesign

rem echo ***** Signing x86 *****
rem pushd \mozdev\obj-bas-x86-release\dist\bin
rem call \mozdev\basilisk-releng\sign-binaries.cmd %1
rem popd

echo ***** Signing x64 *****
pushd C:\mozdev\obj-bas-x64-release\dist\bin
call C:\mozdev\basilisk-releng\sign-binaries.cmd %1
popd

echo Done!
