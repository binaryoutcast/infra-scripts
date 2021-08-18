@echo off
path %path%;e:\mozdev\codesign

echo ***** Signing x86 *****
pushd \mozdev\obj-pm-x86-release\dist\bin
call \mozdev\palemoon-releng\sign-binaries.cmd %1
popd

echo ***** Signing x64 *****
pushd \mozdev\obj-pm-x64-release\dist\bin
call \mozdev\palemoon-releng\sign-binaries.cmd %1
popd

echo Done!
