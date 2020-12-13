# Promocode

APIs for manage promocode

## api/promocode




> Example request:

```bash
curl -X GET \
    -G "/api/promocode" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/promocode"
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
<div id="execution-results-GETapi-promocode" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-promocode"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-promocode"></code></pre>
</div>
<div id="execution-error-GETapi-promocode" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-promocode"></code></pre>
</div>
<form id="form-GETapi-promocode" data-method="GET" data-path="api/promocode" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-promocode', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-promocode" onclick="tryItOut('GETapi-promocode');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-promocode" onclick="cancelTryOut('GETapi-promocode');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-promocode" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/promocode</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "/api/promocode" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/promocode"
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


<div id="execution-results-POSTapi-promocode" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-promocode"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-promocode"></code></pre>
</div>
<div id="execution-error-POSTapi-promocode" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-promocode"></code></pre>
</div>
<form id="form-POSTapi-promocode" data-method="POST" data-path="api/promocode" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-promocode', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-promocode" onclick="tryItOut('POSTapi-promocode');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-promocode" onclick="cancelTryOut('POSTapi-promocode');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-promocode" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/promocode</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/api/promocode/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/promocode/velit"
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
<div id="execution-results-GETapi-promocode--promocode-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-promocode--promocode-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-promocode--promocode-"></code></pre>
</div>
<div id="execution-error-GETapi-promocode--promocode-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-promocode--promocode-"></code></pre>
</div>
<form id="form-GETapi-promocode--promocode-" data-method="GET" data-path="api/promocode/{promocode}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-promocode--promocode-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-promocode--promocode-" onclick="tryItOut('GETapi-promocode--promocode-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-promocode--promocode-" onclick="cancelTryOut('GETapi-promocode--promocode-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-promocode--promocode-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/promocode/{promocode}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>promocode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="promocode" data-endpoint="GETapi-promocode--promocode-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "/api/promocode/autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/promocode/autem"
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


<div id="execution-results-PUTapi-promocode--promocode-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-promocode--promocode-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-promocode--promocode-"></code></pre>
</div>
<div id="execution-error-PUTapi-promocode--promocode-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-promocode--promocode-"></code></pre>
</div>
<form id="form-PUTapi-promocode--promocode-" data-method="PUT" data-path="api/promocode/{promocode}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-promocode--promocode-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-promocode--promocode-" onclick="tryItOut('PUTapi-promocode--promocode-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-promocode--promocode-" onclick="cancelTryOut('PUTapi-promocode--promocode-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-promocode--promocode-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/promocode/{promocode}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/promocode/{promocode}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>promocode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="promocode" data-endpoint="PUTapi-promocode--promocode-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/api/promocode/perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/promocode/perferendis"
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


<div id="execution-results-DELETEapi-promocode--promocode-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-promocode--promocode-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-promocode--promocode-"></code></pre>
</div>
<div id="execution-error-DELETEapi-promocode--promocode-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-promocode--promocode-"></code></pre>
</div>
<form id="form-DELETEapi-promocode--promocode-" data-method="DELETE" data-path="api/promocode/{promocode}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-promocode--promocode-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-promocode--promocode-" onclick="tryItOut('DELETEapi-promocode--promocode-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-promocode--promocode-" onclick="cancelTryOut('DELETEapi-promocode--promocode-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-promocode--promocode-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/promocode/{promocode}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>promocode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="promocode" data-endpoint="DELETEapi-promocode--promocode-" data-component="url" required  hidden>
<br>
</p>
</form>



