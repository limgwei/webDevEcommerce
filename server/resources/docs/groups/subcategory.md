# SubCategory

APIs for manage SubCategory

## Display a listing of the subcategory.




> Example request:

```bash
curl -X GET \
    -G "/api/sub_category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/sub_category"
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
<div id="execution-results-GETapi-sub_category" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-sub_category"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sub_category"></code></pre>
</div>
<div id="execution-error-GETapi-sub_category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sub_category"></code></pre>
</div>
<form id="form-GETapi-sub_category" data-method="GET" data-path="api/sub_category" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-sub_category', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-sub_category" onclick="tryItOut('GETapi-sub_category');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-sub_category" onclick="cancelTryOut('GETapi-sub_category');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-sub_category" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/sub_category</code></b>
</p>
</form>


## Display the specified subcategory.




> Example request:

```bash
curl -X GET \
    -G "/api/sub_category/quasi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/sub_category/quasi"
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
<div id="execution-results-GETapi-sub_category--sub_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-sub_category--sub_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sub_category--sub_category-"></code></pre>
</div>
<div id="execution-error-GETapi-sub_category--sub_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sub_category--sub_category-"></code></pre>
</div>
<form id="form-GETapi-sub_category--sub_category-" data-method="GET" data-path="api/sub_category/{sub_category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-sub_category--sub_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-sub_category--sub_category-" onclick="tryItOut('GETapi-sub_category--sub_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-sub_category--sub_category-" onclick="cancelTryOut('GETapi-sub_category--sub_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-sub_category--sub_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/sub_category/{sub_category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>sub_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="sub_category" data-endpoint="GETapi-sub_category--sub_category-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display the subcategory under a category




> Example request:

```bash
curl -X GET \
    -G "/api/subcategory/category/quam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/subcategory/category/quam"
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
<div id="execution-results-GETapi-subcategory-category--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-subcategory-category--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-subcategory-category--id-"></code></pre>
</div>
<div id="execution-error-GETapi-subcategory-category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-subcategory-category--id-"></code></pre>
</div>
<form id="form-GETapi-subcategory-category--id-" data-method="GET" data-path="api/subcategory/category/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-subcategory-category--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-subcategory-category--id-" onclick="tryItOut('GETapi-subcategory-category--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-subcategory-category--id-" onclick="cancelTryOut('GETapi-subcategory-category--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-subcategory-category--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/subcategory/category/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-subcategory-category--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display the subcategory under a subcategory




> Example request:

```bash
curl -X GET \
    -G "/api/subcategory/subcategory/sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/subcategory/subcategory/sit"
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
<div id="execution-results-GETapi-subcategory-subcategory--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-subcategory-subcategory--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-subcategory-subcategory--id-"></code></pre>
</div>
<div id="execution-error-GETapi-subcategory-subcategory--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-subcategory-subcategory--id-"></code></pre>
</div>
<form id="form-GETapi-subcategory-subcategory--id-" data-method="GET" data-path="api/subcategory/subcategory/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-subcategory-subcategory--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-subcategory-subcategory--id-" onclick="tryItOut('GETapi-subcategory-subcategory--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-subcategory-subcategory--id-" onclick="cancelTryOut('GETapi-subcategory-subcategory--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-subcategory-subcategory--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/subcategory/subcategory/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-subcategory-subcategory--id-" data-component="url" required  hidden>
<br>
</p>
</form>



