# Endpoints


## Handle a registration request for the application.




> Example request:

```bash
curl -X POST \
    "/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</div>
<div id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</div>
<form id="form-POSTapi-register" data-method="POST" data-path="api/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-register" onclick="tryItOut('POSTapi-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-register" onclick="cancelTryOut('POSTapi-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/register</code></b>
</p>
</form>


## Handle a login request to the application.




> Example request:

```bash
curl -X POST \
    "/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
</form>


## api/logout




> Example request:

```bash
curl -X POST \
    "/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"></code></pre>
</div>
<div id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout"></code></pre>
</div>
<form id="form-POSTapi-logout" data-method="POST" data-path="api/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-logout" onclick="tryItOut('POSTapi-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-logout" onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/logout</code></b>
</p>
</form>


## Send a reset link to the given user.




> Example request:

```bash
curl -X POST \
    "/api/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-password-email" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-password-email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-password-email"></code></pre>
</div>
<div id="execution-error-POSTapi-password-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-password-email"></code></pre>
</div>
<form id="form-POSTapi-password-email" data-method="POST" data-path="api/password/email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-password-email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-password-email" onclick="tryItOut('POSTapi-password-email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-password-email" onclick="cancelTryOut('POSTapi-password-email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-password-email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/password/email</code></b>
</p>
</form>


## Reset the given user&#039;s password.




> Example request:

```bash
curl -X POST \
    "/api/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-password-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-password-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-password-reset"></code></pre>
</div>
<div id="execution-error-POSTapi-password-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-password-reset"></code></pre>
</div>
<form id="form-POSTapi-password-reset" data-method="POST" data-path="api/password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-password-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-password-reset" onclick="tryItOut('POSTapi-password-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-password-reset" onclick="cancelTryOut('POSTapi-password-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-password-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/password/reset</code></b>
</p>
</form>


## Display the password reset view for the given token.


If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "/api/password/reset/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/password/reset/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Route [password.update] not defined. (View: C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\resources\\views\\auth\\passwords\\reset.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\UrlGenerator.php",
    "line": 429,
    "trace": [
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php",
            "line": 704,
            "function": "route",
            "class": "Illuminate\\Routing\\UrlGenerator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\resources\\views\/auth\/passwords\/reset.blade.php",
            "line": 11,
            "function": "route"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\facade\\ignition\\src\\Views\\Engines\\CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 62,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 34,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 765,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 737,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 691,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-password-reset--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-password-reset--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-password-reset--token-"></code></pre>
</div>
<div id="execution-error-GETapi-password-reset--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-password-reset--token-"></code></pre>
</div>
<form id="form-GETapi-password-reset--token-" data-method="GET" data-path="api/password/reset/{token}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-password-reset--token-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-password-reset--token-" onclick="tryItOut('GETapi-password-reset--token-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-password-reset--token-" onclick="cancelTryOut('GETapi-password-reset--token-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-password-reset--token-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/password/reset/{token}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETapi-password-reset--token-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/email/resend




> Example request:

```bash
curl -X GET \
    -G "/api/email/resend" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/email/resend"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Call to a member function hasVerifiedEmail() on null",
    "exception": "Error",
    "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\app\\Http\\Controllers\\Auth\\VerificationController.php",
    "line": 67,
    "trace": [
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "resend",
            "class": "App\\Http\\Controllers\\Auth\\VerificationController",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 255,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 691,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 63,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-email-resend" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-email-resend"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-email-resend"></code></pre>
</div>
<div id="execution-error-GETapi-email-resend" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-email-resend"></code></pre>
</div>
<form id="form-GETapi-email-resend" data-method="GET" data-path="api/email/resend" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-email-resend', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-email-resend" onclick="tryItOut('GETapi-email-resend');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-email-resend" onclick="cancelTryOut('GETapi-email-resend');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-email-resend" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/email/resend</code></b>
</p>
</form>


## api/email/verify/{id}/{hash}




> Example request:

```bash
curl -X GET \
    -G "/api/email/verify/eius/quibusdam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/email/verify/eius/quibusdam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (403):

```json
{
    "message": "Invalid signature.",
    "exception": "Illuminate\\Routing\\Exceptions\\InvalidSignatureException",
    "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ValidateSignature.php",
    "line": 26,
    "trace": [
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ValidateSignature",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 63,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\laravel\\webDevEcommerce\\server\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-email-verify--id---hash-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-email-verify--id---hash-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-email-verify--id---hash-"></code></pre>
</div>
<div id="execution-error-GETapi-email-verify--id---hash-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-email-verify--id---hash-"></code></pre>
</div>
<form id="form-GETapi-email-verify--id---hash-" data-method="GET" data-path="api/email/verify/{id}/{hash}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-email-verify--id---hash-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-email-verify--id---hash-" onclick="tryItOut('GETapi-email-verify--id---hash-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-email-verify--id---hash-" onclick="cancelTryOut('GETapi-email-verify--id---hash-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-email-verify--id---hash-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/email/verify/{id}/{hash}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-email-verify--id---hash-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>hash</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="hash" data-endpoint="GETapi-email-verify--id---hash-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "/banner" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/banner"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETbanner" hidden>
    <blockquote>Received response<span id="execution-response-status-GETbanner"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETbanner"></code></pre>
</div>
<div id="execution-error-GETbanner" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETbanner"></code></pre>
</div>
<form id="form-GETbanner" data-method="GET" data-path="banner" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETbanner', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETbanner" onclick="tryItOut('GETbanner');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETbanner" onclick="cancelTryOut('GETbanner');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETbanner" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>banner</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "/banner/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/banner/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETbanner-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETbanner-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETbanner-create"></code></pre>
</div>
<div id="execution-error-GETbanner-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETbanner-create"></code></pre>
</div>
<form id="form-GETbanner-create" data-method="GET" data-path="banner/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETbanner-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETbanner-create" onclick="tryItOut('GETbanner-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETbanner-create" onclick="cancelTryOut('GETbanner-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETbanner-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>banner/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "/banner" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/banner"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTbanner" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTbanner"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTbanner"></code></pre>
</div>
<div id="execution-error-POSTbanner" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTbanner"></code></pre>
</div>
<form id="form-POSTbanner" data-method="POST" data-path="banner" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTbanner', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTbanner" onclick="tryItOut('POSTbanner');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTbanner" onclick="cancelTryOut('POSTbanner');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTbanner" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>banner</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/banner/ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/banner/ratione"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETbanner--banner-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETbanner--banner-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETbanner--banner-"></code></pre>
</div>
<div id="execution-error-GETbanner--banner-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETbanner--banner-"></code></pre>
</div>
<form id="form-GETbanner--banner-" data-method="GET" data-path="banner/{banner}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETbanner--banner-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETbanner--banner-" onclick="tryItOut('GETbanner--banner-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETbanner--banner-" onclick="cancelTryOut('GETbanner--banner-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETbanner--banner-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>banner/{banner}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>banner</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="banner" data-endpoint="GETbanner--banner-" data-component="url" required  hidden>
<br>
</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/banner/corrupti/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/banner/corrupti/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETbanner--banner--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETbanner--banner--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETbanner--banner--edit"></code></pre>
</div>
<div id="execution-error-GETbanner--banner--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETbanner--banner--edit"></code></pre>
</div>
<form id="form-GETbanner--banner--edit" data-method="GET" data-path="banner/{banner}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETbanner--banner--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETbanner--banner--edit" onclick="tryItOut('GETbanner--banner--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETbanner--banner--edit" onclick="cancelTryOut('GETbanner--banner--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETbanner--banner--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>banner/{banner}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>banner</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="banner" data-endpoint="GETbanner--banner--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "/banner/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/banner/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTbanner--banner-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTbanner--banner-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTbanner--banner-"></code></pre>
</div>
<div id="execution-error-PUTbanner--banner-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTbanner--banner-"></code></pre>
</div>
<form id="form-PUTbanner--banner-" data-method="PUT" data-path="banner/{banner}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTbanner--banner-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTbanner--banner-" onclick="tryItOut('PUTbanner--banner-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTbanner--banner-" onclick="cancelTryOut('PUTbanner--banner-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTbanner--banner-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>banner/{banner}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>banner/{banner}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>banner</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="banner" data-endpoint="PUTbanner--banner-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/banner/error" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/banner/error"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEbanner--banner-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEbanner--banner-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEbanner--banner-"></code></pre>
</div>
<div id="execution-error-DELETEbanner--banner-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEbanner--banner-"></code></pre>
</div>
<form id="form-DELETEbanner--banner-" data-method="DELETE" data-path="banner/{banner}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEbanner--banner-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEbanner--banner-" onclick="tryItOut('DELETEbanner--banner-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEbanner--banner-" onclick="cancelTryOut('DELETEbanner--banner-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEbanner--banner-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>banner/{banner}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>banner</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="banner" data-endpoint="DELETEbanner--banner-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETcategory" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcategory"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcategory"></code></pre>
</div>
<div id="execution-error-GETcategory" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcategory"></code></pre>
</div>
<form id="form-GETcategory" data-method="GET" data-path="category" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcategory', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcategory" onclick="tryItOut('GETcategory');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcategory" onclick="cancelTryOut('GETcategory');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcategory" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>category</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "/category/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/category/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETcategory-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcategory-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcategory-create"></code></pre>
</div>
<div id="execution-error-GETcategory-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcategory-create"></code></pre>
</div>
<form id="form-GETcategory-create" data-method="GET" data-path="category/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcategory-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcategory-create" onclick="tryItOut('GETcategory-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcategory-create" onclick="cancelTryOut('GETcategory-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcategory-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>category/create</code></b>
</p>
</form>


## Store category




> Example request:

```bash
curl -X POST \
    "/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"commodi"}'

```

```javascript
const url = new URL(
    "/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "commodi"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTcategory" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTcategory"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTcategory"></code></pre>
</div>
<div id="execution-error-POSTcategory" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTcategory"></code></pre>
</div>
<form id="form-POSTcategory" data-method="POST" data-path="category" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTcategory', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTcategory" onclick="tryItOut('POSTcategory');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTcategory" onclick="cancelTryOut('POSTcategory');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTcategory" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>category</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTcategory" data-component="body" required  hidden>
<br>
</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/category/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/category/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETcategory--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcategory--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcategory--category-"></code></pre>
</div>
<div id="execution-error-GETcategory--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcategory--category-"></code></pre>
</div>
<form id="form-GETcategory--category-" data-method="GET" data-path="category/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcategory--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcategory--category-" onclick="tryItOut('GETcategory--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcategory--category-" onclick="cancelTryOut('GETcategory--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcategory--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>category/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="GETcategory--category-" data-component="url" required  hidden>
<br>
</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/category/ad/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/category/ad/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETcategory--category--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcategory--category--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcategory--category--edit"></code></pre>
</div>
<div id="execution-error-GETcategory--category--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcategory--category--edit"></code></pre>
</div>
<form id="form-GETcategory--category--edit" data-method="GET" data-path="category/{category}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcategory--category--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcategory--category--edit" onclick="tryItOut('GETcategory--category--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcategory--category--edit" onclick="cancelTryOut('GETcategory--category--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcategory--category--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>category/{category}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="GETcategory--category--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "/category/sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quis"}'

```

```javascript
const url = new URL(
    "/category/sapiente"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quis"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTcategory--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTcategory--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTcategory--category-"></code></pre>
</div>
<div id="execution-error-PUTcategory--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTcategory--category-"></code></pre>
</div>
<form id="form-PUTcategory--category-" data-method="PUT" data-path="category/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTcategory--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTcategory--category-" onclick="tryItOut('PUTcategory--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTcategory--category-" onclick="cancelTryOut('PUTcategory--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTcategory--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>category/{category}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>category/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="PUTcategory--category-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTcategory--category-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/category/nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/category/nisi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEcategory--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEcategory--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEcategory--category-"></code></pre>
</div>
<div id="execution-error-DELETEcategory--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEcategory--category-"></code></pre>
</div>
<form id="form-DELETEcategory--category-" data-method="DELETE" data-path="category/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEcategory--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEcategory--category-" onclick="tryItOut('DELETEcategory--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEcategory--category-" onclick="cancelTryOut('DELETEcategory--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEcategory--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>category/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="DELETEcategory--category-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "/discountProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/discountProduct"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETdiscountProduct" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdiscountProduct"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdiscountProduct"></code></pre>
</div>
<div id="execution-error-GETdiscountProduct" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdiscountProduct"></code></pre>
</div>
<form id="form-GETdiscountProduct" data-method="GET" data-path="discountProduct" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdiscountProduct', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdiscountProduct" onclick="tryItOut('GETdiscountProduct');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdiscountProduct" onclick="cancelTryOut('GETdiscountProduct');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdiscountProduct" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>discountProduct</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "/discountProduct/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/discountProduct/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETdiscountProduct-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdiscountProduct-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdiscountProduct-create"></code></pre>
</div>
<div id="execution-error-GETdiscountProduct-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdiscountProduct-create"></code></pre>
</div>
<form id="form-GETdiscountProduct-create" data-method="GET" data-path="discountProduct/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdiscountProduct-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdiscountProduct-create" onclick="tryItOut('GETdiscountProduct-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdiscountProduct-create" onclick="cancelTryOut('GETdiscountProduct-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdiscountProduct-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>discountProduct/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "/discountProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/discountProduct"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTdiscountProduct" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTdiscountProduct"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTdiscountProduct"></code></pre>
</div>
<div id="execution-error-POSTdiscountProduct" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTdiscountProduct"></code></pre>
</div>
<form id="form-POSTdiscountProduct" data-method="POST" data-path="discountProduct" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTdiscountProduct', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTdiscountProduct" onclick="tryItOut('POSTdiscountProduct');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTdiscountProduct" onclick="cancelTryOut('POSTdiscountProduct');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTdiscountProduct" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>discountProduct</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/discountProduct/iure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/discountProduct/iure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETdiscountProduct--discountProduct-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdiscountProduct--discountProduct-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdiscountProduct--discountProduct-"></code></pre>
</div>
<div id="execution-error-GETdiscountProduct--discountProduct-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdiscountProduct--discountProduct-"></code></pre>
</div>
<form id="form-GETdiscountProduct--discountProduct-" data-method="GET" data-path="discountProduct/{discountProduct}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdiscountProduct--discountProduct-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdiscountProduct--discountProduct-" onclick="tryItOut('GETdiscountProduct--discountProduct-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdiscountProduct--discountProduct-" onclick="cancelTryOut('GETdiscountProduct--discountProduct-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdiscountProduct--discountProduct-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>discountProduct/{discountProduct}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discountProduct</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="discountProduct" data-endpoint="GETdiscountProduct--discountProduct-" data-component="url" required  hidden>
<br>
</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/discountProduct/repudiandae/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/discountProduct/repudiandae/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETdiscountProduct--discountProduct--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdiscountProduct--discountProduct--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdiscountProduct--discountProduct--edit"></code></pre>
</div>
<div id="execution-error-GETdiscountProduct--discountProduct--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdiscountProduct--discountProduct--edit"></code></pre>
</div>
<form id="form-GETdiscountProduct--discountProduct--edit" data-method="GET" data-path="discountProduct/{discountProduct}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdiscountProduct--discountProduct--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdiscountProduct--discountProduct--edit" onclick="tryItOut('GETdiscountProduct--discountProduct--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdiscountProduct--discountProduct--edit" onclick="cancelTryOut('GETdiscountProduct--discountProduct--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdiscountProduct--discountProduct--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>discountProduct/{discountProduct}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discountProduct</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="discountProduct" data-endpoint="GETdiscountProduct--discountProduct--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "/discountProduct/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/discountProduct/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTdiscountProduct--discountProduct-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTdiscountProduct--discountProduct-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTdiscountProduct--discountProduct-"></code></pre>
</div>
<div id="execution-error-PUTdiscountProduct--discountProduct-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTdiscountProduct--discountProduct-"></code></pre>
</div>
<form id="form-PUTdiscountProduct--discountProduct-" data-method="PUT" data-path="discountProduct/{discountProduct}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTdiscountProduct--discountProduct-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTdiscountProduct--discountProduct-" onclick="tryItOut('PUTdiscountProduct--discountProduct-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTdiscountProduct--discountProduct-" onclick="cancelTryOut('PUTdiscountProduct--discountProduct-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTdiscountProduct--discountProduct-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>discountProduct/{discountProduct}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>discountProduct/{discountProduct}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discountProduct</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="discountProduct" data-endpoint="PUTdiscountProduct--discountProduct-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/discountProduct/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/discountProduct/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEdiscountProduct--discountProduct-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEdiscountProduct--discountProduct-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEdiscountProduct--discountProduct-"></code></pre>
</div>
<div id="execution-error-DELETEdiscountProduct--discountProduct-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEdiscountProduct--discountProduct-"></code></pre>
</div>
<form id="form-DELETEdiscountProduct--discountProduct-" data-method="DELETE" data-path="discountProduct/{discountProduct}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEdiscountProduct--discountProduct-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEdiscountProduct--discountProduct-" onclick="tryItOut('DELETEdiscountProduct--discountProduct-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEdiscountProduct--discountProduct-" onclick="cancelTryOut('DELETEdiscountProduct--discountProduct-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEdiscountProduct--discountProduct-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>discountProduct/{discountProduct}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discountProduct</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="discountProduct" data-endpoint="DELETEdiscountProduct--discountProduct-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETorder" hidden>
    <blockquote>Received response<span id="execution-response-status-GETorder"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETorder"></code></pre>
</div>
<div id="execution-error-GETorder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETorder"></code></pre>
</div>
<form id="form-GETorder" data-method="GET" data-path="order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETorder', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETorder" onclick="tryItOut('GETorder');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETorder" onclick="cancelTryOut('GETorder');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETorder" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>order</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/order/eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/order/eius"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETorder--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETorder--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETorder--order-"></code></pre>
</div>
<div id="execution-error-GETorder--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETorder--order-"></code></pre>
</div>
<form id="form-GETorder--order-" data-method="GET" data-path="order/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETorder--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETorder--order-" onclick="tryItOut('GETorder--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETorder--order-" onclick="cancelTryOut('GETorder--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETorder--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>order/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="GETorder--order-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETproduct" hidden>
    <blockquote>Received response<span id="execution-response-status-GETproduct"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETproduct"></code></pre>
</div>
<div id="execution-error-GETproduct" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproduct"></code></pre>
</div>
<form id="form-GETproduct" data-method="GET" data-path="product" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETproduct', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETproduct" onclick="tryItOut('GETproduct');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETproduct" onclick="cancelTryOut('GETproduct');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETproduct" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>product</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "/product/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/product/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETproduct-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETproduct-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETproduct-create"></code></pre>
</div>
<div id="execution-error-GETproduct-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproduct-create"></code></pre>
</div>
<form id="form-GETproduct-create" data-method="GET" data-path="product/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETproduct-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETproduct-create" onclick="tryItOut('GETproduct-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETproduct-create" onclick="cancelTryOut('GETproduct-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETproduct-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>product/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTproduct" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTproduct"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTproduct"></code></pre>
</div>
<div id="execution-error-POSTproduct" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTproduct"></code></pre>
</div>
<form id="form-POSTproduct" data-method="POST" data-path="product" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTproduct', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTproduct" onclick="tryItOut('POSTproduct');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTproduct" onclick="cancelTryOut('POSTproduct');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTproduct" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>product</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/product/inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/product/inventore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETproduct--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETproduct--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETproduct--product-"></code></pre>
</div>
<div id="execution-error-GETproduct--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproduct--product-"></code></pre>
</div>
<form id="form-GETproduct--product-" data-method="GET" data-path="product/{product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETproduct--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETproduct--product-" onclick="tryItOut('GETproduct--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETproduct--product-" onclick="cancelTryOut('GETproduct--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETproduct--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>product/{product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="GETproduct--product-" data-component="url" required  hidden>
<br>
</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/product/dolor/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/product/dolor/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETproduct--product--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETproduct--product--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETproduct--product--edit"></code></pre>
</div>
<div id="execution-error-GETproduct--product--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproduct--product--edit"></code></pre>
</div>
<form id="form-GETproduct--product--edit" data-method="GET" data-path="product/{product}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETproduct--product--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETproduct--product--edit" onclick="tryItOut('GETproduct--product--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETproduct--product--edit" onclick="cancelTryOut('GETproduct--product--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETproduct--product--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>product/{product}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="GETproduct--product--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "/product/libero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/product/libero"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTproduct--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTproduct--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTproduct--product-"></code></pre>
</div>
<div id="execution-error-PUTproduct--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTproduct--product-"></code></pre>
</div>
<form id="form-PUTproduct--product-" data-method="PUT" data-path="product/{product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTproduct--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTproduct--product-" onclick="tryItOut('PUTproduct--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTproduct--product-" onclick="cancelTryOut('PUTproduct--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTproduct--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>product/{product}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>product/{product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="PUTproduct--product-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/product/cupiditate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/product/cupiditate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEproduct--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEproduct--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEproduct--product-"></code></pre>
</div>
<div id="execution-error-DELETEproduct--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEproduct--product-"></code></pre>
</div>
<form id="form-DELETEproduct--product-" data-method="DELETE" data-path="product/{product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEproduct--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEproduct--product-" onclick="tryItOut('DELETEproduct--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEproduct--product-" onclick="cancelTryOut('DELETEproduct--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEproduct--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>product/{product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="DELETEproduct--product-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "/subcategory" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/subcategory"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETsubcategory" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsubcategory"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsubcategory"></code></pre>
</div>
<div id="execution-error-GETsubcategory" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsubcategory"></code></pre>
</div>
<form id="form-GETsubcategory" data-method="GET" data-path="subcategory" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsubcategory', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsubcategory" onclick="tryItOut('GETsubcategory');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsubcategory" onclick="cancelTryOut('GETsubcategory');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsubcategory" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>subcategory</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "/subcategory/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/subcategory/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETsubcategory-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsubcategory-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsubcategory-create"></code></pre>
</div>
<div id="execution-error-GETsubcategory-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsubcategory-create"></code></pre>
</div>
<form id="form-GETsubcategory-create" data-method="GET" data-path="subcategory/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsubcategory-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsubcategory-create" onclick="tryItOut('GETsubcategory-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsubcategory-create" onclick="cancelTryOut('GETsubcategory-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsubcategory-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>subcategory/create</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/subcategory/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/subcategory/quo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETsubcategory--subcategory-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsubcategory--subcategory-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsubcategory--subcategory-"></code></pre>
</div>
<div id="execution-error-GETsubcategory--subcategory-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsubcategory--subcategory-"></code></pre>
</div>
<form id="form-GETsubcategory--subcategory-" data-method="GET" data-path="subcategory/{subcategory}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsubcategory--subcategory-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsubcategory--subcategory-" onclick="tryItOut('GETsubcategory--subcategory-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsubcategory--subcategory-" onclick="cancelTryOut('GETsubcategory--subcategory-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsubcategory--subcategory-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>subcategory/{subcategory}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>subcategory</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subcategory" data-endpoint="GETsubcategory--subcategory-" data-component="url" required  hidden>
<br>
</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/subcategory/ut/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/subcategory/ut/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETsubcategory--subcategory--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsubcategory--subcategory--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsubcategory--subcategory--edit"></code></pre>
</div>
<div id="execution-error-GETsubcategory--subcategory--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsubcategory--subcategory--edit"></code></pre>
</div>
<form id="form-GETsubcategory--subcategory--edit" data-method="GET" data-path="subcategory/{subcategory}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsubcategory--subcategory--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsubcategory--subcategory--edit" onclick="tryItOut('GETsubcategory--subcategory--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsubcategory--subcategory--edit" onclick="cancelTryOut('GETsubcategory--subcategory--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsubcategory--subcategory--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>subcategory/{subcategory}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>subcategory</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subcategory" data-endpoint="GETsubcategory--subcategory--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/subcategory/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/subcategory/molestiae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEsubcategory--subcategory-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEsubcategory--subcategory-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEsubcategory--subcategory-"></code></pre>
</div>
<div id="execution-error-DELETEsubcategory--subcategory-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEsubcategory--subcategory-"></code></pre>
</div>
<form id="form-DELETEsubcategory--subcategory-" data-method="DELETE" data-path="subcategory/{subcategory}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEsubcategory--subcategory-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEsubcategory--subcategory-" onclick="tryItOut('DELETEsubcategory--subcategory-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEsubcategory--subcategory-" onclick="cancelTryOut('DELETEsubcategory--subcategory-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEsubcategory--subcategory-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>subcategory/{subcategory}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>subcategory</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subcategory" data-endpoint="DELETEsubcategory--subcategory-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETuser" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser"></code></pre>
</div>
<div id="execution-error-GETuser" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser"></code></pre>
</div>
<form id="form-GETuser" data-method="GET" data-path="user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser" onclick="tryItOut('GETuser');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser" onclick="cancelTryOut('GETuser');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/user/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/user/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETuser--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser--user-"></code></pre>
</div>
<div id="execution-error-GETuser--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser--user-"></code></pre>
</div>
<form id="form-GETuser--user-" data-method="GET" data-path="user/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser--user-" onclick="tryItOut('GETuser--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser--user-" onclick="cancelTryOut('GETuser--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETuser--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/user/corporis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/user/corporis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEuser--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEuser--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEuser--user-"></code></pre>
</div>
<div id="execution-error-DELETEuser--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEuser--user-"></code></pre>
</div>
<form id="form-DELETEuser--user-" data-method="DELETE" data-path="user/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEuser--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEuser--user-" onclick="tryItOut('DELETEuser--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEuser--user-" onclick="cancelTryOut('DELETEuser--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEuser--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>user/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEuser--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## order/orderItems/{id}




> Example request:

```bash
curl -X GET \
    -G "/order/orderItems/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/order/orderItems/omnis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/login'" />

        <title>Redirecting to http://localhost/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/login">http://localhost/login</a>.
    </body>
</html>
```
<div id="execution-results-GETorder-orderItems--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETorder-orderItems--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETorder-orderItems--id-"></code></pre>
</div>
<div id="execution-error-GETorder-orderItems--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETorder-orderItems--id-"></code></pre>
</div>
<form id="form-GETorder-orderItems--id-" data-method="GET" data-path="order/orderItems/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETorder-orderItems--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETorder-orderItems--id-" onclick="tryItOut('GETorder-orderItems--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETorder-orderItems--id-" onclick="cancelTryOut('GETorder-orderItems--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETorder-orderItems--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>order/orderItems/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETorder-orderItems--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## login




> Example request:

```bash
curl -X GET \
    -G "/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

require

<form action="/login" method="post">
<input type="hidden" name="_token" value="P7rpMCq2I8eTeJkoRPxH8aRwPPr7J3Ahc8FjJ5ue"> 

username <input type="text" name="username"> 
password <input type="text" name="password">
<button type="submit">Submit</button>
</form>
```
<div id="execution-results-GETlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-GETlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETlogin"></code></pre>
</div>
<div id="execution-error-GETlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlogin"></code></pre>
</div>
<form id="form-GETlogin" data-method="GET" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETlogin" onclick="tryItOut('GETlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETlogin" onclick="cancelTryOut('GETlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>login</code></b>
</p>
</form>


## login




> Example request:

```bash
curl -X POST \
    "/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin"></code></pre>
</div>
<div id="execution-error-POSTlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin"></code></pre>
</div>
<form id="form-POSTlogin" data-method="POST" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogin" onclick="tryItOut('POSTlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogin" onclick="cancelTryOut('POSTlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>login</code></b>
</p>
</form>


## logout




> Example request:

```bash
curl -X POST \
    "/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTlogout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogout"></code></pre>
</div>
<div id="execution-error-POSTlogout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogout"></code></pre>
</div>
<form id="form-POSTlogout" data-method="POST" data-path="logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogout" onclick="tryItOut('POSTlogout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogout" onclick="cancelTryOut('POSTlogout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>logout</code></b>
</p>
</form>



