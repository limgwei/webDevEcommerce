# Category

APIs for manage category

## Display all category




> Example request:

```bash
curl -X GET \
    -G "/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/category"
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
<div id="execution-results-GETapi-category" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-category"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-category"></code></pre>
</div>
<div id="execution-error-GETapi-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-category"></code></pre>
</div>
<form id="form-GETapi-category" data-method="GET" data-path="api/category" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-category', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-category" onclick="tryItOut('GETapi-category');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-category" onclick="cancelTryOut('GETapi-category');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-category" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/category</code></b>
</p>
</form>


## Display the specified category.




> Example request:

```bash
curl -X GET \
    -G "/api/category/sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/category/sed"
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
<div id="execution-results-GETapi-category--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-category--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-category--category-"></code></pre>
</div>
<div id="execution-error-GETapi-category--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-category--category-"></code></pre>
</div>
<form id="form-GETapi-category--category-" data-method="GET" data-path="api/category/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-category--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-category--category-" onclick="tryItOut('GETapi-category--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-category--category-" onclick="cancelTryOut('GETapi-category--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-category--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/category/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="GETapi-category--category-" data-component="url" required  hidden>
<br>
</p>
</form>



