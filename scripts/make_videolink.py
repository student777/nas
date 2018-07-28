import json
from ftplib import FTP, error_temp

host = input('host: ')
user = input('user: ')
pwd = input('passwd: ')
path = input('path: ')

ftp = FTP(host, user=user, passwd=pwd)
# ftp.login()
wd = '/HDD1/{}'.format(path)
ftp.cwd(wd)
name_list = ftp.nlst()
f = open('output', 'w')
f.write('[\n')
for name in name_list:
    if name == 'Away' or name == 'dfdfdf':
        continue
    try:
        src_list = ftp.nlst(wd + '/' + name + '/')
    except error_temp:
        continue

    for src in src_list:
        if src.endswith('mp4') or src.endswith('avi') or src.endswith('mkv'):
            f.write(json.dumps({"sauce": src.split('/')[-1].lower(), "filename": src.split('/')[-1], "name": name}) + ',\n')

f.write(']')
f.close()