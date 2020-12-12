# Discount Product

APIs for manage discount product

## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product"
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
<div id="execution-results-GETapi-discount_product" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product"></code></pre>
</div>
<form id="form-GETapi-discount_product" data-method="GET" data-path="api/discount_product" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product" onclick="tryItOut('GETapi-discount_product');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product" onclick="cancelTryOut('GETapi-discount_product');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "/api/discount_product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product"
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


<div id="execution-results-POSTapi-discount_product" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discount_product"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discount_product"></code></pre>
</div>
<div id="execution-error-POSTapi-discount_product" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discount_product"></code></pre>
</div>
<form id="form-POSTapi-discount_product" data-method="POST" data-path="api/discount_product" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discount_product', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discount_product" onclick="tryItOut('POSTapi-discount_product');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discount_product" onclick="cancelTryOut('POSTapi-discount_product');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discount_product" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discount_product</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/nam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/nam"
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
<div id="execution-results-GETapi-discount_product--discount_product-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product--discount_product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product--discount_product-"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product--discount_product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product--discount_product-"></code></pre>
</div>
<form id="form-GETapi-discount_product--discount_product-" data-method="GET" data-path="api/discount_product/{discount_product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product--discount_product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product--discount_product-" onclick="tryItOut('GETapi-discount_product--discount_product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product--discount_product-" onclick="cancelTryOut('GETapi-discount_product--discount_product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product--discount_product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/{discount_product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discount_product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="discount_product" data-endpoint="GETapi-discount_product--discount_product-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "/api/discount_product/inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/inventore"
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


<div id="execution-results-PUTapi-discount_product--discount_product-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-discount_product--discount_product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-discount_product--discount_product-"></code></pre>
</div>
<div id="execution-error-PUTapi-discount_product--discount_product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-discount_product--discount_product-"></code></pre>
</div>
<form id="form-PUTapi-discount_product--discount_product-" data-method="PUT" data-path="api/discount_product/{discount_product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-discount_product--discount_product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-discount_product--discount_product-" onclick="tryItOut('PUTapi-discount_product--discount_product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-discount_product--discount_product-" onclick="cancelTryOut('PUTapi-discount_product--discount_product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-discount_product--discount_product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/discount_product/{discount_product}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/discount_product/{discount_product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discount_product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="discount_product" data-endpoint="PUTapi-discount_product--discount_product-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/api/discount_product/eaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/eaque"
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


<div id="execution-results-DELETEapi-discount_product--discount_product-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-discount_product--discount_product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-discount_product--discount_product-"></code></pre>
</div>
<div id="execution-error-DELETEapi-discount_product--discount_product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-discount_product--discount_product-"></code></pre>
</div>
<form id="form-DELETEapi-discount_product--discount_product-" data-method="DELETE" data-path="api/discount_product/{discount_product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-discount_product--discount_product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-discount_product--discount_product-" onclick="tryItOut('DELETEapi-discount_product--discount_product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-discount_product--discount_product-" onclick="cancelTryOut('DELETEapi-discount_product--discount_product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-discount_product--discount_product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/discount_product/{discount_product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discount_product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="discount_product" data-endpoint="DELETEapi-discount_product--discount_product-" data-component="url" required  hidden>
<br>
</p>
</form>



