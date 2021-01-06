# Banner

APIs for user view banners

## Display all banner and link to category or product.


a

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
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


## DDisplay specific banner and link to category or product.




> Example request:

```bash
curl -X GET \
    -G "/api/banner/cumque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/banner/cumque"
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



