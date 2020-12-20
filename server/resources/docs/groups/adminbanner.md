# AdminBanner


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


> Example response (200):

```json

[]
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
    -G "/banner/dicta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/banner/dicta"
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
    -G "/banner/consequuntur/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/banner/consequuntur/edit"
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
    "/banner/sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/banner/sit"
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
    "/banner/eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/banner/eius"
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



