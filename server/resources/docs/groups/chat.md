# Chat

APIs for manage chat

## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "/api/chat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/chat"
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
<div id="execution-results-GETapi-chat" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-chat"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-chat"></code></pre>
</div>
<div id="execution-error-GETapi-chat" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-chat"></code></pre>
</div>
<form id="form-GETapi-chat" data-method="GET" data-path="api/chat" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-chat', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-chat" onclick="tryItOut('GETapi-chat');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-chat" onclick="cancelTryOut('GETapi-chat');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-chat" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/chat</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "/api/chat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/chat"
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


<div id="execution-results-POSTapi-chat" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-chat"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-chat"></code></pre>
</div>
<div id="execution-error-POSTapi-chat" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-chat"></code></pre>
</div>
<form id="form-POSTapi-chat" data-method="POST" data-path="api/chat" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-chat', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-chat" onclick="tryItOut('POSTapi-chat');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-chat" onclick="cancelTryOut('POSTapi-chat');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-chat" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/chat</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "/api/chat/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/chat/eum"
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
<div id="execution-results-GETapi-chat--chat-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-chat--chat-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-chat--chat-"></code></pre>
</div>
<div id="execution-error-GETapi-chat--chat-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-chat--chat-"></code></pre>
</div>
<form id="form-GETapi-chat--chat-" data-method="GET" data-path="api/chat/{chat}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-chat--chat-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-chat--chat-" onclick="tryItOut('GETapi-chat--chat-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-chat--chat-" onclick="cancelTryOut('GETapi-chat--chat-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-chat--chat-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/chat/{chat}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>chat</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="chat" data-endpoint="GETapi-chat--chat-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "/api/chat/assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/chat/assumenda"
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


<div id="execution-results-PUTapi-chat--chat-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-chat--chat-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-chat--chat-"></code></pre>
</div>
<div id="execution-error-PUTapi-chat--chat-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-chat--chat-"></code></pre>
</div>
<form id="form-PUTapi-chat--chat-" data-method="PUT" data-path="api/chat/{chat}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-chat--chat-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-chat--chat-" onclick="tryItOut('PUTapi-chat--chat-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-chat--chat-" onclick="cancelTryOut('PUTapi-chat--chat-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-chat--chat-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/chat/{chat}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/chat/{chat}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>chat</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="chat" data-endpoint="PUTapi-chat--chat-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "/api/chat/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/chat/ut"
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


<div id="execution-results-DELETEapi-chat--chat-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-chat--chat-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-chat--chat-"></code></pre>
</div>
<div id="execution-error-DELETEapi-chat--chat-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-chat--chat-"></code></pre>
</div>
<form id="form-DELETEapi-chat--chat-" data-method="DELETE" data-path="api/chat/{chat}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-chat--chat-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-chat--chat-" onclick="tryItOut('DELETEapi-chat--chat-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-chat--chat-" onclick="cancelTryOut('DELETEapi-chat--chat-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-chat--chat-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/chat/{chat}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>chat</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="chat" data-endpoint="DELETEapi-chat--chat-" data-component="url" required  hidden>
<br>
</p>
</form>



