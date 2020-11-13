# Test third party cookies
A super simple site that tests for third party cookies, copied from Alan Hogan (Stackoverflow)


[His website](https://alanhogan.com/ "Alan Hogan")
<br>
[Stackoverflow question](http://stackoverflow.com/questions/3550790/check-if-third-party-cookies-are-enabled)


## Usage - Beware!!
I know i trust myself, so i use it. Feel free to use it as well, but the best idea is to fork this repo and host it yourself for only 5$ at [Digitalocean](https://www.digitalocean.com/?refcode=7fbcaa9b0880) (if you use this link, i get free credit!).
```
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        window._3rd_party_test_step1_loaded = function () {
            var step2El = document.createElement('script');
            step2El.setAttribute('src', 'http://testthirdpartycookies.com/step2.js.php');
            document.body.appendChild(step2El);
        };
        window._3rd_party_test_step2_loaded = function (cookieSuccess) {
          console.log(cookieSuccess ? "Third party cookies are OK." : "Third party cookies are probably blocked.");
        }
    </script>
</head>
<body>
<script type="text/javascript" src="http://testthirdpartycookies.com/step1.js.php"></script>
</body>
</html>
```
