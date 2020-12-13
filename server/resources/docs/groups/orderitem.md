# OrderItem

APIs for manage order items

## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "/api/order_item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/order_item"
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
<div id="execution-results-GETapi-order_item" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-order_item"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-order_item"></code></pre>
</div>
<div id="execution-error-GETapi-order_item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-order_item"></code></pre>
</div>
<form id="form-GETapi-order_item" data-method="GET" data-path="api/order_item" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-order_item', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-order_item" onclick="tryItOut('GETapi-order_item');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-order_item" onclick="cancelTryOut('GETapi-order_item');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-order_item" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/order_item</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "/api/order_item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/order_item"
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


<div id="execution-results-POSTapi-order_item" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-order_item"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-order_item"></code></pre>
</div>
<div id="execution-error-POSTapi-order_item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-order_item"></code></pre>
</div>
<form id="form-POSTapi-order_item" data-method="POST" data-path="api/order_item" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-order_item', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-order_item" onclick="tryItOut('POSTapi-order_item');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-order_item" onclick="cancelTryOut('POSTapi-order_item');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-order_item" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/order_item</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/api/order_item/molestias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/order_item/molestias"
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
<div id="execution-results-GETapi-order_item--order_item-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-order_item--order_item-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-order_item--order_item-"></code></pre>
</div>
<div id="execution-error-GETapi-order_item--order_item-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-order_item--order_item-"></code></pre>
</div>
<form id="form-GETapi-order_item--order_item-" data-method="GET" data-path="api/order_item/{order_item}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-order_item--order_item-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-order_item--order_item-" onclick="tryItOut('GETapi-order_item--order_item-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-order_item--order_item-" onclick="cancelTryOut('GETapi-order_item--order_item-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-order_item--order_item-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/order_item/{order_item}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order_item</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order_item" data-endpoint="GETapi-order_item--order_item-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "/api/order_item/quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/order_item/quis"
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


<div id="execution-results-PUTapi-order_item--order_item-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-order_item--order_item-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-order_item--order_item-"></code></pre>
</div>
<div id="execution-error-PUTapi-order_item--order_item-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-order_item--order_item-"></code></pre>
</div>
<form id="form-PUTapi-order_item--order_item-" data-method="PUT" data-path="api/order_item/{order_item}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-order_item--order_item-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-order_item--order_item-" onclick="tryItOut('PUTapi-order_item--order_item-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-order_item--order_item-" onclick="cancelTryOut('PUTapi-order_item--order_item-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-order_item--order_item-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/order_item/{order_item}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/order_item/{order_item}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order_item</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order_item" data-endpoint="PUTapi-order_item--order_item-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/api/order_item/reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/order_item/reiciendis"
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


<div id="execution-results-DELETEapi-order_item--order_item-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-order_item--order_item-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-order_item--order_item-"></code></pre>
</div>
<div id="execution-error-DELETEapi-order_item--order_item-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-order_item--order_item-"></code></pre>
</div>
<form id="form-DELETEapi-order_item--order_item-" data-method="DELETE" data-path="api/order_item/{order_item}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-order_item--order_item-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-order_item--order_item-" onclick="tryItOut('DELETEapi-order_item--order_item-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-order_item--order_item-" onclick="cancelTryOut('DELETEapi-order_item--order_item-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-order_item--order_item-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/order_item/{order_item}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order_item</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order_item" data-endpoint="DELETEapi-order_item--order_item-" data-component="url" required  hidden>
<br>
</p>
</form>



