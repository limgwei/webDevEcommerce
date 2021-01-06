# Product

APIs for manage product

## Display all products




> Example request:

```bash
curl -X GET \
    -G "/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product"></code></pre>
</div>
<div id="execution-error-GETapi-product" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product"></code></pre>
</div>
<form id="form-GETapi-product" data-method="GET" data-path="api/product" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product" onclick="tryItOut('GETapi-product');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product" onclick="cancelTryOut('GETapi-product');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product</code></b>
</p>
</form>


## Display the specified product.




> Example request:

```bash
curl -X GET \
    -G "/api/product/asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/asperiores"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product--product-"></code></pre>
</div>
<div id="execution-error-GETapi-product--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product--product-"></code></pre>
</div>
<form id="form-GETapi-product--product-" data-method="GET" data-path="api/product/{product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product--product-" onclick="tryItOut('GETapi-product--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product--product-" onclick="cancelTryOut('GETapi-product--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/{product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="GETapi-product--product-" data-component="url" required  hidden>
<br>
</p>
</form>


## Search by name




> Example request:

```bash
curl -X GET \
    -G "/api/product/search/architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/search/architecto"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-search--name-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-search--name-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-search--name-"></code></pre>
</div>
<div id="execution-error-GETapi-product-search--name-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-search--name-"></code></pre>
</div>
<form id="form-GETapi-product-search--name-" data-method="GET" data-path="api/product/search/{name}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-search--name-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-search--name-" onclick="tryItOut('GETapi-product-search--name-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-search--name-" onclick="cancelTryOut('GETapi-product-search--name-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-search--name-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/search/{name}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="GETapi-product-search--name-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display by subcategory




> Example request:

```bash
curl -X GET \
    -G "/api/product/sub/ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/sub/ea"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-sub--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-sub--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-sub--id-"></code></pre>
</div>
<div id="execution-error-GETapi-product-sub--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-sub--id-"></code></pre>
</div>
<form id="form-GETapi-product-sub--id-" data-method="GET" data-path="api/product/sub/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-sub--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-sub--id-" onclick="tryItOut('GETapi-product-sub--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-sub--id-" onclick="cancelTryOut('GETapi-product-sub--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-sub--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/sub/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-product-sub--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display latest product




> Example request:

```bash
curl -X GET \
    -G "/api/product/latest" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/latest"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-latest" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-latest"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-latest"></code></pre>
</div>
<div id="execution-error-GETapi-product-latest" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-latest"></code></pre>
</div>
<form id="form-GETapi-product-latest" data-method="GET" data-path="api/product/latest" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-latest', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-latest" onclick="tryItOut('GETapi-product-latest');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-latest" onclick="cancelTryOut('GETapi-product-latest');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-latest" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/latest</code></b>
</p>
</form>


## Display product order by name A-Z




> Example request:

```bash
curl -X GET \
    -G "/api/product/name" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/name"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-name" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-name"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-name"></code></pre>
</div>
<div id="execution-error-GETapi-product-name" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-name"></code></pre>
</div>
<form id="form-GETapi-product-name" data-method="GET" data-path="api/product/name" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-name', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-name" onclick="tryItOut('GETapi-product-name');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-name" onclick="cancelTryOut('GETapi-product-name');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-name" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/name</code></b>
</p>
</form>


## Display product order by name Z-A




> Example request:

```bash
curl -X GET \
    -G "/api/product/nameD" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/nameD"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-nameD" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-nameD"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-nameD"></code></pre>
</div>
<div id="execution-error-GETapi-product-nameD" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-nameD"></code></pre>
</div>
<form id="form-GETapi-product-nameD" data-method="GET" data-path="api/product/nameD" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-nameD', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-nameD" onclick="tryItOut('GETapi-product-nameD');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-nameD" onclick="cancelTryOut('GETapi-product-nameD');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-nameD" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/nameD</code></b>
</p>
</form>


## Display product order by price Low-High




> Example request:

```bash
curl -X GET \
    -G "/api/product/price" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/price"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-price" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-price"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-price"></code></pre>
</div>
<div id="execution-error-GETapi-product-price" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-price"></code></pre>
</div>
<form id="form-GETapi-product-price" data-method="GET" data-path="api/product/price" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-price', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-price" onclick="tryItOut('GETapi-product-price');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-price" onclick="cancelTryOut('GETapi-product-price');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-price" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/price</code></b>
</p>
</form>


## Display product order by price High-Low




> Example request:

```bash
curl -X GET \
    -G "/api/product/priceD" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/priceD"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-priceD" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-priceD"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-priceD"></code></pre>
</div>
<div id="execution-error-GETapi-product-priceD" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-priceD"></code></pre>
</div>
<form id="form-GETapi-product-priceD" data-method="GET" data-path="api/product/priceD" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-priceD', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-priceD" onclick="tryItOut('GETapi-product-priceD');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-priceD" onclick="cancelTryOut('GETapi-product-priceD');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-priceD" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/priceD</code></b>
</p>
</form>


## Display by subcategory and order by latest




> Example request:

```bash
curl -X GET \
    -G "/api/product/sub/similique/latest" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/sub/similique/latest"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-sub--id--latest" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-sub--id--latest"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-sub--id--latest"></code></pre>
</div>
<div id="execution-error-GETapi-product-sub--id--latest" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-sub--id--latest"></code></pre>
</div>
<form id="form-GETapi-product-sub--id--latest" data-method="GET" data-path="api/product/sub/{id}/latest" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-sub--id--latest', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-sub--id--latest" onclick="tryItOut('GETapi-product-sub--id--latest');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-sub--id--latest" onclick="cancelTryOut('GETapi-product-sub--id--latest');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-sub--id--latest" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/sub/{id}/latest</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-product-sub--id--latest" data-component="url" required  hidden>
<br>
</p>
</form>


## Display by subcategory and order by name A-Z




> Example request:

```bash
curl -X GET \
    -G "/api/product/sub/pariatur/name" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/sub/pariatur/name"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-sub--id--name" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-sub--id--name"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-sub--id--name"></code></pre>
</div>
<div id="execution-error-GETapi-product-sub--id--name" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-sub--id--name"></code></pre>
</div>
<form id="form-GETapi-product-sub--id--name" data-method="GET" data-path="api/product/sub/{id}/name" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-sub--id--name', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-sub--id--name" onclick="tryItOut('GETapi-product-sub--id--name');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-sub--id--name" onclick="cancelTryOut('GETapi-product-sub--id--name');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-sub--id--name" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/sub/{id}/name</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-product-sub--id--name" data-component="url" required  hidden>
<br>
</p>
</form>


## Display by subcategory and order by name Z-A




> Example request:

```bash
curl -X GET \
    -G "/api/product/sub/ab/nameD" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/sub/ab/nameD"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-sub--id--nameD" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-sub--id--nameD"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-sub--id--nameD"></code></pre>
</div>
<div id="execution-error-GETapi-product-sub--id--nameD" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-sub--id--nameD"></code></pre>
</div>
<form id="form-GETapi-product-sub--id--nameD" data-method="GET" data-path="api/product/sub/{id}/nameD" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-sub--id--nameD', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-sub--id--nameD" onclick="tryItOut('GETapi-product-sub--id--nameD');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-sub--id--nameD" onclick="cancelTryOut('GETapi-product-sub--id--nameD');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-sub--id--nameD" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/sub/{id}/nameD</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-product-sub--id--nameD" data-component="url" required  hidden>
<br>
</p>
</form>


## Display by subcategory and order by price Low-High




> Example request:

```bash
curl -X GET \
    -G "/api/product/sub/dolorem/price" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/sub/dolorem/price"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-sub--id--price" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-sub--id--price"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-sub--id--price"></code></pre>
</div>
<div id="execution-error-GETapi-product-sub--id--price" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-sub--id--price"></code></pre>
</div>
<form id="form-GETapi-product-sub--id--price" data-method="GET" data-path="api/product/sub/{id}/price" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-sub--id--price', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-sub--id--price" onclick="tryItOut('GETapi-product-sub--id--price');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-sub--id--price" onclick="cancelTryOut('GETapi-product-sub--id--price');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-sub--id--price" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/sub/{id}/price</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-product-sub--id--price" data-component="url" required  hidden>
<br>
</p>
</form>


## Display by subcategory and order by price High-Low




> Example request:

```bash
curl -X GET \
    -G "/api/product/sub/sint/priceD" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/product/sub/sint/priceD"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-product-sub--id--priceD" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-sub--id--priceD"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-sub--id--priceD"></code></pre>
</div>
<div id="execution-error-GETapi-product-sub--id--priceD" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-sub--id--priceD"></code></pre>
</div>
<form id="form-GETapi-product-sub--id--priceD" data-method="GET" data-path="api/product/sub/{id}/priceD" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-sub--id--priceD', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-sub--id--priceD" onclick="tryItOut('GETapi-product-sub--id--priceD');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-sub--id--priceD" onclick="cancelTryOut('GETapi-product-sub--id--priceD');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-sub--id--priceD" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/sub/{id}/priceD</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-product-sub--id--priceD" data-component="url" required  hidden>
<br>
</p>
</form>



