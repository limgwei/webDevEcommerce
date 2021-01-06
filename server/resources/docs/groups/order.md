# Order

APIs for manage order

## Display a listing of the order




> Example request:

```bash
curl -X GET \
    -G "/api/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/order"
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
<div id="execution-results-GETapi-order" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-order"></code></pre>
</div>
<div id="execution-error-GETapi-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-order"></code></pre>
</div>
<form id="form-GETapi-order" data-method="GET" data-path="api/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-order" onclick="tryItOut('GETapi-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-order" onclick="cancelTryOut('GETapi-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/order</code></b>
</p>
</form>


## Store a newly created order in storage




> Example request:

```bash
curl -X POST \
    "/api/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"price":379,"address":"eos","delivery_charge":12.5,"comment":"maiores","orderItems":[[],[]]}'

```

```javascript
const url = new URL(
    "/api/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "price": 379,
    "address": "eos",
    "delivery_charge": 12.5,
    "comment": "maiores",
    "orderItems": [
        [],
        []
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-order"></code></pre>
</div>
<div id="execution-error-POSTapi-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-order"></code></pre>
</div>
<form id="form-POSTapi-order" data-method="POST" data-path="api/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-order" onclick="tryItOut('POSTapi-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-order" onclick="cancelTryOut('POSTapi-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/order</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>price</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="price" data-endpoint="POSTapi-order" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-order" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>delivery_charge</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="delivery_charge" data-endpoint="POSTapi-order" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-order" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>orderItems</code></b>&nbsp;&nbsp;<small>object[]</small>  &nbsp;
<input type="text" name="orderItems.0" data-endpoint="POSTapi-order" data-component="body" required  hidden>
<input type="text" name="orderItems.1" data-endpoint="POSTapi-order" data-component="body" hidden>
<br>
for orderItems object require order_name,current_price,quanitty</p>

</form>


## Display the specified order




> Example request:

```bash
curl -X GET \
    -G "/api/order/sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/order/sed"
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
<div id="execution-results-GETapi-order--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-order--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-order--order-"></code></pre>
</div>
<div id="execution-error-GETapi-order--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-order--order-"></code></pre>
</div>
<form id="form-GETapi-order--order-" data-method="GET" data-path="api/order/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-order--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-order--order-" onclick="tryItOut('GETapi-order--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-order--order-" onclick="cancelTryOut('GETapi-order--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-order--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/order/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="GETapi-order--order-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified order




> Example request:

```bash
curl -X PUT \
    "/api/order/ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"status":2}'

```

```javascript
const url = new URL(
    "/api/order/ducimus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": 2
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-order--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-order--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-order--order-"></code></pre>
</div>
<div id="execution-error-PUTapi-order--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-order--order-"></code></pre>
</div>
<form id="form-PUTapi-order--order-" data-method="PUT" data-path="api/order/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-order--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-order--order-" onclick="tryItOut('PUTapi-order--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-order--order-" onclick="cancelTryOut('PUTapi-order--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-order--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/order/{order}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/order/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="PUTapi-order--order-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="status" data-endpoint="PUTapi-order--order-" data-component="body" required  hidden>
<br>
</p>

</form>


## display order items




> Example request:

```bash
curl -X POST \
    "/api/order/orderItems" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"order_id":18}'

```

```javascript
const url = new URL(
    "/api/order/orderItems"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "order_id": 18
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-order-orderItems" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-order-orderItems"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-order-orderItems"></code></pre>
</div>
<div id="execution-error-POSTapi-order-orderItems" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-order-orderItems"></code></pre>
</div>
<form id="form-POSTapi-order-orderItems" data-method="POST" data-path="api/order/orderItems" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-order-orderItems', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-order-orderItems" onclick="tryItOut('POSTapi-order-orderItems');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-order-orderItems" onclick="cancelTryOut('POSTapi-order-orderItems');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-order-orderItems" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/order/orderItems</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>order_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="order_id" data-endpoint="POSTapi-order-orderItems" data-component="body"  hidden>
<br>
</p>

</form>



