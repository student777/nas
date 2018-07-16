import json
from ftplib import FTP
ftp = FTP('asdf.xyz', user="asdf", passwd="zxcv")
# ftp.login()
ftp.cwd('HDD1/zxcv')
name_list = ftp.nlst()
f = open('output', 'w')
for name in name_list:
    src_list = ftp.nlst('/HDD1/zxcf/' + name + '/')
    for src in src_list:
        f.write(json.dumps({"sauce": src.split('/')[-1].lower(), "filename": src.split('/')[-1], "name": name}) + ',\n')

f.close()