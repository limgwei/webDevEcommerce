# User

APIs for manage user

## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/user"
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
{
    "data": []
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/user"
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


<div id="execution-results-POSTapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user"></code></pre>
</div>
<div id="execution-error-POSTapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user"></code></pre>
</div>
<form id="form-POSTapi-user" data-method="POST" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user" onclick="tryItOut('POSTapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user" onclick="cancelTryOut('POSTapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/api/user/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/user/et"
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
{
    "data": []
}
```
<div id="execution-results-GETapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user--user-"></code></pre>
</div>
<div id="execution-error-GETapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user--user-"></code></pre>
</div>
<form id="form-GETapi-user--user-" data-method="GET" data-path="api/user/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user--user-" onclick="tryItOut('GETapi-user--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user--user-" onclick="cancelTryOut('GETapi-user--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETapi-user--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "/api/user/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/user/ut"
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


<div id="execution-results-PUTapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-user--user-"></code></pre>
</div>
<div id="execution-error-PUTapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-user--user-"></code></pre>
</div>
<form id="form-PUTapi-user--user-" data-method="PUT" data-path="api/user/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-user--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-user--user-" onclick="tryItOut('PUTapi-user--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-user--user-" onclick="cancelTryOut('PUTapi-user--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-user--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/user/{user}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/user/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="PUTapi-user--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/api/user/veniam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/user/veniam"
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


<div id="execution-results-DELETEapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-user--user-"></code></pre>
</div>
<div id="execution-error-DELETEapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-user--user-"></code></pre>
</div>
<form id="form-DELETEapi-user--user-" data-method="DELETE" data-path="api/user/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-user--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-user--user-" onclick="tryItOut('DELETEapi-user--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-user--user-" onclick="cancelTryOut('DELETEapi-user--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-user--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/user/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEapi-user--user-" data-component="url" required  hidden>
<br>
</p>
</form>



