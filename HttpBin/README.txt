You can install httpbin as a library from PyPI and run it as a WSGI app. For example, using Gunicorn:

$ pip install httpbin
$ gunicorn httpbin:app

Or run it directly:

$ python -m httpbin.core


NOTE:--- PIP installation is already done on this box. So no need to run installation again.
If you want this process as service then go with gunicorn otherwise simple type $ python -m httpbin.core
on your lamp box and service will start on 5000 port..

Mainly run following command:::::
{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{
gunicorn -b 10.113.195.231:5000 httpbin:app
}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}
