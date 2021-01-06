# Discount Product

APIs for manage discount product

## Display a list of discount Product




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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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


## Display the specified discount product.




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/rem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/rem"
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


## Display by subcategory




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/sub/fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/sub/fugiat"
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
<div id="execution-results-GETapi-discount_product-sub--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product-sub--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product-sub--id-"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product-sub--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product-sub--id-"></code></pre>
</div>
<form id="form-GETapi-discount_product-sub--id-" data-method="GET" data-path="api/discount_product/sub/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product-sub--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product-sub--id-" onclick="tryItOut('GETapi-discount_product-sub--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product-sub--id-" onclick="cancelTryOut('GETapi-discount_product-sub--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product-sub--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/sub/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-discount_product-sub--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display latest product




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/latest" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/latest"
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
<div id="execution-results-GETapi-discount_product-latest" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product-latest"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product-latest"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product-latest" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product-latest"></code></pre>
</div>
<form id="form-GETapi-discount_product-latest" data-method="GET" data-path="api/discount_product/latest" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product-latest', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product-latest" onclick="tryItOut('GETapi-discount_product-latest');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product-latest" onclick="cancelTryOut('GETapi-discount_product-latest');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product-latest" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/latest</code></b>
</p>
</form>


## Display product order by name A-Z




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/name" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/name"
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
<div id="execution-results-GETapi-discount_product-name" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product-name"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product-name"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product-name" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product-name"></code></pre>
</div>
<form id="form-GETapi-discount_product-name" data-method="GET" data-path="api/discount_product/name" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product-name', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product-name" onclick="tryItOut('GETapi-discount_product-name');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product-name" onclick="cancelTryOut('GETapi-discount_product-name');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product-name" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/name</code></b>
</p>
</form>


## Display product order by name Z-A




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/nameD" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/nameD"
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
<div id="execution-results-GETapi-discount_product-nameD" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product-nameD"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product-nameD"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product-nameD" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product-nameD"></code></pre>
</div>
<form id="form-GETapi-discount_product-nameD" data-method="GET" data-path="api/discount_product/nameD" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product-nameD', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product-nameD" onclick="tryItOut('GETapi-discount_product-nameD');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product-nameD" onclick="cancelTryOut('GETapi-discount_product-nameD');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product-nameD" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/nameD</code></b>
</p>
</form>


## Display product order by price Low-High




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/price" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/price"
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
<div id="execution-results-GETapi-discount_product-price" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product-price"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product-price"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product-price" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product-price"></code></pre>
</div>
<form id="form-GETapi-discount_product-price" data-method="GET" data-path="api/discount_product/price" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product-price', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product-price" onclick="tryItOut('GETapi-discount_product-price');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product-price" onclick="cancelTryOut('GETapi-discount_product-price');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product-price" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/price</code></b>
</p>
</form>


## Display product order by price High-Low




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/priceD" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/priceD"
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
<div id="execution-results-GETapi-discount_product-priceD" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product-priceD"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product-priceD"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product-priceD" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product-priceD"></code></pre>
</div>
<form id="form-GETapi-discount_product-priceD" data-method="GET" data-path="api/discount_product/priceD" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product-priceD', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product-priceD" onclick="tryItOut('GETapi-discount_product-priceD');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product-priceD" onclick="cancelTryOut('GETapi-discount_product-priceD');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product-priceD" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/priceD</code></b>
</p>
</form>


## Display by subcategory and order by latest




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/sub/omnis/latest" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/sub/omnis/latest"
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
<div id="execution-results-GETapi-discount_product-sub--id--latest" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product-sub--id--latest"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product-sub--id--latest"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product-sub--id--latest" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product-sub--id--latest"></code></pre>
</div>
<form id="form-GETapi-discount_product-sub--id--latest" data-method="GET" data-path="api/discount_product/sub/{id}/latest" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product-sub--id--latest', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product-sub--id--latest" onclick="tryItOut('GETapi-discount_product-sub--id--latest');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product-sub--id--latest" onclick="cancelTryOut('GETapi-discount_product-sub--id--latest');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product-sub--id--latest" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/sub/{id}/latest</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-discount_product-sub--id--latest" data-component="url" required  hidden>
<br>
</p>
</form>


## Display by subcategory and order by name A-Z




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/sub/sit/name" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/sub/sit/name"
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
<div id="execution-results-GETapi-discount_product-sub--id--name" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product-sub--id--name"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product-sub--id--name"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product-sub--id--name" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product-sub--id--name"></code></pre>
</div>
<form id="form-GETapi-discount_product-sub--id--name" data-method="GET" data-path="api/discount_product/sub/{id}/name" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product-sub--id--name', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product-sub--id--name" onclick="tryItOut('GETapi-discount_product-sub--id--name');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product-sub--id--name" onclick="cancelTryOut('GETapi-discount_product-sub--id--name');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product-sub--id--name" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/sub/{id}/name</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-discount_product-sub--id--name" data-component="url" required  hidden>
<br>
</p>
</form>


## Display by subcategory and order by name Z-A




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/sub/ut/nameD" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/sub/ut/nameD"
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
<div id="execution-results-GETapi-discount_product-sub--id--nameD" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product-sub--id--nameD"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product-sub--id--nameD"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product-sub--id--nameD" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product-sub--id--nameD"></code></pre>
</div>
<form id="form-GETapi-discount_product-sub--id--nameD" data-method="GET" data-path="api/discount_product/sub/{id}/nameD" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product-sub--id--nameD', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product-sub--id--nameD" onclick="tryItOut('GETapi-discount_product-sub--id--nameD');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product-sub--id--nameD" onclick="cancelTryOut('GETapi-discount_product-sub--id--nameD');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product-sub--id--nameD" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/sub/{id}/nameD</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-discount_product-sub--id--nameD" data-component="url" required  hidden>
<br>
</p>
</form>


## Display by subcategory and order by price Low-High




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/sub/distinctio/price" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/sub/distinctio/price"
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
<div id="execution-results-GETapi-discount_product-sub--id--price" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product-sub--id--price"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product-sub--id--price"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product-sub--id--price" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product-sub--id--price"></code></pre>
</div>
<form id="form-GETapi-discount_product-sub--id--price" data-method="GET" data-path="api/discount_product/sub/{id}/price" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product-sub--id--price', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product-sub--id--price" onclick="tryItOut('GETapi-discount_product-sub--id--price');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product-sub--id--price" onclick="cancelTryOut('GETapi-discount_product-sub--id--price');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product-sub--id--price" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/sub/{id}/price</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-discount_product-sub--id--price" data-component="url" required  hidden>
<br>
</p>
</form>


## Display by subcategory and order by price High-Low




> Example request:

```bash
curl -X GET \
    -G "/api/discount_product/sub/exercitationem/priceD" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/discount_product/sub/exercitationem/priceD"
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
<div id="execution-results-GETapi-discount_product-sub--id--priceD" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discount_product-sub--id--priceD"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discount_product-sub--id--priceD"></code></pre>
</div>
<div id="execution-error-GETapi-discount_product-sub--id--priceD" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discount_product-sub--id--priceD"></code></pre>
</div>
<form id="form-GETapi-discount_product-sub--id--priceD" data-method="GET" data-path="api/discount_product/sub/{id}/priceD" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discount_product-sub--id--priceD', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discount_product-sub--id--priceD" onclick="tryItOut('GETapi-discount_product-sub--id--priceD');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discount_product-sub--id--priceD" onclick="cancelTryOut('GETapi-discount_product-sub--id--priceD');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discount_product-sub--id--priceD" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discount_product/sub/{id}/priceD</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-discount_product-sub--id--priceD" data-component="url" required  hidden>
<br>
</p>
</form>



