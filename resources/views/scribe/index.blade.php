<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.10.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.10.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-products">
                                <a href="#endpoints-GETapi-products">GET api/products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products--id-">
                                <a href="#endpoints-GETapi-products--id-">GET api/products/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-checkout--id-">
                                <a href="#endpoints-GETapi-checkout--id-">GET api/checkout/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-admin-login">
                                <a href="#endpoints-POSTapi-admin-login">POST api/admin/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-admin-products">
                                <a href="#endpoints-POSTapi-admin-products">POST api/admin/products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-admin-products--id--status">
                                <a href="#endpoints-PATCHapi-admin-products--id--status">PATCH api/admin/products/{id}/status</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 28, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-products">GET api/products</h2>

<p>
</p>



<span id="example-requests-GETapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;current_page&quot;: 1,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;kategori&quot;: &quot;Cardigan&quot;,
            &quot;nama_produk&quot;: &quot;Baju Preloved dolore&quot;,
            &quot;deskripsi&quot;: &quot;Dolorum velit eum aliquid vero id non voluptas assumenda ab perspiciatis maxime est.&quot;,
            &quot;ukuran&quot;: &quot;XL&quot;,
            &quot;warna&quot;: &quot;fuchsia&quot;,
            &quot;harga&quot;: &quot;188740.00&quot;,
            &quot;kondisi&quot;: &quot;Good&quot;,
            &quot;catatan_kondisi&quot;: &quot;Pemakaian wajar, warna masih pekat.&quot;,
            &quot;stok&quot;: 1,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 2,
            &quot;kategori&quot;: &quot;Sweater&quot;,
            &quot;nama_produk&quot;: &quot;Baju Preloved enim&quot;,
            &quot;deskripsi&quot;: &quot;Possimus et amet corrupti quos expedita quo sed et.&quot;,
            &quot;ukuran&quot;: &quot;M&quot;,
            &quot;warna&quot;: &quot;white&quot;,
            &quot;harga&quot;: &quot;80348.00&quot;,
            &quot;kondisi&quot;: &quot;Like New&quot;,
            &quot;catatan_kondisi&quot;: &quot;Pemakaian wajar, warna masih pekat.&quot;,
            &quot;stok&quot;: 1,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 3,
            &quot;kategori&quot;: &quot;T-Shirt&quot;,
            &quot;nama_produk&quot;: &quot;Baju Preloved maxime&quot;,
            &quot;deskripsi&quot;: &quot;Et suscipit sequi dolorem nisi quia expedita nostrum.&quot;,
            &quot;ukuran&quot;: &quot;L&quot;,
            &quot;warna&quot;: &quot;teal&quot;,
            &quot;harga&quot;: &quot;152131.00&quot;,
            &quot;kondisi&quot;: &quot;Like New&quot;,
            &quot;catatan_kondisi&quot;: &quot;Pemakaian wajar, warna masih pekat.&quot;,
            &quot;stok&quot;: 1,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 4,
            &quot;kategori&quot;: &quot;Tank Top&quot;,
            &quot;nama_produk&quot;: &quot;Baju Preloved accusantium&quot;,
            &quot;deskripsi&quot;: &quot;Et repellendus et quo dicta enim eos autem culpa nemo.&quot;,
            &quot;ukuran&quot;: &quot;All Size&quot;,
            &quot;warna&quot;: &quot;black&quot;,
            &quot;harga&quot;: &quot;237653.00&quot;,
            &quot;kondisi&quot;: &quot;Good&quot;,
            &quot;catatan_kondisi&quot;: &quot;Pemakaian wajar, warna masih pekat.&quot;,
            &quot;stok&quot;: 1,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 5,
            &quot;kategori&quot;: &quot;T-Shirt&quot;,
            &quot;nama_produk&quot;: &quot;Baju Preloved deleniti&quot;,
            &quot;deskripsi&quot;: &quot;Deleniti amet sequi dolorem culpa officia iste asperiores unde nihil corrupti nemo tempora.&quot;,
            &quot;ukuran&quot;: &quot;XXL&quot;,
            &quot;warna&quot;: &quot;olive&quot;,
            &quot;harga&quot;: &quot;211919.00&quot;,
            &quot;kondisi&quot;: &quot;Good&quot;,
            &quot;catatan_kondisi&quot;: &quot;Pemakaian wajar, warna masih pekat.&quot;,
            &quot;stok&quot;: 1,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 6,
            &quot;kategori&quot;: &quot;Jaket&quot;,
            &quot;nama_produk&quot;: &quot;Baju Preloved vero&quot;,
            &quot;deskripsi&quot;: &quot;Voluptatum rem eaque voluptatem architecto mollitia dolorem quia ipsam omnis tenetur est.&quot;,
            &quot;ukuran&quot;: &quot;M&quot;,
            &quot;warna&quot;: &quot;yellow&quot;,
            &quot;harga&quot;: &quot;190029.00&quot;,
            &quot;kondisi&quot;: &quot;Fair&quot;,
            &quot;catatan_kondisi&quot;: &quot;Pemakaian wajar, warna masih pekat.&quot;,
            &quot;stok&quot;: 1,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 7,
            &quot;kategori&quot;: &quot;Jaket&quot;,
            &quot;nama_produk&quot;: &quot;Baju Preloved eum&quot;,
            &quot;deskripsi&quot;: &quot;Rem tempora mollitia debitis molestiae eum sit delectus perferendis non autem.&quot;,
            &quot;ukuran&quot;: &quot;L&quot;,
            &quot;warna&quot;: &quot;green&quot;,
            &quot;harga&quot;: &quot;150130.00&quot;,
            &quot;kondisi&quot;: &quot;Good&quot;,
            &quot;catatan_kondisi&quot;: &quot;Pemakaian wajar, warna masih pekat.&quot;,
            &quot;stok&quot;: 1,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 8,
            &quot;kategori&quot;: &quot;Kemeja&quot;,
            &quot;nama_produk&quot;: &quot;Baju Preloved est&quot;,
            &quot;deskripsi&quot;: &quot;Est dolore officiis officia suscipit porro necessitatibus omnis reprehenderit.&quot;,
            &quot;ukuran&quot;: &quot;XL&quot;,
            &quot;warna&quot;: &quot;olive&quot;,
            &quot;harga&quot;: &quot;160392.00&quot;,
            &quot;kondisi&quot;: &quot;Like New&quot;,
            &quot;catatan_kondisi&quot;: &quot;Pemakaian wajar, warna masih pekat.&quot;,
            &quot;stok&quot;: 1,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 9,
            &quot;kategori&quot;: &quot;Sweater&quot;,
            &quot;nama_produk&quot;: &quot;Baju Preloved doloremque&quot;,
            &quot;deskripsi&quot;: &quot;Cum id nam nesciunt repellat aliquam consequuntur rerum dolor.&quot;,
            &quot;ukuran&quot;: &quot;XL&quot;,
            &quot;warna&quot;: &quot;yellow&quot;,
            &quot;harga&quot;: &quot;112828.00&quot;,
            &quot;kondisi&quot;: &quot;Good&quot;,
            &quot;catatan_kondisi&quot;: &quot;Pemakaian wajar, warna masih pekat.&quot;,
            &quot;stok&quot;: 1,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 10,
            &quot;kategori&quot;: &quot;Tank Top&quot;,
            &quot;nama_produk&quot;: &quot;Baju Preloved culpa&quot;,
            &quot;deskripsi&quot;: &quot;Sit nihil reiciendis aut repudiandae distinctio maxime commodi ipsum voluptas at.&quot;,
            &quot;ukuran&quot;: &quot;XS&quot;,
            &quot;warna&quot;: &quot;yellow&quot;,
            &quot;harga&quot;: &quot;224489.00&quot;,
            &quot;kondisi&quot;: &quot;Good&quot;,
            &quot;catatan_kondisi&quot;: &quot;Pemakaian wajar, warna masih pekat.&quot;,
            &quot;stok&quot;: 1,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
            &quot;images&quot;: []
        }
    ],
    &quot;first_page_url&quot;: &quot;http://localhost/api/products?page=1&quot;,
    &quot;from&quot;: 1,
    &quot;last_page&quot;: 2,
    &quot;last_page_url&quot;: &quot;http://localhost/api/products?page=2&quot;,
    &quot;links&quot;: [
        {
            &quot;url&quot;: null,
            &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
            &quot;page&quot;: null,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/api/products?page=1&quot;,
            &quot;label&quot;: &quot;1&quot;,
            &quot;page&quot;: 1,
            &quot;active&quot;: true
        },
        {
            &quot;url&quot;: &quot;http://localhost/api/products?page=2&quot;,
            &quot;label&quot;: &quot;2&quot;,
            &quot;page&quot;: 2,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/api/products?page=2&quot;,
            &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
            &quot;page&quot;: 2,
            &quot;active&quot;: false
        }
    ],
    &quot;next_page_url&quot;: &quot;http://localhost/api/products?page=2&quot;,
    &quot;path&quot;: &quot;http://localhost/api/products&quot;,
    &quot;per_page&quot;: 10,
    &quot;prev_page_url&quot;: null,
    &quot;to&quot;: 10,
    &quot;total&quot;: 20
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products" data-method="GET"
      data-path="api/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products"
                    onclick="tryItOut('GETapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products"
                    onclick="cancelTryOut('GETapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-products--id-">GET api/products/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;kategori&quot;: &quot;Cardigan&quot;,
    &quot;nama_produk&quot;: &quot;Baju Preloved dolore&quot;,
    &quot;deskripsi&quot;: &quot;Dolorum velit eum aliquid vero id non voluptas assumenda ab perspiciatis maxime est.&quot;,
    &quot;ukuran&quot;: &quot;XL&quot;,
    &quot;warna&quot;: &quot;fuchsia&quot;,
    &quot;harga&quot;: &quot;188740.00&quot;,
    &quot;kondisi&quot;: &quot;Good&quot;,
    &quot;catatan_kondisi&quot;: &quot;Pemakaian wajar, warna masih pekat.&quot;,
    &quot;stok&quot;: 1,
    &quot;status&quot;: &quot;available&quot;,
    &quot;created_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-05-28T13:03:28.000000Z&quot;,
    &quot;images&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products--id-" data-method="GET"
      data-path="api/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products--id-"
                    onclick="tryItOut('GETapi-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products--id-"
                    onclick="cancelTryOut('GETapi-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-products--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-checkout--id-">GET api/checkout/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-checkout--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/checkout/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/checkout/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-checkout--id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Product] architecto&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-checkout--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-checkout--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-checkout--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-checkout--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-checkout--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-checkout--id-" data-method="GET"
      data-path="api/checkout/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-checkout--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-checkout--id-"
                    onclick="tryItOut('GETapi-checkout--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-checkout--id-"
                    onclick="cancelTryOut('GETapi-checkout--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-checkout--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/checkout/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-checkout--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-checkout--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-checkout--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the checkout. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-admin-login">POST api/admin/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-admin-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-login">
</span>
<span id="execution-results-POSTapi-admin-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-admin-login" data-method="POST"
      data-path="api/admin/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-login"
                    onclick="tryItOut('POSTapi-admin-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-login"
                    onclick="cancelTryOut('POSTapi-admin-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-admin-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-admin-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-admin-login"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-admin-login"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-admin-products">POST api/admin/products</h2>

<p>
</p>



<span id="example-requests-POSTapi-admin-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/products" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "kategori=architecto"\
    --form "nama_produk=architecto"\
    --form "deskripsi=architecto"\
    --form "ukuran=architecto"\
    --form "harga=4326.41688"\
    --form "kondisi=architecto"\
    --form "gambar[]=@C:\Users\Lenovo\AppData\Local\Temp\phpEAB2.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/products"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('kategori', 'architecto');
body.append('nama_produk', 'architecto');
body.append('deskripsi', 'architecto');
body.append('ukuran', 'architecto');
body.append('harga', '4326.41688');
body.append('kondisi', 'architecto');
body.append('gambar[]', document.querySelector('input[name="gambar[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-products">
</span>
<span id="execution-results-POSTapi-admin-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-admin-products" data-method="POST"
      data-path="api/admin/products"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-products"
                    onclick="tryItOut('POSTapi-admin-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-products"
                    onclick="cancelTryOut('POSTapi-admin-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-admin-products"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-admin-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>kategori</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="kategori"                data-endpoint="POSTapi-admin-products"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nama_produk</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nama_produk"                data-endpoint="POSTapi-admin-products"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>deskripsi</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="deskripsi"                data-endpoint="POSTapi-admin-products"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ukuran</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ukuran"                data-endpoint="POSTapi-admin-products"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>harga</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="harga"                data-endpoint="POSTapi-admin-products"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>kondisi</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="kondisi"                data-endpoint="POSTapi-admin-products"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gambar</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="gambar[0]"                data-endpoint="POSTapi-admin-products"
               data-component="body">
        <input type="file" style="display: none"
               name="gambar[1]"                data-endpoint="POSTapi-admin-products"
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes.</p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-admin-products--id--status">PATCH api/admin/products/{id}/status</h2>

<p>
</p>



<span id="example-requests-PATCHapi-admin-products--id--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/admin/products/1/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"available\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/products/1/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "available"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-admin-products--id--status">
</span>
<span id="execution-results-PATCHapi-admin-products--id--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-admin-products--id--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-admin-products--id--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-admin-products--id--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-admin-products--id--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-admin-products--id--status" data-method="PATCH"
      data-path="api/admin/products/{id}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-admin-products--id--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-admin-products--id--status"
                    onclick="tryItOut('PATCHapi-admin-products--id--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-admin-products--id--status"
                    onclick="cancelTryOut('PATCHapi-admin-products--id--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-admin-products--id--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/admin/products/{id}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-admin-products--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-admin-products--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-admin-products--id--status"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PATCHapi-admin-products--id--status"
               value="available"
               data-component="body">
    <br>
<p>Example: <code>available</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>available</code></li> <li><code>reserved</code></li> <li><code>sold</code></li></ul>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
