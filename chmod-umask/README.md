CHMOD for published files:

 - 644 for files
 - 755 for directories

Add this to mt-config.cgi:

```
HTMLUmask 0022
UploadUmask 0022
DirUmask 0022
```
