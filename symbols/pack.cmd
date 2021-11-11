@echo off
pushd c:\mozdev\obj-pm-x86-release\
..\symbols\7za a -r -bb1 -x!generated.pdb -x!vc120.pdb -x!fake.pdb -x!dist\bin\* ..\symbols\symbols-%1-win32.7z *.pdb
popd
pushd c:\mozdev\obj-pm-x64-release\
..\symbols\7za a -r -bb1 -x!generated.pdb -x!vc120.pdb -x!fake.pdb -x!dist\bin\* ..\symbols\symbols-%1-win64.7z *.pdb
popd

