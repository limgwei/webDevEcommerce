# Banner

APIs for manage banners

## Display Banner and link to category or product.




> Example request:

```bash
curl -X GET \
    -G "/api/banner" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/banner"
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
<div id="execution-results-GETapi-banner" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-banner"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-banner"></code></pre>
</div>
<div id="execution-error-GETapi-banner" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-banner"></code></pre>
</div>
<form id="form-GETapi-banner" data-method="GET" data-path="api/banner" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-banner', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-banner" onclick="tryItOut('GETapi-banner');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-banner" onclick="cancelTryOut('GETapi-banner');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-banner" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/banner</code></b>
</p>
</form>


## Store new banner




> Example request:

```bash
curl -X POST \
    "/api/banner" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "name=sint" \
    -F "category_id=16" \
    -F "product_id=3" \
    -F "image[]=@C:\Users\HP\AppData\Local\Temp\php6B4C.tmp" 
```

```javascript
const url = new URL(
    "/api/banner"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'sint');
body.append('category_id', '16');
body.append('product_id', '3');
body.append('image[]', document.querySelector('input[name="image[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-banner" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-banner"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-banner"></code></pre>
</div>
<div id="execution-error-POSTapi-banner" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-banner"></code></pre>
</div>
<form id="form-POSTapi-banner" data-method="POST" data-path="api/banner" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-banner', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-banner" onclick="tryItOut('POSTapi-banner');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-banner" onclick="cancelTryOut('POSTapi-banner');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-banner" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/banner</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="image.0" data-endpoint="POSTapi-banner" data-component="body"  hidden>
<input type="file" name="image.1" data-endpoint="POSTapi-banner" data-component="body" hidden>
<br>
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-banner" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-banner" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>product_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="product_id" data-endpoint="POSTapi-banner" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/api/banner/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/banner/dolorem"
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
<div id="execution-results-GETapi-banner--banner-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-banner--banner-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-banner--banner-"></code></pre>
</div>
<div id="execution-error-GETapi-banner--banner-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-banner--banner-"></code></pre>
</div>
<form id="form-GETapi-banner--banner-" data-method="GET" data-path="api/banner/{banner}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-banner--banner-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-banner--banner-" onclick="tryItOut('GETapi-banner--banner-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-banner--banner-" onclick="cancelTryOut('GETapi-banner--banner-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-banner--banner-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/banner/{banner}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>banner</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="banner" data-endpoint="GETapi-banner--banner-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "/api/banner/possimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/banner/possimus"
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


<div id="execution-results-PUTapi-banner--banner-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-banner--banner-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-banner--banner-"></code></pre>
</div>
<div id="execution-error-PUTapi-banner--banner-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-banner--banner-"></code></pre>
</div>
<form id="form-PUTapi-banner--banner-" data-method="PUT" data-path="api/banner/{banner}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-banner--banner-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-banner--banner-" onclick="tryItOut('PUTapi-banner--banner-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-banner--banner-" onclick="cancelTryOut('PUTapi-banner--banner-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-banner--banner-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/banner/{banner}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/banner/{banner}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>banner</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="banner" data-endpoint="PUTapi-banner--banner-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/api/banner/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/banner/velit"
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


<div id="execution-results-DELETEapi-banner--banner-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-banner--banner-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-banner--banner-"></code></pre>
</div>
<div id="execution-error-DELETEapi-banner--banner-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-banner--banner-"></code></pre>
</div>
<form id="form-DELETEapi-banner--banner-" data-method="DELETE" data-path="api/banner/{banner}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-banner--banner-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-banner--banner-" onclick="tryItOut('DELETEapi-banner--banner-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-banner--banner-" onclick="cancelTryOut('DELETEapi-banner--banner-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-banner--banner-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/banner/{banner}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>banner</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="banner" data-endpoint="DELETEapi-banner--banner-" data-component="url" required  hidden>
<br>
</p>
</form>



