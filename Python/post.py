#!/usr/bin/python
import cgi
import os
import sys
import subprocess
from subprocess  import call

form = cgi.FieldStorage()
uoption =  form.getvalue('option')
uflavor = form.getvalue('flavor')
uemail = form.getvalue('email')


print "Content-type:text/html\r\n\r\n"
print '<html>'
print '<head>'
print '<body>'
print '<h2>hello world</h2>'
print '</body>'
print '</html>'


thisdict = {
  "server_flavor": uflavor,
  "image": uoption,
  "email": uemail
}

cmd = 'ansible-playbook -i /home/vinoth/osp/inventory /home/vinoth/osp/main.yaml -e '

view = '"{}"'.format(thisdict)

test = cmd + view

print test
subprocess.call(test, shell=True)
