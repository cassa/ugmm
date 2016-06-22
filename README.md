# Perth Linux Users Group - User Group Members Management

UGMM is a simple tool written to manager CASSA's members stored in an LDAP database

An LDAP database may not be the best tool for storing this data, however it does
provide central authentication which was key at the time UGMM was written.

## Building

Build a debian package to install, rather than trying to run from source, this 
allows easy updating of production hosts, with a rollback by installing the
previous version.

To build, run
```
debuild -i -us -uc -b
```
This will give you a file like cassa-ugmm_0.5.2_all.deb which you can then install with the command
```
sudo gdebi cassa-ugmm_0.5.2_all.deb
```
