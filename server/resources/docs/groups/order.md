# Order

APIs for manage order

## Display a listing of the resource.




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


> Example response (200):

```json
{
    "data": []
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


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "/api/order" \
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
    method: "POST",
    headers,
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
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/api/order/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/order/voluptas"
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


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "/api/order/eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/order/eos"
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
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/api/order/minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/order/minima"
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


<div id="execution-results-DELETEapi-order--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-order--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-order--order-"></code></pre>
</div>
<div id="execution-error-DELETEapi-order--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-order--order-"></code></pre>
</div>
<form id="form-DELETEapi-order--order-" data-method="DELETE" data-path="api/order/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-order--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-order--order-" onclick="tryItOut('DELETEapi-order--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-order--order-" onclick="cancelTryOut('DELETEapi-order--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-order--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/order/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="DELETEapi-order--order-" data-component="url" required  hidden>
<br>
</p>
</form>



