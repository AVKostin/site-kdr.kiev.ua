:lable
cls
set /p disk_flash=.Vvesti buky flash drive: .
cd /D %disk_flash%:
if %errorlevel%==1 goto lable
cls
cd /D %disk_flash%:
del *.lnk /q /f
attrib -s -h -r autorun.*
del autorun.* /F
attrib -h -r -s -a /D /S
rd RECYCLER /q /s
explorer.exe %disk_flash%:
